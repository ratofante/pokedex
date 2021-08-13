<?php

class Pokedex
{
	public $id_pokemon;
	private $url = "https://pokeapi.co/api/v2/pokemon/";
	public $pokemon = [];
	public $nombre;
	public $img;
	public $movimientos =[];

	public function __construct($id)
	{
		$this->url .= $id;
		$data_json = file_get_contents($this->url);
		$this->pokemon = get_object_vars(json_decode($data_json));
		$this->getName();
		$this->getImg();
		$this->getMoves();
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