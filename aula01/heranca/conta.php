<?php

class Conta
{
	public $titular;
	public $saldo = 1000;
	public $numConta;

	public function getTitular(){ return $this->titular; }
	public function setTitular($titular){ return $this->titular = $titular; }
	public function getSaldo(){ return $this->saldo; }
	public function setSaldo($saldo){ return $this->saldo = $saldo; }

}

class ContaCorrente extends Conta
{
	private $chequeEspecial = false;

	public function getChequeEspecial(){ return $this->chequeEspecial; }
	public function setChequeEspecial($chequeEspecial){ return $this->chequeEspecial = $chequeEspecial; }

	public function sacar($valor){
		if($this->saldo >= $valor){
			$this->saldo -= ($valor * 1.1);
		}else{
			echo("<br>Saldo insuficiente");
		}
	}

	public function depositar($valor){
		$this->saldo += ($valor * 0.9);
	}	
}

class ContaPoupanca extends Conta
{
	public function sacar($valor){
		if($this->saldo >= $valor){
			$this->saldo -= $valor;
		}else{
			echo("<br>Saldo insuficiente");
		}
	}

	public function depositar($valor){
		$this->saldo += $valor;
	}	
}

$cc = new ContaCorrente;
echo($cc->setTitular("Michel"));
echo("<br>");
echo($cc->saldo);
$cc->sacar(100);
echo("<br>");
echo($cc->saldo);

echo("<hr>");

$cp = new ContaPoupanca;
echo($cp->setTitular("Joao"));
echo("<br>");
echo($cp->saldo);
$cp->depositar(100);
echo("<br>");
echo($cp->saldo);