<?php
/* Smarty version 3.1.39, created on 2021-08-20 20:26:19
  from 'C:\xampp\htdocs\pokedex\templates\pokecard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611ff3cb0c32a9_42188220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa6411f2590fcef9c940a5eb73cf993979ea67f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\templates\\pokecard.tpl',
      1 => 1629483945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611ff3cb0c32a9_42188220 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="carta div_interior">
	<div class="name_img_info">		
		<fieldset>
			<legend id="card_name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</legend>
			<div class="row">
				<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt="pokemon_img" id="card_main_img">
				<p id="generalInfo"><?php echo $_smarty_tpl->tpl_vars['generalInfo']->value;?>
</p>
			</div>
		</fieldset>
	</div>
	<div class="shape_type_habitat">
		<div class="row">
			<label>Shape:</label>
			<p><?php echo $_smarty_tpl->tpl_vars['shape']->value;?>
</p>
		</div>
		<div class="row">
			<label>Type:</label>
			<p><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</p>
		</div>
		<div class="row">
			<label>Habitat:</label>
			<p><?php echo $_smarty_tpl->tpl_vars['habitat']->value;?>
</p>
		</div>	
	</div>
	<div class="evo_div">
		<?php if ((isset($_smarty_tpl->tpl_vars['evo']->value))) {?>
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
			<li style="list-style-type: none;">
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
	</div>
		<?php }?>
		<fieldset>
			<legend>Movimientos - string</legend>
			<?php echo $_smarty_tpl->tpl_vars['moves_string']->value;?>

		</fieldset>
</div><?php }
}
