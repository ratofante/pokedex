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
			echo "<p>".$pokedex->generalInfo."</p><br>";
			
			echo "<h3>Evo 1:</h3>";
			if(isset($pokedex->evoPath[1]))
				{
					echo "<pre>";
					var_dump($pokedex->evoPath[1]);
					echo "</pre>";
				}

			echo "<h3>Evo 2:</h3>";
			if(isset($pokedex->evoPath[2]))
				{
					echo "<pre>";
					var_dump($pokedex->evoPath[2]);
					echo "</pre>";
				}
			

			$moves = $pokedex->movimientos;
			$moves = implode(" | ", $moves);
			echo "<label for='ataques'>Moves:</label><fieldset id='ataques'>".$moves."</fieldset><br>";


			echo "<h1>\$pokedex->info</h1>";
			echo "<pre>";
			var_dump($pokedex->info);
			echo "</pre>";		
		}
		else
		{
			echo "error!";
		}
}
else
{
	header("Location:views/home.html");
}
