@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')


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

           

            

        

@endsection