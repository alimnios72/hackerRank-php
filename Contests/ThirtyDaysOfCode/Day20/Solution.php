<?php
$s = "a[ ";


$words = preg_split("/[\s\!\[,\?\.\_'@\+\]]+/", $s, -1, PREG_SPLIT_NO_EMPTY);
echo count($words)."\n";
echo implode("\n", $words)."\n";
?>