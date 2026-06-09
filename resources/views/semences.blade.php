@extends('layouts.app')
@section('title', 'Semences Certifiées')
@section('content')

  <main class="section">
    <div class="page-header-bg">
      <div class="section-header1">
        <h2>Semences Certifiées</h2>
        <p>Améliorez vos rendements agricoles avec notre sélection de semences de haute qualité, adaptées au climat
          béninois et résistantes aux maladies.</p>
      </div>
    </div>

    <section class="filter-section">
      <div class="filter-container">
        <div class="filter-header">
          <h3>Filtrer les semences</h3>
          <button class="filter-toggle" id="filterToggle">
            <span class="filter-text">Filtrer</span>
            <i class="fa-solid fa-chevron-down"></i>
          </button>
        </div>

        <div class="filter-content" id="filterContent">
          <div class="filter-group">
            <h4>Catégories</h4>
            <label class="filter-label"><input type="checkbox" checked> Céréales (Maïs, Riz...)</label>
            <label class="filter-label"><input type="checkbox"> Cultures maraîchères</label>
            <label class="filter-label"><input type="checkbox"> Légumineuses</label>
            <label class="filter-label"><input type="checkbox"> Racines & Tubercules</label>
          </div>

          <div class="filter-group">
            <h4>Zone de production</h4>
            <select class="filter-select">
              <option value="">Tout le Bénin</option>
              <option value="alibori">Alibori</option>
              <option value="borgou">Borgou</option>
              <option value="collines">Collines</option>
              <option value="zou">Zou</option>
              <option value="atacora">Atacora</option>
              <option value="littoral">Atlantique / Littoral</option>
            </select>
          </div>

          <div class="filter-group">
            <h4>Certification</h4>
            <label class="filter-label"><input type="radio" name="certif" checked> Certifiées conventionnelles</label>
            <label class="filter-label"><input type="radio" name="certif"> Certifiées Biologiques (Bio)</label>
          </div>
        </div>
      </div>
    </section>

    <div class="catalog-container">
      <section class="products-grid">

        <article class="annonce-card">
          <span class="badge-type cereale">Céréale</span>
          <img src="images/b8.jpg" alt="Semences de Maïs Hybride" class="annonce-image" />
          <div class="annonce-content">
            <h3>Maïs Hybride DMR-ESR-W</h3>
            <p class="product-vendor"><i class="fa-solid fa-store"></i> SoNaMA Bénin</p>
            <p class="product-details">Semences à haut rendement, résistantes à la striure du maïs et adaptées aux
              cycles courts de production au Sud-Bénin.</p>
            <div class="product-meta">
              <span><i class="fa-solid fa-weight-scale"></i> Sac de 10 kg</span>
              <span><i class="fa-solid fa-location-dot"></i> Bohicon</span>
            </div>
            <div class="price-row">
              <span class="price">12 500 FCFA</span>
              <a href="#" class="btn-ajouter">
                <i class="fas fa-basket-shopping"></i> Ajouter
              </a>
            </div>
          </div>
        </article>

        <article class="annonce-card">
          <span class="badge-type maraichere">Maraîchère</span>
          <img src="images/b3.jpg" alt="Semences de Piment" class="annonce-image" />
          <div class="annonce-content">
            <h3>Piment Gbatakin Sélectionné</h3>
            <p class="product-vendor"><i class="fa-solid fa-store"></i> Coopérative Vert-Bénin</p>
            <p class="product-details">Graines de piment local sélectionnées pour une excellente germination, piquant
              intense et forte demande sur le marché de Dantokpa.</p>
            <div class="product-meta">
              <span><i class="fa-solid fa-weight-scale"></i> Sachet de 500g</span>
              <span><i class="fa-solid fa-location-dot"></i> Ouidah</span>
            </div>
            <div class="price-row">
              <span class="price">4 000 FCFA</span>
              <a href="#" class="btn-ajouter">
                <i class="fas fa-basket-shopping"></i> Ajouter
              </a>
            </div>

          </div>
        </article>

        <article class="annonce-card">
          <span class="badge-type legumineuse">Légumineuse</span>
          <img src="images/a18.jpg" alt="Semences de Soja" class="annonce-image" />
          <div class="annonce-content">
            <h3>Soja Grains - Variété TGX</h3>
            <p class="product-vendor"><i class="fa-solid fa-store"></i> AgriFournisseurs Nord</p>
            <p class="product-details">Semence idéale pour la production d'huile et de tourteaux. Excellente capacité de
              fixation d'azote dans le sol.</p>
            <div class="product-meta">
              <span><i class="fa-solid fa-weight-scale"></i> Sac de 25 kg</span>
              <span><i class="fa-solid fa-location-dot"></i> Parakou</span>
            </div>
            <div class="price-row">
              <span class="price">18 000 FCFA</span>
              <a href="#" class="btn-ajouter">
                <i class="fas fa-basket-shopping"></i> Ajouter
              </a>
            </div>

          </div>
        </article>

        <article class="annonce-card">
          <span class="badge-type cereale">Céréale</span>
          <img src="images/b4.jpg" alt="Semences de Riz" class="annonce-image"
            onerror="this.src='https://images.unsplash.com/photo-1536304997881-a372c179924b?w=500&auto=format&fit=crop&q=60';" />
          <div class="annonce-content">
            <h3>Riz NERICA 4 Certifié</h3>
            <p class="product-vendor"><i class="fa-solid fa-store"></i> Groupement Semencier Glazoué</p>
            <p class="product-details">Variété de riz pluvial très performante, tolérante à la sécheresse et dotée d'une
              très bonne qualité gustative recherchée par les transformateurs.</p>
            <div class="product-meta">
              <span><i class="fa-solid fa-weight-scale"></i> Sac de 50 kg</span>
              <span><i class="fa-solid fa-location-dot"></i> Glazoué</span>
            </div>
            <div class="price-row">
              <span class="price">32 000 FCFA</span>
              <a href="#" class="btn-ajouter">
                <i class="fas fa-basket-shopping"></i> Ajouter
              </a>
            </div>

        </article>

      </section>
    </div>

    <div class="guide-section">
      <h3><i class="fa-solid fa-seedling"></i> Conseils de gestion et semis</h3>
      <div class="guide-grid">
        <div class="guide-box">
          <h4>Test de Germination</h4>
          <p>Avant tout semis de grande envergure, effectuez un test de levée sur un échantillon de 100 graines pour
            anticiper le taux de réussite au champ.</p>
        </div>
        <div class="guide-box">
          <h4>Stockage des Graines</h4>
          <p>Conservez vos semences à l'abri de l'humidité relative et de la chaleur excessive pour préserver intact
            leur pouvoir germinatif jusqu'à la saison des pluies.</p>
        </div>
        <div class="guide-box">
          <h4>Densité de Semis</h4>
          <p>Respectez scrupuleusement les écartements recommandés par la recherche agricole (par exemple, 75cm x 25cm
            pour le maïs) pour optimiser l'exposition au soleil.</p>
        </div>
      </div>
    </div>
  </main>

 @endsection