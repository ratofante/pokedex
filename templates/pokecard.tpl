<div class="carta div_interior">
	<div class="name_img_info">		
		<fieldset class="custom_fieldset">
			<legend class="legend_title">{$name}</legend>
			<div class="row">
				<img src="{$img}" alt="pokemon_img" id="card_main_img">
				<p id="generalInfo" class="align_center">{$generalInfo}</p>
			</div>
		</fieldset>
	</div>
	<div id="shape_type_habitat">
		<fieldset class="custom_fieldset">
			<legend class="legend_title secondary">General Info</legend>
			<table class="align_center">		
				<tr>
					<td><label class="dos_puntos">Habitat:</label></td>
					<td><p class="info">{$habitat}</p></td>
				</tr>
				<tr>
					<td><label class="dos_puntos">Shape:</label></td>
					<td><p class="info">{$shape}</p></td>
				</tr>
				<tr>
					<td><label class="dos_puntos">Type:</label></td>
					<td><p class="info">{$type}</p></td>
				</tr>
			</table>
		</fieldset>
	</div>
	{if isset($evo)}
	<div class="evo_div">
		<fieldset class="custom_fieldset">
		<legend class="legend_title terciary">Evo Path</legend>
			<ul>
				{foreach $evo as $value}
				<li>{$value}</li>
				{/foreach}
			</ul>
			<ul style="display:flex;flex-flow:row">
				{foreach $evo_img as $value}
				<li class="">
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
		</fieldset>
	</div>
	{/if}
	<fieldset>
		<legend>Movimientos - string</legend>
			{$moves_string}
	</fieldset>
</div>