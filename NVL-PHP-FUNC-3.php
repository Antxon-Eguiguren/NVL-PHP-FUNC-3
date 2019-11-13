<?php
	
	$frase1 = "la le li lo lu";
	$frase2 = "la lE li lO lu";
	$frase3 = "la l li lO lu";
	
	function cuentaVocales ($frase) {

		$arrayVocales = array ("a", "e", "i", "o", "u");

		foreach ($arrayVocales as $vocal) {
			if ((substr_count($frase, $vocal) != 0) || (substr_count($frase, strtoupper($vocal)) != 0)) {
				$encontrado = 1;
			} else {
				$encontrado = 0;
				break;
			}
		}
		return $encontrado;
	}

	if (cuentaVocales($frase1) == 1) {
		echo "La frase \"" . $frase1 . "\" contiene todas las vocales." . "\n";
	} else {
		echo "La frase \"" . $frase1 . "\" NO contiene todas las vocales." . "\n";
	} 

	if (cuentaVocales($frase2) == 1) {
		echo "La frase \"" . $frase2 . "\" contiene todas las vocales." . "\n";
	} else {
		echo "La frase \"" . $frase2 . "\" NO contiene todas las vocales." . "\n";
	} 

	if (cuentaVocales($frase3) == 1) {
		echo "La frase \"" . $frase3 . "\" contiene todas las vocales." . "\n";
	} else {
		echo "La frase \"" . $frase3 . "\" NO contiene todas las vocales." . "\n";
	} 

?>