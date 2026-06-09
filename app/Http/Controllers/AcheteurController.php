<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class AcheteurController extends Controller
{
    public function index(Request $request)
    {
        // 1. Ta liste fictive d'acheteurs (simule la base de données)
        $acheteurs = collect([
            ['nom' => 'Sophie', 'ville' => 'Cotonou', 'email' => 'sophie@email.com', 'statut' => 'Actif'],
            ['nom' => 'Yann', 'ville' => 'Parakou', 'email' => 'yann@email.com', 'statut' => 'Actif'],
            ['nom' => 'Marie', 'ville' => 'Allada', 'email' => 'marie@email.com', 'statut' => 'Suspendu'],
        ]);

        // 2. Gestion de la BARRE DE RECHERCHE (Filtre par Nom ou par Ville)
        $search = $request->input('search');
        if ($search) {
            $acheteurs = $acheteurs->filter(function ($acheteur) use ($search) {
                return str_contains(strtolower($acheteur['nom']), strtolower($search)) || 
                       str_contains(strtolower($acheteur['ville']), strtolower($search));
            });
        }

        // 3. Gestion de la PAGINATION
        $perPage = 2; // Nombre d'acheteurs par page
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $acheteurs->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $acheteursPaginés = new LengthAwarePaginator(
            $currentPageItems, 
            $acheteurs->count(), 
            $perPage, 
            $currentPage, 
            ['path' => $request->url(), 'query' => $request->query()]
        );

        // 4. On envoie les données filtrées et paginées à ta vue
        return view('admin.acheteurs', ['acheteurs' => $acheteursPaginés]);
    }
}