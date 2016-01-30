<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 1/29/16
 * Time: 10:16 PM
 */

namespace HackerRank\Contests\ThirtyDaysOfCode\Day29\Test;

use HackerRank\Contests\ThirtyDaysOfCode\Day29\Solution;

class SolutionTest extends \PHPUnit_Framework_TestCase
{
    public function invalidStrings()
    {
        return [
            [''],
            [' '],
            ['g']
        ];
    }
    /**
     * @dataProvider invalidStrings
     * @expectedException Exception
     */
    public function testInvalidStrings($s)
    {
        $solution = new Solution($s);
    }

    public function testFunnyString()
    {
        $solution = new Solution('acxz');
        $this->assertTrue($solution->isFunny());
    }

    public function testNotFunnyString()
    {
        $solution = new Solution('bcxz');
        $this->assertFalse($solution->isFunny());
    }
}