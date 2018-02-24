<?php

class Caneta
{

	// Atributos
	private $cor;
	private $marca;
	private $tampada;


	// Metodos
	public function escrever(string $texto){
		echo "Estou escrevendo: $texto";
	}
	public function destampar(){
		$this->tampada = false;
	}
	public function tampar(){
		$this->tampada = true;
	}
	public function getCor(){
		return $this->cor;
	}
	public function setCor($cor){
		$this->cor = $cor;
	}
	public function getMarca(){
		return $this->marca;
	}
	public function setMarca($marca){
		$this->marca = $marca;
	}	

}

$azul = new Caneta();
$vermelha = new Caneta();

$azul->setCor("azul");
$azul->setMarca("BIC");
$azul->tampar();
$azul->escrever("Hello world");

$vermelha->setCor("vermelha");
$vermelha->setMarca("BIC");
$vermelha->destampar();
$vermelha->escrever("Ola mundo");
$vermelha->getCor();



echo("<pre>");
var_dump($azul);
var_dump($vermelha);