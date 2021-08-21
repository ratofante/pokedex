<?php
/* Smarty version 3.1.39, created on 2021-08-21 20:00:42
  from 'C:\xampp\htdocs\pokedex\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61213f4ac7da77_63066690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '971f2c39c19af93e6468b2a78255d94ca849dbc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\templates\\search.tpl',
      1 => 1629568813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61213f4ac7da77_63066690 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="carta">
	<form method="POST" action="index.php" id="search_form" class="div_interior align_center">
		<div class="form_section">
			<label for="id_pokemon">Id del Pokemon</label>
			<input type="number" name="id_pokemon" required aria-describedby="sugerencia_id" min="1" max="151">
			<input type="submit" name="submit" value="go!">
		</div>
		<div class="sugerencias" id="sugerencia_id">Busca por Id (1 al 151)</div>
	</form>
</div>
<?php }
}
