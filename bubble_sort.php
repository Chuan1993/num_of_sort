<?php
	function buble_sort($arr){
		if(!is_array($arr)){
			return false;
		}
		$len=count($arr);
		for($i=0;$i<$len;$i++){
			for($j=$len-1;$j>$i;$j--){
				if($arr[$j]<$arr[$j-1]){
					$tmp=$arr[$j];
					$arr[$j]=$arr[$j-1];
					$arr[$j-1]=$tmp;
				}
			}
		}
		return $arr;
	}
	
	// function bubble_sort($arr){
		// if(!is_array($arr)){
			// return false;
		// }
		// $len=count($arr);
		// for($i=0;$i<$len;$i++){
			// for($j=1;$j<=$len-$i-1;$j++){
				// if($arr[$j]<$arr[$j-1]){
					// $tmp=$arr[$j];
					// $arr[$j]=$arr[$j-1];
					// $arr[$j-1]=$tmp;
				// }
			// }
		// }
		// return $arr;
		
	// }
	$arr1=[9,2,34,5,7,8,1,10];
	print_r(buble_sort($arr1));
	echo "</br>";
	// print_r(bubble_sort($arr1));
	
?>