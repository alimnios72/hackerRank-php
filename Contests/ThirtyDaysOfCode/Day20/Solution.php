<?php
namespace HackerRank\Contests\ThirtyDaysOfCode\Day20;

class Solution 
{
    protected $pattern = "/[\s\!\[,\?\.\\\_'@\+\]]+/";

    public function wordSplit($string)
    {
        return preg_split($this->pattern, $string, -1, PREG_SPLIT_NO_EMPTY);
    }
}

//$s = "He is a very very good boy, isn't he?";


//$words = preg_split("/[\s\!\[,\?\.\_'@\+\]]+/", $s, -1, PREG_SPLIT_NO_EMPTY);
/*$solution = new Solution();
$words = $solution->wordSplit($s);
echo count($words)."\n";
echo implode("\n", $words)."\n";*/
?>