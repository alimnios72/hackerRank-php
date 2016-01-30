<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 1/29/16
 * Time: 9:54 PM
 */

namespace HackerRank\Contests\ThirtyDaysOfCode\Day29;

class Solution
{
    protected $string;

    public function __construct($s)
    {
        if(strlen($s) < 2)
        {
            throw new \Exception('Invalid string');
        }
        $this->string = $s;
    }

    public function isFunny()
    {
        $s   = $this->string;
        $len = strlen($s);
        for($i=1; $i<$len; $i++)
        {
            $normal   = abs(ord($s[$i]) - ord($s[$i-1]));
            $reversed = abs(ord($s[$len-$i-1]) - ord($s[$len-$i]));
            if($normal !== $reversed)
            {
                return false;
            }
        }
        return true;
    }
}

$s = 'b';
$solution = new Solution($s);
echo $solution->isFunny() ? 'Funny' : 'Not Funny';