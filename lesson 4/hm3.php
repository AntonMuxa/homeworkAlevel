<?php
	function fizzbuzz($fizz_arr) {
		$fizz = $fizz_arr[0];
		$buzz = $fizz_arr[1];
		$func = array_map(function($a) use ($fizz, $buzz) { 
			$output = '';
			if($a % $fizz && $a % $buzz) {
				$output .= ' ' . $a;
			} else {
				$output .= $a % $fizz ? '' : ' F';
				$output .= $a % $buzz ? '' : 'B';
			}			
			
			return $output;
		}, range(1,$fizz_arr[2]));

		return $func;
	}

	function file_convert_to_fizzbuzz($file1, $file2) {
		$contents = file($file1, FILE_IGNORE_NEW_LINES);
		$handle = fopen($file2, "w+");
		
		$fizzbuzz = array_map('fizzbuzz', array_map(function($row) {
			return explode(',', $row);
		}, $contents));
		
		array_map(function($row) use($handle) {
			fwrite($handle, implode($row) . PHP_EOL);
		},$fizzbuzz);
		
		fclose($handle);	
	}
	
	file_convert_to_fizzbuzz('file_fizzbuzz.txt', 'converted_fizzbuzz.txt');
?>
