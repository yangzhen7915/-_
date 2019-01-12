<?php 
// 二维数组

$arr = array(
	array(
		"name"=>'jack',
		"age"=>20
	),
	array(
		"name"=>'rose',
		"age"=>23
	)
);

// echo $arr[0]['name'];
foreach($arr as $key=>$value){

	foreach($value as $k=>$v){
		echo $k."--".$v."<br>";
	}

}











?>