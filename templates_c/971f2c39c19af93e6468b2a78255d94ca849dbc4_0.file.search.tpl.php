<?php
/* Smarty version 3.1.39, created on 2021-08-20 20:01:01
  from 'C:\xampp\htdocs\pokedex\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611feddd023882_96376961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '971f2c39c19af93e6468b2a78255d94ca849dbc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\templates\\search.tpl',
      1 => 1629482446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611feddd023882_96376961 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
</html><?php }
}
