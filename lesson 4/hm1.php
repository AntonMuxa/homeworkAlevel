<?php
	$arr = [ -5, 9, 2, 3, 4, 5, 11, 1, 6, 22, -23];
	function maxValInArray($arr) {
		$max = '';
		foreach($arr as $item) {
			if($item > $max) {
				$max = $item;
			}
		}
		return $max;
	}
	echo maxValInArray($arr) . "\n";
	
	$arr_str = ['str', 'strstr', 'apple', 'orange', 'table', 'chair', 'description', 'oil', 'no', 'easy'];
	function maxStrInArray($arr) {
		$max = '';
		foreach($arr as $item) {
			if(mb_strlen($item) > mb_strlen($max)) {
				$max = $item;
			}
		}
		return $max;
	}
	echo maxStrInArray($arr_str);
?>

