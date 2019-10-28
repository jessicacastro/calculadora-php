<?php

	require_once 'classes/Calculadora.php';

	$n1       = $_POST['n1'];
	$n2 	  = $_POST['n2'];
	$operacao = $_POST['operacao'];

	$calculadora = new Calculadora();

	//Setar valores

	$calculadora->setNum1($n1);
	$calculadora->setNum2($n2);

	function somar($n1,$n2){
		return $n1+$n2;
	}
	function subtrair($n1,$n2){
		return $n1-$n2;
	}
	function multiplicar($n1,$n2){
		return $n1*$n2;
	}
	function dividir($n1,$n2){
		return $n1/$n2;
	}

	switch ($operacao) {
		case 'somar':
			$calculadora->somar($n1,$n2);
			break;

		case 'subtrair':
			$calculadora->subtrair($n1,$n2);
			break;


		case 'multiplicar':
			$calculadora->multiplicar($n1,$n2);
			break;


		case 'dividir':
			$calculadora->dividir($n1,$n2);
			break;
	}

	echo $calculadora->getTotal();



?>