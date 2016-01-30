<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 1/29/16
 * Time: 11:36 PM
 */
namespace HackerRank\Contests\ThirtyDaysOfCode\Day27;

class Solution
{
    protected $students;
    protected $treshold;

    public function __construct($n, $k)
    {
        $this->students = $n;
        $this->treshold = $k;
    }

    public function isClassCancelled($times)
    {
        $onTime = 0;
        foreach($times as $time)
        {
            if($time < 1)
            {
                $onTime++;
            }
            if($onTime >= $this->treshold)
            {
                return false;
            }
        }
        return true;
    }
}
