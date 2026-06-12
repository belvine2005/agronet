<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AgroNet – Inscription</title>
  @vite(['resources/css/styles.css', 'resources/js/app.js'])
</head>

<body>
  <section class="inscription-section">
    <div class="inscription-container">
      <div class="inscription-header">
        <h2>Créer un compte</h2>
        <p>Rejoignez AgroNet et accédez à toutes nos fonctionnalités</p>
      </div>

      <form class="inscription-form" id="inscriptionForm" method="POST" action="{{ route('auth.doRegister') }}">
        @csrf

        <div class="form-row">
          <div class="form-group">
            <label for="prenom">Prénoms</label>
            <input type="text" id="prenom" name="prenom" required placeholder="Vos prénoms" value="{{ old('prenom') }}">
            @error('prenom')
              <span class="error-message">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" required placeholder="Votre nom" value="{{ old('nom') }}">
            @error('nom')
              <span class="error-message">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required placeholder="votre.email@exemple.com" value="{{ old('email') }}">
            @error('email')
              <span class="error-message">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="phone">Téléphone</label>
            <input type="tel" id="phone" name="phone" required placeholder="+229 XX XX XX XX XX" value="{{ old('phone') }}">
            @error('phone')
              <span class="error-message">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required placeholder="Minimum 8 caractères">
            @error('password')
              <span class="error-message">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="password_confirmation">Confirmer le mot de passe</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirmez votre mot de passe">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="adress_indication">Adresse</label>
            <input type="text" id="adress_indication" name="adress_indication" required placeholder="Votre adresse complète" value="{{ old('adress_indication') }}">
            @error('adress_indication')
              <span class="error-message">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="role">Vous êtes un :</label>
            <select id="role" name="role" required>
              <option value="" disabled {{ old('role') ? '' : 'selected' }}>Choisissez votre profil...</option>
              <option value="producteur" {{ old('role') === 'producteur' ? 'selected' : '' }}>Producteur</option>
              <option value="fournisseur" {{ old('role') === 'fournisseur' ? 'selected' : '' }}>Fournisseur</option>
              <option value="acheteur" {{ old('role') === 'acheteur' ? 'selected' : '' }}>Acheteur</option>
            </select>
            @error('role')
              <span class="error-message">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="bio">Biographie</label>
            <textarea id="bio" name="bio" rows="5" placeholder="Parlez-nous de vous, de votre activité agricole...">{{ old('bio') }}</textarea>
            @error('bio')
              <span class="error-message">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="form-group checkbox">
          <input type="checkbox" id="conditions" name="conditions" required>
          <label for="conditions">J'accepte les conditions d'utilisation et la politique de confidentialité</label>
          @error('conditions')
            <span class="error-message">{{ $message }}</span>
          @enderror
        </div>

        <button type="submit" class="btn-inscription">Créer mon compte</button>
        <p class="login-link">Vous avez déjà un compte? <a href="{{ route('auth.login') }}">Connectez-vous</a></p>
      </form>
    </div>
  </section>

</body>
</html>
