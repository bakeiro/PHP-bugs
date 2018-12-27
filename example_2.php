<?php

//compare after deduct
$x = 8 - 6.4;
$y = 1.6;
if($x === $y){
	echo "they are equal!";
}
echo "x = ".$x."  y = ".$y."\n";


//compare after floatval fun
$num_1 = 0;
$num_2 = floatval(0);

if($num_1 === $num_2){
	echo "they are equal!";
}
echo "num_1 = ".$num_1."  num_2 = ".$num_2."\n";