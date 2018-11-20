<?php

//目的是求出数组的子集
//递归写法
function find_ziji($arr){
	$len=count($arr);
	if($len<=0){
		return [];
	}
	if($len==1){
		return array($arr[0]);
	}
	$result=[];
	$result[]=$arr[0];
	$rest=array_slice($arr,1);
	// print_r($result);
	$rest_ziji=find_ziji($rest);
	
	foreach($rest_ziji as $key){
		$result[]=$key;
		// if(is_array($key)){
			// array_push($key,$arr[0]);
			// $result[]=$key;
		// }else{
			$result[]=[$key,$arr[0]];
		// }
	}
	return $result;
}
//非递归写法
function fund_ziji1($arr){
	$len=count($arr);
	$count=pow(2,$len);
	$result=[];
	for($i=0;$i<$count;$i++){
		$list=[];
		$j=$i;
		$index=0;
		while($j>0){
			if(($j&1)>0){
				array_push($list,$arr[$index]);
			}
			$j=$j>>1;
			$index++;
		}
		$result[]=$list;
	}
	return $result;
}
$arr=[1,2,3];



print_r(find_ziji($arr));
	



 
function FindNumsAppearOnce($array)
{
    // write code here
    // return list, 比如[a,b]，其中ab是出现一次的两个数字
   $temp=$array[0];
    for($i=1;$i<count($array);$i++){
        $temp^=$array[$i];
    }
    return $temp;
}


