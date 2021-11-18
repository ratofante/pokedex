<?php
// Cargamos el pokemonArray [int id] => [str nombre]
include('../data/pokemons.php');


// se recibe 'search' por la URL
$search = $_REQUEST["search"];

$hint = "";

// Donde se ingrese algún dato .. 
if ($search !== "")
{
  // Chequeamos si es un número y es entre 1 - 151
  if (is_numeric($search))
  {
    $hint = "number";
    if ($search > 151) {$hint = "Try searching a number below 151";}
    elseif($search < 1) {$hint = "The number must be between 1 and 151";}
    else {$hint = $pokeArray[$search];}
  } 
  else
  {
    // Buscamos por coincidencias con el nombre
    $search = strtolower($search);
    $len=strlen($search);
    foreach($pokeArray as $name) 
    {
      if (stristr($search, substr($name, 0, $len))) 
      {
        if ($hint === "") 
        {
          $hint = $name;
        } 
        else 
        {
          $hint .= ", $name";
        }
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
