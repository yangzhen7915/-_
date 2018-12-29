<?php 

// 关于php函数的一些注意点
// php中函数不区分大小写

$num  = 10;   
//定义一个全局变量相当于给超全局数组变量$GLOBALS添加了一个成员，
//这个成员的键就是变量的名num
// echo "<pre>";
// print_r($GLOBALS);
// echo "</pre>";

function foo(){
	echo $GLOBALS['num'];
	$GLOBALS['a'] = 100;
}

foo();

echo '<hr>';
echo $a;

?>

<script>
// 在js中函数名是区别大小写的
var num = 10;
function foo(){
	console.log(num);
}
foo()

</script>