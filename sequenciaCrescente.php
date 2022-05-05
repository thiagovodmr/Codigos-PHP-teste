<?php 

function sequenciaCrescente($array){
	$numerosForaDaSequencia = 0;
	$anterior = 0;
	for($i = 0; $i < count($array); $i++){
		if($i == 0){
			$anterior = $array[0];
		}else{
			if($array[$i] > $anterior){
				$anterior = $array[$i];
			}else{
				if($i == 1){
					$anterior = $array[$i];
				}
				$numerosForaDaSequencia += 1;	
			}
		}		
	}

	if($numerosForaDaSequencia > 1){
		return "false";
	}else{
		return "true";
	}

}




//teste
// $array = [1, 2, 3 , 4, 99, 5, 6];

echo sequenciaCrescente($array),PHP_EOL;




?>