@extends('layouts.app')
@section('title', 'Prix du Marché')
@section('content')


  <section class="market-page">

    <div class="market-header">
      <div>
        <h1>Prix du Marché</h1>
        <p>Consultez les prix moyens des produits agricoles dans différentes régions du Bénin.</p>
      </div>

      <button class="refresh-btn">
        <i class="fa-solid fa-rotate"></i>
        Actualiser les prix
      </button>
    </div>

    <!-- CARTES STATISTIQUES -->

    <div class="stats-grid">

      <div class="stat-card">
        <i class="fa-solid fa-seedling"></i>
        <h3>+ 20</h3>
        <p>Produits suivis</p>
      </div>

      <div class="stat-card">
        <i class="fa-solid fa-location-dot"></i>
        <h3>Porto-Novo</h3>
        <p>Région la plus active</p>
      </div>

      <div class="stat-card">
        <i class="fa-solid fa-crown"></i>
        <h3>3000 CFA</h3>
        <p>Produit le plus cher</p>
      </div>

      <div class="stat-card">
        <i class="fa-solid fa-chart-line"></i>
        <h3>1 604 CFA</h3>
        <p>Prix moyen global</p>
      </div>

    </div>

    <!-- FILTRES -->

    <div class="market-filters">

      <input type="text" id="searchInput" placeholder="Rechercher un produit...">

      <select id="regionFilter">
        <option>Toutes les régions</option>
        <option>Porto-Novo</option>
        <option>Cotonou</option>
        <option>Parakou</option>
        <option>Abomey</option>
      </select>

      <button class="filter-btn">
        Filtrer
      </button>

    </div>

    <!-- TABLEAU -->

    <div class="table-wrapper">

      <table id="priceTable">

        <thead>
          <tr>
            <th>Produit</th>
            <th>Prix Moyen</th>
            <th>Prix Min</th>
            <th>Prix Max</th>
          </tr>
        </thead>

        <tbody>

          <tr>
            <td>Riz blanc (1kg)</td>
            <td>1 087 CFA</td>
            <td>600 CFA</td>
            <td>1 800 CFA</td>
          </tr>

          <tr>
            <td>Tomates (1kg)</td>
            <td>1 134 CFA</td>
            <td>750 CFA</td>
            <td>1 653 CFA</td>
          </tr>

          <tr>
            <td>Oignons (1kg)</td>
            <td>1 000 CFA</td>
            <td>300 CFA</td>
            <td>1 000 CFA</td>
          </tr>

          <tr>
            <td>Bananes (1kg)</td>
            <td>1 066 CFA</td>
            <td>700 CFA</td>
            <td>1 800 CFA</td>
          </tr>

          <tr>
            <td>Pommes (1kg)</td>
            <td>2 500 CFA</td>
            <td>2 000 CFA</td>
            <td>3 000 CFA</td>
          </tr>

        </tbody>

      </table>

    </div>

    <!-- GRAPHIQUE -->

    <div class="chart-container">
      <h2>Évolution des prix</h2>
      <canvas id="priceChart"></canvas>
    </div>

  </section>
  @endsection