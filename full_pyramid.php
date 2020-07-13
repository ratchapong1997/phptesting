<?php

$number = 5;

full_pyramid($number);
full_pyramid2($number);

//แบบที่ 1 ใช้ font color *เพราะลองเว้นวรรคธรรมดาแล้วมีปัญหา
function full_pyramid($n){

  for ($i = 0; $i < $n; $i++){
	
	for($k = $n; $k > $i+1; $k--){
		echo "<font style='color:#ffffff'>"."O"."O"."</font>";
		}
	
	for($j = 0 ; $j <= $i; $j++){
		echo "O"."<font style='color:#ffffff'>"."O"."</font>";		
		}
	
	for($l = $n; $l < $i; $l--){
		echo "<font style='color:#ffffff'>"."O"."O"."</font>";
		}
	
	for($m = 1 ; $m <= $i; $m++){
		echo "O"."<font style='color:#ffffff'>"."O"."</font>";		
		}
	
	echo "<br>";
	}
}

echo "<br>";

//แบบที่ 2 ใช้เว้นวรรคธรรมดา
function full_pyramid2($n){
	
  for ($i = 0; $i < $n; $i++){
	
	for($k = $n; $k > $i+1; $k--){
		echo " "." ";
		}
	
	for($j = 0 ; $j <= $i; $j++){
		echo "O"." ";	
		}
	
	for($l = $n; $l < $i; $l--){
		echo " "." ";
		}
	
	for($m = 1 ; $m <= $i; $m++){
		echo "O"." ";		
		}
	
	echo "<br>";
	}
}


?>
