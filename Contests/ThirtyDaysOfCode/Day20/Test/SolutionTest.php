<?php

/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 1/26/16
 * Time: 11:17 PM
 */

namespace HackerRank\Contests\ThirtyDaysOfCode\Day20\Test;

use HackerRank\Contests\ThirtyDaysOfCode\Day20\Solution;

class SolutionTest extends \PHPUnit_Framework_TestCase
{
    protected $solution;

    public function setup()
    {
        $this->solution = new Solution();
    }

    public function testEmptyString()
    {
        $s = "";
        $words = $this->solution->wordSplit($s);
        $this->assertEquals(count($words), 0);
    }

    public function testWhiteSpaceString()
    {
        $s = " ";
        $words = $this->solution->wordSplit($s);
        $this->assertEquals(count($words), 0);
    }

    public function testExampleString()
    {
        $s = "He is a very very good boy, isn't he?";
        $words = $this->solution->wordSplit($s);
        $this->assertEquals(count($words), 10);
    }

    public function testAllDelimitersString()
    {
        $s = "w1!w2[w3,w4?w5.w6\\w7_w8'w9@w10+w11]";
        $words = $this->solution->wordSplit($s);
        $this->assertEquals(count($words), 11);
    }
}