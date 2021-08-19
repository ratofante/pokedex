<?php
/* Smarty version 3.1.39, created on 2021-08-19 19:27:52
  from 'C:\xampp\htdocs\pokedex\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611e94989195b5_14409156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '409faa4d8a3827b7e9fdfce664575911ad4a1a7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\templates\\index.tpl',
      1 => 1629393237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611e94989195b5_14409156 (Smarty_Internal_Template $_smarty_tpl) {
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
" alt="pokemon_img">

<h2><?php echo $_smarty_tpl->tpl_vars['shape']->value;?>
</h2>
<h2><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</h2>
<h2><?php echo $_smarty_tpl->tpl_vars['habitat']->value;?>
</h2>
<pre><?php echo $_smarty_tpl->tpl_vars['generalInfo']->value;?>
</pre>

</body>
</html><?php }
}
