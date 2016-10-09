<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 1/30/16
 * Time: 2:37 PM
 */

namespace HackerRank\Contests\HackDec2015\StraightFlush\Test;

use HackerRank\Contests\HackDec2015\StraightFlush\Solution;

class SolutionTest extends \PHPUnit_Framework_TestCase
{
    public function differentSuit()
    {
        return [
            [ ['3C', '4H', '6C', '7C', '5C'] ],
            [ ['3H', '4H', '6C', '7C', '5C'] ],
            [ ['3C', '4C', '6C', '7C', '5H'] ],
            [ ['3C', '4D', '6C', '7C', '5C'] ]
        ];
    }

    /**
     * @dataProvider differentSuit
     */
    public function testDifferentSuit($hand)
    {
        $solution = new Solution($hand);
        $this->assertFalse($solution->isStraightFlush());
    }
}