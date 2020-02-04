<?php

/**
 * If indices are not consecutive, one is intepreted as array, and the other one as an object
 */

$list_2 = array(0 => "a", 1 => "b", 3 =>"c");
// $list_2 = array(0 => "a", 1 => "b", 2 =>"c");

header("Content-Type: application/json"); 
echo json_encode($list_2);
