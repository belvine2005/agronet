<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed', // "confirmed" attend un champ password_confirmation identique
            'adress_indication' => 'required|string|max:255',
            'role' => 'required|in:producteur,fournisseur,acheteur',
            'bio' => 'nullable|string|max:500',
            'conditions' => 'accepted', // la case des conditions d'utilisation doit être cochée
        ];
    }
}
