<?php
function absoluteDifference($nums){
    $pairs = array();
    for($i=0; $i<count($nums) -1 ; $i++){
        for($j=$i+1; $j<count($nums) -1; $j++){
            $res = abs($nums[$i] - $nums[$j]);
            if($i == 0 && $j == 1){
                $min = $res;
            }
            elseif($res <= $min ){
                $min = $res;
                $pairs[] = [$nums[$i], $nums[$j]]; 
            }
        }
    }
    var_dump($pairs);
}
$arr = [-20, -3916237, -357920, -3620601, 7374819, -7330761, 30, 6246457, -6461594, 266854];
absoluteDifference($arr);
?>