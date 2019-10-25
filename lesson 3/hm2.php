<?php
function read_file($file_name) {
	$file = file($file_name, FILE_IGNORE_NEW_LINES);
	return $file;
}

function each_row_length($file) {
	$each_row_length = array();
	foreach($file as $row) {
		$each_row_length[] = mb_strlen($row);
	}
	return $each_row_length;
}

function to_other_file($file, $each_row_length) {
	$middle = array_sum($each_row_length) / count($each_row_length);
	$handle = fopen('middle_length.txt', "w+");
	foreach($each_row_length as $key => $row) {
		if($row > $middle) {
			fwrite($handle, $file[$key] . PHP_EOL);
		}
	}
	fclose($handle);
	echo 'its finished';
}

$file = read_file('file.txt');

$each_row = each_row_length($file);

to_other_file($file, $each_row);

?>

