<style>
* {font-size:20px;}
</style>
<?php
$list_number = $_POST["list_number"];
	$arr = array();
	$seach_number = $_POST["seach_number"];
	$type_seach = $_POST["type_seach"];
	
	do{
		if (is_numeric($list_number[0]))
		{
			$text = "";
			do{
					$text = $text.$list_number[0];
					$list_number = substr($list_number,1);
					
				} 
				while(is_numeric($list_number[0]));
				array_push($arr, $text);
				$list_number = substr($list_number,1);
			}	
		} while(is_numeric($list_number[0]));
		
	
	
 ?>
<meta charset="utf-8" />
<br>
<br>
<form  method="post" action="index.php">

   <center>
  	<table width="500" border="0" cellspacing="0" cellpadding="0">
  	  <tr>
  	    <td width="20%" height="40"><div align="right"><strong>List</strong>&nbsp;</div></td>
  	    <td width="386"><div align="left">
  	      <input name="list_number" type="text" style="width:250px;" />
        </div></td>
      </tr>
  	  <tr>
  	    <td height="40"><div align="right"><strong>ค้นหา&nbsp;</strong></div></td>
  	    <td><div align="left">
  	      <input name="seach_number" type="text" style="width:100px;" />
  	      <input name="seach_btn" type="submit" value="ค้นหา" style="color:#FFF;background-color:#FC3;border-radius:5px;font-size:15px;"  />
        </div></td>
      </tr>
  	  <tr>
  	    <td colspan="2" height="40"><div align="center"><strong>ประเภทการค้นหา</strong></div></td>
      </tr>
  	  <tr>
  	    <td colspan="2" height="40"><div align="center">
  	      <select name="type_seach" style="width:250px;" >
  	        <option value="1">1.Linear Search</option>
  	        <option value="2">2.Binary Search</option>
  	        <option value="3">3.Bubble Search</option>
	        </select>
        </div></td>
      </tr>
     </table>
  	<table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><strong>ผลลัพธ์</strong></td>
      </tr>
      <tr>
        <td><textarea style='text-align:center;font-size:16px' name="show" cols="100" rows="30"><?php switch($type_seach){
	case 1:
		echo "List : [".implode(',',$arr )."]";
		echo "\nSearch : $seach_number\n";
		echo "Result:::\n\n";
		linear_search($arr,$seach_number);
	break;
	case 2:
		echo "List : [".implode(',',$arr )."]";
		echo "\nSearch : $seach_number\n";
		echo "Result:::\n";
		binary_search($arr, $seach_number);
	break;
	case 3:
		echo "List : [".implode(',',bubble_sort($arr))."]";
		echo "\nSearch : $seach_number\n";
		echo "Result:::\n";
		binary_search(bubble_sort($arr), $seach_number);
	break;
	}  ?>
        </textarea></td>
      </tr>
    </table>
  </center>
    
</form>
 <?php 
  	function linear_search($arr, $x) {
      for($i = 0; $i < sizeof($arr);$i++){
			
		$round = $i+1;
		
        if($arr[$i] == $x){
			echo "Round : $round ===> $x = $arr[$i] found !!";
			break;
			}
		else {
			echo "Round : $round ===> $x != $arr[$i]\n";	
			}	
        }
	}
	
	function binary_search($arr, $x) {
	//sort($arr); ถ้าไม่เรียงก่อนจะหาบางค่าไม่เจอ
	$round = 1;
    $low = 0; 
    $high = count($arr) - 1; 
    while ($low <= $high) { 
           
        $mid = floor(($low + $high) / 2); 
   
        if($arr[$mid] == $x) { 
            echo "Round : $round ===> $x = $arr[$mid] found !!\n";
			break;
        	} 
  
        if ($x < $arr[$mid]) { 
            $high = $mid -1; 
			echo "Round : $round ===> $x != $arr[$mid]\n";
			$round = $round+1; 
        	} 
       	else { 
           	$low = $mid + 1; 
			echo "Round : $round ===> $x != $arr[$mid]\n";
			$round = $round+1; 
        	} 
    	}
	}
	
	function bubble_sort($arr)  {
	//ไม่แน่ใจว่า bubble search คืออะไรเลยทำเป็น bubble sort แล้วนำไปหาแบบ binary search อีกที
	do
	{
		$swapped = false;
		for( $i = 0, $c = count( $arr ) - 1; $i < $c; $i++ )
		{
			if( $arr[$i] > $arr[$i + 1] )
			{
				list( $arr[$i + 1], $arr[$i] ) =
						array( $arr[$i], $arr[$i + 1] );
				$swapped = true;
			}
		}
	}
	while( $swapped );
	
	return $arr;
	}
	

?>

