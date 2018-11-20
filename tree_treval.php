<?php  
class Node{  
    public $value;  
    public $left;  
    public $right; 
}  
//先序遍历 根节点 ---> 左子树 ---> 右子树  
function preorder($root){  
    $stack=array();  
    array_push($stack,$root);  
    while(!empty($stack)){  
        $center_node=array_pop($stack);  
        echo $center_node->value.' ';//先输出根节点  
        if($center_node->right!=null){  
            array_push($stack,$center_node->right);//压入右子树  
        }  
        if($center_node->left!=null){  
            array_push($stack,$center_node->left);  
        }  
    }  
}  
//中序遍历，左子树---> 根节点 ---> 右子树  
function inorder($root){  
    $stack = array();  
    $center_node = $root;  
    while (!empty($stack) || $center_node != null) {  
             while ($center_node != null) {  
                 array_push($stack, $center_node);  
                 $center_node = $center_node->left;  
             }  
   
             $center_node = array_pop($stack);  
             echo $center_node->value . " ";  
   
             $center_node = $center_node->right;  
         }  
}  
//后序遍历，左子树 ---> 右子树 ---> 根节点  
function tailorder($root){  
    $stack=array();  
    $outstack=array();  
    array_push($stack,$root);  
    while(!empty($stack)){  
        $center_node=array_pop($stack);  
        array_push($outstack,$center_node);//最先压入根节点，最后输出  
        if($center_node->left!=null){  
            array_push($stack,$center_node->left);  
        }  
        if($center_node->right!=null){  
            array_push($stack,$center_node->right);  
        }  
    }  
      
    while(!empty($outstack)){  
        $center_node=array_pop($outstack);  
        echo $center_node->value.' ';  
    }  
      
}  
function height($root){
	if($root==null){
		$h=0;
	}else{
		$lh=height($root->left);
		$rh=height($root->right);
		$h=max($lh,$rh)+1;
	}
	return $h;
}
function xianxu($root){
	if(!($root->left)&&!($root->right)){
		$mid=$root->value;
		return $mid;
	}else{
		$r[]=$root->value;
		$left[]=xianxu($root->left);
		$right[]=xianxu($root->right);
		return array_merge($r,$left,$right);
	}
}

$a=new Node();  
$b=new Node();  
$c=new Node();  
$d=new Node();  
$e=new Node();  
$f=new Node();  
$a->value='A';  
$b->value='B';  
$c->value='C';  
$d->value='D';  
$e->value='E';  
$f->value='F';  
$a->left=$b;  
$a->right=$c;  
$b->left=$d;  
$c->left=$e;  
$c->right=$f;  
// preorder($a);//A B D C E F   
// echo '<hr/>';  
// inorder($a);//D B A E C F  
// echo '<hr/>';  
// tailorder($a);//D B E F C A 

// print_r(xianxu($a));
// inorder($a);

//将排序好的数组转化成平衡二叉搜索树
function change1($arr){
	$root=new Node();
	$count=count($arr);
	if($count==1){
		$root->value=$arr[0];
		return  $root;
	}
	$mid=floor($count/2);
	$root->value=$arr[$mid];
	if($mid>=1){$root->left=change1(array_slice($arr,0,$mid));}
	if($mid<=$count-1){$root->right=change1(array_slice($arr,$mid+1));}
	return $root;
}
$arr=[1,2,3,4,5,6];
var_dump(change1($arr));

//树的遍历递归版

function tailorder_digui($root){
	if(($root->left==null)&&($root->right==null)){
		return $root->value;
		
	}else{
		$left=null;
		$right=null;
		if($root->left){$left=tailorder_digui($root->left);}
		if($root->right){$right=tailorder_digui($root->right);}
		//return $left.$right.$root->value;
		// return $left.$root->value.$right;
		// return $root->value.$left.$right;
	}
	
}
// echo tailorder_digui($a);
//层次遍历树
function height_order($root){
	if(($root->left==null)&&($root->right==null)){
		return $root->value;
		
	}
	$arr=[];
	$result=[];
	array_push($arr,$root);
	while(!empty($arr)){
		$node=array_shift($arr);
		if($node->left){
			array_push($arr,$node->left);
		}
		if($node->right){
			array_push($arr,$node->right);
		}
		$result[]=$node->value;
	}
	return $result;
}
// echo 1;
// print_r(height_order($a));