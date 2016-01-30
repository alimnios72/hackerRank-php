<?php

/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 1/29/16
 * Time: 11:53 PM
 */
namespace HackerRank\Contests\ThirtyDaysOfCode\Day27\Test;

use HackerRank\Contests\ThirtyDaysOfCode\Day27\Solution;

class SolutionTest extends \PHPUnit_Framework_TestCase
{
    public function cases()
    {
        return [
            [ [10, 4],  ],
            [ [4, 3],  ],
            [ [6, 5],  ]
        ];
    }

    public function testCase1()
    {
        $solution = new Solution(3, 3);
        $a = [-1, 0, 4];
        $this->assertTrue($solution->isClassCancelled($a));
    }

    public function testCase2()
    {
        $solution = new Solution(5, 3);
        $a = [0, -4, 5, 6, -1];
        $this->assertFalse($solution->isClassCancelled($a));
    }

    public function testCase3()
    {
        $solution = new Solution(4, 3);
        $a = [0, 8, -1, 4];
        $this->assertTrue($solution->isClassCancelled($a));
    }

    public function testCase4()
    {
        $solution = new Solution(10, 4);
        $a = [-1, -1, -1, -1, 0, 5, 6, -1, 9, 10];
        $this->assertFalse($solution->isClassCancelled($a));
    }

    public function testCase5()
    {
        $solution = new Solution(6, 5);
        $a = [-1, -2, 0, 4, 5, 7];
        $this->assertTrue($solution->isClassCancelled($a));
    }
}