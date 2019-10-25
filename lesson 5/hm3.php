<?php
$time = microtime(true);
define('MAX_PRIME_NUMBERS', 5000);
define("LIMIT",MAX_PRIME_NUMBERS * MAX_PRIME_NUMBERS);
define("SQRT_LIMIT",floor(sqrt(LIMIT)));
 
function using_string(){
        $sieve = str_repeat("\1", LIMIT+1);

        for($i=2;$i<=SQRT_LIMIT;$i++){
			if($sieve[$i]==="\1"){
				for($j=$i*$i; $j<=LIMIT; $j+=$i){
					$sieve[$j]="\0";
				}
			}
		}
       
        $temp=array();
		$sum = 0;
		for($i=2;$i<=LIMIT;$i++) {
			if(ord($sieve[$i])) {
				$temp[]=$i;
				$sum += $i;
			}

			if(count($temp) == MAX_PRIME_NUMBERS) break;
		}
		return $sum;
}

echo using_string() . PHP_EOL;
echo microtime(true) - $time;
?>