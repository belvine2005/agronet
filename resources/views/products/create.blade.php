<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Créer un produit agricole / intrant</title>
		@vite(['resources/css/styles.css'])
	</head>
	<body>
		<main class="prod-section">
			<section class="prod-container">
				<header class="prod-header">
					<h1>Créer un produit agricole ou un intrant</h1>
					<p>Remplissez ce formulaire pour créer votre produit que ce soit un produit agricole ou un intrant. Les champs marqués d'une * sont obligatoires.</p>
				</header>

				<form class="prod-form" action="/create-products" method="post" enctype="multipart/form-data">
					@csrf
					@method('POST')
					<div class="prod-form-row">
						<div class="prod-form-group">
							<label for="nom">Nom du produit *</label>
							<input class="prod-input" id="nom" name="name" value="{{ old('name') }}" type="text" placeholder="Ex : Engrais organique XYZ" required />
						</div>

						<div class="prod-form-group">
							<label for="type">Type de produit / intrant *</label>
							<select class="prod-select" id="type" name="type" required>
								<option>-- Choisir un type --</option>
								<option value="Semence">Semence</option>
								<option value="Engrais">Engrais</option>
								<option value="Produit agricole">Produit agricole</option>
								<option value="Autre">Autre</option>
							</select>
						</div>
					</div>

					<div class="prod-form-row">
						<div class="prod-form-group">
							<label for="quantite">Quantité disponible (unités) *</label>
							<input class="prod-input" id="quantite" name="available_quantity" value="{{ old('available_quantity') }}" type="number" min="0" step="10" value="0" required />
						</div>

						{{-- <div class="prod-form-group">
							<label for="prix">Prix unitaire (FCFA)</label>
							<input class="prod-input" id="prix" name="price" value="{{ old('price') }}" type="number" min="0" step="0.01" placeholder="Ex : 2500" />
						</div> --}}
					</div>

					<div class="prod-form-group">
						<label for="description">Description</label>
						<textarea class="prod-textarea" id="description" name="description" value="{{ old('description') }}" placeholder="Donnez des détails sur l'état, l'emballage, l'utilisation..." rows="5"></textarea>
					</div>

					<div class="prod-form-row">
						<div class="prod-form-group">
							<label for="image">Image du produit</label>
							<input class="prod-input" id="image" name="image" value="{{ old('image') }}" type="file" accept="image/*" />
						</div>

						<div class="prod-form-group">
							<label for="unite">Unité de vente</label>
							<input class="prod-input" id="unite" name="selling_unit" value="{{ old('selling_unit') }}" type="text" placeholder="Ex : kg, sac, litre, unité" />
						</div>
					</div>

					<div class="prod-form-group prod-note">
						<label for="status">Statut</label>
						<input class="prod-input" id="status" name="status" value="{{ old('status') }}" type="text" placeholder="disponible ou non disponible" />
					</div>
					 <div class="form-row form-buttons">
          <button type="submit" class="btn-inscription">Ajouter au catalogue</button>
          <button type="reset" class="btn-inscription btn-annuler">Annuler</button>
        </div>

					
				</form>
			</section>
		</main>
	</body>
</html>

