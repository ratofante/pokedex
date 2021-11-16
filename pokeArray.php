<?php

include("app/init.php");

$pokeArray = [];
for ($i=1; $i < 152; $i++) { 
    $pokemon = new Pokedex($i, false);
    $pokeArray[$i] = $pokemon->getName();
}

foreach($pokeArray as $key => $value){
    echo '$pokeArray['.$key.'] = '.'"'.$value.'"'.";<br>";
}