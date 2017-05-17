<?php 
	function imprimeAlgo(){
		echo "EEEP Onelio Porto<br>";
		echo "Avenida E, 471, Prefeito José Walter<br>";
		echo "Fortaleza-CE<br><br>";
	}

	function calculaArray(){
		$produtos = array("sabao em po"=>2.50,"amaciante"=>6.75);
		$soma = 0.0;
		foreach ($produtos as $key => $value) {
			echo $key ."=> R$". $value."<br>";
			$soma = $soma+$value;
		}
			echo "Total: ".$soma;
	}
?>