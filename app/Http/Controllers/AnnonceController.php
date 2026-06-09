<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class AnnonceController extends Controller
{
    public function index(Request $request)
    {
        // 1. Liste fictive des annonces (simule la base de données)
        $annonces = collect([
            ['produit' => 'Maïs', 'quantite' => '100 Kg', 'prix' => '50 000 FCFA', 'ville' => 'Cotonou', 'statut' => 'Disponible'],
            ['produit' => 'Manioc', 'quantite' => '150 Kg', 'prix' => '75 000 FCFA', 'ville' => 'Parakou', 'statut' => 'Disponible'],
            ['produit' => 'Ananas', 'quantite' => '80 Kg', 'prix' => '45 000 FCFA', 'ville' => 'Allada', 'statut' => 'Vendu'],
        ]);

        // 2. Gestion de la BARRE DE RECHERCHE (Filtre par Produit ou Ville)
        $search = $request->input('search');
        if ($search) {
            $annonces = $annonces->filter(function ($annonce) use ($search) {
                return str_contains(strtolower($annonce['produit']), strtolower($search)) || 
                       str_contains(strtolower($annonce['ville']), strtolower($search));
            });
        }

        // 3. Gestion de la PAGINATION
        $perPage = 2; // Nombre d'annonces par page
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $annonces->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $annoncesPaginees = new LengthAwarePaginator(
            $currentPageItems, 
            $annonces->count(), 
            $perPage, 
            $currentPage, 
            ['path' => $request->url(), 'query' => $request->query()]
        );

        // 4. Envoi des données filtrées et paginées à la vue
        return view('admin.annonces', ['annonces' => $annoncesPaginees]);
    }
}