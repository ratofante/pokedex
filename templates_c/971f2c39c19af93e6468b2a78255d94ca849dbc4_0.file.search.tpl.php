<?php
/* Smarty version 3.1.39, created on 2021-08-31 19:28:48
  from 'C:\xampp\htdocs\pokedex\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612e66d08345c2_61793882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '971f2c39c19af93e6468b2a78255d94ca849dbc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\templates\\search.tpl',
      1 => 1630430926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612e66d08345c2_61793882 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="search_bar">
	<form id="search_id_form" class="align_justify_center" action="controladores/searchId.controller.php" method="POST">
		<div>
			<label for="id_search">Search by Id:</label>
			<input title="Busca ingresando la Id" type="number" name="id" id="id_search" min="1" max="151" aria-describedby="sugerencia_id" required>
			<button type="submit"><img class="img_class" src="img/search_icon.png" alt="search_icon"></button>
		</div>
		<div class="sugerencias" id="sugerencia_id">Busca por Id (1 al 151)</div>
	</form>
</div>
<?php }
}
