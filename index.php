<?php
require_once('bubbler.php');

$testData = array(12, 48, 99, 15000, -50, 1, 0, 3, 7, 88, 11, 33, 13, 20, 5, 6);
//$testData = array(12, 48, 99, 15000, -50);
$aBubbler = new bubbler($testData);
//$aBubbler = new foreachtest($testData);
$aBubbler->sortRecursive();
echo '<h2>Before:</h2>';
print_r($testData);
echo '<h2>After:</h2>';
print_r($aBubbler->getArray());
?>