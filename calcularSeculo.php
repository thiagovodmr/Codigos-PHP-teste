<?php 


function SECULOANO($ano){
	$seculo = ($ano / 100);
	$intSeculo = intval($seculo);

	//verifica se já estamos no século seguinte
	// exemplo = (19.05) estamos no inicio do século 20

	if($seculo > $intSeculo){
		$seculo++;
	}

	return intval($seculo);
}

//teste
$ano = 1905;
$seculo = SECULOANO($ano);

echo "Ano = ".$ano." seculo = ".$seculo,PHP_EOL;








?>