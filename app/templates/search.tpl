<div class="search_bar">
	<form id="search_id_form" class="align_justify_center" action="" method="POST">
		<div>
			<label for="id_search">Search by Id:</label>
			<input title="Busca ingresando la Id" type="number" name="id" id="id_search" min="1" max="151" aria-describedby="sugerencia_id" required>
			<button type="submit" form="search_id_form" name="submit" value="submit">
				<img class="img_class" src="resources/img/search_icon.png" alt="search_icon">
			</button>
		</div>
		<div class="sugerencias" id="sugerencia_id">Busca por Id (1 al 151)</div>
	</form>
</div>