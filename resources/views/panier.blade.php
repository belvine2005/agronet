@extends('layouts.app')
@section('title', 'Panier')
@section('content')

  <div class="panier-breadcrumb">
    <a href="accueil.html"><i class="fa-solid fa-chevron-left"></i> Continuer mes achats</a>
  </div>

  <main class="panier-container">
    
    <section class="panier-items">
      <h1 class="panier-title">Récapitulatif de mon panier</h1>

      <div class="panier-card">
        <div class="panier-card-img">
          <img src="{{ Vite::asset('resources/images/b2.jpg') }}" alt="Engrais NPK" />
        </div>
        <div class="panier-card-details">
          <h3>Engrais NPK - Sac de 25 kg</h3>
          <p class="panier-meta">Origine : Abomey</p>
          <span class="panier-price-unit">20 000 FCFA</span>
        </div>
        <div class="panier-card-qty">
          <input type="number" value="1" min="1" />
          <span class="panier-price-total">20 000 FCFA</span>
        </div>
        <button class="panier-delete-btn" aria-label="Supprimer">
          <i class="fa-regular fa-trash-can"></i>
        </button>
      </div>

      <div class="panier-card">
        <div class="panier-card-img">
          <img src="{{ Vite::asset('resources/images/a12.jpg') }}" alt="Semences de maïs" />
        </div>
        <div class="panier-card-details">
          <h3>Semences de maïs - Sac de 50 kg</h3>
          <p class="panier-meta">Origine : Parakou</p>
          <span class="panier-price-unit">30 000 FCFA</span>
        </div>
        <div class="panier-card-qty">
          <input type="number" value="1" min="1" />
          <span class="panier-price-total">30 000 FCFA</span>
        </div>
        <button class="panier-delete-btn" aria-label="Supprimer">
          <i class="fa-regular fa-trash-can"></i>
        </button>
      </div>

    </section>

    <aside class="panier-sidebar">
      
      <div class="sidebar-box checkout-box">
        <div class="price-row">
          <span>Produits</span>
          <span>50 000 FCFA</span>
        </div>
        <div class="price-row">
          <span>Livraison</span>
          <span>3 500 FCFA</span>
        </div>
        <hr class="sidebar-divider">
        <div class="price-row total-row">
          <strong>Total</strong>
          <strong>53 500 FCFA</strong>
        </div>
        <button class="btn-validate-order">Valider ma commande</button>
      </div>
      <div class="sidebar-box contact-box">
        <p>Une question ? Contactez-nous au <strong>+229 01 XX XX XX XX</strong></p>
      </div>

      <div class="sidebar-box trust-box">
        <div class="trust-item">
          <i class="fa-solid fa-truck-fast"></i>
          <div>
            <h4>Expédié en 24h à 48h maximum</h4>
          </div>
        </div>
        <div class="trust-item">
          <i class="fa-solid fa-shield-halved"></i>
          <div>
            <h4>Paiement ultra sécurisé (Moov / MTN Money)</h4>
          </div>
        </div>
      </div>

    </aside>

  </main>

  
@endsection


</body>
</html>