<?php

class Util {

	//retorna um array com as chaves de um outro array
	//$array = array retornado do select
	//$string_key = nome da chave
	public function getArrayofKeys($array, $string_key){

		$keys = [];
		$repetido = false;
		foreach ($array as $subarray){

			$key = $subarray[$string_key];
			for($i = 0; $i < sizeof($keys); $i++){
				if($key == $keys[$i]){
					$repetido = true;
					break;
				}
			}
			if($repetido != true){
				$keys[] = $key;
			}

			$repetido = false;

		}

		return $keys;

	}

	//retorna um array(key => array[])
	//$arrayAll = array retornado do select
	//$array_of_keys = array retornado da função getArrayofKeys
	//$string1/$string2 = nomes das chaves
	public function getArrayKeyValue($arrayAll, $array_of_keys, $string1, $string2){

		$array = [];
		$result = array_fill_keys($array_of_keys, $array);
		//print_r($result);
		foreach ($arrayAll as $subarray){

			$value = $subarray[$string1]; 
			$key = $subarray[$string2];

			foreach($array_of_keys as $i){

				if($key == $i){
					$result[$key][] = $value;
				}

			}
			
		}

		return $result;

	}

	//retorna um array com a quantidade de cada público-alvo em cada natureza
	public function getQuantidade($array, $array_of_keys){

		$i = 0;
		$quant = [];
		foreach ($array as $natPublico) {
			
			$quant = array_count_values($natPublico);
			$array[$array_of_keys[$i]] = $quant;
			$quant = [];
			$i++;

		}

		return $array;

	}

	//dados utilizados no gráfico
	public function getChartdata($arrayQuant){

		echo "[['Language', 'Speakers (in millions)'],";
		foreach($arrayQuant as $quant){
			echo "['" . utf8_encode(key($arrayQuant)) . "'," . $quant . "],";
			next($arrayQuant);
		}
		echo "]";
		
	}

}

?>