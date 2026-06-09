<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class AgriculteurController extends Controller
{
    public function index(Request $request)
    {
        // 1. Liste fictive des agriculteurs (simule la base de données)
        $agriculteurs = collect([
            ['nom' => 'Yves', 'region' => 'Ouémé', 'telephone' => '(+229) 97 11 11 11', 'statut' => 'Actif'],
            ['nom' => 'Amina', 'region' => 'Borgou', 'telephone' => '(+229) 96 22 22 22', 'statut' => 'Actif'],
            ['nom' => 'Paul', 'region' => 'Mono', 'telephone' => '(+229) 95 33 33 33', 'statut' => 'Inactif'],
        ]);

        // 2. Gestion de la BARRE DE RECHERCHE (Filtre par Nom ou Région)
        $search = $request->input('search');
        if ($search) {
            $agriculteurs = $agriculteurs->filter(function ($agriculteur) use ($search) {
                return str_contains(strtolower($agriculteur['nom']), strtolower($search)) || 
                       str_contains(strtolower($agriculteur['region']), strtolower($search));
            });
        }

        // 3. Gestion de la PAGINATION
        $perPage = 2; // Nombre d'agriculteurs par page
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $agriculteurs->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $agriculteursPaginés = new LengthAwarePaginator(
            $currentPageItems, 
            $agriculteurs->count(), 
            $perPage, 
            $currentPage, 
            ['path' => $request->url(), 'query' => $request->query()]
        );

        // 4. Envoi des données à la vue
        return view('admin.agriculteurs', ['agriculteurs' => $agriculteursPaginés]);
    }
}