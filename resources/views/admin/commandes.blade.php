@extends('layouts.admin')

@section('title', 'Commandes')

@section('content')

<main class="main">
    <div class="topbar">
        <div>
            <h1>Commandes</h1>
            <p>Suivi des commandes reçues</p>
        </div>
    </div>

     <!-- AJOUT DE LA BARRE DE RECHERCHE -->
    <div style="margin-bottom: 20px;">
        <form action="{{ url()->current() }}" method="GET" style="display: flex; gap: 10px;">
            <input 
                type="text" 
                name="search" 
                value="{{ request('search') }}" 
                placeholder="Rechercher par N°, acheteur ou produit..." 
                style="padding: 8px 12px; border: 1px solid #ccc; rounded-radius: 4px; width: 300px; border-radius: 4px;"
            >
            <button type="submit" style="padding: 8px 15px; background-color: #333; color: white; border: none; border-radius: 4px; cursor: pointer;">
                Rechercher
            </button>
            @if(request('search'))
                <a href="{{ url()->current() }}" style="padding: 8px 15px; background-color: #e3342f; color: white; text-decoration: none; border-radius: 4px;">
                    Effacer
                </a>
            @endif
        </form>
    </div>

    <div class="table-card">
        <h2>Liste des commandes</h2>
        <table>
            <thead>
                <tr>
                    <th>Commande</th>
                    <th>Acheteur</th>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Statut</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($commandes as $commande)
                    <tr>
                        <td><strong>{{ $commande['code'] }}</strong></td>
                        <td>{{ $commande['acheteur'] }}</td>
                        <td>{{ $commande['produit'] }}</td>
                        <td>{{ $commande['quantite'] }}</td>
                        <td>
                            @if($commande['statut'] == 'Livrée' || $commande['statut'] == 'En cours')
                                <span class="status">{{ $commande['statut'] }}</span>
                            @else
                                <span class="status-suspended">{{ $commande['statut'] }}</span>
                            @endif
                        </td>
                        <td><a href="#" class="edit">Voir</a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="text-align: center; color: #94a3b8; padding: 2rem;">
                            Aucune commande trouvée.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

       <div class="pagination-wrapper">
            <nav class="js-pagination">
                <button id="btn-prev" class="pag-btn font-prev-next">PREVIOUS</button>
                <div id="page-numbers" class="numbers-group"></div>
                <button id="btn-next" class="pag-btn font-prev-next">NEXT</button>
            </nav>
        </div>
    </div>
</main>

@endsection