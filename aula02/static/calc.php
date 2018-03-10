<?php

class NaoPodeNegativo extends Exception
{

}

class NaoPodeMaior50 extends Exception
{

}

class NaoPodeDividirPorZero extends Exception
{

}

class NaoPodeValorInfinito extends Exception
{
	
}


class Calc
{
	public static function soma($a, $b){
		if($a < 0 || $b < 0){
			throw new NaoPodeNegativo();
		}elseif(($a + $b) > 50){
			throw new NaoPodeMaior50();
		}else{
			return $a + $b;	
		}
	}

	public static function subt($a, $b){
		if(($a - $b) < 0){
			throw new NaoPodeNegativo();
		}else{
			return $a - $b;	
		}
	}

	public static function divi($a, $b){
		if($a = 0){
			throw new NaoPodeValorInfinito();
		}elseif($b = 0){
			throw new NaoPodeDividirPorZero();
		}else{
			return $a / $b;	
		}
	}

	public static function mult($a, $b){

		return $a * $b;
	}	


}

$calc = new Calc;

try{
	echo $calc->soma(3, -2);
}catch(NaoPodeNegativo $e){
	echo "Nao pode valor negativo";
}

