<?php	
	define('NUMBER', 5); //или const NUMBER = 5;
	$count_numbers = 0;
	$count_sum = 0;
	for($i=0; $i < 100; $i++) {
		if($i % 5 == 0) {
			echo $i . '<br>';
			$count_numbers++;
			$count_sum += $i;
		}
	}
	echo 'Всего ' . $count_numbers . ' цифр <br>';
	echo 'Их сумма равна ' . $count_sum . ' <br>';
?>

