<?php

class Solution
{

    function addTwoNumbers($l1, $l2)
    {

        $aaa = new ListNode('sfs');
        $l1 = array_reverse($l1);
        $l2 = array_reverse($l2);
        $l1_number = (int) implode("", $l1);
        $l2_number = (int) implode("", $l2);
        $sum = $l1_number + $l2_number;
        $reverse_sum = (int) strrev($sum);
        // cast to string to 
        $str_array = str_split($reverse_sum);
        $int_array = array_map(function ($val) {
            return (int) $val;
        }, array_values($str_array));

        return array_values($int_array);
    }
}

// Input: l1 = [2,4,3], l2 = [5,6,4]
// Output: [7,0,8]
// Explanation: 342 + 465 = 807.

$sol = new Solution;
$answer = $sol->addTwoNumbers([2, 4, 3], [5, 6, 4]);
return $answer;
