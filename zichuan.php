<?php
	$str1="word";
	$str2="word";
	
	function zichuan($str1,$str2){
		$arr=[];
		for($i=0;$i<strlen($str1);$i++){
			if($str1[$i]==$str2[0]){
					$arr[0][$i]=1;
				}else{
					$arr[0][$i]=0;
				}
		}
		for($j=0;$j<strlen($str2);$j++){
				if($str1[0]==$str2[$j]){
					$arr[$j][0]=1;
				}else{
					$arr[$j][0]=0;
				}
			}
		for($i=1;$i<strlen($str1);$i++){
			for($j=1;$j<strlen($str2);$j++){
				if($str1[$i]==$str2[$j]){
					$arr[$j][$i]=$arr[$j-1][$i-1]+1;
				}else{
					$arr[$j][$i]=0;
				}
			}
		}
		 foreach($arr as $value){
			 foreach($value as $value1){
				 $arr1[]=$value1;
			 }
		 }
		 echo max($arr1);
	}
	zichuan($str1,$str2);
?>