<?php
	


//下面这个函数是全排列的变种
function funcd($arr,$pre,&$result){
	if($arr==null||$arr==[]){
		$result[]=$pre;
	}else{
		$arr1=array_shift($arr);
		foreach($arr1 as $value){
			funcd($arr,$pre.$value,$result);
		}
	}
}
// $arrn=[[1,7,9],[3,4,9,10]];
// funcd($arrn,'',$results);
// print_r($results);

















//重写字典序 数组的字典序  思路：就是排序之后的全排列
function func($first = '', $arr, &$results = array())
{
        $len = count($arr);
        if($len == 1) {
                $results[] = $first . $arr[0];
        } else {
                for($i=0; $i<$len; $i++) {
                        $tmp = $arr[0];
                        $arr[0] = $arr[$i];
                        $arr[$i] = $tmp;
                        func($first.$arr[0], array_slice($arr, 1), $results);
                }
        }
}
$arr = array('A','E','B','D');
// $results = array();
func('', $arr, $results);
// print_r(array_unique($results));
print_r($results);
//重写所有子集
// $arr=[1,2,3];
function ziji($arr){
	$result1=[];
	$len=pow(2,count($arr));
	for($i=0;$i<$len;$i++){
		$result=[];
		$j=$i;
		$index=0;
		while($j>0){
			if(($j&1)>0){
				array_push($result,$arr[$index]);
			}
			$j=$j>>1;
			$index++;
		}
			$result1[]=$result;
	}

	return $result1;
}

// print_r(ziji($arr));
//这个函数想实现的是求数组，元素个数为k的子集,有顺序差异
function ziji_k($arr,$k,$list=[]){
	if($k>count($arr)||$k<=0){
		return [];
	}else if($k==1){
		return $arr;
	}
	for($i=0;$i<count($arr);$i++){
		$list=$arr[$i];
		$tmp=$arr[$i];
		$arr[$i]=$arr[0];
		$arr[0]=$tmp;
		
		$rest=ziji_k(array_slice($arr, 1),$k-1,$list);
		foreach($rest as $value){
			$result[]=[$list,$value];
			// $result[]=$list;
		}
	}
	return $result;
	
}
// $arr=[1,2,3,4];
// print_r(ziji_k($arr,3));
//这个函数想实现的是求数组，元素个数为k的子集,无顺序差异
function ziji_k_1($arr,$k,$str=""){
	$len=count($arr);
	if($k==1){
		foreach($arr as $value){
			$result[]=$str.$value;
		}
		return $result;
	}
	if($k>$len){
		return [];
	}else{
		for($i=0;$i<=$len-$k;$i++){
			$result1=ziji_k_1(array_slice($arr,$i+1),$k-1,$str.$arr[$i]);
			foreach($result1 as $value){
				$result[]=$value;
			}
		}
		
		return $result;	
	}
}

// print_r(ziji_k_1($arr,2));
