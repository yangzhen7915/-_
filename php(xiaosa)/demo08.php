<?php 

// 1.混合数组
// $arr = array(1,2,3,'name'=>'jim');

// 2.创建数组的第三种形式  array()   []
// $arr[] = 123;

// 3 关于数组的一些函数
// count() 数组的长度
// unset()
$arr  = [1,2,3,4];
echo count($arr);
unset($arr[0]);
echo '<hr>';
echo count($arr);




 ?>