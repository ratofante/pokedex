<?php
/* Smarty version 3.1.39, created on 2021-11-19 17:49:57
  from 'C:\xampp\htdocs\pokedex\app\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6197d5b510fd66_28247670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6472115d5ed7610f595ae175b899d89156b39b09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\app\\templates\\footer.tpl',
      1 => 1637340124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6197d5b510fd66_28247670 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer>
</footer>

</div>
<!--cierre Wrapper-->
<?php echo '<script'; ?>
 src="app/js/hinter.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="app/js/ajaxPokedex.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
function getId() {
	const input = document.querySelector('input').value;
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) 
		{
			document.getElementById("response").innerHTML=this.responseText;
		}
	}
	xmlhttp.open("GET","app/model/m_pokedex.php?id="+input,true);
	xmlhttp.send();
}
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
