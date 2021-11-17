<?php
/* Smarty version 3.1.39, created on 2021-11-17 14:32:30
  from 'C:\xampp\htdocs\pokedex\app\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6195046e0f44c1_95584663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19e6380b75fa0974a70b4e972529d5bbdad609b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\app\\templates\\search.tpl',
      1 => 1637086970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6195046e0f44c1_95584663 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
	<div class="searchBar">
		<form class="searchBar__form" id="search_id_form" action="" method="POST">
			<div class="searchBar__form__container">
				<label for="id_search">Find a pokemon :</label>
				<div class="searchBar__form__container__row">
					<input title="Busca ingresando la Id" type="varchar" name="id" id="id_search" min="1" max="151" aria-describedby="sugerencia_id" autofocus="on" required onkeyup="showHint(this.value)">
					<button class="searchBar__form__container__row__button"type="submit" form="search_id_form" name="submit" value="submit">
						<img class="img_class" src="resources/img/miniball.png" alt="Search Icon">
					</button>
				</div>
				<div class="searchBar__form__container__sugerencias" id="sugerencia_id">Search a name or an id (1 - 151)</div>
			</div>
		</form>
		<div class="searchBar__hints" id="txtHint"></div>
	</div>
</section>
<?php }
}
