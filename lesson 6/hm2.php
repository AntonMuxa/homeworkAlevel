<?php
	$arr1 = ['apple', 'orange', 'strawberry'];
	$arr2 = ['potato', 'cabbage', 'tomato'];

	function arrays_compare($arr1, $arr2) {
		return max(array_map(function($a, $b) { return abs(strlen($a)-strlen($b)); }, $arr1, $arr2));
	}
	echo arrays_compare($arr1, $arr2);
?>
