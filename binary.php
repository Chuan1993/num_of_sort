<?php
	function binary($arr,$num){
		$last=count($arr);
		$start=0;
		
		if($last>1){
				if($num==$arr[floor(($last+$start)/2)]){
				return floor(($last+$start)/2);
			}
			else if($num<$arr[floor(($last+$start)/2)]){
				$arr=array_slice($arr,0,floor(($last+$start)/2));
				return binary($arr,$num);
			}else{
				$arr=array_slice($arr,floor(($last+$start)/2));
				return binary($arr,$num)+floor(($last+$start)/2);
			}
		}else if($last==1&&$num=$arr[0]){
				return 0;
		}else{
			return -1;
		}
		
	}
	// function binaryRecursive(&$arr,$low,$top,$target){
        // if($low<=$top){
            // $mid = floor(($low+$top)/2);
            // if($arr[$mid]==$target){
                // return $mid;
            // }elseif($arr[$mid]<$target){
                // return binaryRecursive($arr,$mid+1,$top,$target);
            // }else{
                // return binaryRecursive($arr,$low,$mid-1,$target);
            // }
        // }else{
            // return -1;
        // }
    // }
	
	$arr = array(1,2,3,4,5,6,7,8,9,10,11);
	// echo binaryRecursive($arr, 0, sizeof($arr), 1);
	echo binary($arr,8);


?>