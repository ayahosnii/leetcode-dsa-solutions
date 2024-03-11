<?php

use src\algorithms\stringmatching\CheckPrefixSentence;

require_once __DIR__ . '/vendor/autoload.php';

$check = new CheckPrefixSentence();
$sentence = "i love eating burger";
$searchWord = "burg";
echo $check->isPrefixOfWord($sentence, $searchWord);