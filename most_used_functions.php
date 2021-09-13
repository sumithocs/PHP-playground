<?php
$array = array('cat', 'dog', array('rex', 'kitty'), array('black', 'white', array('white spots', '')));
echo count($array, 1) . PHP_EOL;

$string = "My name is Sumith. I am your new PHP developer";
echo substr($string, 5, 10) . PHP_EOL; // me is Sumi
echo substr($string, -5, 10) . PHP_EOL; // loper ** negative starts end of the string
echo substr($string, 5, -10) . PHP_EOL; // <start>me is Sumith. I am your new PHP<has removed 10 chars> ** If length is given and is negative, then that many characters will be omitted from the end of string **
echo substr($string, -13, -10) . PHP_EOL; // PHP
