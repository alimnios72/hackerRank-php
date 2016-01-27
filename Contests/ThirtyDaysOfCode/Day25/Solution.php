<?php
namespace HackerRank\Contests\ThirtyDaysOfCode\Day25;

class Solution
{
    /**
    * Tests if given number is prime
    * @param int Number
    * @return bool
    **/
    public function isPrime($num)
    {
        if($num <= 1)
        {
            return false;
        }
        elseif($num <= 3)
        {
            return true;
        }
        elseif($num % 2 === 0 || $num % 3 == 0)
        {
            return false;
        }
        for($i = 5; $i <= ceil(sqrt($num)); $i = $i + 2)
        {
            if($num % $i === 0)
            {
                return false;
            }
        }
        return true;
    }
}

/*$testCases = [12, 5, 7, 7237, 30, 7919, 28, 7907, 15, 7883, 902501, 999983];
$solution = new Solution();
foreach ($testCases as $n) 
{
    echo $solution->isPrime($n) ? "Prime" : "Not prime";
    echo "\n";
}*/
?>

