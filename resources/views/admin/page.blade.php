<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroNet - Tableau de bord</title>
    @vite(['resources/css/styles.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: #f4f6f8;
        }

        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */

        .sidebar {
            width: 260px;
            background: #032018;
            color: white;
            padding: 25px;
        }

        .logo {
            margin-bottom: 40px;
        }

        .logo h2 {
            color: #4CAF50;
        }

        .store-card {
            background: #0b3327;
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 30px;
        }

        .store-card h4 {
            margin-top: 8px;
        }

        .menu {
            list-style: none;
        }

        .menu li {
            margin-bottom: 10px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
            text-decoration: none;
            padding: 14px;
            border-radius: 10px;
            transition: .3s;
        }

        .menu a:hover,
        .menu .active a {
            background: #164d3a;
        }

        .menu i {
            width: 20px;
        }

        /* MAIN */

        .main {
            flex: 1;
            padding: 30px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .topbar h1 {
            color: #222;
        }

        .topbar p {
            color: #666;
        }

        .search {
            background: white;
            padding: 12px 20px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search input {
            border: none;
            outline: none;
        }

        /* STATS */

        .stats {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, .05);
        }

        .stat-card h4 {
            color: #777;
            font-size: 14px;
        }

        .stat-card h2 {
            margin-top: 10px;
            color: #222;
        }

        .stat-card span {
            color: #4CAF50;
            font-size: 14px;
        }

        /* ANALYTICS */

        .analytics {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .chart-card,
        .promo {
            background: white;
            border-radius: 15px;
            padding: 25px;
        }

        .chart-card h2 {
            margin-bottom: 20px;
        }

        .fake-chart {
            height: 320px;
            border-radius: 12px;
            background:
                repeating-linear-gradient(to top,
                    #ececec,
                    #ececec 1px,
                    white 50px);
            position: relative;
            overflow: hidden;
        }

        .fake-chart svg {
            position: absolute;
            inset: 0;
        }

        .promo {
            background: linear-gradient(135deg, #0a3a2b, #4CAF50);
            color: white;
        }

        .promo h2 {
            margin-bottom: 20px;
        }

        .promo ul {
            margin: 20px 0;
            padding-left: 20px;
        }

        .promo li {
            margin-bottom: 10px;
        }

        .promo button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 10px;
            background: white;
            color: #2E7D32;
            font-weight: bold;
            cursor: pointer;
        }

        /* TABLE */

        .table-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
        }

        .table-card h2 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f7f7f7;
            padding: 15px;
            text-align: left;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        .status {
            color: #4CAF50;
            font-weight: 600;
        }

        .edit {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        @media(max-width:1200px) {

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .analytics {
                grid-template-columns: 1fr;
            }

        }

        @media(max-width:768px) {

            .dashboard {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .stats {
                grid-template-columns: 1fr;
            }

        }
    </style>

</head>

<body>

    <div class="dashboard">

        <!-- SIDEBAR -->

        <aside class="sidebar">

            <div class="logo">
                <h2> AgroNet</h2>
            </div>

            <div class="store-card">
                <small>Plateforme agricole</small>
                <h4>Administration</h4>
            </div>

            <ul class="menu">

                <li class="active">
                    <a href="#"><i class="fas fa-chart-pie"></i> Tableau de bord</a>
                </li>

                <li>
                    <a href="#"><i class="fas fa-seedling"></i> Produits</a>
                </li>

                <li>
                    <a href="#"><i class="fas fa-bullhorn"></i> Annonces</a>
                </li>

                <li>
                    <a href="#"><i class="fas fa-cart-shopping"></i> Commandes</a>
                </li>

                <li>
                    <a href="#"><i class="fas fa-users"></i> Agriculteurs</a>
                </li>

                <li>
                    <a href="#"><i class="fas fa-store"></i> Acheteurs</a>
                </li>

                <li>
                    <a href="#"><i class="fa-regular fa-user"></i> Profil</a>
                </li>


                <li>
                    <a href="#"><i class="fas fa-gear"></i> Paramètres</a>
                </li>



            </ul>

        </aside>

        <!-- MAIN -->

        <main class="main">

            <div class="topbar">

                <div>
                    <h1>Bienvenue Administrateur</h1>
                    <p>Suivi des activités agricoles de la plateforme</p>
                </div>

                <div class="search">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Rechercher...">
                </div>

            </div>

            <!-- STATS -->

            <div class="stats">

                <div class="stat-card">
                    <h4>Produits publiés</h4>
                    <h2>245</h2>
                    <span>+12%</span>
                </div>

                <div class="stat-card">
                    <h4>Annonces actives</h4>
                    <h2>128</h2>
                    <span>+8%</span>
                </div>

                <div class="stat-card">
                    <h4>Commandes</h4>
                    <h2>86</h2>
                    <span>+15%</span>
                </div>

                <div class="stat-card">
                    <h4>Agriculteurs</h4>
                    <h2>58</h2>
                    <span>+5%</span>
                </div>

                <div class="stat-card">
                    <h4>Revenus</h4>
                    <h2>2,4M</h2>
                    <span>+18%</span>
                </div>

            </div>

            <!-- ANALYTICS -->

            <div class="analytics">

                <div class="chart-card">

                    <h2>Analyse des ventes</h2>

                    <div class="fake-chart">

                        <svg viewBox="0 0 600 300">
                            <polyline fill="none" stroke="#4CAF50" stroke-width="4" points="
                        20,250
                        80,180
                        140,190
                        200,120
                        260,150
                        320,90
                        380,130
                        440,80
                        500,100
                        580,60" />
                        </svg>

                    </div>

                </div>

            </div>

            <!-- TABLE -->

            <div class="table-card">

                <h2>Dernières annonces</h2>

                <table>

                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Quantité</th>
                            <th>Prix</th>
                            <th>Ville</th>
                            <th>Statut</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Maïs</td>
                            <td>100 Kg</td>
                            <td>50 000 FCFA</td>
                            <td>Cotonou</td>
                            <td class="status">Disponible</td>
                            <td><a href="#" class="edit">Modifier</a></td>
                        </tr>

                        <tr>
                            <td>Manioc</td>
                            <td>150 Kg</td>
                            <td>75 000 FCFA</td>
                            <td>Parakou</td>
                            <td class="status">Disponible</td>
                            <td><a href="#" class="edit">Modifier</a></td>
                        </tr>

                        <tr>
                            <td>Ananas</td>
                            <td>80 Kg</td>
                            <td>45 000 FCFA</td>
                            <td>Allada</td>
                            <td style="color:red;">Vendu</td>
                            <td><a href="#" class="edit">Modifier</a></td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </main>

    </div>

</body>

</html>