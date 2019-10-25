<?php
	function fizzbuzz($fizz, $buzz, $num) {
		$output = '';
		for($a = 1; $a <= $num; $a++) {
			if($a % $fizz == 0 && $a % $buzz == 0) {
				$output .= ' FB';
			} elseif($a % $fizz == 0) {
				$output .= ' F';
			} elseif($a % $buzz == 0) {
				$output .= ' B';
			} else {
				$output .= ' ' . $a;
			}			
		}
		return $output;
	}
	
	echo fizzbuzz(2, 4, 18);
 ?>