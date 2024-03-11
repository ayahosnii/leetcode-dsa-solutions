<?php

namespace src\algorithms\stringmatching;

class CheckPrefixSentence
{
    /**
     * @param String $sentence
     * @param String $searchWord
     * @return Integer
     */
    function isPrefixOfWord($sentence, $searchWord) {
        $words = explode(" ", $sentence);

        foreach ($words as $key => $word){
            if (strpos($word, $searchWord) === 0){
                return $key + 1;
            }

        }
        return -1;
    }
}