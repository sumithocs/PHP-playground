<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {

        for ($i = 0; $i < count($nums); $i++) {
            $num1 = $nums[$i];
            $remain = array_slice($nums, $i + 1, count($nums), true);
            foreach ($remain as $key => $rem) {
                if ($rem + $num1 == $target) {
                    return [$i, $key];
                }
            }
        }
    }
}

$sol = new Solution;
var_dump($sol->twoSum([2, 7, 11, 15], 9));
