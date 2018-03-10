<?php

namespace Model\Usuario;
use DAO\usuarioDAO\usuarioDAO;

class Usuario
{
	private $usuario;
	private $senha;
	private $id;

	public function __construct($usuario, $senha, $id=null){
		$this->usuario = $usuario;
		$this->senha = $senha;
		$this->id = $id;
	}

	public function getUsuario(){ return $this->usuario; }
	public function setUsuario($usuario){ $this->usuario = $usuario; }
	public function getSenha(){ return $this->senha; }
	public function setSenha($senha){ $this->senha = $senha; }	
	public function getId(){ return $this->id; }
	public function setId($id){ $this->id = $id; }	

	public static function all(){
		$dao = new usuarioDao();
		return $dao->all();
	}

	public static function find(int $id){
		$dao = new usuarioDao();
		return $dao->find($id);
	}

	public function save(){
		$dao = new UsuarioDAO();
		if (is_null($this->id)) {
			$dao->insert($this);
		} else {
			$dao->update($this);
		}
	}

	public static function remove2(int $id){
		$dao = new usuarioDao();
		return $dao->remove2($id);
	}	

	public function remove(){
		$dao = new usuarioDao();
		return $dao->remove($this);
	}

}