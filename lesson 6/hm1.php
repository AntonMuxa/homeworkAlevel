<?php
// brilliant
	function brilliant($number) {
		if($number > 0 && $number % 2 != 0) {
			$center = floor($number / 2);
			$start = $center;
			$stop = $center;

			for ($i = 0; $i < $number; $i++) {
				for ($j = 0; $j < $number; $j++) {
					echo $j >= $start && $j <= $stop ? '*' : ' ';
				}
				if($i < $center) {
					$start--;
					$stop++;
				} else {
					$start++;
					$stop--;
				}
				echo PHP_EOL;
			}
		} else {
			echo 'wrong number';
		}
	}
	brilliant(5);
// brilliant end
// prime palindrome
	define('MAX_PRIME_NUMBERS', 5000);
	
	function prime_number($n) {
		if($n == 1) return false;
		for($i=2; $i <= sqrt($n); $i++) {
			if($n % $i == 0) {
				return false;
			}
		}
		return $n;
	}
	

	$arr = [];
	$count_numbers = 1;
	$number = 1;
	while($count_numbers <= MAX_PRIME_NUMBERS) {
		if(prime_number($number)) {
			if($number == strrev($number)) {
				echo $number . PHP_EOL;
			}
			$count_numbers++;
		}
		$number++;
	}
	// prime palindrome end
	
	// binare 
		$file = file('file_binare.txt', FILE_IGNORE_NEW_LINES);
	
	foreach($file as $row) {
		list($number, $first, $second) = explode(',',$row);
		$bin = decbin($number);
		if(isset($bin[strlen($bin)-1-(int)$first]) && isset($bin[strlen($bin)-1-(int)$second])) {
			if($bin[strlen($bin)-1-(int)$first] == $bin[strlen($bin)-1-(int)$second]) {
				echo $row . ' true' . PHP_EOL;
			} else {
				echo $row . ' false' . PHP_EOL;
			}
		} else {
			echo 'wrong index of number';
		}
	}
	// binare end
 ?>