<?php

class Data
{
	public $data = [];
	public $input;

	public function __construct()
	{

	}
	public function getInput($input)
	{
		trim($input);
		$this->input = htmlentities($input);
		return $this->input;
	}
	public function setData($nombre, $data)
	{
		$this->data[$nombre] = $data;
	}
	public function getData($nombre)
	{
		if(array_key_exists($nombre, $this->data))
		{
			return $this->data[$nombre];
		}
		else
		{
			return "No hay data";
		}
	}
	public function load($url)
	{
		include($url);
	}
	public function redirect($url)
	{
		header("Location: $url");
		exit;
	}
}