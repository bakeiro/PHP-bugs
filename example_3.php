<?php

if("000" == "0000"){
	echo "0. equal! \n";
}

if(false == array()){
	echo "1. equal! \n";
}

if(false == 0){
	echo "2. equal! \n";
} 

if(array() != 0){
	echo "3. equal! \n";
}

if(false == array()){
	echo "4. equal! \n";
}

if(array() == 0){
	echo "5. equal! \n";
}

//Most dangerous
$pass_db = "secret";
$pass_input = 0;

if($pass_db == $pass_input){
	echo "6. equal! \n";
}