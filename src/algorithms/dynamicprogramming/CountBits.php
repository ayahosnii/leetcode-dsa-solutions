<?php

namespace src\algorithms\dynamicprogramming;

class CountBits {


    /**
     * This function calculates the number of bits set to 1 for each integer from 0 to $n.
     * It utilizes dynamic programming to optimize the computation.
     * @param Integer $n The maximum integer value to consider.
     * @return Integer[] An array where each element represents the count of set bits for the corresponding integer.
     */


    function countBits(int $n): array {
        $ans = array_fill(0, $n + 1, 0);
        for ($i = 1; $i <= $n; $i++) {
            $ans[$i] = $ans[$i >> 1] + ($i & 1);
        }
        return $ans;
    }


}
