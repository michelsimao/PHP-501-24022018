<?php

namespace View;

class View
{
	public function render(array $dados){
		extract($dados);
		include 'src/hello.php'; //enxerga todas as variaveis desse metodo
	}
}