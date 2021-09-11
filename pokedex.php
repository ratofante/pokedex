<?php
include("app/init.php");

$Smarty->assign('background', 'home_bg');
$Smarty->display('app/templates/header.tpl');
$Smarty->display('app/templates/menu.tpl');
$Smarty->display('app/templates/search.tpl');
$Smarty->display('app/templates/footer.tpl');