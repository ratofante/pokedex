<?php
/* Smarty version 3.1.39, created on 2021-08-20 01:16:29
  from 'C:\xampp\htdocs\pokedex\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611ee64d0bfb10_02073162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '409faa4d8a3827b7e9fdfce664575911ad4a1a7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\templates\\index.tpl',
      1 => 1629414941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611ee64d0bfb10_02073162 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt="pokemon_img" style="width:150px;height:150px">

<h2><?php echo $_smarty_tpl->tpl_vars['shape']->value;?>
</h2>
<h2><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</h2>
<h2><?php echo $_smarty_tpl->tpl_vars['habitat']->value;?>
</h2>
<pre><?php echo $_smarty_tpl->tpl_vars['generalInfo']->value;?>
</pre>
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
<?php }?>
<fieldset>
	<legend>Movimientos - string</legend>
	<?php echo $_smarty_tpl->tpl_vars['moves_string']->value;?>

</fieldset>
<fieldset>
	<legend>Movimientos - array</legend>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['moves_array']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
<p><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</p>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</fieldset>

</body>
</html><?php }
}
