<?php
	function swap(&$a,&$b){
    $a = $a^$b;
    $b = $a^$b;
    $a = $a^$b;
}
 
/**
 * ����ǰ���ڵ㣨$n�����ٽ��$last֮��Ϊ������õ�Ԫ��
 * @param int $n
 * @param int $last
 * @param array $arr
 * 
 */
function adjustNode($n,$last,&$arr){
    $l = $n<<1;   // ����
    if( !isset($arr[$l])||$l>$last ){
        return ;
    }
    $r = $l+1;  // �Һ���
    // ����Һ��ӱ����Ӵ����ø��ڵ����Һ��ӱ�
    if( $r<=$last&&$arr[$r]>$arr[$l] ){
        $l = $r;
    }
    // ��������ӽڵ�$l�ȸ��ڵ�$n�����븸�ڵ�$n����
    if( $arr[$l]>$arr[$n] ){
        swap($arr[$l],$arr[$n]);
        // ����֮�󣬸��ڵ�($n)��ֵ���ܻ�С��ԭ�ӽڵ�($l)���ӽڵ��ֵ�����Ի����ԭ�ӽڵ�($l)���ӽڵ���е������õݹ�ʵ��
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