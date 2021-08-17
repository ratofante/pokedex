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
	public $movimientos =[];
	


	public function __construct($id)
	{
		$this->url .= $id;
		$data_json = file_get_contents($this->url);
		$this->pokemon = get_object_vars(json_decode($data_json));
		$this->getName();
		$this->getImg();
		$this->getMoves();
		$this->getType();
		$this->getInfo();
		$this->evoPath();
	}
	public function getName()
	{	
		$this->nombre = $this->pokemon['name'];
	}
	public function getImg()
	{
		$img = get_object_vars($this->pokemon['sprites']);
		$img = get_object_vars($img['other']);
		$img = get_object_vars($img['official-artwork']);
		$this->img = "<img src='".$img['front_default']."' style='width:100px;height:100px'>"; 	
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
	}
	private function getInfo()
	{
		$species = get_object_vars($this->pokemon['species']);
		$data_json = file_get_contents($species['url']);
		$this->info = get_object_vars(json_decode($data_json));

		// Hasta aquí la Info Base.

		// Habitat
		$habitat_obj_array = get_object_vars($this->info['habitat']);
		$this->habitat = $habitat_obj_array['name'];

		//Shape
		$shape_obj_array = get_object_vars($this->info['shape']);
		$this->shape = $shape_obj_array['name'];

		//Flavor Text -- generalInfo
		$flavor_text_array = $this->info['flavor_text_entries'];
		/*$array = get_object_vars($flavor_text_array[0]);
		$this->generalInfo = $array['flavor_text'];
		*/
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
				$this->generalInfo = $array['flavor_text'];
			}
		}
	}
	private function evoPath()
	{
		$url = get_object_vars($this->info['evolution_chain']);
		$json_data = file_get_contents($url['url']);
		$evo_data = get_object_vars(json_decode($json_data));
		$evo_chain = get_object_vars($evo_data['chain']);
		$evolucion = $evo_chain['evolves_to'];

		if(empty($evolucion))
		{
			$this->evoPath['n'] = "";
		}
		else
		{
			$evo0 = get_object_vars($evo_chain['species']);
			$this->evoPath[0] = $evo0['name'];

			$evo1 = $evo_chain['evolves_to'];
			$evo1 = get_object_vars($evo1[0]);
			$evo1 = get_object_vars($evo1['species']);
			$this->evoPath[1] = $evo1['name'];

			$evo2 = $evo_chain['evolves_to'];
			$evo2 = get_object_vars($evo2[0]);
			$evo2 = $evo2['evolves_to'];
			$evo2 = get_object_vars($evo2[0]);
			if (empty($evo2['evolves_to']))
			{
				$evo2 = get_object_vars($evo2['species']);
				$this->evoPath[2] = $evo2['name'];
			}
			else
			{
				$this->evoPath[2] = "no vacia";
			}
		}
	}
	private function getMoves()
	{
		$movesArray = $this->pokemon['moves'];
		for ($i=0; $i < count($movesArray); $i++)
		{
			 $listaMovimientos[$i] = get_object_vars($movesArray[$i]);
			 $movimiento = get_object_vars($listaMovimientos[$i]['move']);
			 $this->movimientos[$i] = $movimiento['name'];
		}
	}



}