<?php
	$arr_str = ['s123tr', 'strstr', 'app123le', 'orange', 'table', 'chair', 'description', 'oil', 'no', 'easy'];
	function countStr($arr) {
		foreach($arr as $item) {
			$total_str = 0;

			foreach(str_split($item) as $char) {
				if(preg_match('/[a-zа-яё]+/i',$char)) {
					$total_str++;
				}
			}
			echo $total_str . '<br>';
			unset($total_str);
		}

	}
	countStr($arr_str);
?>

