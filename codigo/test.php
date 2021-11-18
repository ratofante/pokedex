<?php

include("app/init.php");

// GET 151 IMG TO DOCUMENT

/*
$imgArray = [];

for ($i=101; $i < 152; $i++) 
{ 
	$Pokedex = new Pokedex($i);
	$imgArray[$i] = "<img src='".$Pokedex->getImg()."' alt='poke_img'>";		
}

$print = "";
foreach ($imgArray as $key => $value) {
	$print .= $value."\n";
}
file_put_contents('pokeArrays100-150.txt', $print);

// Ya funciona! file_put_contents('pokeImg.txt', print_r($imgArray, true));
echo "<pre>";
var_dump($imgArray);
echo "</pre>";
*/

// GENERAR ARRAY DE LOS 151 POKEMONS id => nombre

/*$pokeArray = [];
for ($i=1; $i < 152; $i++) { 
    $pokemon = new Pokedex($i, false);
    $pokeArray[$i] = $pokemon->getName();
}

foreach($pokeArray as $key => $value){
    echo '$pokeArray['.$key.'] = '.'"'.$value.'"'.";<br>";
}
$inputString = "3";
$inputInt = 3;

// OTRAS COSAS PARA PROBAR RAPIDO

echo (is_numeric($inputString)) ? "Es un int" : "es una string utro";
echo "<br>";

echo (is_string($inputInt)) ? "Es un string" : "es otra cosa";

echo "<br>";

echo ("3" > 1) ? "lo toma como nùmero" : "no sè què";*/