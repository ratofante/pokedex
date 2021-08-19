<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1>{$name}</h1>
<img src="{$img}" alt="pokemon_img" style="width:150px;height:150px">

<h2>{$shape}</h2>
<h2>{$type}</h2>
<h2>{$habitat}</h2>
<pre>{$generalInfo}</pre>
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
{if isset($evo_item)}
<fieldset>
	<legend>Items</legend>
	<ol>
		{foreach $evo_item as $value}
		<li>{$value}</li>
		{/foreach}
	</ol>
</fieldset>
{/if}
<fieldset>
	<legend>Movimientos - string</legend>
	{$moves_string}
</fieldset>
</body>
</html>