<?php
$time = microtime(true);
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
	

	$sum = 0;
	$count_numbers = 1;
	$number = 1;
	while($count_numbers <= MAX_PRIME_NUMBERS) {
			if(prime_number($number)) {
				$sum += prime_number($number);
				$count_numbers++;
			}
			$number++;
	}
	echo $sum . PHP_EOL;
	
echo microtime(true) - $time;
?>