<?php
	function fizzbuzz($fizz, $buzz, $num) {
		$output = '';
		for($a = 1; $a <= $num; $a++) {
			if($a % $fizz && $a % $buzz) {
				$output .= ' ' . $a;
			} else {
				$output .= $a % $fizz ? '' : ' F';
				$output .= $a % $buzz ? '' : 'B';
			}			
		}
		return $output;
	}
	echo fizzbuzz(2, 4, 18);
 ?>