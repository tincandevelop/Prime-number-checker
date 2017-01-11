<?php
 $myfile = fopen("primes.txt", "r") or die("Unable to open file!");
 $prime = array();
 while(!feof($myfile)) {
   array_push($prime, intval(fgets($myfile)));
 }
 fclose($myfile);
 $length = sizeof($prime);
 if($_GET["num"]){
  $num = htmlspecialchars($_GET["num"]);
 }
 function isPrime(){
   global $length, $prime, $num;
   for($i=0;$i<=$length - 1;$i++){
     if($num == $prime[$i]){
       echo "true";
       return;
     }elseif(intval($prime[$i]) > intval($num)){
       echo "false";
       return;
     }
   }
   echo "false";
   return;
 }
 isPrime();
?>
