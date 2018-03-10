<?php

interface ITelevisao{
	public function aumentaVolume();
	public function diminuiVolume();
	public function trocarCanal($canal);
	public function liga();
	public function desliga();
}

class TV implements ITelevisao
{
	public $volume = 10;
	public $canal = 5;
	public $estado = false;

	public function aumentaVolume(){
		$this->volume += 1;
		echo("<br>Volume: ".$this->volume);
	}

	public function diminuiVolume(){
		$this->volume -= 1;
		echo("<br>Volume: ".$this->volume);
	}

	public function trocarCanal($canal){
		$this->canal = $canal;
		echo("<br>O canal atual eh: ".$this->canal);
	}

	public function liga(){
		if($this->estado){
			echo("<br>A tv ja esta ligada.");
		}else{
			$this->estado = true;
			echo("<br>A tv foi ligada.");
		}
	}

	public function desliga(){
		if($this->estado){
			$this->estado = false;
			echo("<br>A tv foi desligada.");
		}else{
			echo("<br>A tv ja esta desligada.");
		}
	}
}

$tv = new TV();

$tv->liga();
echo("<br>Volume: ".$tv->volume);
echo("<br>Canal: ".$tv->canal);
if($tv->estado){
	echo("<br>TV ligada");	
}else{
	echo("<br>TV desligada");	
}

$tv->aumentaVolume();
$tv->trocarCanal(161);

$tv->diminuiVolume();
$tv->diminuiVolume();
$tv->diminuiVolume();
$tv->diminuiVolume();
$tv->trocarCanal(79);
$tv->desliga();
$tv->desliga();