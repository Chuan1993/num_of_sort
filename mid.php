<?php
	function mid($arr,$k){
		$len=count($arr);
		$base_num=$arr[0];
		$left_arr=array();
		$right_arr=array();
		for($i=1;$i<$len;$i++){
			if($arr[$i]>$base_num){
				$right_arr[]=$arr[$i];
			}else{
				$left_arr[]=$arr[$i];
			}
		}
		if(count($left_arr)>$k-1){
			return mid($left_arr,$k);
		}else if(count($left_arr)==$k-1||count($right_arr)==$k-1){
			return $base_num;
		}else{
			return mid($right_arr,$k);
		}
		
	}
	$arr=[1,2,3,4,5,6];
	echo mid($arr,2);
?>