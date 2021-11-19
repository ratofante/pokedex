<?php
include('../smarty/libs/Smarty.class.php');
include('../clases/pokedex.php');

var_dump($_GET);
$Smarty = new Smarty();
$Pokedex = new Pokedex($_GET['id']);

$name = $Pokedex->getName();
		$img = $Pokedex->getImg();
		$type = $Pokedex->getType();
		$shape = $Pokedex->getShape();
		$habitat = $Pokedex->getHabitat();
		$generalInfo = $Pokedex->getGeneralInfo();

		$Smarty->assign('name', $name);
		$Smarty->assign('img', $img);
		$Smarty->assign('shape', $shape);
		$Smarty->assign('type', $type);
		$Smarty->assign('shape', $shape);
		$Smarty->assign('habitat', $habitat);
		$Smarty->assign('generalInfo', $generalInfo);
	
		switch($Pokedex->evoPath['case'])
		{
			case 'special':
				$evo = $Pokedex->evoPath['special']['evo'];
				$evo_id = $Pokedex->evoPath['special']['id'];
				$evo_item = (isset($Pokedex->evoPath['special']['item'])) ? $Pokedex->evoPath['special']['item'] : null;
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
				$evo = $Pokedex->evoPath['evo'];
				$evo_id = $Pokedex->evoPath['id'];
				$evo_item = (isset($Pokedex->evoPath['item'])) ? $Pokedex->evoPath['item'] : null;
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
		$moves_string = $Pokedex->getMoves();
		$Smarty->assign('moves_string', $moves_string);
		$Smarty->display('../templates/pokecard.tpl');
        
		




/*
$Smarty = new Smarty();
$Smarty->display('../templates/search.tpl');
*/