<?php
session_start();
//INCLUDES
include("includes/includes.php");
$model = new Model();
$smarty = new Smarty();

$smarty->display('header.tpl');
$smarty->display('section_inicio.tpl');
$smarty->display('search.tpl');
$smarty->display('section_bajada.tpl');
$smarty->display('footer.tpl');


