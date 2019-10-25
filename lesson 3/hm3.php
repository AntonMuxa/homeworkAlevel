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

	function file_convert_to_fizzbuzz($file1, $file2) {
		$contents = file($file1, FILE_IGNORE_NEW_LINES);
		$handle = fopen($file2, "w+");
		foreach($contents as $row) {
			$args = explode(',', $row);
			$fizzbuzz = fizzbuzz($args[0], $args[1], $args[2]);
			fwrite($handle, $fizzbuzz . PHP_EOL);
		}
		fclose($handle);	
	}
	
	file_convert_to_fizzbuzz('file_fizzbuzz.txt', 'converted_fizzbuzz.txt');
?>

