<?php
		function al_merge($arrA,$arrB)
	{
		$arrC = array();
		while(count($arrA) && count($arrB)){
			//���ﲻ�ϵ��ж��ĸ�ֵС,�ͽ�С��ֵ����arrC,���ǵ����϶�Ҫʣ�¼���ֵ,
			//����ʣ��arrA����ľ���ʣ��arrB����Ķ����⼸�������ֵ,�϶���arrC�������е�ֵ��������ʹ��
			$arrC[] = $arrA['0'] < $arrB['0'] ? array_shift($arrA) : array_shift($arrB);
		}
		return array_merge($arrC, $arrA, $arrB);
	}
	//�鲢����������
	function al_merge_sort($arr){
		$len=count($arr);
		if($len <= 1){
			
			return $arr;
			//�ݹ��������,�����ⲽ��ʱ��,�����ֻʣ��һ��Ԫ����,Ҳ���Ƿ���������
		}
		$mid = intval($len/2);//ȡ�����м�
		$left_arr = array_slice($arr, 0, $mid);//�������0-mid�ⲿ�ָ����left_arr
		$right_arr = array_slice($arr, $mid);//�������mid-ĩβ�ⲿ�ָ��ұ�right_arr
		;
		$left_arr = al_merge_sort($left_arr);//��߲�����ʼ�ݹ�ϲ�����
		
		$right_arr = al_merge_sort($right_arr);//�ұ߲����Ͽ�ʼ�ݹ�������
		// print_r($left_arr);	
		$arr=al_merge($left_arr, $right_arr);//�ϲ���������,�����ݹ�
		
		return $arr;
		
	}
	$arr1=[11,9,2,34,5,7,8,1,10];
	print_r(al_merge_sort($arr1));
	
?>