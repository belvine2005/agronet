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
      <a href="{{ route('products.prices') }}" class="link-marche">Prix / Marché</a>
      <a href="#" class="btn-compte">
        <i class="fa-regular fa-user"></i>
        Compte
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
        
        <article class="annonce-card">
          <span class="badge-type cereale">Vivrier</span>
          <img src="images/b9.jpg" alt="Cossettes de Manioc" class="annonce-image"  />
          <div class="annonce-content">
            <h3>Cossettes de Manioc de Qualité</h3>
            <p class="product-vendor"><i class="fa-solid fa-user-wheat"></i> Groupement d'Agriculteurs de Savalou</p>
            <p class="product-details">Cossettes de manioc bien séchées, idéales pour la production de farine ou la préparation du traditionnel Amala (Elubo).</p>
            <div class="product-meta">
              <span><i class="fa-solid fa-weight-scale"></i> Sac de 50 kg</span>
              <span><i class="fa-solid fa-location-dot"></i> Savalou</span>
            </div>
            <div class="price-row">
              <span class="price">14 000 FCFA</span>
              <a href="#" class="btn-ajouter">
                <i class="fas fa-basket-shopping"></i> Ajouter
              </a>
            </div>
            
        </article>

        <article class="annonce-card">
          <span class="badge-type maraichere">Maraîcher</span>
          <img src="images/produits-tomates.jpg" alt="Paniers de Tomates fraîches" class="annonce-image" onerror="this.src='https://images.unsplash.com/photo-1592924357228-91a4daadcfea?w=500&auto=format&fit=crop&q=60';" />
          <div class="annonce-content">
            <h3>Tomates Rondes Fraîches</h3>
            <p class="product-vendor"><i class="fa-solid fa-user-wheat"></i> Maraîchers de Grand-Popo</p>
            <p class="product-details">Tomates fermes récoltées le matin même. Excellente coloration et parfaite conservation pour les marchés urbains.</p>
            <div class="product-meta">
              <span><i class="fa-solid fa-basket-shopping"></i> Grand Panier</span>
              <span><i class="fa-solid fa-location-dot"></i> Grand-Popo</span>
            </div>
            <div class="price-row">
              <span class="price">8 500 FCFA</span>
              <a href="#" class="btn-ajouter">
                <i class="fas fa-basket-shopping"></i> Ajouter
              </a>
            </div>
        </article>

        <article class="annonce-card">
          <span class="badge-type legumineuse">De Rente</span>
          <img src="images/produits-cajou.jpg" alt="Noix de Cajou brutes" class="annonce-image" onerror="this.src='https://images.unsplash.com/photo-1600189020840-e9918c25269d?w=500&auto=format&fit=crop&q=60';" />
          <div class="annonce-content">
            <h3>Noix de Cajou Brutes (Anacarde)</h3>
            <p class="product-vendor"><i class="fa-solid fa-user-wheat"></i> Producteurs Unis du Borgou</p>
            <p class="product-details">Noix brutes bien triées avec un excellent taux de rendement de matière (KOR). Prêtes pour la transformation ou l'exportation.</p>
            <div class="product-meta">
              <span><i class="fa-solid fa-weight-scale"></i> Sac de 80 kg</span>
              <span><i class="fa-solid fa-location-dot"></i> Djougou</span>
            </div>
            <div class="price-row">
              <span class="price">36 000 FCFA</span>
              <a href="#" class="btn-ajouter">
                <i class="fas fa-basket-shopping"></i> Ajouter
              </a>
            </div>
            
          </div>
        </article>

        <article class="annonce-card">
          <span class="badge-type maraichere">Fruit</span>
          <img src="images/produits-ananas.jpg" alt="Ananas Pain de Sucre" class="annonce-image" onerror="this.src='https://images.unsplash.com/photo-1550258987-190a2d41a8ba?w=500&auto=format&fit=crop&q=60';" />
          <div class="annonce-content">
            <h3>Ananas Pain de Sucre Certifié Bio</h3>
            <p class="product-vendor"><i class="fa-solid fa-user-wheat"></i> Coopérative Allada Bio</p>
            <p class="product-details">Ananas Pain de Sucre réputés pour leur chair blanche, très tendre et particulièrement sucrée. Idéal pour jus locaux.</p>
            <div class="product-meta">
              <span><i class="fa-solid fa-arrow-up-9-1"></i> Lot de 50 têtes</span>
              <span><i class="fa-solid fa-location-dot"></i> Allada</span>
            </div>
            <div class="price-row">
              <span class="price">15 000 FCFA</span>
               <a href="#" class="btn-ajouter">
                <i class="fas fa-basket-shopping"></i> Ajouter
              </a>
            </div>
            
          </div>
        </article>

      </section>
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