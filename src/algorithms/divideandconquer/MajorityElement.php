<?php

namespace src\algorithms\divideandconquer;

class MajorityElement
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $c = (int)(count($nums)/2);
        $res = null;
        $newArr = array_count_values($nums);
        foreach ($newArr as $i => $item){
            if ($item > $c) {
                $res = $i;
            }
        }
        return $res;
    }
}