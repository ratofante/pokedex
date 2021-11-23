<?php
/* Smarty version 3.1.39, created on 2021-11-23 17:56:35
  from 'C:\xampp\htdocs\pokedex\app\templates\pokecard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d1d43327c67_22934595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d4c1f1e3db00294d368cbf07d1d6e1c8c0d7d5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\app\\templates\\pokecard.tpl',
      1 => 1637686510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619d1d43327c67_22934595 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="carta div_interior">
	<div class="name_img_info">		
		<fieldset class="custom_fieldset">
			<legend class="legend_title"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</legend>
			<div class="row">
				<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt="pokemon_img" id="card_main_img">
				<p id="generalInfo" class="align_center"><?php echo $_smarty_tpl->tpl_vars['generalInfo']->value;?>
</p>
			</div>
		</fieldset>
	</div>
	<div id="shape_type_habitat">
		<fieldset class="custom_fieldset">
			<legend class="legend_title secondary">General Info</legend>
			<table class="align_center">		
				<tr>
					<td><label class="dos_puntos">Habitat:</label></td>
					<td><p class="info"><?php echo $_smarty_tpl->tpl_vars['habitat']->value;?>
</p></td>
				</tr>
				<tr>
					<td><label class="dos_puntos">Shape:</label></td>
					<td><p class="info"><?php echo $_smarty_tpl->tpl_vars['shape']->value;?>
</p></td>
				</tr>
				<tr>
					<td><label class="dos_puntos">Type:</label></td>
					<td><p class="info"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</p></td>
				</tr>
			</table>
		</fieldset>
	</div>
	<?php if ((isset($_smarty_tpl->tpl_vars['evo']->value))) {?>
	<div class="evo_div">
		<fieldset class="custom_fieldset">
		<legend class="legend_title terciary">Evo Path</legend>
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['evo']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
			<ul style="display:flex;flex-flow:row">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['evo_img']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
				<li class="">
					<img src="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" alt="poke_img" style="width:60px;height:60px">
				</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
	<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['evo_item']->value))) {?>
			<fieldset>
				<legend>Items</legend>
				<ol>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['evo_item']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ol>
			</fieldset>
		</fieldset>
	</div>
	<?php }?>
	<fieldset>
		<legend>Movimientos - string</legend>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['moves']->value, 'move');
$_smarty_tpl->tpl_vars['move']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['move']->value) {
$_smarty_tpl->tpl_vars['move']->do_else = false;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['move']->value;?>
</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</fieldset>
</div><?php }
}
