<?php
$e= array ("200","100","50","20","10","5","2","1");
$s=$_POST["argent"]*100;

for($i=0; $i<count($e); $i++){

		  $m=floor($s/$e[$i]);
  		$s= $s - ($e[$i]*$m);

     echo "On rend " . $m . " espèces de " . $e[$i]/100 . "<br>";
}
 ?>
