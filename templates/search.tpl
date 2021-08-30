<div class="search_bar">
	<form action="controladores/searchId.controller.php" method="POST">
		<label for="id_search">Search by Id:</label>
		<input title="Busca ingresando la Id" type="number" name="id" id="id_search" placeholder="prueba con un n° entre 1 y 150" min="1" max="151" aria-describedby="sugerencia_id" required>
		<button type="submit"><img src="" alt="search_icon"></button>
		<div class="sugerencias" id="sugerencia_id">Busca por Id (1 al 151)</div>
	</form>
</div>
