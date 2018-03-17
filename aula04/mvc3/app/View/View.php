<?php 

namespace View;

class View
{

	public function render(string $view,array $dados){

		extract($dados);

		$file = BASEDIR . '/src/' . $view . '.php';

		if (file_exists($file)) {
			require $file;
	    } else {
	        echo $file;
	    }

	}
}