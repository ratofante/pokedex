<?php
include("../includes/includes.php");
//$Model = new Model();
$Smarty = new Smarty();

if(isset($_POST['submit']))
{
	$Model->setData("id_pokemon",$Model->getInput($_POST['id_pokemon']));
	$id = $Model->getData("id_pokemon");
	if(is_numeric($id) && $id <= 151)
	{	
		$pokemon = new Pokedex($id);

		$name = $pokemon->getName();
		$img = $pokemon->getImg();
		$type = $pokemon->getType();
		$shape = $pokemon->getShape();
		$habitat = $pokemon->getHabitat();
		$generalInfo = $pokemon->getGeneralInfo();

		$Smarty->assign('name', $name);
		$Smarty->assign('img', $img);
		$Smarty->assign('shape', $shape);
		$Smarty->assign('type', $type);
		$Smarty->assign('shape', $shape);
		$Smarty->assign('habitat', $habitat);
		$Smarty->assign('generalInfo', $generalInfo);

		echo "<pre>";
		//var_dump($pokemon->evoPath['special']);
		echo "</pre><br>";
	
		switch($pokemon->evoPath['case'])
		{
			case 'special':
				$evo = $pokemon->evoPath['special']['evo'];
				$evo_id = $pokemon->evoPath['special']['id'];
				$evo_item = (isset($pokemon->evoPath['special']['item'])) ? $pokemon->evoPath['special']['item'] : null;
				$Smarty->assign('evo', $evo);
				$Smarty->assign('evo_id', $evo_id);
				$Smarty->assign('evo_item', $evo_item);
				foreach($evo_id as $key)
				{
					$poke = new Pokedex($key);
					$evo_img[$key] = $poke->getImg(); 
				}
				$Smarty->assign('evo_img', $evo_img);
				break;
			case 'no-evo':
				break;
			default:
				$evo = $pokemon->evoPath['evo'];
				$evo_id = $pokemon->evoPath['id'];
				$evo_item = (isset($pokemon->evoPath['item'])) ? $pokemon->evoPath['item'] : null;
				$Smarty->assign('evo', $evo);
				$Smarty->assign('evo_id', $evo_id);
				$Smarty->assign('evo_item', $evo_item);
				$evo_img = [];
				foreach($evo_id as $key)
				{
					$poke = new Pokedex($key);
					$evo_img[$key] = $poke->getImg();
				}
				$Smarty->assign('evo_img', $evo_img);
				break;	
		}	
		$moves_string = $pokemon->getMoves();
		$Smarty->assign('moves_string', $moves_string);
		//$moves_array = $pokemon->movimientos;
		//$Smarty->assign('moves_array', $moves_array);
		$Smarty->display('header.tpl');
		$Smarty->display('search.tpl');
		$Smarty->display('pokecard.tpl');
		$Smarty->display('footer.tpl');
	}	
}
else
{	
	//$Smarty->display('header.tpl');
	$Smarty->display('section_inicio.tpl');
	$Smarty->display('search.tpl');
	$Smarty->display('section_bajada.tpl');
	$Smarty->display('footer.tpl');
}