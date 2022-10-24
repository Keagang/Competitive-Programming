<?php
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
$arr = explode(' ', $line);
$ans= $arr[0]*$arr[1]/2;
echo floor($ans);
?>