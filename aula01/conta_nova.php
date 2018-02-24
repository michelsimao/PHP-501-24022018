<?php

class Conta
{
	private $titular;
	private $numConta;
	private $saldo;
	private $tipo; // CC ou CP
	private $status; // aberto(true) ou fechado(false)

	public function __construct(string $titular, string $tipo){
		$this->abrirConta($titular, $tipo);
	}

	public function abrirConta(string $titular, string $tipo){
		$this->setTitular($titular);
		$this->setStatus(true);
		$this->gerarNumConta();

		if($tipo == "CC"){
			$this->setTipo("CC");
			$this->depositar(100);
		}else{
			$this->setTipo("CP");
			$this->depositar(150);
		}

	}

	public function fecharConta(){
		if($this->saldo == 0){
			$this->status = false;
		}else{
			echo("Fale com o gerente <br>");
		}
	}

	private function gerarNumConta(){
		$this->numConta = rand(1000, 9999);
	}

	public function getTitular(){ return $this->titular; }
	public function setTitular($titular){ $this->titular = $titular; }
	public function getStatus(){ return $this->status; }
	public function setStatus($status){ $this->status = $status; }
	public function getTipo(){ return $this->status; }
	public function setTipo($tipo){ $this->tipo = $tipo; }

	public function sacar(int $valor){
		if($this->verSaldo() >= $valor){
			$this->saldo -= $valor;	
		}else{
			echo("Essa conta foi encerrada <br>");
		}
	}

	public function depositar(int $valor){
		$this->saldo += $valor;
	}
	
	public function verSaldo(){
		if($this->status == true){
			return $this->saldo;
		}else{
			return "Essa conta foi encerrada <br>";
		}
	}
	
	public function verTitular(){
		echo("Nome do titular da conta: $this->titular <br>");
	}	
	
	public function verNumConta(){
		echo("Numero da conta: $this->numConta <br>");
	}	

	public function verStatus(){
		if($this->getStatus() == true){
			echo("Conta aberta <br>");
		}else{
			echo("Conta encerrada <br>");
		}
		
	}	
}

$conta = new Conta("Michel", "CC");
$conta->verTitular();
$conta->verNumConta();
echo($conta->verSaldo()."-a<br>");
$conta->depositar(2000);
echo($conta->verSaldo()."-b<br>");
$conta->sacar(2100);
echo($conta->verSaldo()."-c<br>");
//	$conta->fecharConta();
echo($conta->getStatus());
echo("<pre>");	
//var_dump($conta);