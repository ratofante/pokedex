<div class="carta">
	<form method="POST" action="index.php" id="search_form" class="div_interior align_center">
		<div class="form_section">
			<label for="id_pokemon">Id del Pokemon</label>
			<input type="number" name="id_pokemon" required aria-describedby="sugerencia_id" min="1" max="151">
			<input type="submit" name="submit" value="go!">
		</div>
		<div class="sugerencias" id="sugerencia_id">Busca por Id (1 al 151)</div>
	</form>
</div>
