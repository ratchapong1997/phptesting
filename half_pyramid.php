<?php
$number = 5;
half_pyramid($number);
half_pyramid2($number);

//แบบที่ 1 *ใช้ font color เพราะ ลองเว้นวรรคธรรมดาแล้วมีปัญหา
function half_pyramid($n){ 

  for ($i = 0; $i < $n; $i++){
	
	for($k = $n; $k > $i+1; $k--){
		echo "<font style='color:#ffffff'>"."O"."O"."</font>";
		}
	
	for($j = 0 ; $j <= $i; $j++){
		echo "O"."<font style='color:#ffffff'>"."O"."</font>";		
		}
	
	echo "<br>";
	}
}

echo "<br>";

//แบบที่ 2 ใช้เว้นวรรคธรรมดา
function half_pyramid2($n){ 

  for ($i = 0; $i < $n; $i++){
	
	for($k = $n; $k > $i+1; $k--){
		echo " "." ";
		}
	
	for($j = 0 ; $j <= $i; $j++){
		echo "O"." ";		
		}
	
	echo "<br>";
	}
}
?>
