<?php
/* Smarty version 3.1.39, created on 2021-11-25 17:59:10
  from 'C:\xampp\htdocs\pokedex\app\templates\pokecard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619fc0deaf8c86_14126971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d4c1f1e3db00294d368cbf07d1d6e1c8c0d7d5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\app\\templates\\pokecard.tpl',
      1 => 1637859513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619fc0deaf8c86_14126971 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Template prueba PokeCard -->
		<section class="pokecard">
			<div class="pokecard__mainCard">
				<h2 class="pokecard__mainCard__title">#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>
				<div class="pokecard__mainCard__img">
					<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
				</div>
			</div>
			<div class="pokecard__info">
				<h3 class="pokecard__info__title">Description:</h3>
				<p class="pokecard__info__text"><?php echo $_smarty_tpl->tpl_vars['generalInfo']->value;?>
</p>
			</div>
		</section>

		<!-- pokeAnexo Información General -->
		<section class="pokeAnexo">
			<div class="pokeAnexo__card">
				<h2 class="pokeAnexo__card__title">General Info:</h2>
				<div class="pokeAnexo__card__slider">
					<div class="pokeAnexo__card__slider__slide">
						<h3 class="pokeAnexo__card__slider__slide__title">Habitat</h3>
						<p class="pokeAnexo__card__slider__slide__text"><?php echo $_smarty_tpl->tpl_vars['habitat']->value;?>
</p>
					</div>
				</div>
				<div class="pokeAnexo__card__slider">
					<div class="pokeAnexo__card__slider__slide">
						<h3 class="pokeAnexo__card__slider__slide__title">Shape</h3>
						<p class="pokeAnexo__card__slider__slide__text"><?php echo $_smarty_tpl->tpl_vars['shape']->value;?>
</p>
					</div>
				</div>
				<div class="pokeAnexo__card__slider">
					<div class="pokeAnexo__card__slider__slide">
						<h3 class="pokeAnexo__card__slider__slide__title">Type</h3>
						<p class="pokeAnexo__card__slider__slide__text"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Evolution Path -->
		<?php if ((isset($_smarty_tpl->tpl_vars['evo']->value))) {?>
		<section class="evoPath">
			<div class="evoPath__card">
				<h2 class="evoPath__card__title">Evolution Path:</h2>
				<div class="evoPath__card__evolutions">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['evoArray']->value, 'evo');
$_smarty_tpl->tpl_vars['evo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['evo']->value) {
$_smarty_tpl->tpl_vars['evo']->do_else = false;
?>
					<div class="evoPath__card__evolutions__evo">
						<h3 class="evoPath__card__evolutions__evo__name">#<?php echo $_smarty_tpl->tpl_vars['evo']->value['id'];?>
 <?php echo $_smarty_tpl->tpl_vars['evo']->value['name'];?>
</h3>
						<div class="evoPath__card__evolutions__evo__img">
							<img class="evopath__img" src="<?php echo $_smarty_tpl->tpl_vars['evo']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['evo']->value['name'];?>
">
						</div>
					</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
				<div class="evoPath__card__bg">
					<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
				</div>
			</div>
			<?php if ((isset($_smarty_tpl->tpl_vars['evo_item']->value))) {?>
			<div class="evoPath_card">
				<h2 class="evoPath__card__title">Items:</h2>
				<ul class="evoPath__card__items">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['evo_item']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
					<li class="evoPath__card__items__item"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
			<?php }?>
		</section>
		<?php }?>

	<!-- Move List -->
	<section class="moveList">
		<div class="moveList__card">
			<h3 class="moveList__card__title">List of moves:</h3>
			<div class="moveList__card__container">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['moves']->value, 'move');
$_smarty_tpl->tpl_vars['move']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['move']->value) {
$_smarty_tpl->tpl_vars['move']->do_else = false;
?>
				<p class='moveList__card__container__move'><?php echo $_smarty_tpl->tpl_vars['move']->value;?>
</p>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
	</section><?php }
}
