<?php
	$arr1 = ['apple', 'orange', 'strawberry'];
	$arr2 = ['potato', 'cabbage', 'tomato'];

	function arrays_compare($arr1, $arr2) {
		    if (!is_array($arr1) || !is_array($arr2)) {
				throw new Exception('Аргумент функции не массив!');
			}
			// функция с помощью array_map проходится по каждому элементу массивов $arr1 и $arr2 и применяет анонимную функцию(замыкание) которая возвращает разницу длин строк элементов массива, а array_map в свою очеред возвращает массив элементами которого являются разницы длин строк. А затем спомощью функции max находит максимальное значение массива и возвращает его.
			return max(array_map(function($a, $b) { return abs(strlen($a)-strlen($b)); }, $arr1, $arr2));
	}	
	
	try {
		echo arrays_compare($arr1, $arr2) . "\n";
	} catch (Exception $e) {
		echo 'Поймано исключение: ',  $e->getMessage(), "\n";
	}
?>
