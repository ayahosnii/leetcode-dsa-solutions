<?php

namespace src\algorithms\divideandconquer;

class NumberOf1Bits
{
    /**
     * Function to calculate the number of set bits (1s) in an integer.
     *
     * @param Integer
     * @return Integer
     */
    function hammingWeight($n) {
        $res = 0;
        while ($n > 0) {
            $res += $n & 1; // Increment $res if the last bit of $n is 1
            $n >>= 1; // Right shift $n by one position to check the next bit
        }

        return $res;
    }
}
