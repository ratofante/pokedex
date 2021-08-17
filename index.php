<?php

//INCLUDES
include("includes/includes.php");

$model = new Model();

// Si sesión no abierta:



if(isset($_POST['submit']))
{
	$model->setData("id_pokemon",$model->getInput($_POST['id_pokemon']));
	$id = $model->getData("id_pokemon");
	if(is_numeric($id) && $id < 151)
		{
			$pokedex = new Pokedex($id);
			echo "<h1>".$pokedex->nombre."</h1>";
			echo "<br>";
			echo $pokedex->img;
			echo "<br>";

			echo "<h2>Type: ".$pokedex->tipos."</h2>";
			echo "<h2>Shape: ".$pokedex->shape."</h2>";
			echo "<h2>Habitat: ".$pokedex->habitat."</h2>";

			echo "<h2>General Info:</h2>";
			echo "<p><pre>".$pokedex->generalInfo."</pre></p><br>";
			
			echo "<h2> EvoPath </h2>";
			switch ($pokedex->evoPath['case']) {
				case 'special':				
					for($i=0; $i < 3; $i++)
					{
						echo $pokedex->evoPath['special']['evo'][$i]." - ";
						echo $pokedex->evoPath['special']['item'][$i]."<br>";
					}
					break;
				case 'no-evo':
					echo "No tiene evolución";
					break;
				default:
					echo "<h4>evo 1</h4><pre>";
					var_dump($pokedex->evoPath[0]);
					echo "</pre>";
					echo "<h4>evo2</h4><pre>";
					var_dump($pokedex->evoPath[1]);
					echo "</pre>";
					echo "<h4>evo3</h4><pre>";
					var_dump($pokedex->evoPath[2]);
					echo "</pre>";
					break;
			}
	}
}
else
{
	header("Location:views/home.html");
}
