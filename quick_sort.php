<?php
	function quick_sort($arr){
		
		if(!is_array($arr)){
			return false;
		}
		$len=count($arr);
		if($len <= 1) 
             {
                 return $arr;
             }
		$base_num = $arr[0];
		$left_arr=array();
		$right_arr=array();
		for($i=1;$i<$len;$i++){
			if($arr[$i]>$base_num){
				$right_arr[]=$arr[$i];
			}else{
				$left_arr[]=$arr[$i];
			}
		}
		$left_arr=quick_sort($left_arr);
		$right_arr=quick_sort($right_arr);
		$mid=array($base_num);
		return array_merge($left_arr,$mid,$right_arr);
	}
	
	
	function quick_sort2($arr) 
         {
             //���ж��Ƿ���Ҫ��������
             $length = count($arr);
             if($length <= 1) 
             {
                 return $arr;
             }
         
            //ѡ��һ�����  ѡ���һ��Ԫ��
 
             //��ʼ����������
             $left_array = array();//С�ڱ�ߵ�
             $right_array = array();//���ڱ�ߵ�
             for($i=1; $i<$length; $i++) 
             {            //���� ���˱���������Ԫ�أ����մ�С��ϵ��������������
                 if($base_num > $arr[$i]) 
                 {
                     //�����������
                     $left_array[] = $arr[$i];
                 } 
                 else 
                 {
                     //�����ұ�
                     $right_array[] = $arr[$i];
                 }
             }
             //�ٷֱ�� ��� �� �ұߵ����������ͬ��������ʽ
             //�ݹ�����������,����¼���
             $left_array = quick_sort2($left_array);
             $right_array = quick_sort2($right_array);
             //�ϲ���� ��� �ұ�
             return array_merge($left_array, array($base_num), $right_array);
         }
	$arr1=[9,2,34,5,7,8,1,10];
	print_r(quick_sort($arr1));

?>