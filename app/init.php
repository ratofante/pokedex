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
include('app/model/m_data.php');
include('app/model/m_pokedex.php');
include('app/smarty/libs/Smarty.class.php');


// Crear Objetos
$Data = new Data();
$Smarty = new Smarty();

session_start();