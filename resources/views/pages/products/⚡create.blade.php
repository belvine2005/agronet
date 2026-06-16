<?php

use Livewire\Component;

new class extends Component
{
    // Le formulaire est soumis en POST classique vers ProductController@store.
};
?>

<div class="max-w-3xl mx-auto py-10">
    <flux:card>
       
        <header class="mb-8">
            <flux:heading size="xl">Créer un produit agricole ou un intrant</flux:heading>
            <flux:text class="mt-2">Remplissez ce formulaire pour créer votre produit. Les champs marqués d'une * sont obligatoires.</flux:text>
        </header>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-6">

                {{-- Nom et Type --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <flux:field>
                        <flux:input 
                            label="Nom du produit *" 
                            name="name" 
                            placeholder="Ex : Engrais organique XYZ" 
                            value="{{ old('name') }}"
                            required 
                        />
                        <flux:error name="name" />
                    </flux:field>

                    <flux:field>
                        <flux:select label="Type de produit / intrant *" name="type" placeholder="-- Choisir un type --" required>
                            <flux:select.option value="Semence">Semence</flux:select.option>
                            <flux:select.option value="Engrais">Engrais</flux:select.option>
                            <flux:select.option value="Céréale">Céréale</flux:select.option>
                            <flux:select.option value="Fruit">Fruit</flux:select.option>
                            <flux:select.option value="Légume">Légume</flux:select.option>
                            <flux:select.option value="Autre">Autre</flux:select.option>
                        </flux:select>
                        <flux:error name="type" />
                    </flux:field>
                </div>

                {{-- Quantité et Unité --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <flux:field>
                        <flux:input 
                            label="Quantité disponible *" 
                            type="number" 
                            name="available_quantity" 
                            min="0" 
                            step="10" 
                            value="{{ old('available_quantity', 0) }}" 
                            required 
                        />
                        <flux:error name="available_quantity" />
                    </flux:field>

                    <flux:field>
                        <flux:input 
                            label="Unité de vente" 
                            name="selling_unit" 
                            placeholder="Ex : kg, sac, litre, unité" 
                            value="{{ old('selling_unit') }}"
                        />
                        <flux:error name="selling_unit" />
                    </flux:field>
                </div>

                {{-- Description --}}
                <flux:field>
                    <flux:textarea 
                        label="Description" 
                        name="description" 
                        placeholder="Donnez des détails sur l'état, l'emballage, l'utilisation..." 
                        rows="5"
                    >{{ old('description') }}</flux:textarea>
                    <flux:error name="description" />
                </flux:field>

                {{-- Upload d'image --}}
                <flux:field>
                    <flux:label>Image du produit</flux:label>
                    <flux:input type="file" name="image" accept="image/*" />
                    <flux:description>JPG, PNG, GIF ou JPEG.</flux:description>
                    <flux:error name="image" />
                </flux:field>

                {{-- Statut --}}
                <flux:field>
                    <flux:input 
                        label="Statut" 
                        name="status" 
                        placeholder="Ex: disponible ou non disponible" 
                        value="{{ old('status') }}"
                    />
                    <flux:error name="status" />
                </flux:field>

                {{-- Boutons d'actions --}}
                <div class="flex gap-3 justify-end pt-4 border-t border-zinc-200 dark:border-zinc-700">
                    <flux:button type="reset" variant="ghost">Annuler</flux:button>
                    <flux:button type="submit" variant="primary">Ajouter au catalogue</flux:button>
                </div>

            </div>
        </form>
    </flux:card>
</div>