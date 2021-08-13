<?php

class Pokedex
{
	public $id_pokemon;
	private $url = "https://pokeapi.co/api/v2/pokemon/";
	public $pokemon = [];
	public $nombre;
	public $img;
	public $movimientos =[];
	public $info;
	public $tipos;

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
	public function getInfo()
	{
		$species = get_object_vars($this->pokemon['species']);
		$data_json = file_get_contents($species['url']);
		$this->info = get_object_vars(json_decode($data_json));
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
	}



}