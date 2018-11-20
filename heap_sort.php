<?php  
// PHP 堆排序算法实现、堆排序时间复杂度分析  
  
/** 
 * 堆排序 
 * @param array $arr 
 */  
function heap_sort(array &$arr)  
{  
    $count = count($arr);  
    // 建堆 (下标小于或等于floor($count/2)-1的节点都是要调整的节点)  
    for( $i = floor($count / 2) - 1;$i >= 0; $i--)  
    {  
        heap_adjust($arr, $i, $count);  
    }  
    // 调整堆  
    for($i = $count - 1; $i >= 0; $i--)  
    {  
        // 将堆顶元素与最后一个元素交换  
        swap($arr,0,$i);  
        heap_adjust($arr,0,$i - 1);  
    } 
	return $arr;
}  
  
/** 
 * 交换2个值 
 * @param array $arr 
 * @param int $a 数组下标 
 * @param int $b 数组下标 
 */  
function swap(array &$arr, $a, $b)  
{  
    $temp = $arr[$a];  
    $arr[$a] = $arr[$b];  
    $arr[$b] = $temp;  
}  
  
/** 
 * 交换2个值 
 * @param array $arr 
 * @param int $start 数组下标 
 * @param int $end 数组下标 
 */  
function heap_adjust(array &$arr, $start, $end)  
{  
    $temp = $arr[$start];  
    //沿关键字较大的孩子节点向下筛选，这里数组开始下标识0  
    for($j = 2 * $start + 1; $j <= $end; $j = 2 * $j + 1)  
    {  
        if($j != $end && $arr[$j] < $arr[$j + 1])  
        {  
            $j ++;  
        }  
        if($temp < $arr[$j])  
        {  
            //将根节点设置为子节点的较大值  
            $arr[$start] = $arr[$j]; 
			$arr[$j] = $temp;			
            $start = $j;  
			
        }else{
				break;
		}
    }  
      
}  
  
// 使用  
$arr = [9,2,5,7,8,1,10,34];  
print_r(heap_sort($arr));  
  