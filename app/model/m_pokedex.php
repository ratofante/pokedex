<?php
include('../smarty/libs/Smarty.class.php');
include('../clases/pokedex.php');

$Smarty = new Smarty();

/* Esto lo debería hacer una clase, no aquí */
$input = trim(htmlentities($_GET['id']));
function checkInput($input) 
{
	include('../data/pokemons.php');
	
	if(is_numeric($input))
	{
		if($input > 151 || $input < 1){
			$output[0] = false;
			$output[1]="Try a number between 1 and 151";
		}
		else {
			$output[0] = true;
			$output[1] = $input;
		}
		return $output;
	}
	elseif (is_string($input))
	{
		$search = strtolower($input);
		foreach($pokeArray as $key => $value)
		{	
			if($search === $value){
				$output[0] = true;
				$output[1] = $key;
				return $output;
				break;
			} 
		}
		$output[0] = false;
		$output[1] = "We can't find that pokemon. Try using one of our suggestions";
		return $output;
	}
	else {
		return "Something is wrong, please try again with another search";
	}
}

// chequeamos reponse: [0] = true Ok! [0] = false, error!
$response = checkInput($input);

if($response[0] === true)
{
	$Pokedex = new Pokedex($response[1]);

	$name = $Pokedex->getName();
	$img = $Pokedex->getImg();
	$type = $Pokedex->getType();
	$shape = $Pokedex->getShape();
	$habitat = $Pokedex->getHabitat();
	$generalInfo = $Pokedex->getGeneralInfo();

	$Smarty->assign('id', $response[1]);
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
			
			$i = 0;
			foreach($evo_id as $key)
			{	
				$poke = new Pokedex($key);
				$evo_img[$i] = $poke->getImg(); 
				$i++;
			}
			unset($i);	
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
				$evo_img[] = $poke->getImg();
			}
			
			$Smarty->assign('evo_img', $evo_img);
			
			break;	
	}	

	if(isset($evo_id))
	{
		$evoId = [];
		foreach($evo_id as $value)
		{
			$id=str_replace('/','',$value);
			array_push($evoId, $id);
		}

		$evoArray = [];
		for ($i=0; $i < count($evoId); $i++) 
		{ 
			$evoToken = array('id' => $evoId[$i], 'name' => $evo[$i], 'img' => $evo_img[$i]);
			array_push($evoArray, $evoToken);
		}
	}
	

	if(isset($evoArray)){$Smarty->assign('evoArray', $evoArray);}
	$moves_array = $Pokedex->getMoves();
	$Smarty->assign('moves', $moves_array);
	$Smarty->display('../templates/pokecard.tpl');
}
else
{
	$Smarty->assign('error', $response[1]);
	$Smarty->display('../templates/errorDisplay.tpl');
	//echo $response[1];
}


