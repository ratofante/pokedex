<?php
/* Smarty version 3.1.39, created on 2021-09-10 01:47:18
  from 'C:\xampp\htdocs\pokedex\app\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613a9d06620667_24117009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '037b3c7e41cb83a15e84c1078769e4197028c0a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\app\\templates\\menu.tpl',
      1 => 1631231235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613a9d06620667_24117009 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div id="menu_container">
		<div id="menu_button">
			<button>
				<img id="menu_img" src="resources/img/menu_icon.png" alt="menu_icon">
			</button>
		</div>
	</div>
	<nav id="menu_nav">
		<a href="index.html">
			<img src="resources/img/minilogo1.png" alt="Icon">
			<h3>Home</h3>
		</a>
		<a href="views/pokedex.html">
			<img src="resources/img/minilogo2.png" alt="Icon">
			<h3>Pokedex</h3>
		</a>
		<a href="views/quiz.html">
			<img src="resources/img/minilogo3.png" alt="Icon">
			<h3>Quiz</h3>
		</a>
		<a href="views/about.html">
			<img src="resources/img/minilogo4.png" alt="Icon">
			<h3>About</h3>
		</a>
		<a href="views/contact.html">
			<img src="resources/img/minilogo5.png" alt="Icon">
			<h3>Contact</h3>
		</a>	
	</nav>
	<?php echo '<script'; ?>
 type="text/javascript" src="app/js/template_functions.js"><?php echo '</script'; ?>
>
	<?php }
}
