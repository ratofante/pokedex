<?php
/* Smarty version 3.1.39, created on 2021-11-19 17:09:57
  from 'C:\xampp\htdocs\pokedex\app\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6197cc550e5d38_06926877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd574e1f506ecd43cb02aabfef78a112f3909d0fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\app\\templates\\search.tpl',
      1 => 1637335647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6197cc550e5d38_06926877 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
	<div class="searchBar">
		<form class="searchBar__form" id="search_id_form" method="get">
			<div class="searchBar__form__container">
				<label for="id_search">Find a pokemon :</label>
				<div class="searchBar__form__container__row">
					<input title="Busca ingresando la Id" type="varchar" name="id" id="idSearch" min="1" max="151" aria-describedby="sugerencia_id" autofocus="on" required onkeyup="showHint(this.value)">
					<button class="searchBar__form__container__row__button" type="submit" form="search_id_form" name="submit" value="submit" onclick="getId()">
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
	<pre></pre>
</div><?php }
}
