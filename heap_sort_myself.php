<?php
	function swap(&$a,&$b){
    $a = $a^$b;
    $b = $a^$b;
    $a = $a^$b;
}
 
/**
 * 整理当前树节点（$n），临界点$last之后为已排序好的元素
 * @param int $n
 * @param int $last
 * @param array $arr
 * 
 */
function adjustNode($n,$last,&$arr){
    $l = $n<<1;   // 左孩子
    if( !isset($arr[$l])||$l>$last ){
        return ;
    }
    $r = $l+1;  // 右孩子
    // 如果右孩子比左孩子大，则让父节点与右孩子比
    if( $r<=$last&&$arr[$r]>$arr[$l] ){
        $l = $r;
    }
    // 如果其中子节点$l比父节点$n大，则与父节点$n交换
    if( $arr[$l]>$arr[$n] ){
        swap($arr[$l],$arr[$n]);
        // 交换之后，父节点($n)的值可能还小于原子节点($l)的子节点的值，所以还需对原子节点($l)的子节点进行调整，用递归实现
        adjustNode($l, $last, $arr);
    }
}

	function heap_sort($arr){
		$last = count($arr);
		array_unshift($arr, 0);
		$i = $last>>1;
		
		adjustNode($i, $last, $arr);
		for($i=0;$i<count($arr);$i++){
			swap($arr[$last],$arr[1]);
			adjustNode(0,$last,$arr);
		}
		return $arr;
		
	}
	$arr1=[9,2,34,5,7,8,1,10];
	print_r(heap_sort($arr1));
?>