<?php 

$limit = 20;
$arrayAleatorio = [];

for($i = 0; $i < $limit; $i++){
	array_push($arrayAleatorio, rand(1,10));
}

$arrayContado = array_count_values($arrayAleatorio);
$numerosNaoRepetidos = []; 

foreach($arrayContado as $valor => $count){
	if($count == 1){
		array_push($numerosNaoRepetidos, $valor);
	}
}

$string = "O(s) número(s) não repetidos foram: ".(implode(",", $numerosNaoRepetidos))." .";
echo ($string), PHP_EOL;

?>