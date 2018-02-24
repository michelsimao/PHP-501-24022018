<?php

class Conta
{

	// Atributos
	public $numConta;
	public $saldo = 1000;


	// Metodos
	public function sacar(int $saque){
		$this->saldo -= $saque; 
		echo("Estou sacando $saque <br>");
	}

	public function depositar(int $deposito){
		$this->saldo += $deposito; 
		echo("Estou depositando $deposito <br>");
	}

	public function verSaldo(){
		echo("O saldo atual da conta $this->numConta eh de $this->saldo reais<br><br>");
	}

}

$conta  = new Conta();

$conta->numConta = "1234-5";
$conta->verSaldo();
$conta->sacar(300);
$conta->verSaldo();
$conta->depositar(500);
$conta->verSaldo();
