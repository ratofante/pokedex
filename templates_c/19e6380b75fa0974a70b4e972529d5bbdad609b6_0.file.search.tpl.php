<?php
/* Smarty version 3.1.39, created on 2021-09-02 00:08:01
  from 'C:\xampp\htdocs\pokedex\app\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612ff9c115b798_94602333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19e6380b75fa0974a70b4e972529d5bbdad609b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\app\\templates\\search.tpl',
      1 => 1630533986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612ff9c115b798_94602333 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="search_bar">
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
<?php }
}
