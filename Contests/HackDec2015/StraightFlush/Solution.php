<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 1/30/16
 * Time: 2:27 PM
 */

namespace HackerRank\Contests\HackDec2015\StraightFlush;


class Solution
{
    private static $rank = ['A', '2', '3', '4', '5', '6', '7', '8', '9', 'T', 'J', 'Q', 'K', 'A'];
    private static $suit = ['S', 'H', 'D', 'C'];
    protected $hand;

    public function __construct($h)
    {
        $this->hand = $h;
    }

    public function isStraightFlush()
    {
        if(!$this->isSameSuit())
        {
            return false;
        }
    }

    private function isSameSuit()
    {
        $cards = $this->hand;
        $last  = '';
        for($i = 0; $i < count($cards); $i++)
        {
            $suit = substr($cards[$i], 1, 1);
            if($i === 0)
            {
                $last = $suit;
            }
            if($last !== $suit)
            {
                return false;
            }
        }
        return true;
    }
}

/*$hand = ['3C', '4H', '6C', '7C', '5C'];
$solution = new Solution($hand);
$solution->isStraightFlush();*/