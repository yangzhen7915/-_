<?php 
// 数组：php中数组分为两类：索引数组和关联数组
// 1：索引数组
   // $arr = array(1,2,3,4,5);
   $arr = [1,2,3,4,5];
// 2:关联数组
   $arr = array(
   	'name'=>'jim',
   	'age'=>18
   );

// 遍历数组
   // for($i=0;$i<count($arr);$i++){
   // 	  echo $arr[]
   // }
   
   foreach($arr as $k=>$v){
   	 echo $k."----".$v."<br>";
   }

?>
<script src="./jquery.js"></script>
<script>
	// 关于js中数组遍历的几种形式
	var arr = [1,2,3,4];
	// 第一种
	// for(var i = 0;i<arr.length;i++){
	// 	console.log(arr[i]);
	// }
    // 第二种 es5中数组新提供的一个方法forEach
    arr.forEach(function(value,index){
    	console.log(index+'------'+value);
    })
    console.log("----------------------------")
    // 第三种 jquery中的方法each
    $.each(arr,function(index,value){
		console.log(index+'------'+value);
    })


</script>
