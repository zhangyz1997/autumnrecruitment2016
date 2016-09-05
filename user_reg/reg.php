<?php
if(!isset($_POST['submit'])){
    exit('非法访问!');
}
$username = $_POST['username'];
$password = $_POST['password'];
//$email = $_POST['email'];
//注册信息判断
if(!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){
    //exit('错误：用户名不符合规定。<a href="javascript:history.back(-1);">返回</a>');
	echo "<script>alert('错误：用户名不符合规定');window.location.href='reg.html';</script>";
}

if(strlen($password) < 6){
//exit('错误：密码长度不符合规定。<a href="javascript:history.back(-1);">返回</a>');
echo "<script>alert('错误：密码长度不符合规定');window.location.href='reg.html';</script>";
}
//if(!preg_match("/w ([- .]w )*@w ([-.]w )*.w ([-.]w )*/", $email)){
//    exit('错误：电子邮箱格式错误。<a href="javascript:history.back(-1);">返回</a>');
//}
//包含数据库连接文件
require_once('../connect.php');
//检测用户名是否已经存在
$check_query = mysqli_query($con,"select uid from user where username='$username' limit 1");
if(mysqli_fetch_array($check_query)){
    //echo '错误：用户名 ',$username,' 已存在。<a href="javascript:history.back(-1);">返回</a>';
	echo "<script>alert('错误：用户名已存在');window.location.href='reg.html';</script>";
    exit;
}

//写入数据
$password = MD5($password);
$regdate = time();
$sql = "INSERT INTO user(username,password,regdate)VALUES('$username','$password',
$regdate)";
if(mysqli_query($con,$sql)){
    //exit('用户注册成功！点击此处 <a href="login.html">登录</a>');
	echo "<script>alert('用户注册成功');window.location.href='login.html';</script>";
	//header("Location:login.html");
} else {
    //echo '抱歉！添加数据失败：',mysql_error(),'<br />';
    //echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
	echo "<script>alert('抱歉添加数据失败，请重试');window.location.href='reg.html';</script>";
}
?>
