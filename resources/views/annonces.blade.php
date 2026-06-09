@extends('layouts.app')
@section('title', 'Annonces')
@section('content')

  <main class="market-workspace">

    <aside class="board-filter-panel">
      <h3 class="filter-panel-title"><i class="fa-solid fa-sliders"></i> Filtrer les annonces</h3>

      <form action="#" method="GET" class="filter-specification-form">
        <div class="filter-input-wrapper">
          <label for="query-keywords">Mots-clés</label>
          <input type="text" id="query-keywords" placeholder="Ex: Manioc, Maïs..." />
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

      <div class="opportunities-display-grid">
        <article class="opportunity-display-card">
          <div class="opportunity-status-tag tag-type-sales">Vente</div>
          <div class="opportunity-body-wrapper">
            <span class="opportunity-timestamp">Aujourd'hui à 10:45</span>
            <h3 class="opportunity-headline"><a href="#">Stock de Maïs Blanc Sec - 5 Tonnes</a></h3>
            <p class="opportunity-geography"><i class="fa-solid fa-location-dot"></i> Bohicon, Zou</p>
            <p class="opportunity-summary">Maïs de excellente qualité, bien séché et ensaché en sacs de 100kg.
              Disponible immédiatement pour chargement.</p>
            <div class="opportunity-action-footer">
              <span class="opportunity-pricing-value">18 000 F CFA <small>/ sac</small></span>
              <a href="#" class="lead-connection-trigger"><i class="fa-solid fa-phone"></i> Contacter</a>
            </div>
          </div>
        </article>

        <article class="opportunity-display-card">
          <div class="opportunity-status-tag tag-type-sales">Vente</div>
          <div class="opportunity-body-wrapper">
            <span class="opportunity-timestamp">04 Juin 2026</span>
            <h3 class="opportunity-headline"><a href="#">Vente de Manioc Frais en Gros</a></h3>
            <p class="opportunity-geography"><i class="fa-solid fa-location-dot"></i> Natitingou, Atacora</p>
            <p class="opportunity-summary">Groupement de producteurs propose du manioc frais de qualité, disponible en
              grande quantité.Idéal pour transformateurs et revendeurs.</p>
            <div class="opportunity-action-footer">
              <span class="opportunity-pricing-value">Prix à débattre</span>
              <a href="#" class="lead-connection-trigger"><i class="fa-solid fa-phone"></i> Contacter</a>
            </div>
          </div>
        </article>

      </div>
    </section>

  </main>
@endsection