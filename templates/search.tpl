<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mini Pokedex</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/allStyle.css">
</head>
<body>
<div class="carta" id="pokemon_search">
	<form method="POST" action="index.php" class="div_interior align_center">
		<div class="form_section">
			<label for="id_pokemon">Id del Pokemon</label>
			<input type="number" name="id_pokemon" required aria-describedby="sugerencia_id" min="1" max="151">
			<input type="submit" name="submit" value="go!">
		</div>
		<div class="sugerencias" id="sugerencia_id">Busca por Id (1 al 151)</div>
	</form>
</div>
</body>
</html>