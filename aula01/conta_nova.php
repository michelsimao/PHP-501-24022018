<?php

class Conta
{
	public $numConta;
	public $saldo;
	public $titular;
	public $tipo; // CC ou CP
	public $status; // aberto(true) ou fechado(false)

	public function __construct($titular, $saldo=0){
		$this->titular = $titular;
		$this->saldo   = $saldo;
		$this->numConta = $this->gerarNumConta();
	}
	public function sacar(int $valor){
		$this->saldo -= $valor;
	}
	public function depositar(int $valor){
		$this->saldo += $valor;
	}
	public function verSaldo(){
		echo("O saldo atual eh: $this->saldo <br>");
	}
	public function verTitular(){
		echo("Nome do titular da conta: $this->titular <br>");
	}	
	public function verNumConta(){
		echo("Numero da conta: $this->numConta <br>");
	}	
	private function gerarNumConta(){
		$numConta = rand(1000, 9999);
		return $numConta;
	}

}

$conta = new Conta("Michel", 5000);
$conta->verTitular();
$conta->verNumConta();
$conta->verSaldo();
$conta->depositar(2000);
$conta->verSaldo();
$conta->sacar(500);
$conta->verSaldo();
var_dump($conta);
$conta->__construct("joao", 678);
$conta->verTitular();
$conta->verNumConta();
$conta->verSaldo();
var_dump($conta);
