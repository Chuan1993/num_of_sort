<?php
	function choice_sort($arr){
		if(!is_array($arr)){
			return false;
		}
		$len=count($arr);
		for($i=0;$i<$len-1;$i++){
			for($j=$i+1;$j<$len;$j++){
				if($arr[$j]<$arr[$i]){
					$tmp=$arr[$j];
					$arr[$j]=$arr[$i];
					$arr[$i]=$tmp;
				}
			}
		}
		return $arr;
	}
	$arr1=[9,2,34,5,7,8,1,10];
	print_r(choice_sort($arr1));
?>