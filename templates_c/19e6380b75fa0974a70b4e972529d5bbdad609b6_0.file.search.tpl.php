<?php
/* Smarty version 3.1.39, created on 2021-11-15 18:31:31
  from 'C:\xampp\htdocs\pokedex\app\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61929973b092c7_85821844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19e6380b75fa0974a70b4e972529d5bbdad609b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\app\\templates\\search.tpl',
      1 => 1636997480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61929973b092c7_85821844 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="search_bar">
	<form id="search_id_form" class="align_justify_center" action="" method="POST">
		<div class="align_justify_center">
			<label for="id_search">Search by Id:</label>
			<input title="Busca ingresando la Id" type="varchar" name="id" id="id_search" min="1" max="151" aria-describedby="sugerencia_id" autofocus="on" required onkeyup="showHint(this.value)">
			<button type="submit" form="search_id_form" name="submit" value="submit">
				<img class="img_class" src="resources/img/miniball.png" alt="Search Icon">
			</button>
		</div>
		<div class="sugerencias" id="sugerencia_id">Busca por Id (1 al 151)</div>
	</form>
	<div id="txtHint"></div>
</section>
<?php }
}
