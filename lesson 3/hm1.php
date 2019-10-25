<?php
function read_file($file_open) {
	$file = fopen($file_open, 'r');
		$line = array();
		while(!feof($file)) {
			$line[] = fgets($file);
		}
	fclose($file);
	
	return $line;
}

function write_file_through_line($file_rows, $to_file) {
	$handle = fopen($to_file, 'w+');
	foreach($file_rows as $key => $row) {
		if($key % 2 == 0) {
			fwrite($handle, $row . PHP_EOL);
		}
	}
	fclose($handle);
}

$file = read_file('file.txt');

write_file_through_line($file, 'to_file.txt');
?>

