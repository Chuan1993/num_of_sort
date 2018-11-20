<?php  
// PHP �������㷨ʵ�֡�������ʱ�临�Ӷȷ���  
  
/** 
 * ������ 
 * @param array $arr 
 */  
function heap_sort(array &$arr)  
{  
    $count = count($arr);  
    // ���� (�±�С�ڻ����floor($count/2)-1�Ľڵ㶼��Ҫ�����Ľڵ�)  
    for( $i = floor($count / 2) - 1;$i >= 0; $i--)  
    {  
        heap_adjust($arr, $i, $count);  
    }  
    // ������  
    for($i = $count - 1; $i >= 0; $i--)  
    {  
        // ���Ѷ�Ԫ�������һ��Ԫ�ؽ���  
        swap($arr,0,$i);  
        heap_adjust($arr,0,$i - 1);  
    } 
	return $arr;
}  
  
/** 
 * ����2��ֵ 
 * @param array $arr 
 * @param int $a �����±� 
 * @param int $b �����±� 
 */  
function swap(array &$arr, $a, $b)  
{  
    $temp = $arr[$a];  
    $arr[$a] = $arr[$b];  
    $arr[$b] = $temp;  
}  
  
/** 
 * ����2��ֵ 
 * @param array $arr 
 * @param int $start �����±� 
 * @param int $end �����±� 
 */  
function heap_adjust(array &$arr, $start, $end)  
{  
    $temp = $arr[$start];  
    //�عؼ��ֽϴ�ĺ��ӽڵ�����ɸѡ���������鿪ʼ�±�ʶ0  
    for($j = 2 * $start + 1; $j <= $end; $j = 2 * $j + 1)  
    {  
        if($j != $end && $arr[$j] < $arr[$j + 1])  
        {  
            $j ++;  
        }  
        if($temp < $arr[$j])  
        {  
            //�����ڵ�����Ϊ�ӽڵ�Ľϴ�ֵ  
            $arr[$start] = $arr[$j]; 
			$arr[$j] = $temp;			
            $start = $j;  
			
        }else{
				break;
		}
    }  
      
}  
  
// ʹ��  
$arr = [9,2,5,7,8,1,10,34];  
print_r(heap_sort($arr));  
  