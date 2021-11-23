<section>
	<div class="searchBar">
		<form class="searchBar__form" id="search_id_form">
			<div class="searchBar__form__container">
				<label for="id_search">Find a pokemon :</label>
				<div class="searchBar__form__container__row">
					<input title="Busca ingresando la Id" type="varchar" name="id" id="idSearch" min="1" max="151" aria-describedby="sugerencia_id" autofocus="on" required onkeyup="showHint(this.value)">
					<button class="searchBar__form__container__row__button" form="search_id_form" onclick="getId()">
						<img class="img_class" src="resources/img/miniball.png" alt="Search Icon">
					</button>
				</div>
				<div class="searchBar__form__container__sugerencias" id="sugerencia_id">Search a name or an id (1 - 151)</div>
			</div>
		</form>
		<div class="searchBar__hints" id="txtHint"></div>
	</div>
</section>

<!-- Template prueba PokeCard -->
<div id=response>
		<section class="pokecard">
			<div class="pokecard__mainCard">
				<h2 class="pokecard__mainCard__title">#76 Golem</h2>
				<div class="pokecard__mainCard__img">
					<img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/76.png" alt="pokeCard">
				</div>
			</div>
			<div class="pokecard__info">
				<h3 class="pokecard__info__title">Description:</h3>
				<p class="pokecard__info__text">Its boulder-like body is extremely hard. It can easily withstand dynamite blasts without damage.</p>
			</div>
		</section>

		<!-- pokeAnexo Información General -->
		<section class="pokeAnexo">
			<div class="pokeAnexo__card">
				<h2 class="pokeAnexo__card__title">General Info:</h2>
				<div class="pokeAnexo__card__slider">
					<div class="pokeAnexo__card__slider__slide">
						<h3 class="pokeAnexo__card__slider__slide__title">Habitat</h3>
						<p class="pokeAnexo__card__slider__slide__text">Mountain</p>
					</div>
				</div>
				<div class="pokeAnexo__card__slider">
					<div class="pokeAnexo__card__slider__slide">
						<h3 class="pokeAnexo__card__slider__slide__title">Shape</h3>
						<p class="pokeAnexo__card__slider__slide__text">Humanoid</p>
					</div>
				</div>
				<div class="pokeAnexo__card__slider">
					<div class="pokeAnexo__card__slider__slide">
						<h3 class="pokeAnexo__card__slider__slide__title">Type</h3>
						<p class="pokeAnexo__card__slider__slide__text">Rock - Ground</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Evolution Path -->
		<section class="evoPath">
			<div class="evoPath__card">
				<h2 class="evoPath__card__title">Evolution Path:</h2>
				<div class="evoPath__card__evolutions">
					<div class="evoPath__card__evolutions__evo">
						<h3 class="evoPath__card__evolutions__evo__name">#74 Geodude</h3>
						<div class="evoPath__card__evolutions__evo__img">
							<img class="evopath__img" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/74.png" alt="evolution">
						</div>
					</div>
					<div class="evoPath__card__evolutions__evo">
						<h3 class="evoPath__card__evolutions__evo__name">#75 Graveler</h3>
						<div class="evoPath__card__evolutions__evo__img">
							<img class="evopath__img" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/75.png" alt="evolution">
						</div>
					</div>
				</div>
				<div class="evoPath__card__bg">
					<img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/76.png" alt="Gollem">
				</div>
			</div>
		</section>

	</main>
	<!-- fin Main -->

	<!-- Move List -->
	<aside>
		<section class="moveList">
			<h3 class="moveList__title">List of moves:</h3>
			<div class="moveList__container">
				<p class='moveList__container__move'>mega-punch</p>
				<p class='moveList__container__move'>fire-punch</p>
				<p class='moveList__container__move'>thunder-punch</p>
				<p class='moveList__container__move'>mega-kick</p>
				<p class='moveList__container__move'>headbutt</p>
				<p class='moveList__container__move'>tackle</p>
				<p class='moveList__container__move'>body-slam</p>
				<p class='moveList__container__move'>take-down</p>
				<p class='moveList__container__move'>double-edge</p>
				<p class='moveList__container__move'>roar</p>
				<p class='moveList__container__move'>flamethrower</p>
				<p class='moveList__container__move'>hyper-beam</p>
				<p class='moveList__container__move'>submission</p>
				<p class='moveList__container__move'>counter</p>
				<p class='moveList__container__move'>seismic-toss</p>
				<p class='moveList__container__move'>strength</p>
				<p class='moveList__container__move'>rock-throw</p>
				<p class='moveList__container__move'>earthquake</p>
				<p class='moveList__container__move'>fissure</p>
				<p class='moveList__container__move'>dig</p>
				<p class='moveList__container__move'>toxic</p>
				<p class='moveList__container__move'>rage</p>
				<p class='moveList__container__move'>mimic</p>
				<p class='moveList__container__move'>double-team</p>
				<p class='moveList__container__move'>harden</p>
				<p class='moveList__container__move'>defense-curl</p>
				<p class='moveList__container__move'>bide</p>
				<p class='moveList__container__move'>metronome</p>
				<p class='moveList__container__move'>self-destruct</p>
				<p class='moveList__container__move'>fire-blast</p>
				<p class='moveList__container__move'>explosion</p>
				<p class='moveList__container__move'>rest</p>
				<p class='moveList__container__move'>rock-slide</p>
				<p class='moveList__container__move'>substitute</p>
				<p class='moveList__container__move'>snore</p>
				<p class='moveList__container__move'>curse</p>
				<p class='moveList__container__move'>protect</p>
				<p class='moveList__container__move'>mud-slap</p>
				<p class='moveList__container__move'>sandstorm</p>
				<p class='moveList__container__move'>endure</p>
				<p class='moveList__container__move'>rollout</p>
				<p class='moveList__container__move'>swagger</p>
				<p class='moveList__container__move'>fury-cutter</p>
				<p class='moveList__container__move'>attract</p>
				<p class='moveList__container__move'>sleep-talk</p>
				<p class='moveList__container__move'>return</p>
				<p class='moveList__container__move'>frustration</p>
				<p class='moveList__container__move'>magnitude</p>
				<p class='moveList__container__move'>dynamic-punch</p>
				<p class='moveList__container__move'>hidden-power</p>
				<p class='moveList__container__move'>sunny-day</p>
				<p class='moveList__container__move'>ancient-power</p>
				<p class='moveList__container__move'>rock-smash</p>
				<p class='moveList__container__move'>facade</p>
				<p class='moveList__container__move'>focus-punch</p>
				<p class='moveList__container__move'>nature-power</p>
				<p class='moveList__container__move'>superpower</p>
				<p class='moveList__container__move'>brick-break</p>
				<p class='moveList__container__move'>secret-power</p>
				<p class='moveList__container__move'>mud-sport</p>
				<p class='moveList__container__move'>rock-tomb</p>
				<p class='moveList__container__move'>iron-defense</p>
				<p class='moveList__container__move'>block</p>
				<p class='moveList__container__move'>rock-blast</p>
				<p class='moveList__container__move'>gyro-ball</p>
				<p class='moveList__container__move'>natural-gift</p>
				<p class='moveList__container__move'>fling</p>
				<p class='moveList__container__move'>sucker-punch</p>
				<p class='moveList__container__move'>rock-polish</p>
				<p class='moveList__container__move'>focus-blast</p>
				<p class='moveList__container__move'>earth-power</p>
				<p class='moveList__container__move'>giga-impact</p>
				<p class='moveList__container__move'>rock-climb</p>
				<p class='moveList__container__move'>iron-head</p>
				<p class='moveList__container__move'>stone-edge</p>
				<p class='moveList__container__move'>captivate</p>
				<p class='moveList__container__move'>stealth-rock</p>
				<p class='moveList__container__move'>smack-down</p>
				<p class='moveList__container__move'>heavy-slam</p>
				<p class='moveList__container__move'>round</p>
				<p class='moveList__container__move'>incinerate</p>
				<p class='moveList__container__move'>bulldoze</p>
				<p class='moveList__container__move'>steamroller</p>
				<p class='moveList__container__move'>confide</p>
				<p class='moveList__container__move'>power-up-punch</p>	
			</div>
		</section>
	</aside>
</div>


<!--div id="response">
	<pre></pre>
</div-->