<?php 

function Primos($inicial, $final){
	$primos = [];

	for($i = $inicial;$i < $final; $i++){
		$divisores = [];

		for($n = 1; $n <= $i; $n++){
			if($i % $n == 0){
				array_push($divisores, $n);
			}
		}

		if(count($divisores) == 2){
			array_push($primos, $i);
		}
	}

	return $primos;
}

// teste
$inicial = 1;
$final = 100;

$primos = primos($inicial, $final);
print_r($primos);


 ?>