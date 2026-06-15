<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AgroNet – Produits agricoles</title>
  @vite(['resources/css/styles.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <header class="topbar">
    <a href="{{ route('home') }}" class="logo">AgroNet</a>

    <div class="search-wrap">
      <input type="text" placeholder="Rechercher un produit..." />
      <button class="search-btn" aria-label="Rechercher">
        <i class="fa-solid fa-search"></i>
      </button>
    </div>

    <div class="topbar-right">
      <a href="{{ route('prices-market.index') }}" class="link-marche">Prix / Marché</a>
      <a href="#" class="btn-compte">
        <i class="fa-regular fa-user"></i>
        @auth
          {{ Auth::user()->name }}
          <form action="{{ route('auth.logout') }}" method="post">
            @method('delete')
            @csrf
            <button>Se déconnecter</button>

          </form>
        @endauth

        @guest
          <a href="{{ route('auth.login') }}">Se connecter</a>
        @endguest
      </a>
    </div>
  </header>

  <nav class="catbar">
    <a href="{{ route('products.create') }}" class="cat-link">
      Créer un produit
    </a>
    <a href="{{ route('ads.create') }}" class="cat-link">
      Faire une annonce
    </a>
    <a href="{{ route('products.index') }}" class="cat-link active">
      Produits Agricoles
    </a>
    <a href="{{ route('ads.index') }}" class="cat-link">
      Annonces
    </a>
  </nav>

  <main class="section">
    <div class="page-header-bg">
      <div class="section-header1">
        <h2>Produits Agricoles du Bénin</h2>
        <p>Découvrez les récoltes de nos agriculteurs locaux. Achetez directement en gros ou au détail des produits frais, vivriers et de rente issus de nos terroirs.</p>
      </div>
    </div>

    <section class="filter-section">
      <div class="filter-container">
        <div class="filter-header">
          <h3>Filtrer les produits</h3>
          <button class="filter-toggle" id="filterToggle">
            <span class="filter-text">Filtrer</span>
            <i class="fa-solid fa-chevron-down"></i>
          </button>
        </div>
        
        <div class="filter-content" id="filterContent">
          <div class="filter-group">
            <h4>Type de culture</h4>
            <label class="filter-label"><input type="checkbox" checked> Tubercules & Racines</label>
            <label class="filter-label"><input type="checkbox" checked> Céréales & Graines</label>
            <label class="filter-label"><input type="checkbox"> Fruits & Légumes</label>
            <label class="filter-label"><input type="checkbox"> Cultures de rente</label>
          </div>

          <div class="filter-group">
            <h4>Origine (Département)</h4>
            <select class="filter-select">
              <option value="">Tous les départements</option>
              <option value="atlantique">Atlantique</option>
              <option value="oueme">Ouémé</option>
              <option value="zou">Zou</option>
              <option value="collines">Collines</option>
              <option value="borgou">Borgou</option>
              <option value="alibori">Alibori</option>
            </select>
          </div>

          <div class="filter-group">
            <h4>Disponibilité</h4>
            <label class="filter-label"><input type="radio" name="dispo" checked> Disponible immédiatement</label>
            <label class="filter-label"><input type="radio" name="dispo"> En cours de récolte (Sur commande)</label>
          </div>
        </div>
      </div>
    </section>

    <div class="catalog-container">
      <section class="products-grid">
        @foreach ($products as $product)
          <article class="annonce-card">
            <span class="badge-type maraichere">{{ $product->type }}</span>
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="annonce-image" />
            
            <div class="annonce-content">
              <h3>{{ $product->name }}</h3>
              <p class="product-vendor"><i class="fa-solid fa-user-wheat"></i> {{ $product->owner_id }}</p>
              <p class="product-details">{{ $product->description }}</p>
              
              <div class="product-meta">
                <span><i class="fa-solid fa-arrow-up-9-1"></i> {{ $product->available_quantity }}</span>
                <span><i class="fa-solid fa-location-dot"></i> {{ $product->status }}</span>
              </div>
              
              <div class="price-row">
                <span class="price"></span>
                <a href="#" class="btn-ajouter">
                  <i class="fas fa-basket-shopping"></i> Ajouter
                </a>
              </div>
            </div>
          </article>
        @endforeach

      </section>

      <!-- Pagination -->
      <div class="pagination-wrapper">
        {{ $products->links() }}
      </div>
    </div>

    <div class="guide-section">
      <h3><i class="fa-solid fa-truck-ramp-box"></i> Informations de Commande et Logistique</h3>
      <div class="guide-grid">
        <div class="guide-box">
          <h4>Vente Directe</h4>
          <p>Aucun intermédiaire caché. Les transactions s'opèrent directement entre vous et l'agriculteur ou le groupement semencier vendeur.</p>
        </div>
        <div class="guide-box">
          <h4>Transport & Groupage</h4>
          <p>Le transport des marchandises est à la charge de l'acheteur. Vous pouvez négocier directement avec les conducteurs de camions partenaires sur place.</p>
        </div>
        <div class="guide-box">
          <h4>Suivi des Prix du Marché</h4>
          <p>Avant d'acheter, consultez notre onglet "Prix / Marché" pour connaître les cours actuels des denrées sur les marchés clés du pays (Glazoué, Dantokpa, etc.).</p>
        </div>
      </div>
    </div>
  </main>

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
  <script src="app.js"> </script>

</body>

</html>