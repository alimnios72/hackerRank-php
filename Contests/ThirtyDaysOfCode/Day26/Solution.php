<?php
namespace HackerRank\Contests\ThirtyDaysOfCode\Day26;

/**
* 
*/
class Solution
{
    const FINE_DAY   = 15;
    const FINE_MONTH = 500;
    const FINE_YEAR  = 10000;

    protected $actualDate;
    protected $expectedDate;

    public function __construct($a, $e)
    {
        try {
            $this->actualDate   = \DateTime::createFromFormat("d-m-Y", "{$a[0]}-{$a[1]}-{$a[2]}");
            $this->expectedDate = \DateTime::createFromFormat("d-m-Y", "{$e[0]}-{$e[1]}-{$e[2]}");
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function calculateFee()
    {
        if ($this->expectedDate >= $this->actualDate) {
            return 0;
        }
        $interval = $this->actualDate->diff($this->expectedDate);
        $days = $interval->d;
        $months = $interval->m;
        if ($this->actualDate->format('m') === $this->expectedDate->format('m')) {
            return $days * self::FINE_DAY;
        }
        elseif ($this->actualDate->format('y') === $this->expectedDate->format('y')) {
            return $months * self::FINE_MONTH;
        }
        return self::FINE_YEAR;
    }
}

$a = [9, 6, 2015];
$e = [6, 6, 2015];
$solution = new Solution($a, $e);
echo $solution->calculateFee();
echo "\n";
?>