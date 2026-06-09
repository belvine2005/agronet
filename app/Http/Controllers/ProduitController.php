<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ProduitController extends Controller
{
    public function index(Request $request)
    {
        // 1. Liste fictive des produits
        $produits = collect([
            ['nom' => 'Maïs', 'categorie' => 'Céréales', 'quantite' => '120 Kg', 'prix' => '50 000 FCFA', 'statut' => 'Publié'],
            ['nom' => 'Manioc', 'categorie' => 'Racines', 'quantite' => '200 Kg', 'prix' => '75 000 FCFA', 'statut' => 'Publié'],
            ['nom' => 'Tomates', 'categorie' => 'Légumes', 'quantite' => '80 Kg', 'prix' => '40 000 FCFA', 'statut' => 'En rupture'],
        ]);

        // 2. Gestion de la BARRE DE RECHERCHE (Filtre par Nom ou Catégorie)
        $search = $request->input('search');
        if ($search) {
            $produits = $produits->filter(function ($produit) use ($search) {
                return str_contains(strtolower($produit['nom']), strtolower($search)) || 
                       str_contains(strtolower($produit['categorie']), strtolower($search));
            });
        }

        // 3. Gestion de la PAGINATION
        $perPage = 2; 
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $produits->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $produitsPaginees = new LengthAwarePaginator(
            $currentPageItems, 
            $produits->count(), 
            $perPage, 
            $currentPage, 
            ['path' => $request->url(), 'query' => $request->query()]
        );

        // 4. Envoi des données à la vue
        return view('admin.produits', ['produits' => $produitsPaginees]);
    }
}