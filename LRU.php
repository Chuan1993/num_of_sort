<?php
function lru($into_data="")
{
    static $array=array();
    $max_length=5;//��󳤶�
    if(empty($array))
    {
        $array[]=$into_data;
    }else
    {
        //˵����Ϊ�� ��Ϊ������в���
        $find_index=array_search($into_data, $array);
        if($find_index!==false)
        {
            //˵���ҵ��� �ҵ��Ļ��ͷŵ���һ����
            unset($array[$find_index]);//ȥ����� �õ���һ��ȥ
            
        }else
        {
            //û�ҵ� �ж��Ƿ�ﵽ��󳤶� ����ﵽ ȥ�����һ��
            if(count($array)==$max_length-1)
            {
                //������󳤶�
                // ȥ�����һ��
                array_pop($array);
                // array_unshift($array,$into_data);//�ŵ���һ��ȥ
            }
        }
		array_unshift($array,$into_data);//�ŵ���һ��ȥ
        //$array=array_values($array);//��������  ��lhc�������ﲻ������ ����ע��
    }
    return $array;
}
$array=array(2,1,2,5,4);
foreach ($array as $key => $v)
{
    $now=lru($v);
    echo ($v)." ".(implode(" ",$now))."<br/>";
	// echo $now;
}
?>