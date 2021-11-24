<!-- Template prueba PokeCard -->
		<section class="pokecard">
			<div class="pokecard__mainCard">
				<h2 class="pokecard__mainCard__title">#{$id} {$name}</h2>
				<div class="pokecard__mainCard__img">
					<img src="{$img}" alt="{$name}">
				</div>
			</div>
			<div class="pokecard__info">
				<h3 class="pokecard__info__title">Description:</h3>
				<p class="pokecard__info__text">{$generalInfo}</p>
			</div>
		</section>

		<!-- pokeAnexo Información General -->
		<section class="pokeAnexo">
			<div class="pokeAnexo__card">
				<h2 class="pokeAnexo__card__title">General Info:</h2>
				<div class="pokeAnexo__card__slider">
					<div class="pokeAnexo__card__slider__slide">
						<h3 class="pokeAnexo__card__slider__slide__title">Habitat</h3>
						<p class="pokeAnexo__card__slider__slide__text">{$habitat}</p>
					</div>
				</div>
				<div class="pokeAnexo__card__slider">
					<div class="pokeAnexo__card__slider__slide">
						<h3 class="pokeAnexo__card__slider__slide__title">Shape</h3>
						<p class="pokeAnexo__card__slider__slide__text">{$shape}</p>
					</div>
				</div>
				<div class="pokeAnexo__card__slider">
					<div class="pokeAnexo__card__slider__slide">
						<h3 class="pokeAnexo__card__slider__slide__title">Type</h3>
						<p class="pokeAnexo__card__slider__slide__text">{$type}</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Evolution Path -->
		{if isset($evo)}
		<section class="evoPath">
			<div class="evoPath__card">
				<h2 class="evoPath__card__title">Evolution Path:</h2>
				<div class="evoPath__card__evolutions">
				{foreach $evoArray as $evo}
					<div class="evoPath__card__evolutions__evo">
						<h3 class="evoPath__card__evolutions__evo__name">#{$evo.id} {$evo.name}</h3>
						<div class="evoPath__card__evolutions__evo__img">
							<img class="evopath__img" src="{$evo.img}" alt="{$evo.name}">
						</div>
					</div>
					{/foreach}
				</div>
				<div class="evoPath__card__bg">
					<img src="{$img}" alt="{$name}">
				</div>
			</div>
			{if isset($evo_item)}
			<div class="evoPath_card">
				<h2 class="evoPath__card__title">Items:</h2>
				<ul class="evoPath__card__items">
					{foreach $evo_item as $value}
					<li class="evoPath__card__items__item">{$value}</li>
					{/foreach}
				</ul>
			</div>
			{/if}
		</section>
		{/if}

	<!-- Move List -->
	<section class="moveList">
		<div class="moveList__card">
			<h3 class="moveList__card__title">List of moves:</h3>
			<div class="moveList__card__container">
				{foreach $moves as $move}
				<p class='moveList__card__container__move'>{$move}</p>
				{/foreach}
			</div>
		</div>
	</section>