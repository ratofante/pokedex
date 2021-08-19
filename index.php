<?php

//INCLUDES
include("includes/includes.php");
$model = new Model();
$smarty = new Smarty();

// Si sesión no abierta:



if(isset($_POST['submit']))
{
	$model->setData("id_pokemon",$model->getInput($_POST['id_pokemon']));
	$id = $model->getData("id_pokemon");
	if(is_numeric($id) && $id < 151)
	{	
		$pokemon = new Pokedex($id);
		$smarty->registerObject('pokemon',$pokemon);

		$name = $pokemon->getName();
		$img = $pokemon->getImg();
		$type = $pokemon->getType();
		$shape = $pokemon->getShape();
		$habitat = $pokemon->getHabitat();
		$generalInfo = $pokemon->getGeneralInfo();

		var_dump($name);
		echo "<br><br>";
		var_dump($img);
		echo "<br><br>";
		var_dump($type);
		echo "<br><br>";
		var_dump($shape);
		echo "<br><br>";
		var_dump($habitat);
		echo "<br><br>";
		var_dump($generalInfo);
		echo "<br><br>";

		$smarty->assign('name', $name);
		$smarty->assign('img', $img);
		//$smarty->assing('shape', $shape);
		//$smarty->assing('type', $type);
		//$smarty->assing('shape', $shape);
		//$smarty->assign('habitat', $habitat);
		$smarty->assing('generalInfo', $generalInfo);

		//$smarty->registerObject('pokemon', $pokemon);
		/*
		$smarty->assign('name', $pokemon->getName());
		$smarty->assign('main_img', $pokemon->getImg());
		$smarty->assign('type', $pokemon->getType());
		$smarty->assign('shape', $pokemon->getShape());
		$smarty->assign('habitat', $pokemon->getHabitat());
		$smarty->assing('generalInfo', $pokemon->getGeneralInfo());
		*/
		
		$smarty->display('index.tpl');


		/*
		echo"<pre>";
		var_dump($pokemon->evoPath['special']);
		echo "</pre><br>";

		
		echo $pokemon->evoPath['id_0'];
		echo isset($pokemon->evoPath['id_1']) ? $pokemon->evoPath['id_1']:'';
		echo isset($pokemon->evoPath['id_2']) ? $pokemon->evoPath['id_1']:'';

		$evo1 = new Pokedex($pokemon->evoPath['id_0']);
		echo "<img src='".$evo1->getImg()."' style='width:100px;height:100px'><br>";


		echo "<h1>".$pokemon->getName()."</h1><br>";
		echo "<img src='".$pokemon->getImg()."' style='width:100px;height:100px'><br>";

		echo "<h2>Type: ".$pokemon->getType()."</h2>";
		echo "<h2>Shape: ".$pokemon->getShape()."</h2>";
		echo "<h2>Habitat: ".$pokemon->getHabitat()."</h2>";

		echo "<h2>General Info:</h2>";
		echo "<p><pre>".$pokemon->getGeneralInfo()."</pre></p><br>";
			
		echo "<h2> EvoPath </h2>";
		switch ($pokemon->evoPath['case'])
		{
			case 'special':				
				for($i=0; $i < count($pokemon->evoPath['evo_count']); $i++)
				{
					echo "<br> - ".$pokemon->evoPath['special']['evo'][$i];
					if(isset($pokemon->evoPath['special']['item'][$i]))
					{
						echo " - ".$pokemon->evoPath['special']['item'][$i]."<br>";						
					}
				}					
				break;

			case 'no-evo':
				echo "No tiene evolución";
				break;

			default:
				echo "<h4>evo 1</h4><pre>";
				var_dump($pokemon->evoPath[0]);
				echo "</pre>";
				echo "<h4>evo2</h4><pre>";
				var_dump($pokemon->evoPath[1]);
				echo "</pre>";
				if($pokemon->evoPath[2] != false)
				{
					echo "<h4>evo3</h4><pre>";
					var_dump($pokemon->evoPath[2]);
					echo "</pre>";
				}
				break;
		}
		var_dump($pokemon->getMoves());
		echo "<br><br>";
		var_dump($pokemon->movimientos);
	*/
	}

	
}
else
{
	header("Location:views/home.html");
}

