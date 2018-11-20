<?php
  	// $str=fgets(STDIN);
	// $arr1=explode(" ",$str);
	$arr1=[3,10];
	$n=$arr1[0];
	$m=$arr1[1];
	$count=0;
	// $arr2=explode(" ",fgets(STDIN));
	$arr2=[6,5,10];
	foreach($arr2 as $v)
	{
		$array[]=(int)$v;
	}
	
	function find_ziji($arr,$m){
		$k=0;
		$len=count($arr);
		while($len>1){
			$num=array_shift($arr);
			foreach($arr as $value){
				if(($num^$value)>$m){
					$k++;
				}
			}
			$len--;
		}
		return $k;
			
	}
	// print_r($arr2);
	echo find_ziji($array,$m);
  ?>