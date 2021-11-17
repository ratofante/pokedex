<?php
/* Smarty version 3.1.39, created on 2021-11-17 18:02:11
  from 'C:\xampp\htdocs\pokedex\app\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61953593c10211_70047213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '550b2907b570fa1d44b9e72f657c3583726544ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pokedex\\app\\templates\\footer.tpl',
      1 => 1637168523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61953593c10211_70047213 (Smarty_Internal_Template $_smarty_tpl) {
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
>
    (function($){
        function processForm( e ){
            $.ajax({
                url: 'users.php',
                dataType: 'text',
                type: 'post',
                contentType: 'application/x-www-form-urlencoded',
                data: $(this).serialize(),
                success: function( data, textStatus, jQxhr ){
                    $('#response pre').html( data );
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });

            e.preventDefault();
        }

        $('#search_id_form').submit( processForm );
    })(jQuery);
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
