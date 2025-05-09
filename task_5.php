<?php

// Create associative array to store at least 5 elements and view data by using “print_r” or 
// “var_dump”. And assign new value to last element and view array again after update by using 
// “print-r ” or “var_dump”

$assoc_array = array("key1" => "value1",
                "key2" => "value2",
                "key3" => "value3",
                "key4" => "value4",
                "key5" => "value5");

var_dump($assoc_array);

$assoc_array ["key6"] = "value6";

var_dump($assoc_array);