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
    <a href="\home" class="logo">AgroNet</a>

    <div class="search-wrap">
      <input type="text" placeholder="Rechercher un produit..." />
      <button class="search-btn" aria-label="Rechercher">
        <i class="fa-solid fa-search"></i>
      </button>
    </div>

    <div class="topbar-right">
      <a href="prix-marche.html" class="link-marche">Prix / Marché</a>
      <a href="connexion.html" class="btn-compte">
        <i class="fa-regular fa-user"></i>
        Compte
      </a>
    </div>
  </header>

  <nav class="catbar">
    <a href="engrais.html" class="cat-link">
      Engrais
    </a>
    <a href="semences.html" class="cat-link">
      Semences
    </a>
    <a href="produits_agri.html" class="cat-link active">
      Produits Agricoles
    </a>
    <a href="\annonces" class="cat-link">
      Annonces
    </a>
  </nav>

  <main class="market-workspace">
    
    <aside class="board-filter-panel">
      <h3 class="filter-panel-title"><i class="fa-solid fa-sliders"></i> Filtrer les annonces</h3>
      
      <form action="#" method="GET" class="filter-specification-form">
        <div class="filter-input-wrapper">
          <label for="query-keywords">Mots-clés</label>
          <input type="text" id="query-keywords" placeholder="Ex: Tracteur, Maïs..." />
        </div>

        <div class="filter-input-wrapper">
          <label for="query-deal-type">Type d'offre</label>
          <select id="query-deal-type">
            <option value="">Tous les types</option>
            <option value="vente">Offre de vente</option>
            <option value="achat">Demande d'achat</option>
          </select>
        </div>

        <div class="filter-input-wrapper">
          <label for="query-category">Catégorie</label>
          <select id="query-category">
            <option value="">Toutes les catégories</option>
            <option value="cereales">Céréales & Tubercules</option>
            <option value="intrants">Engrais & Intrants</option>
            <option value="materiel">Matériel Agricole</option>
            <option value="elevage">Élevage & Volaille</option>
          </select>
        </div>

        <div class="filter-input-wrapper">
          <label for="query-territory">Localité (Bénin)</label>
          <select id="query-territory">
            <option value="">Tous les départements</option>
            <option value="atacora">Atacora</option>
            <option value="atlantique">Atlantique</option>
            <option value="borgou">Borgou</option>
            <option value="collines">Collines</option>
            <option value="couffo">Couffo</option>
            <option value="donga">Donga</option>
            <option value="littoral">Littoral (Cotonou)</option>
            <option value="mono">Mono</option>
            <option value="oueme">Ouémé</option>
            <option value="plateau">Plateau</option>
            <option value="zou">Zou</option>
          </select>
        </div>

        <button type="submit" class="filter-submission-trigger">Appliquer les filtres</button>
      </form>
    </aside>

    <section class="live-opportunities-stream">
      <div class="stream-status-bar">
        <h2 class="stream-main-heading">Opportunités récentes</h2>
        <span class="stream-counter-badge">3 annonces trouvées</span>
      </div>

      <div class="opportunities-display-grid">
        
        <article class="opportunity-display-card">
          <div class="opportunity-status-tag tag-type-sales">Vente</div>
          <div class="opportunity-body-wrapper">
            <span class="opportunity-timestamp">Aujourd'hui à 10:45</span>
            <h3 class="opportunity-headline"><a href="#">Stock de Maïs Blanc Sec - 5 Tonnes</a></h3>
            <p class="opportunity-geography"><i class="fa-solid fa-location-dot"></i> Bohicon, Zou</p>
            <p class="opportunity-summary">Maïs de excellente qualité, bien séché et ensaché en sacs de 100kg. Disponible immédiatement pour chargement.</p>
            <div class="opportunity-action-footer">
              <span class="opportunity-pricing-value">18 000 F CFA <small>/ sac</small></span>
              <a href="#" class="lead-connection-trigger"><i class="fa-solid fa-phone"></i> Contacter</a>
            </div>
          </div>
        </article>

        <article class="opportunity-display-card">
          <div class="opportunity-status-tag tag-type-services">Service</div>
          <div class="opportunity-body-wrapper">
            <span class="opportunity-timestamp">Hier, 16:30</span>
            <h3 class="opportunity-headline"><a href="#">Location de Tracteur avec Chauffeur</a></h3>
            <p class="opportunity-geography"><i class="fa-solid fa-location-dot"></i> Parakou, Borgou</p>
            <p class="opportunity-summary">Service de labour rapide pour vos projets agricoles de la saison. Équipement moderne et conducteur expérimenté.</p>
            <div class="opportunity-action-footer">
              <span class="opportunity-pricing-value">45 000 F CFA <small>/ hectare</small></span>
              <a href="#" class="lead-connection-trigger"><i class="fa-solid fa-phone"></i> Contacter</a>
            </div>
          </div>
        </article>

        <article class="opportunity-display-card">
          <div class="opportunity-status-tag tag-type-requests">Achat</div>
          <div class="opportunity-body-wrapper">
            <span class="opportunity-timestamp">30 Mai 2026</span>
            <h3 class="opportunity-headline"><a href="#">Recherche Fournisseur de Noix de Cajou</a></h3>
            <p class="opportunity-geography"><i class="fa-solid fa-location-dot"></i> Natitingou, Atacora</p>
            <p class="opportunity-summary">Entreprise d'exportation cherche groupement de producteurs pour l'achat de noix de cajou brutes bien triées. Contrat saisonnier possible.</p>
            <div class="opportunity-action-footer">
              <span class="opportunity-pricing-value">Prix à débattre</span>
              <a href="#" class="lead-connection-trigger"><i class="fa-solid fa-phone"></i> Contacter</a>
            </div>
          </div>
        </article>

      </div>
    </section>

  </main>

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