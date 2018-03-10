<?php

namespace Escola;

class Curso
{
	private $nome;
	private $cargaHoraria;

	public function __construct(string $nome, int $horas){
		$this->nome = $nome;
		$this->cargaHoraria = $horas;
	}

	public function getNome(){ 
		return $this->nome; 
	}
	public function setNome($nome){ 
		return $this->$nome; 
	}
	public function getCargaHoraria(){ 
		return $this->cargaHoraria; 
	}
	public function setCargaHoraria($cargaHoraria){ 
		return $this->$cargaHoraria; 
	}


}