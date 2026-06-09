@extends('layouts.admin')

@section('title', 'Produits')

@section('content')

<main class="main">
    <div class="topbar">
        <div>
            <h1>Produits</h1>
            <p>Gestion des produits de la plateforme</p>
        </div>
    </div>

     <!-- AJOUT DE LA BARRE DE RECHERCHE -->
    <div style="margin-bottom: 20px;">
        <form action="{{ url()->current() }}" method="GET" style="display: flex; gap: 10px;">
            <input 
                type="text" 
                name="search" 
                value="{{ request('search') }}" 
                placeholder="Rechercher par produit ou catégorie ..." 
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
        <h2>Liste des produits</h2>
        <table>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Catégorie</th>
                    <th>Quantité</th>
                    <th>Prix</th>
                    <th>Statut</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($produits as $produit)
                    <tr>
                        <td><strong>{{ $produit['nom'] }}</strong></td>
                        <td>{{ $produit['categorie'] }}</td>
                        <td>{{ $produit['quantite'] }}</td>
                        <td>{{ $produit['prix'] }}</td>
                        <td>
                            @if($produit['statut'] == 'Publié')
                                <span class="status">{{ $produit['statut'] }}</span>
                            @else
                                <span class="status-suspended">{{ $produit['statut'] }}</span>
                            @endif
                        </td>
                        <td><a href="#" class="edit">Modifier</a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="text-align: center; color: #94a3b8; padding: 2rem;">
                            Aucun produit trouvé.
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