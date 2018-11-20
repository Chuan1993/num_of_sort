<?php
	function insert_sort($arr){
		if(!is_array($arr)){
			return false;
		}
		$len=count($arr);
		// print_r($arr);
		// echo '<br/>';
		for($i=1;$i<$len;$i++){
			for($j=$i;$j>0;$j--){
				// echo 1;
				// echo '</br>';
				if($arr[$j]<$arr[$j-1]){
					$tmp=$arr[$j];
					$arr[$j]=$arr[$j-1];
					$arr[$j-1]=$tmp;
				}else{
					break;
				}
				// print_r($arr);
				// echo '<br/>';
			}
		}
		return $arr;
	}
	$arr1=[9,2,34,5,7,8,1,10];
	print_r(insert_sort($arr1));
	
?>