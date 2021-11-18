<?php
include("app/init.php");

$Smarty->assign('background', 'homeBg');
$Smarty->display('app/templates/header.tpl');
$Smarty->display('app/templates/search.tpl');
$Smarty->display('app/templates/footer.tpl');


