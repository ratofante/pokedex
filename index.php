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

			echo "<h2>Tipos: ".$pokedex->tipos."</h2>";

			$moves = $pokedex->movimientos;
			$moves = implode(" | ", $moves);
			echo "<label for='ataques'>Ataques que puede aprender:</label><fieldset id='ataques'>".$moves."</fieldset>";
			echo "<br>";

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
