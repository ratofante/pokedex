<?php

class Pokedex
{
	public $id_pokemon;
	private $url = "https://pokeapi.co/api/v2/pokemon/";
	public $pokemon = [];
	public $nombre;
	public $img;
	public $tipos;
	public $info;
	public $habitat;
	public $shape;
	public $generalInfo;
	public $evoPath = [];
	public $movimientos =[]; //Devuelve el array completo de movimientos
	public $moves; //getMoves() Devuelve STRING con cada move separado por |
	public $test;	

	public function __construct($id)
	{
		$this->url .= $id;
		$data_json = file_get_contents($this->url);
		$this->pokemon = get_object_vars(json_decode($data_json));
		$this->getInfo();
		$this->evoPath();
	}
	public function getName()
	{	
		$this->nombre = $this->pokemon['name'];
		return $this->nombre;
	}
	public function getImg()
	{
		$img = get_object_vars($this->pokemon['sprites']);
		$img = get_object_vars($img['other']);
		$img = get_object_vars($img['official-artwork']);
		$this->img = $img['front_default'];
		return $this->img;
	}
	public function getType()
	{
		$tipos = $this->pokemon['types'];
		foreach ($tipos as $key => $value) 
		{
			$tipo=get_object_vars($tipos[$key]);
			$arrayTipos[] = get_object_vars($tipo['type']);
		}
		$tipos = $arrayTipos;
		foreach($tipos as $key => $value)
		{
			$resultado[] = $tipos[$key]['name'];
		}
		$this->tipos = implode(" - ", $resultado);
		return $this->tipos;
	}
	public function getInfo()
	{
		$species = get_object_vars($this->pokemon['species']);
		$data_json = file_get_contents($species['url']);
		$this->info = get_object_vars(json_decode($data_json));
	}
	public function getHabitat()
	{
		$habitat_obj_array = get_object_vars($this->info['habitat']);
		$this->habitat = $habitat_obj_array['name'];
		return $this->habitat;
	}
	public function getShape()
	{
		$shape_obj_array = get_object_vars($this->info['shape']);
		$this->shape = $shape_obj_array['name'];
		return $this->shape;		
	}
	public function getGeneralInfo()
	{
		$flavor_text_array = $this->info['flavor_text_entries'];
		$condition = false;
		for($i=0;$condition==false;$i++)
		{
			$array = get_object_vars($flavor_text_array[$i]);
			$lng = get_object_vars($array['language']);
			$vrs = get_object_vars($array['version']);
			$this->generalInfo = $array['flavor_text'];
			if($lng['name'] == 'en' && $vrs['name'] == 'red')
			{
				$condition = true;
				$generalInfo = trim($array['flavor_text']);
				$generalInfo = htmlentities($generalInfo);
				$this->generalInfo = $generalInfo;
			}
		}
		return $this->generalInfo;
	}
	public function evoPath()
	{
		$url = get_object_vars($this->info['evolution_chain']);
		$json_data = file_get_contents($url['url']);
		$evo_data = get_object_vars(json_decode($json_data));
		$evo_chain = get_object_vars($evo_data['chain']);
		$evolucion = $evo_chain['evolves_to'];
		$this->evoPath['evo_count'] = $evolucion;

		// CASOS DONDE NO HAY EVOLUCIÓN
		if(empty($evolucion))
		{
			$this->evoPath['case'] = "no-evo";
		}
		// CASOS RAROS (MEOWTH, EEVEE)
		elseif (count($this->evoPath['evo_count']) > 1) 
		{
			$this->evoPath['case'] = "special";
			
			for($i=0; $i < count($this->evoPath['evo_count']); $i++)
			{
				$evo = get_object_vars($evolucion[$i]);
				$item = $evo['evolution_details'];
				$item = get_object_vars($item[0]);
				if($item == null){break;}

				if($item['item'] != null)
				{
					$item = get_object_vars($item['item']);
					$this->evoPath['special']['item'][$i] = $item['name'];
				}
				$evo = get_object_vars($evo['species']);
				$url_id = $evo['url'];
				$url_id = substr($url_id, strpos($url_id, 'species/') + strlen('species/'));
				$this->test = $url_id;
				if(strlen($url_id) == 3)
				{
					$url_id = substr($url_id,0,2);
				}
				else
				{
					$url_id = substr($url_id,0,3);
				}
				$this->evoPath['special']['id'][$i] = $url_id;
				$this->evoPath['special']['evo'][$i] = $evo['name'];
			}
		}
		else
		{	
			$this->evoPath['case'] = "normal";
			
			$evo0 = get_object_vars($evo_chain['species']);
			$this->evoPath['evo'][0] = $evo0['name'];

			/************** ID EVO CHAIN 1 **********/
			$url = $evo0['url'];
			$json_data = file_get_contents($url);
			$data = json_decode($json_data);
			$data = get_object_vars($data);
			$varieties = $data['varieties'];
			$varieties = get_object_vars($varieties[0]);
			$varieties = get_object_vars($varieties['pokemon']);
			$url_id = $varieties['url'];
			$url_id = substr($url_id, strpos($url_id, 'pokemon/') + strlen('pokemon/'));
			if(strlen($url_id) == 3)
			{
				$url_id = substr($url_id,0,2);
			}
			else
			{
				$url_id = substr($url_id,0,3);
			}
			$this->evoPath['id'][0] = $url_id;
			/****************************************/


			/******** ID DE SEGUNDA EVOLUCION *******/
			$evo1 = $evo_chain['evolves_to'];
			$evo1 = get_object_vars($evo1[0]);
			$evo1 = get_object_vars($evo1['species']);
			$url_id = $evo1['url'];
			//$this->test = $url_id;
			$url_id = substr($url_id, strpos($url_id, 'species/') + strlen('species/'));
			if(strlen($url_id) == 3)
			{
				$url_id = substr($url_id,0,2);
			}
			else
			{
				$url_id = substr($url_id,0,3);
			}
			$this->evoPath['id'][1] = $url_id;
			$this->evoPath['evo'][1] = $evo1['name'];
			/*****************************************/

			

			$evo2 = $evo_chain['evolves_to'];
			$evo2 = get_object_vars($evo2[0]);
			$evo2 = $evo2['evolves_to'];

			if(!empty($evo2))
			{
				$evo2 = get_object_vars($evo2[0]);
				if (empty($evo2['evolves_to']))
				{
					$evo2 = get_object_vars($evo2['species']);
					$url_id = $evo2['url'];
					$url_id = substr($url_id, strpos($url_id, 'species/') + strlen('species/'));
					if(strlen($url_id) == 3)
					{
						$url_id = substr($url_id,0,2);
					}
					else
					{
						$url_id = substr($url_id,0,3);
					}
					$this->evoPath['id'][2] = $url_id;
					$this->evoPath['evo'][2] = $evo2['name'];
				}
			}
		}
	}
	public function getMoves()
	{
		$movesArray = $this->pokemon['moves'];
		for ($i=0; $i < count($movesArray); $i++)
		{
			 $listaMovimientos[$i] = get_object_vars($movesArray[$i]);
			 $movimiento = get_object_vars($listaMovimientos[$i]['move']);
			 $this->movimientos[$i] = $movimiento['name'];
		}
		$this->moves = implode(" | ", $this->movimientos);
		return $this->moves;
	}
}