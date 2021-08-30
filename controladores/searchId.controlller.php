<?php
include("includes/includes.php");
$model = new Model();
$smarty = new Smarty();

if(isset($_POST['submit']))
{
	$model->setData("id_pokemon",$model->getInput($_POST['id_pokemon']));
	$id = $model->getData("id_pokemon");
	if(is_numeric($id) && $id <= 151)
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

		echo "<pre>";
		//var_dump($pokemon->evoPath['special']);
		echo "</pre><br>";
	
		switch($pokemon->evoPath['case'])
		{
			case 'special':
				$evo = $pokemon->evoPath['special']['evo'];
				$evo_id = $pokemon->evoPath['special']['id'];
				$evo_item = (isset($pokemon->evoPath['special']['item'])) ? $pokemon->evoPath['special']['item'] : null;
				$smarty->assign('evo', $evo);
				$smarty->assign('evo_id', $evo_id);
				$smarty->assign('evo_item', $evo_item);
				foreach($evo_id as $key)
				{
					$poke = new Pokedex($key);
					$evo_img[$key] = $poke->getImg(); 
				}
				$smarty->assign('evo_img', $evo_img);
				break;
			case 'no-evo':
				break;
			default:
				$evo = $pokemon->evoPath['evo'];
				$evo_id = $pokemon->evoPath['id'];
				$evo_item = (isset($pokemon->evoPath['item'])) ? $pokemon->evoPath['item'] : null;
				$smarty->assign('evo', $evo);
				$smarty->assign('evo_id', $evo_id);
				$smarty->assign('evo_item', $evo_item);
				$evo_img = [];
				foreach($evo_id as $key)
				{
					$poke = new Pokedex($key);
					$evo_img[$key] = $poke->getImg();
				}
				$smarty->assign('evo_img', $evo_img);
				break;	
		}	
		$moves_string = $pokemon->getMoves();
		$smarty->assign('moves_string', $moves_string);
		//$moves_array = $pokemon->movimientos;
		//$smarty->assign('moves_array', $moves_array);
		$smarty->display('header.tpl');
		$smarty->display('search.tpl');
		$smarty->display('pokecard.tpl');
		$smarty->display('footer.tpl');
	}	
}
else
{	
	$smarty->display('header.tpl');
	$smarty->display('search.tpl');
	$smarty->display('footer.tpl');
}