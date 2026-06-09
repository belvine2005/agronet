@extends('layouts.admin')
@section('title', 'Paramètres') 

@section('content')
 
 
 <div class="topbar">
                <div>
                    <h1>Paramètres</h1>
                    <p>Configuration du compte et de la plateforme</p>
                </div>
            </div>
            <div class="table-card">
                <h2>Paramètres du tableau de bord</h2>
                <p>Modifiez les paramètres globaux, la langue de l'interface et les préférences de notification.</p>
                <table>
                    <thead>
                        <tr>
                            <th>Paramètre</th>
                            <th>Valeur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mode</td>
                            <td>Administration</td>
                        </tr>
                        <tr>
                            <td>Langue</td>
                            <td>Français</td>
                        </tr>
                        <tr>
                            <td>Notifications</td>
                            <td>Activées</td>
                        </tr>
                    </tbody>
                </table>
            </div>



@endsection