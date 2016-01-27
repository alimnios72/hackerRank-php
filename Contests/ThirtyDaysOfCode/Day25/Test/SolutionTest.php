<?php

/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 1/26/16
 * Time: 11:17 PM
 */

namespace HackerRank\Contests\ThirtyDaysOfCode\Day25\Test;

use HackerRank\Contests\ThirtyDaysOfCode\Day25\Solution;

class SolutionTest extends \PHPUnit_Framework_TestCase
{
    protected $solution;

    public function setup()
    {
        $this->solution = new Solution();
    }

    public function primeNumbers()
    {
        return [
            [5],
            [7],
            [7237],
            [7919],
            [7907],
            [7883],
            [902501],
            [999983]
        ];
    }

    public function notPrimeNumbers()
    {
        return [
            [0],
            [1],
            [30],
            [35],
            [70],
            [11]
        ];
    }

    /**
     * @dataProvider primeNumbers
     */
    public function testNumbersArePrime($n)
    {
        $this->assertTrue($this->solution->isPrime($n));
    }

    /**
     * @dataProvider notPrimeNumbers
     */
    public function testNumbersAreNotPrime($n)
    {
        $this->assertFalse($this->solution->isPrime($n));
    }
}