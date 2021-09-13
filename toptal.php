<?php

// https://www.toptal.com/php/interview-questions

// 1. ---------------------------------

/* $x = true and false;
var_dump($x); */

// 2. -----------------------------------

/* $x = 5;
echo $x;
echo "<br />";
echo $x++ + $x++;
echo "<br />";
echo $x;
echo "<br />";
echo $x-- - $x--;
echo "<br />";
echo $x; */

// The term $x++ says to use the current value of $x and then increment it.

// 3. -----------------------------------------

/* var_dump(0123 == 123); // 0 makes the value an octal, therefore false
var_dump('0123' == 123); // string will converted to int, therefore true
var_dump('0123' === 123); // strict type checked, so false */

/* $referenceTable = array();
$referenceTable['val1'] = array(1, 2);
$referenceTable['val2'] = 3;
$referenceTable['val3'] = array(4, 5);

$testArray = array();

$testArray = array_merge($testArray, $referenceTable['val1']);
var_dump($testArray);
$testArray = array_merge($testArray, $referenceTable['val2']);
var_dump($testArray);
$testArray = array_merge($testArray, $referenceTable['val3']);
var_dump($testArray); */

// cannot array_merge if either one of the arg is not an array. Fatal error

// 4. --------------------------------------------

/* $x = 3 + "15%" + "$25";
echo $x; */

// PHP Fatal error:  Uncaught TypeError: Unsupported operand types: int + string

// 5. ---------------------------------------------

/* $text = 'John ';
$text[10] = 'Doe';

// var_dump($text); // string(11) "John      D"
// strlen($text) will return 11. */

// 6. ------------------------------------------------

/* var_dump(PHP_INT_MAX); // int(9223372036854775807)
var_dump(PHP_INT_MAX + 1); // double(9.2233720368548E+18)
var_dump((int) (PHP_INT_MAX + 1)); // int(-9223372036854775808) */

// 7. ---------------------------------------

/* $a = "PHP";
$a = $a + 1;
echo $a;
 */
// PHP Fatal error:  Uncaught TypeError: Unsupported operand types: string + int

// 8. ----------------------------------------

/* $array = array(
    '0' => 'z1',
    '1' => 'Z10',
    '2' => 'z12',
    '3' => 'Z2',
    '4' => 'z3',
);

// sort natural case-insensitive order

// output should be below 
// array (
// 	'0' => 'z1',
// 	'3' => 'Z2',
// 	'4' => 'z3',
// 	'1' => 'Z10',
// 	'2' => 'z12',
// )

natcasesort($array);
var_dump($array);
// if needed new keys 
$array_with_new_keys = array_values($array); */

// 9. ----------------------------------------

/* $x = NULL;

if ('0xFF' == 255) {
    $x = (int)'0xFF';
}

var_dump($x); // NULL */

// 10. ------------------------------

// check a number an odd or even without using any conditions

/* $odd_or_even = array(0 => "even", 1 => "odd");
$number = 7;
echo "Number is " . $odd_or_even[$number % 2]; */

// 11.---------------------------------
//Highlight all the Chinese characters in red and return the string.

// Example input
// $str = 'drinking giving jogging 喝 喝 passing 制图 giving 跑步 吃';

// 12. ------------------------------

// example of NESTED ternary 

/* $number_class = $number == 0 ? 'blue' : ($number > 0 ? 'green' : 'red'); */
