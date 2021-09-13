<?php
include("app/init.php");


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