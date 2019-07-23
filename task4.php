<?php
$array1 = array('b' => 1, 'r' => 2, 'g' => 3, 'p' => 4 );
$array2 = array('g' => 5, 'b' => 6, 'y' => 7, 'c' => 8 );

var_dump(array_intersect_key($array1,$array2));

