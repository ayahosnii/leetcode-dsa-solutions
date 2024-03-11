<?php

namespace src\algorithms\stringmatching;

class PrefixWord
{
    public function prefixCount($words, $pref) {
      $count = 0;

      foreach ($words as $word){
          if (strpos($word, $pref) === 0){
              $count ++;
          }
      }
      return $count;
    }
}