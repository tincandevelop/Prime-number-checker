<?php
$lastLine = "100000";

$myfile = fopen("primes.txt", "r") or die("Unable to open file!");
$prime = array();
while(!feof($myfile)) {
  array_push($prime, intval(fgets($myfile)));
}

$lastLine = $prime[sizeof($prime) - 2];

echo $lastLine;

?>
