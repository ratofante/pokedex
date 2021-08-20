<div class="carta div_interior">
	<div class="name_img_info">		
		<fieldset>
			<legend id="card_name">{$name}</legend>
			<div class="row">
				<img src="{$img}" alt="pokemon_img" id="card_main_img">
				<p id="generalInfo">{$generalInfo}</p>
			</div>
		</fieldset>
	</div>
	<div class="shape_type_habitat">
		<div class="row">
			<label>Shape:</label>
			<p>{$shape}</p>
		</div>
		<div class="row">
			<label>Type:</label>
			<p>{$type}</p>
		</div>
		<div class="row">
			<label>Habitat:</label>
			<p>{$habitat}</p>
		</div>	
	</div>
	<div class="evo_div">
		{if isset($evo)}
		<ul>
			{foreach $evo as $value}
			<li>{$value}</li>
			{/foreach}
		</ul>
		<ul style="display:flex;flex-flow:row">
			{foreach $evo_img as $value}
			<li style="list-style-type: none;">
				<img src="{$value}" alt="poke_img" style="width:60px;height:60px">
			</li>
			{/foreach}
		</ul>
		{/if}
		{if isset($evo_item)}
		<fieldset>
			<legend>Items</legend>
			<ol>
				{foreach $evo_item as $value}
				<li>{$value}</li>
				{/foreach}
			</ol>
		</fieldset>
	</div>
		{/if}
		<fieldset>
			<legend>Movimientos - string</legend>
			{$moves_string}
		</fieldset>
</div>