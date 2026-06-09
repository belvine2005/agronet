<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class CommandeController extends Controller
{
    public function index(Request $request)
    {
        // 1. Liste fictive des commandes (simule la base de données)
        $commandes = collect([
            ['code' => '#1101', 'acheteur' => 'Jean', 'produit' => 'Maïs', 'quantite' => '100 Kg', 'statut' => 'En cours'],
            ['code' => '#1102', 'acheteur' => 'Fatou', 'produit' => 'Manioc', 'quantite' => '150 Kg', 'statut' => 'Livrée'],
            ['code' => '#1103', 'acheteur' => 'Ali', 'produit' => 'Ananas', 'quantite' => '80 Kg', 'statut' => 'Annulée'],
        ]);

        // 2. Gestion de la BARRE DE RECHERCHE (Filtre par Code, Acheteur ou Produit)
        $search = $request->input('search');
        if ($search) {
            $commandes = $commandes->filter(function ($commande) use ($search) {
                return str_contains(strtolower($commande['code']), strtolower($search)) || 
                       str_contains(strtolower($commande['acheteur']), strtolower($search)) || 
                       str_contains(strtolower($commande['produit']), strtolower($search));
            });
        }

        // 3. Gestion de la PAGINATION
        $perPage = 2; // Nombre de commandes par page
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $commandes->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $commandesPaginees = new LengthAwarePaginator(
            $currentPageItems, 
            $commandes->count(), 
            $perPage, 
            $currentPage, 
            ['path' => $request->url(), 'query' => $request->query()]
        );

        // 4. Envoi des données à la vue
        return view('admin.commandes', ['commandes' => $commandesPaginees]);
    }
}