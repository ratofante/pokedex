<section>
	<div class="searchBar">
		<form class="searchBar__form" id="search_id_form" action="" method="POST">
			<div class="searchBar__form__container">
				<label for="id_search">Find a pokemon :</label>
				<div class="searchBar__form__container__row">
					<input title="Busca ingresando la Id" type="varchar" name="id" id="id_search" min="1" max="151" aria-describedby="sugerencia_id" autofocus="on" required onkeyup="showHint(this.value)">
					<button class="searchBar__form__container__row__button"type="submit" form="search_id_form" name="submit" value="submit">
						<img class="img_class" src="resources/img/miniball.png" alt="Search Icon">
					</button>
				</div>
				<div class="searchBar__form__container__sugerencias" id="sugerencia_id">Search a name or an id (1 - 151)</div>
			</div>
		</form>
		<div class="searchBar__hints" id="txtHint"></div>
	</div>
</section>
