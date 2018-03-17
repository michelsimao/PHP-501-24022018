<?php

namespace Model;

use DAO\UsuariosDAO;
use DAO\PostsDAO;

class Model
{

	private $usuariosDAO;
	private $postsDAO;

	public function __construct(){
		$this->UsuariosDAO = new UsuariosDAO();
		$this->PostsDAO = new PostsDAO();
	}

	public function getUsuarios(){
		return $this->UsuariosDAO->all();
	}

	public function getPosts(){
		return $this->PostsDAO->all();
	}
}