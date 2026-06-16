<?php

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;
use App\Models\Ad;
use Illuminate\Validation\Rule;

new class extends Component
{
    use WithFileUploads;

    // --- Champs du formulaire (liés via wire:model) ---
    public string $title = '';
    public string $description = '';
    public string $address = '';
    public string $gps_coordinates = '';

    public $photo;                 
    public array $selectedProducts = [];

    public function with(): array
    {
        return [
            // Garde le filtre par utilisateur : "mon catalogue"
            'products' => Product::where('owner_id', auth()->id())->get(),
        ];
    }

    public function save()
    {
        $validated = $this->validate([
            'title'              => 'required|string|max:255',
            'description'        => 'required|string',
            'photo'              => 'nullable|image|max:10240',
            'selectedProducts'   => 'required|array|min:1',
            'selectedProducts.*' => [
                Rule::exists('products', 'id')->where('owner_id', auth()->id()),
            ],
            'address'            => 'nullable|string|max:255',
            'gps_coordinates'    => ['nullable', 'regex:/^\s*-?\d{1,3}(\.\d+)?\s*,\s*-?\d{1,3}(\.\d+)?\s*$/'],
        ], [
            'title.required'            => "Le titre de l'annonce est obligatoire.",
            'description.required'      => "La description est obligatoire.",
            'photo.image'              => "Le fichier doit être une image (JPG, PNG, GIF).",
            'photo.max'                => "L'image ne doit pas dépasser 10 Mo.",
            'selectedProducts.required' => "Veuillez sélectionner au moins un produit.",
            'selectedProducts.min'      => "Veuillez sélectionner au moins un produit.",
            'selectedProducts.*.exists' => "L'un des produits sélectionnés est invalide ou ne fait pas partie de votre catalogue.",
            'gps_coordinates.regex'     => "Les coordonnées GPS doivent être au format « latitude, longitude » (ex : 6.3702, 2.3912).",
        ]);

        // --- Enregistrement de l'image dans public/uploads/ads (même convention que les produits) ---
        $imagePath = null;
        if ($this->photo) {
            $destination = public_path('uploads/ads');
            if (! is_dir($destination)) {
                mkdir($destination, 0755, true);
            }

            $filename = time() . '_' . $this->photo->getClientOriginalName();
            copy($this->photo->getRealPath(), $destination . DIRECTORY_SEPARATOR . $filename);

            $imagePath = 'uploads/ads/' . $filename;
        }

        // --- Découpage des coordonnées GPS « latitude, longitude » en deux colonnes ---
        $latitude = null;
        $longitude = null;
        if (trim($this->gps_coordinates) !== '') {
            [$latitude, $longitude] = array_map('trim', explode(',', $this->gps_coordinates));
        }

        $ad = Ad::create([
            'header'            => $this->title,
            'description'       => $this->description,
            'image'             => $imagePath,
            'adress_indication' => $this->address ?: null,
            'adress_latitude'   => $latitude,
            'adress_longitude'  => $longitude,
            'author_id'         => auth()->id(),
        ]);

        // Relation many-to-many entre Ad et Product (table pivot ad_products)
        $ad->products()->sync($this->selectedProducts);

        session()->flash('success', "Votre annonce a été publiée avec succès.");

        return $this->redirect(route('ads.create'), navigate: true);
    }
};
?>

<div class="max-w-6xl mx-auto py-10 px-4">
    <header class="mb-8">
        <flux:heading size="xl">Publier une annonce</flux:heading>
        <flux:text class="mt-2">Créez une annonce attractive en sélectionnant les produits de votre catalogue.</flux:text>
    </header>

    @if (session('success'))
        <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-800 dark:border-green-800 dark:bg-green-900/30 dark:text-green-200">
            {{ session('success') }}
        </div>
    @endif

    {{-- Plus de action/method/enctype/@csrf : Livewire gère tout --}}
    <form wire:submit="save">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

            {{-- Colonne de gauche --}}
            <div class="lg:col-span-2 space-y-6">

                {{-- Informations Générales --}}
                <flux:card class="space-y-6">
                    <flux:heading level="3" size="lg">Informations générales</flux:heading>

                    <flux:field>
                        <flux:input
                            label="Titre de l'annonce"
                            wire:model="title"
                            placeholder="Ex : Vente de maïs et soja disponible"
                            required
                        />
                        <flux:error name="title" />
                    </flux:field>

                    <flux:field>
                        <flux:textarea
                            label="Description"
                            wire:model="description"
                            placeholder="Décrivez votre offre..."
                            rows="5"
                            required
                        />
                        <flux:error name="description" />
                    </flux:field>

                    {{-- Image : liée à $photo, gérée par Livewire --}}
                    <flux:field>
                        <flux:label>Image de couverture</flux:label>
                        <flux:input type="file" wire:model="photo" accept="image/*" />
                        <flux:description>JPG, PNG ou GIF jusqu'à 10 Mo.</flux:description>
                        <flux:error name="photo" />

                        {{-- Indicateur de chargement pendant l'upload --}}
                        <div wire:loading wire:target="photo" class="mt-2 text-sm text-zinc-500">
                            Chargement de l'image…
                        </div>

                        {{-- Aperçu de l'image après upload --}}
                        @if ($photo)
                            <img src="{{ $photo->temporaryUrl() }}" class="mt-3 rounded-lg max-h-48 object-cover">
                        @endif
                    </flux:field>
                </flux:card>

                {{-- Catalogue de produits --}}
                <flux:card class="space-y-4">
                    <div>
                        <flux:heading level="3" size="lg">Produits de mon catalogue</flux:heading>
                        <flux:text class="text-xs mt-1">Choisissez un ou plusieurs produits à inclure dans cette annonce</flux:text>
                    </div>

                    <flux:field>
                        <flux:select
                            wire:model.live="selectedProducts"
                            placeholder="Choisir des produits..."
                            searchable
                            multiple
                        >
                            @foreach($products as $product)
                                <flux:select.option value="{{ $product->id }}">
                                    {{ $product->name }} ({{ $product->available_quantity }} {{ $product->selling_unit }})
                                </flux:select.option>
                            @endforeach
                        </flux:select>
                        <flux:error name="selectedProducts" />
                    </flux:field>
                </flux:card>

                {{-- Localisation --}}
                <flux:card class="space-y-6">
                    <flux:heading level="3" size="lg">Localisation</flux:heading>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <flux:field>
                            <flux:input label="Adresse" wire:model="address" placeholder="Ville, quartier, ferme" />
                            <flux:error name="address" />
                        </flux:field>

                        <flux:field>
                            <flux:input label="Coordonnées GPS" wire:model="gps_coordinates" placeholder="Latitude, Longitude" />
                            <flux:error name="gps_coordinates" />
                        </flux:field>
                    </div>
                </flux:card>

            </div>

            {{-- Colonne de droite - Résumé --}}
            <div class="lg:sticky lg:top-6">
                <flux:card class="space-y-6 bg-zinc-50 dark:bg-zinc-900/50">
                    <flux:heading level="3" size="lg">Résumé de l'annonce</flux:heading>

                    <div class="space-y-3 divide-y divide-zinc-200 dark:divide-zinc-700 text-sm">
                        <div class="flex justify-between items-center pt-1">
                            <flux:text>Produits sélectionnés</flux:text>
                            <flux:text class="font-bold text-zinc-800 dark:text-white">
                                {{ count($selectedProducts) }}
                            </flux:text>
                        </div>

                        <div class="flex justify-between items-center pt-3">
                            <flux:text>Quantité totale</flux:text>
                            <flux:text class="font-bold text-zinc-800 dark:text-white">150 Kg</flux:text>
                        </div>

                        <div class="flex justify-between items-center pt-3 text-base">
                            <flux:text class="font-medium text-zinc-900 dark:text-zinc-100">Valeur estimée</flux:text>
                            <span class="font-extrabold text-brand-600 dark:text-brand-400 text-lg">120 000 FCFA</span>
                        </div>
                    </div>

                    <div class="pt-2">
                        <flux:button type="submit" variant="primary" class="w-full justify-center">
                            Publier l'annonce
                        </flux:button>
                    </div>
                </flux:card>
            </div>

        </div>
    </form>
</div>