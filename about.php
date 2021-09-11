<?php
include("app/init.php");

$Smarty->assign('background', 'night_bg');
$Smarty->display('app/templates/header.tpl');
$Smarty->display('app/templates/menu.tpl');

$Smarty->display('app/templates/footer.tpl');