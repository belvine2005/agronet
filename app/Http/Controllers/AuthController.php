<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Manufacturer;
use App\Models\Producer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    // 

    public function login()
    {
        
        return to_route('auth.login');
    }

    public function role(){

    }

    public function logout(Request $request)
    {
        Auth::logout();                         // déconnexion de l'utilisateur
        $request->session()->invalidate();      // suppression de la session active
        $request->session()->regenerateToken(); // création d'un nouveau token CSRF qui protège de certaines attaques web
        return to_route('auth.login');          // redirection vers le Login Form

    }
    



    public function register()
    {
        return view('auth.register');
    }

    public function doRegister(RegisterRequest $request)
    {
        $data = $request->validated(); // récupération des données après validation dans RegisterRequest.php

        $user = User::create([
            'name' => $data['prenom'] . ' ' . $data['nom'],
            'email' => $data['email'],
            'password' => $data['password'], // hashé automatiquement par le cast 'password' => 'hashed' du modèle User
            'phone' => $data['phone'],
            'bio' => $data['bio'] ?? null,
            'adress_indication' => $data['adress_indication'],
        ]);

        // selon le profil choisi, on relie le compte à la table producers ou manufacturers
        if ($data['role'] === 'producteur') {
            Producer::forceCreate(['user_id' => $user->id]);
        } elseif ($data['role'] === 'fournisseur') {
            Manufacturer::forceCreate(['user_id' => $user->id]);
        }

        return to_route('auth.login')->with('success', 'Votre compte a été créé. Connectez-vous pour accéder à l\'application.');
    }


    public function doLogin(LoginRequest $request)
    {

        $credentials = $request->validated(); // réupération des données après validation dans LoginRequest.php

        // dd(Auth::attempt($credentials));
        // dd($credentials);

        /** === NOTION DE SESSION **/   // une session est un mécanisme qui permet :
                                        // - d'identifier un utilisateur 
                                        // - conserver ses données entre plusieurs requests

            //la classe Auth permet d'authentifier un user
        if (Auth::attempt($credentials)){       // Laravel crée une session ( avec un id relié aux credentials qui sont sauvegardés sur le serveur)
            $request->session()->regenerate(); // Laravel renomme l'id de la session après la connexion (termes de sécurité)
            return redirect()->intended(route('products.index')); // si la session est valide, on à l'application
        }

        return to_route('auth.login')->withErrors([ // si la session est fausse(credentials incoorectes), on est redirigé vers le login
            'email' => 'Identifiants incorrectes' //on affiche un message d'erreur
        ])->onlyInput('email'); // l'adresse email est renseigné automatiquement après erreur


    }
}
