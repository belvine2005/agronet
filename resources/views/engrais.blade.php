@extends('layouts.app')
@section('title', 'Engrais & Intrants Agricoles')
@section('content')
  <main class="section">
    <div class="page-header-bg">
      <div class="section-header1">
        <h2>Engrais & Intrants Agricoles</h2>
        <p>Trouvez les meilleurs engrais organiques et minéraux pour optimiser vos rendements au Bénin.</p>
      </div>
    </div>

    <section class="filter-section">
      <div class="filter-container">
        <div class="filter-header">
          <h3>Filtrer les engrais</h3>
          <button class="filter-toggle" id="filterToggle">
            <span class="filter-text">Filtrer</span>
            <i class="fa-solid fa-chevron-down"></i>
          </button>
        </div>

        <div class="filter-content" id="filterContent">
          <div class="filter-group">
            <h4>Type d'engrais</h4>
            <label class="filter-label">
              <input type="checkbox" name="type" value="npk" checked /> NPK (Minéral)
            </label>
            <label class="filter-label">
              <input type="checkbox" name="type" value="uree" /> Urée
            </label>
            <label class="filter-label">
              <input type="checkbox" name="type" value="organique" /> Organique / Compost
            </label>
            <label class="filter-label">
              <input type="checkbox" name="type" value="liquide" /> Engrais Liquide
            </label>
          </div>

          <div class="filter-group">
            <h4>Région / Disponibilité</h4>
            <select class="filter-select">
              <option value="all">Tout le Bénin</option>
              <option value="cotonou">Cotonou / Littoral</option>
              <option value="abomey">Abomey / Zou</option>
              <option value="parakou">Parakou / Borgou</option>
              <option value="malanville">Malanville / Alibori</option>
            </select>
          </div>

          <div class="filter-group">
            <h4>Conditionnement</h4>
            <label class="filter-label">
              <input type="radio" name="poids" value="all" checked /> Tous les poids
            </label>
            <label class="filter-label">
              <input type="radio" name="poids" value="25" /> Sac de 25 kg
            </label>
            <label class="filter-label">
              <input type="radio" name="poids" value="50" /> Sac de 50 kg
            </label>
          </div>
        </div>
      </div>
    </section>

    <div class="catalog-container">
      <section class="products-grid">


        <div class="annonce-card">
          <div class="badge-type">Minéral</div>
          <img src="images/b2.jpg" alt="Engrais NPK 15-15-15" class="annonce-image" />
          <div class="annonce-content">
            <h3>Engrais NPK 15-15-15</h3>
            <p class="product-vendor"><i class="fa-solid fa-store"></i> Sodéco SA</p>
            <p class="product-details">Idéal pour le coton, le maïs et le maraîchage. Formule équilibrée.</p>
            <div class="product-meta">
              <span class="location"><i class="fa-solid fa-location-dot"></i> Abomey</span>
              <span class="weight"><i class="fa-solid fa-weight-hanging"></i> 50 kg</span>
            </div>
            <div class="price-row">
              <span class="price">22 000 FCFA</span>
              <a href="#" class="btn-ajouter">
                <i class="fas fa-basket-shopping"></i> Ajouter
              </a>
            </div>
          </div>
        </div>

        <div class="annonce-card">
          <div class="badge-type">Minéral</div>
          <img src="images/b7.jpg" alt="Urée 46%" class="annonce-image" />
          <div class="annonce-content">
            <h3>Urée 46%</h3>
            <p class="product-vendor"><i class="fa-solid fa-user"></i> ETS Bio-Agri</p>
            <p class="product-details">Engrais azoté pour stimuler la croissance végétative rapide de vos cultures.
            </p>
            <div class="product-meta">
              <span class="location"><i class="fa-solid fa-location-dot"></i> Parakou</span>
              <span class="weight"><i class="fa-solid fa-weight-hanging"></i> 50 kg</span>
            </div>
            <div class="price-row">
              <span class="price">18 500 FCFA</span>
              <a href="#" class="btn-ajouter">
                <i class="fas fa-basket-shopping"></i> Ajouter
              </a>
            </div>
          </div>
        </div>

        <div class="annonce-card">
          <div class="badge-type organique">Organique</div>
          <img src="images/b6.jpg" alt="Compost Enrichi" class="annonce-image" />
          <div class="annonce-content">
            <h3>Compost Organique Enrichi</h3>
            <p class="product-vendor"><i class="fa-solid fa-leaf"></i> Ferme Verte Bénin</p>
            <p class="product-details">100% naturel, améliore la structure du sol et retient efficacement l'eau.</p>
            <div class="product-meta">
              <span class="location"><i class="fa-solid fa-location-dot"></i> Ouidah</span>
              <span class="weight"><i class="fa-solid fa-weight-hanging"></i> 25 kg</span>
            </div>
            <div class="price-row">
              <span class="price">7 000 FCFA</span>
              <a href="#" class="btn-ajouter">
                <i class="fas fa-basket-shopping"></i> Ajouter
              </a>
            </div>
          </div>
        </div>

        <div class="annonce-card">
          <div class="badge-type liquide">Liquide</div>
          <img src="images/b5.jpg" alt="Bio-Stimulant Liquide" class="annonce-image" />
          <div class="annonce-content">
            <h3>Engrais Foliaire Liquide</h3>
            <p class="product-vendor"><i class="fa-solid fa-store"></i> Agri-Input Bénin</p>
            <p class="product-details">Absorption rapide par les feuilles. Idéal pour cultures maraîchères (piment,
              tomate).</p>
            <div class="product-meta">
              <span class="location"><i class="fa-solid fa-location-dot"></i> Cotonou</span>
              <span class="weight"><i class="fa-solid fa-bottle-water"></i> 1 Litre</span>
            </div>
            <div class="price-row">
              <span class="price">5 500 FCFA</span>
              <a href="#" class="btn-ajouter">
                <i class="fas fa-basket-shopping"></i> Ajouter
              </a>
            </div>
          </div>
        </div>
      </section>


        <div class="guide-section">
        <div class="section-header">
          <h2><i class="fa-solid fa-lightbulb"></i> Conseils d'utilisation</h2>
          <p>Quelques bonnes pratiques pour maximiser l'effet de vos intrants.</p>
        </div>
        <div class="guide-grid">
          <div class="guide-box">
            <h4>Analyse du sol</h4>
            <p>Avant toute application, assurez-vous de connaître les carences de votre sol pour choisir la bonne
              formule de NPK.</p>
          </div>
          <div class="guide-box">
            <h4>Dosage et Période</h4>
            <p>L'Urée s'applique généralement en plein développement. Évitez le contact direct avec les racines pour ne
              pas brûler les plants.</p>
          </div>
          <div class="guide-box">
            <h4>Stockage sécurisé</h4>
            <p>Conservez vos sacs d'engrais dans un endroit sec, ventilé et hors de portée des enfants et des animaux.
            </p>
          </div>
        </div>
      </div>
      
    </div>
  </main>
@endsection