<?php
/* Smarty version 3.1.39, created on 2021-11-25 18:36:07
  from 'C:\xampp\htdocs\pokedex\app\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619fc987572fa5_13568057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19e6380b75fa0974a70b4e972529d5bbdad609b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\app\\templates\\search.tpl',
      1 => 1637861764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619fc987572fa5_13568057 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
	<div class="searchBar">
		<form class="searchBar__form" id="search_id_form">
			<div class="searchBar__form__container">
				<label for="id_search">Find a pokemon :</label>
				<div class="searchBar__form__container__row">
					<input title="Busca ingresando la Id" type="varchar" name="id" id="idSearch" min="1" max="151" aria-describedby="sugerencia_id" autofocus="on" required onkeyup="showHint(this.value)">
					<button class="searchBar__form__container__row__button" form="search_id_form" onclick="getId()">
						<img class="img_class" src="resources/img/miniball.png" alt="Search Icon">
					</button>
				</div>
				<div class="searchBar__form__container__sugerencias" id="sugerencia_id">Search a name or an id (1 - 151)</div>
			</div>
		</form>
		<div class="searchBar__hints" id="txtHint"></div>
	</div>
</section>

<div id="response">

</div><?php }
}
