<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AgroNet – prix du marché</title>
  @vite(['resources/css/styles.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <!-- TOPBAR -->
  <header class="topbar">
    <a href="{{ route('home') }}" class="logo">AgroNet</a>

    <div class="search-wrap">
      <input type="text" placeholder="Rechercher un produit..." />
      <button class="search-btn" aria-label="Rechercher">
        <i class="fa-solid fa-search"></i>
      </button>
    </div>

    <div class="topbar-right">
      <a href="#" class="link-marche">Prix / Marché</a>
      <a href="#" class="btn-compte">
        <i class="fa-regular fa-user"></i>
        Compte
      </a>
    </div>
  </header>

  <!-- CATÉGORIES -->
  <nav class="catbar">
    <a href="{{ route('products.create') }}" class="cat-link">
      Créer un produit
    </a>
    <a href="{{ route('ads.index') }}" class="cat-link">
      Faire une annonce
    </a>
    <a href="{{ route('products.index') }}" class="cat-link">
      Produits Agricoles
    </a>
    <a href="{{ route('ads.index') }}" class="cat-link">
      Annonces
    </a>
  </nav>

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
  <!-- FOOTER -->
  <footer>
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="#" class="logo">AgroNet</a>
        <p>La plateforme qui connecte agriculteurs, fournisseurs et acheteurs du Bénin.</p>
      </div>
      <div>
        <h4>Catalogue</h4>
        <ul>
          <li><a href="engrais.html">Engrais</a></li>
          <li><a href="semences.html">Semences</a></li>
          <li><a href="produits_agri.html">Produits agricoles</a></li>
          <li><a href="annonces.html">Annonces</a></li>
        </ul>
      </div>
      <div>
        <h4>À propos</h4>
        <ul>
          <li><a href="#">Qui sommes-nous</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="prix-marche.html">Prix / Marché</a></li>
        </ul>
      </div>
      <div>
        <h4>Légal</h4>
        <ul>
          <li><a href="#">Conditions d'utilisation</a></li>
          <li><a href="#">Confidentialité</a></li>
          <li><a href="#">Cookies</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">&copy; 2025 AgroNet — Tous droits réservés</div>
  </footer>
</body>


</html>