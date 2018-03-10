<?php

namespace DAO\UsuarioDAO;

use DAO\conexao\Conexao;
use PDO;
use model\usuario\usuario;

class UsuarioDAO
{
	private $con = null;

	public function __construct(){
		$this->con = Conexao::getInstance();
	}

	public function insert(Usuario $usuario){
		try{
			$this->con->beginTransaction();

			$sql = "insert into usuarios(usuario, senha) values (:usuario, :senha)";
			$stmt = $this->con->prepare($sql);
			$stmt->bindValue(":usuario", $usuario->getUsuario());
			$stmt->bindValue(":senha"  , $usuario->getSenha());
			$stmt->execute();


			$this->con->commit();

		}catch(PDOException $e){
			$this->con->rollback();
			die($e->getMessage());
		}
	}

	public function all(){
		$sql = "select * from usuarios";
		$prepare = $this->con->query($sql);
		$prepare->execute();

		$result = $prepare->fetchAll(PDO::FETCH_ASSOC);
		$usuarios = [];

		foreach($result as $item){
			$usuarios[] = new Usuario($item['usuario'], $item['senha'], $item['id']);
		}

		return $usuarios;
	}

	public function find(int $id){
		$sql = "select * from usuarios where id = ?";
		$prepare = $this->con->prepare($sql);	
		$prepare->bindValue(1, $id);
		$prepare->execute();
		$item = $prepare->fetch(PDO::FETCH_ASSOC);
		return new Usuario($item['usuario'], $item['senha'], $item['id']);

	}

	public function update(Usuario $usuario){
		try{
			$this->con->beginTransaction();
			$sql = "update usuarios set usuario = ?, senha = ? where id = ?";
			$stmt = $this->con->prepare($sql);
			$stmt->bindValue(1, $usuario->getUsuario());
			$stmt->bindValue(2, $usuario->getSenha());
			$stmt->bindValue(3, $usuario->getId());
			$stmt->execute();	
			$this->con->commit();
		}catch(PDOException $e){
			$this->con->rollback();
			die($e->getMessage());
		}

	}


	public function remove(Usuario $usuario){
		try{
			$this->con->beginTransaction();
			$sql = "delete from usuarios where id = ?";
			$stmt = $this->con->prepare($sql);
			$stmt->bindValue(1, $usuario->getId());
			$stmt->execute();	
			$this->con->commit();
		}catch(PDOException $e){
			$this->con->rollback();
			die($e->getMessage());
		}
	}
	

	public function remove2(int $id){
		try{
			$this->con->beginTransaction();
			$sql = "delete from usuarios where id = ?";
			$stmt = $this->con->prepare($sql);
			$stmt->bindValue(1, $id);
			$stmt->execute();	
			$this->con->commit();
		}catch(PDOException $e){
			$this->con->rollback();
			die($e->getMessage());
		}
	}

}

