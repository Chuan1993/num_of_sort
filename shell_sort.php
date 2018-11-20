<?php
	function shell_sort($arr){
    
    $length=count($arr);
    
	// print_r($arr);
	// echo '<br/>';
    for ($gap=floor($length/2); $gap >0 ; $gap=floor($gap/2)) {
   
        for ($i=1; $i*$gap <$length ; $i++) {
            $tmp=$arr[$i*$gap];
			
			
            for ($j=$i-1; $j >=0 ; $j--) {
				// echo 1;
				// echo '</br>';
				// print_r($arr);
				// echo '<br/>';
                if($tmp<$arr[$j*$gap]){   $arr[($j+1)*$gap]=$arr[$j*$gap];
                    $arr[$j*$gap]=$tmp;              
                }else{
                    break;
                }
				
            }
        }
		
		
    }
    return $arr;
}


	// function shell_sort($arr){
		// if(!is_array($arr)){
			// return false;
		// }
		// $len=count($arr);
		// for($gap=floor($len/2);$gap>0;$gap=floor($gap/2)){
			// for($i=1;$i*$gap<$len;$i++){
				// $tmp=$arr[$i*$gap];
				// for($j=$i-1;$j>=0;$j--){
					// if($tmp<$arr[$gap*$j]){
						// $arr[($j+1)*$gap]=$arr[$j*$gap];
						// $arr[$j*$gap]=$tmp;
						
					// }else{
						// break;
					// }
					// print_r($arr);
					// echo '<br/>';
				// }
			// }
		// }
		// return $arr;
	// }
	
	$arr1=[9,5,34,2,7,10,1,8];
	// print_r(shell_sort($arr1));
	print_r(shell_sort($arr1));
?>