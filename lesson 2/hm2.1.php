<?php 

// первый пункт
if($a > $b){
    echo $a." больше, чем ".$b;
} elseif($a == $b){
    echo $a." равно ".$b;
} else {
    echo $a." не больше и не равно ".$b;
}

// второй пункт

echo "Give me the mark!\n";
$handle = fopen ("php://stdin","r");
$mark = fgets($handle);

if($mark == 2) {
	echo "I am better!!";
} elseif($mark == 3) {
	echo "OK :(";
} elseif($mark == 4) {
	echo "I am good :)";
} elseif($mark == 5) {
	echo "YeeeeWhaaaa!!!!";
} 
echo "\n";

// третий пункт

echo "Give it to me!\n";
$handle = fopen ("php://stdin","r");
$number = fgets($handle);

switch(true) {
	case ($number > 100):
		echo "Thanks, man!";
		break;
	case (($number > 10) && ($number < 100)):
		echo "OK :(";
		break;
	default:
		echo "WHAAAAT????";
}

echo "\n";

// четвертый пункт я думаю раскрыт в третьем

// пятый пункт переписал второй пункт

echo ($mark == 2) ? "I am better!!" : ($mark == 3) ? "OK :(" : ($mark == 4) ? "I am good :)" : ($mark == 5) ? "YeeeeWhaaaa!!!!" : '';

// шестой пункт 
/*не точное сравнение это язык сам пытается привести к одному типу и сравнить данные например '2' == 2 тогда будет true 
а точное сравнение это когда типы данных тоже сравниваются пример выше выдаст false так как разный тип строка и число а чтобы сравнить два числа то надо написать 2 === 2 или если строки то так '2' === '2' тогда будет true */

