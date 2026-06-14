<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

/**
 * @property-read string $firstName
 * @property-read string $roleLabel
 */
#[Fillable(['name', 'email', 'password', 'bio', 'phone', 'adress_indication'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>j
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    use SoftDeletes;

    public function reports(){
        return $this->morphMany(Report::class,'reportable');
        // un utilisateur peut faire l'objet de plusieurs de signalements
    }

    public function cart(){
        return $this->hasOne(Cart::class);
        // un utilisateur possède un unique panier
    }

    public function buyerCommands(){
        return $this->hasMany(Command::class, 'buyer_id');
        // un utilisateur à été commandé par plusieurs acheteurs
    }

    public function sellerCommands(){
        return $this->hasMany(Command::class, 'seller_id');
        // un utilisateur peut faire recours à plusieurs vendeurs
    }

    public function contacts(){
        return $this->hasMany(Contact::class);
        // un utilisateur entre en contact avec plusieurs vendeurs
    }

    public function commandCarts(){
        return $this->hasManyThrough(Command::class,Cart::class);
        // un utilisateur possède plusieurs commandes via un panier
    }

    // public function commandContacts(){
    //     return $this->hasManyThrough(Command::class,Contact::class);
    //     // un utilisateur possède plusieurs contacts via ses commandes
    // }

    public function ratings(){
        return $this->morphMany(Rating::class,'commentable');
        // un commentaire appartient à un utilisateur
    }


    public function getFirstNameAttribute(): string
    {
        return explode(' ', $this->name)[0];
    }

// fonction pour retourner le role d'un user selon la table qui le spécialise
    public function getRoleLabelAttribute(): string
    {
        if (DB::table('producers')->where('user_id', $this->id)->exists()) { //si l'id d'un user existe dans la table producteur alors:
            return 'Producteur';                                                //afficher producteur
        }
        if (DB::table('manufacturers')->where('user_id', $this->id)->exists()) { // idem pour fabricant
            return 'Fabricant';
        }
        return 'Acheteur';//au cas contraire retourne acheteur
    }
}


