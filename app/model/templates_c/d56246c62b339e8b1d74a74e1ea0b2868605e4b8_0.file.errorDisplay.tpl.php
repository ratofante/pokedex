<?php
/* Smarty version 3.1.39, created on 2021-11-25 18:54:40
  from 'C:\xampp\htdocs\pokedex\app\templates\errorDisplay.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619fcde067cb78_41407085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd56246c62b339e8b1d74a74e1ea0b2868605e4b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\app\\templates\\errorDisplay.tpl',
      1 => 1637862808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619fcde067cb78_41407085 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
<section class="errorSection">
    <p class="errorSection__errorMsg"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
</section>
<?php }
}
}
