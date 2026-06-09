@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

  <!--ACCUEIL -->
  <section id="accueil" class="section accueil">
    <video autoplay muted loop>
      <source src="https://www.pexels.com/fr-fr/download/video/3256392/?fps=29.97&h=2160&w=3840" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="section-header2">
      <h1>Bienvenue sur AgroNet</h1>
      <p>Votre marché agricole en ligne pour acheter et vendre des produits agricoles au Bénin.</p>
    </div>
  </section>
  <section class="section annonces-section">

    <div class="section-header1">
      <h2>Quelques annonces</h2>
      <p>Découvrez les produits agricoles disponibles près de chez vous.</p>
    </div>

    <div class="annonces-grid">

      <!-- Carte 1 -->
      <div class="annonce-card">
        <div class="image-container">
          <img src={{ Vite::asset('resources/images/b1.jpg') }} alt="Manioc frais" class="annonce-image">
          <span class="badge-qte">100 kg</span>
        </div>

        <div class="annonce-content">
          <h3>Manioc frais</h3>

          <p>
            Disponible à Cotonou. Produit frais de qualité,
            récolté localement.
          </p>

          <div class="card-footer">
            <span class="prix">50 000 F CFA</span>

            <div class="actions">
              <a href="#" class="btn-details">Détails</a>
              <a href="#" class="btn-ajouter">
                <i class="fas fa-basket-shopping"></i> Ajouter
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Carte 2 -->
      <div class="annonce-card">
        <div class="image-container">
          <img src={{ Vite::asset('resources/images/a12.jpg') }} alt="Semences de maïs" class="annonce-image">
          <span class="badge-qte">50 kg</span>
        </div>

        <div class="annonce-content">
          <h3>Semences de maïs</h3>

          <p>
            Disponible à Parakou. Semences sélectionnées
            pour un rendement optimal.
          </p>

          <div class="card-footer">
            <span class="prix">30 000 F CFA</span>

            <div class="actions">
              <a href="#" class="btn-details">Détails</a>
              <a href="#" class="btn-ajouter">
                <i class="fas fa-basket-shopping"></i> Ajouter
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Carte 3 -->
      <div class="annonce-card">
        <div class="image-container">
          <img src={{ Vite::asset('resources/images/b2.jpg') }} alt="Engrais NPK" class="annonce-image">
          <span class="badge-qte">25 kg</span>
        </div>

        <div class="annonce-content">
          <h3>Engrais NPK</h3>

          <p>
            Disponible à Abomey. Engrais de qualité pour
            améliorer la productivité agricole.
          </p>

          <div class="card-footer">
            <span class="prix">20 000 F CFA</span>

            <div class="actions">
              <a href="#" class="btn-details">Détails</a>
              <a href="#" class="btn-ajouter">
                <i class="fas fa-basket-shopping"></i> Ajouter
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Carte 4 -->
      <div class="annonce-card">
        <div class="image-container">
          <img src="images/produits-tomates.jpg" alt="Paniers de Tomates fraîches" class="annonce-image" onerror="this.src='https://images.unsplash.com/photo-1592924357228-91a4daadcfea?w=500&auto=format&fit=crop&q=60';" />
          <span class="badge-qte">80 kg</span>
        </div>

        <div class="annonce-content">
          <h3>Tomates fraîches</h3>

          <p>
            Disponible à Porto-Novo. Tomates fraîches récoltées
            directement auprès des producteurs locaux.
          </p>

          <div class="card-footer">
            <span class="prix">35 000 F CFA</span>

            <div class="actions">
              <a href="#" class="btn-details">Détails</a>
              <a href="#" class="btn-ajouter">
                <i class="fas fa-basket-shopping"></i> Ajouter
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!--Foire aux questions -->
  <section id="faq" class="section">
    <div class="section-header">
      <h2>Foire aux questions</h2>
      <p>Tout ce que vous devez savoir pour utiliser AgroNet efficacement.</p>
    </div>
    <div class="faq-accordion">
      <div class="faq-item">
        <button class="faq-question">
          <span>Comment créer un compte ?</span>
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Cliquez sur "Compte" en haut à droite, puis suivez les instructions pour vous inscrire en tant que
            producteur, fournisseur ou acheteur.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">
          <span>Comment vendre mes produits ?</span>
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Une fois connecté, accédez à votre tableau de bord et cliquez sur "Ajouter un produit". Remplissez les
            détails et publiez votre annonce.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">
          <span>Comment consulter les prix du marché ?</span>
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Cliquez sur "Prix / Marché" dans la barre de navigation pour voir les prix actuels des produits agricoles
            dans différentes régions du Bénin.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">
          <span>Comment publier une annonce de produit agricole ?</span>
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Connectez-vous à votre compte, accédez à votre espace utilisateur puis cliquez sur "Publier une annonce".
            Remplissez les informations sur votre produit (nom, quantité, prix, localisation, etc.) puis validez.</p>
        </div>
      </div>
    </div>
    </div>
  </section>


  <!-- AVIS -->
  <section class="section">
    <div class="section-header3">
      <h2>Ce que disent nos utilisateurs</h2>
      <p>Retours d'expérience de la communauté AgroNet</p>
    </div>
    <div class="avis-grid">

      <div class="avis-card">
        <div class="avis-stars">★★★★★</div>
        <p class="avis-text">Grâce à AgroNet, j'ai pu trouver des semences de qualité à un prix correct sans faire le
          tour des marchés. La livraison était rapide et le vendeur très sérieux.</p>
        <div class="avis-auteur-row">
          <div class="avis-avatar"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg></div>
          <div>
            <div class="avis-auteur">Koffi Agbossou</div>
            <div class="avis-role">Agriculteur — Savè</div>
          </div>
        </div>
      </div>

      <div class="avis-card">
        <div class="avis-stars">★★★★☆</div>
        <p class="avis-text">Je consulte les prix du marché chaque matin depuis mon téléphone. Ça m'aide à décider quand
          vendre. Très pratique au quotidien.</p>
        <div class="avis-auteur-row">
          <div class="avis-avatar"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg></div>
          <div>
            <div class="avis-auteur">Fanta Bello</div>
            <div class="avis-role">Commerçante — Cotonou</div>
          </div>
        </div>
      </div>

      <div class="avis-card">
        <div class="avis-stars">★★★★★</div>
        <p class="avis-text">J'ai mis en ligne mon stock de manioc un jeudi soir. Le samedi matin, tout était vendu. Je
          n'aurais jamais pensé que ça marcherait aussi vite.</p>
        <div class="avis-auteur-row">
          <div class="avis-avatar"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg></div>
          <div>
            <div class="avis-auteur">Mathieu Dossou</div>
            <div class="avis-role">Producteur — Abomey</div>
          </div>
        </div>
      </div>
      <div class="avis-card">
        <div class="avis-stars">★★★★☆</div>
        <p class="avis-text">Dès que j'ai mis en ligne mon stock de semences, les commandes ont commencé à arriver.</p>
        <div class="avis-auteur-row">
          <div class="avis-avatar"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg></div>
          <div>
            <div class="avis-auteur">Maxime Danssou</div>
            <div class="avis-role">Fournisseur d'intrants — Sahouè</div>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection