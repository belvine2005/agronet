<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AgroNet')</title>

     @vite(['resources/css/admin.css', 'resources/js/script.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="@yield('body-class')">

    <div class="dashboard">

        <aside class="sidebar">

            <div class="logo">
                <h2>AgroNet</h2>
            </div>

            <div class="store-card">
                <small>Plateforme agricole</small>
                <h4>Administration</h4>
            </div>

            <ul class="menu">

                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-chart-pie"></i> Tableau de bord
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.produits') }}">
                        <i class="fas fa-seedling"></i> Produits
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.annonces') }}">
                        <i class="fas fa-bullhorn"></i> Annonces
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.commandes') }}">
                        <i class="fas fa-cart-shopping"></i> Commandes
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.agriculteurs') }}">
                        <i class="fas fa-users"></i> Agriculteurs
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.acheteurs') }}">
                        <i class="fas fa-store"></i> Acheteurs
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.profils') }}">
                        <i class="fas fa-user"></i> Profils
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.parametres') }}">
                        <i class="fas fa-gear"></i> Paramètres
                    </a>
                </li>

            </ul>

        </aside>

        <main class="main">

            @yield('content')

        </main>

    </div>

</body>

</html>
