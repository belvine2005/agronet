@extends('layouts.admin')

@section('title', 'Profils')
@section('body-class', 'profile-page')

@section('content')

     <div class="topbar">
                <div>
                    <h1>Mon profil</h1>
                    <p>Informations personnelles et paramètres du compte</p>
                </div>
            </div>

            <div class="profile-container">

                <div class="banner"></div>

            <div class="profile-header">

                <div class="avatar" id="avatar">
                    MD
                </div>

                <button class="edit-btn" id="openModal">
                    <i class="fa-regular fa-pen-to-square"></i>
                    Modifier le profil
                </button>

            </div>

            <div class="profile-info">

                <h1 id="nom">Martial Dansou</h1>

                <p class="localisation">
                    BJ | Porto-Novo, Bénin
                </p>

                <div class="details-line">
                    <span>Âge : <span id="age">26</span></span>

                    <span>|</span>

                    <span>
                        Genre :
                        <span id="genre">Masculin</span>
                    </span>

                    <span>|</span>

                    <span>
                        Statut :
                        <span class="badge">Actif</span>
                    </span>
                </div>

            </div>

            <div class="grid-info">

                <div class="item">
                    <i class="fa-solid fa-user-shield"></i>

                    <div>
                        <span>Rôle</span>
                        <strong id="role">Administrateur</strong>
                    </div>
                </div>

                <div class="item">
                    <i class="fa-regular fa-envelope"></i>

                    <div>
                        <span>Email</span>
                        <strong id="email">
                            martial.dansou@email.com
                        </strong>
                    </div>
                </div>

                <div class="item">
                    <i class="fa-solid fa-phone"></i>

                    <div>
                        <span>Contact</span>
                        <strong id="contact">
                            (+229) 97 00 00 00
                        </strong>
                    </div>
                </div>

                <div class="item">
                    <i class="fa-solid fa-location-dot"></i>

                    <div>
                        <span>Région</span>
                        <strong id="region">Ouémé</strong>
                    </div>
                </div>

                <div class="item">
                    <i class="fa-regular fa-calendar"></i>

                    <div>
                        <span>Date de naissance</span>
                        <strong id="dateNaissance">
                            1998-09-04
                        </strong>
                    </div>
                </div>

                <div class="item">
                    <i class="fa-solid fa-building"></i>

                    <div>
                        <span>Adresse</span>
                        <strong id="adresse">
                            Porto-Novo, Bénin
                        </strong>
                    </div>
                </div>

            </div>

        </div>

        </main>

        <!-- MODAL -->

        <div class="modal" id="modal">

            <div class="modal-content">

                <h2>Modifier le profil</h2>

                <form id="profileForm">

                    <input type="text" id="inputNom" placeholder="Nom complet">

                    <input type="date" id="inputDate">

                    <select id="inputGenre">
                        <option>Masculin</option>
                        <option>Féminin</option>
                    </select>

                    <input type="text" id="inputRole" placeholder="Rôle">

                    <input type="email" id="inputEmail" placeholder="Email">

                    <input type="text" id="inputContact" placeholder="Contact">

                    <select id="inputRegion">

                        <option>Alibori</option>
                        <option>Atacora</option>
                        <option>Atlantique</option>
                        <option>Borgou</option>
                        <option>Collines</option>
                        <option>Couffo</option>
                        <option>Donga</option>
                        <option>Littoral</option>
                        <option>Mono</option>
                        <option>Ouémé</option>
                        <option>Plateau</option>
                        <option>Zou</option>

                    </select>

                    <input type="text" id="inputAdresse" placeholder="Adresse">

                    <div class="actions">

                        <button type="button" id="closeModal">
                            Annuler
                        </button>

                        <button type="submit">
                            Enregistrer
                        </button>

                    </div>

                </form>

            </div>

        </div>

@endsection