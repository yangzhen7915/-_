
<?php
 $conn = mysqli_connect('localhost','root','root','user');
 $sql = 'select * from userInfo';
 $res = mysqli_query($conn,$sql);
 while($row = mysqli_fetch_assoc($res)){
 $arr[]=$row;
 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>XXX管理系统</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">XXX管理系统</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">用户管理</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">商品管理</a>
      </li>
    </ul>
  </nav>
  <main class="container">
    <h1 class="heading">用户管理 <a class="btn btn-link btn-sm" href="add.php">添加</a></h1>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>头像</th>
          <th>姓名</th>
          <th>性别</th>
          <th>年龄</th>
          <th class="text-center" width="140">操作</th>
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <th scope="row">1</th>
          <td><img src="./assets/img/icon-01.png" class="rounded"></td>
          <td>小明</td>
          <td>男</td>
          <td>18</td>
          <td class="text-center">
            <a href="#" class="btn btn-info btn-sm">编辑</a>
            <a href="#" class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td><img src="./assets/img/icon-01.png" class="rounded"></td>
          <td>小红</td>
          <td>女</td>
          <td>16</td>
          <td class="text-center">
            <a href="#" class="btn btn-info btn-sm">编辑</a>
            <a href="#" class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>  
      </tbody>
    </table>
  </main>
</body>
</html>
