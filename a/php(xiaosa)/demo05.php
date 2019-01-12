<?php 
// 关于变量的一些函数
// isset()   两层意思：1.变量是否存在  2.变量存在但是值为null
$age = 18;
$name = null;
var_dump(isset($name));
echo '<hr>';


// empty()   空的范围比较多：  null,0,'0',[],false
$num = "0";
var_dump(empty($num));
echo '<hr>';

// unset()   删除变量
$gender  = '男';
var_dump(isset($gender));
unset($gender);
var_dump(isset($gender));



 ?>