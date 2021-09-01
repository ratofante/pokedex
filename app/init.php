<?php
/*
	INIT
	Basic configuration settings
*/
// connect to database

// error reporting
//mysqli_report(MYSQLI_REPORT_ERROR); AVERIGUAR PARA PDO
ini_set('display_errors', 1);


// seteo constantes
define('RUTA_SITIO', 'http://localhost/pokedex/');
define('RUTA_IMG', 'http://localhost/pokedex/resources/img/');


//Incluir Objetos
include('app/clases/m_data.php');
include('app/clases/m_pokedex.php');
include('app/smarty/libs/Smarty.class.php');


// Crear Objetos
$Data = new Data();
$Smarty = new Smarty();
/*$Smarty->setTemplateDir('./templates')
       ->setCompileDir('./templates_c')
       ->setCacheDir('./cache');*/


session_start();