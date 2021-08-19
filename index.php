<?php
//INCLUDES
include("includes/includes.php");
$model = new Model();
$smarty = new Smarty();

if(isset($_POST['submit']))
{
	$model->setData("id_pokemon",$model->getInput($_POST['id_pokemon']));
	$id = $model->getData("id_pokemon");
	if(is_numeric($id) && $id < 151)
	{	
		$pokemon = new Pokedex($id);

		$name = $pokemon->getName();
		$img = $pokemon->getImg();
		$type = $pokemon->getType();
		$shape = $pokemon->getShape();
		$habitat = $pokemon->getHabitat();
		$generalInfo = $pokemon->getGeneralInfo();

		$smarty->assign('name', $name);
		$smarty->assign('img', $img);
		$smarty->assign('shape', $shape);
		$smarty->assign('type', $type);
		$smarty->assign('shape', $shape);
		$smarty->assign('habitat', $habitat);
		$smarty->assign('generalInfo', $generalInfo);

		/*$evo = $pokemon->evoPath['evo'];
		$evo_id = $pokemon->evoPath['id'];
		$evo_item = (isset($pokemon->evoPath['item'])) ? $pokemon->evoPath['item'] : false;*/
		echo "<pre>";
		//var_dump($evo);
		echo "</pre><br>";
		
		switch($pokemon->evoPath['case'])
		{
			case 'special':

				break;
			case 'no-evo':

				break;
			default:
				$evo = $pokemon->evoPath['evo'];
				$evo_id = $pokemon->evoPath['id'];
				$evo_item = (isset($pokemon->evoPath['item'])) ? $pokemon->evoPath['item'] : false;
				break;	
		}	
		
		echo "<pre>";
		var_dump($evo);
		echo "</pre><br>";
		echo "<pre>";
		var_dump($evo_id);
		echo "<pre>";
		echo "</pre><br>";
		echo "<pre>";
		var_dump($evo_item);
		echo "</pre><br>";

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

