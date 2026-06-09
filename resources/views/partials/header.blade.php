<header class="topbar">

    <a href="{{ route('accueil') }}" class="logo">
        AgroNet
    </a>

    <div class="search-wrap">
        <input type="text" placeholder="Rechercher un produit..." />

        <button class="search-btn">
            <i class="fa-solid fa-search"></i>
        </button>
    </div>

    <div class="topbar-right">

        <a href="{{ route('prix-marche') }}" class="link-marche">
            Prix / Marché
        </a>

        <a href="{{ route('users.login') }}" class="btn-compte">
            <i class="fa-regular fa-user"></i>
            Compte
        </a>

    </div>

</header>