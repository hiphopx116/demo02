<?php
// 跨域策略设置
header("Access-Control-Allow-Origin:*");
// 1、连接数据库
$conn=mysqli_connect("localhost","root","root","datacwsc");

// 定义SQL语句：查询商品表goodsdata
$selectsql="select * from goodsdata";
// 2、执行SQL语句
$result=mysqli_query($conn,$selectsql);
// 3、取出返回的数据集
// MYSQLI_ASSOC表示返回关联数组，数组下标由表的字段名组成。
$arr=mysqli_fetch_all($result,MYSQLI_ASSOC);
// 给前端返回商品信息:转为json格式数据，返回给前端
echo json_encode(array("error"=>0,"data"=>$arr));
?>
