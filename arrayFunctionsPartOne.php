<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Function array_change_key_case

$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));

$input_array2 = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array2, 2));
print_r(array_chunk($input_array2, 2, true));

//Function array_column()
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

echo "<br/>";
 
$first_names = array_column($records, 'first_name');
print_r($first_names);

$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);

echo "<br/>";

$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));

echo "<br/>";

//Function array_diff_assoc

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);
print_r($result);

$array3 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array4 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_diff_key($array3, $array4));