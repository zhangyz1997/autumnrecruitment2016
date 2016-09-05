<?php
session_start();

//注销登录
function _get(){
$val = !empty($_GET['action']) ? $_GET['action'] : null;
return $val;
}
if(_get() == "logout"){
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    //echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
	header("Location:adminlogin.html");
    exit;
}

//登录
if(!isset($_POST['submit'])){
    exit('非法访问!');
}
$username = htmlspecialchars($_POST['username']);
$password = MD5($_POST['password']);

//包含数据库连接文件
require_once('connect.php');
//检测用户名及密码是否正确
$check_query = mysqli_query($con,"select uid from admin where username='$username' and password='$password'
limit 1");
if($result = mysqli_fetch_array($check_query)){
    //登录成功
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $result['uid'];
    //echo $username,' 欢迎你！进入 <a href="../admin/article.manage.php">用户中心</a><br />';
    //echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />';
    echo "<script>alert('欢迎您，亲爱的管理员同志');window.location.href='adminarticle.manage.php';</script>";
	//header("Location:/article.list.php");
    exit;
} else {
    echo "<script>alert('登陆失败');window.location.href='adminlogin.html';</script>";
	//exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
?>
