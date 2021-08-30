<?php
/* Smarty version 3.1.39, created on 2021-08-30 18:10:34
  from 'C:\xampp\htdocs\pokedex\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612d02faa30600_10786529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '971f2c39c19af93e6468b2a78255d94ca849dbc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\templates\\search.tpl',
      1 => 1630339520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612d02faa30600_10786529 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="search_bar">
	<form action="controladores/searchId.controller.php" method="POST">
		<label for="id_search">Search by Id:</label>
		<input title="Busca ingresando la Id" type="number" name="id" id="id_search" placeholder="prueba con un n° entre 1 y 150" min="1" max="151" aria-describedby="sugerencia_id" required>
		<button type="submit"><img src="" alt="search_icon"></button>
		<div class="sugerencias" id="sugerencia_id">Busca por Id (1 al 151)</div>
	</form>
</div>
<?php }
}
