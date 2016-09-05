<?php
	require_once('connect.php');
	//if(!isset($_SESSION['userid'])){
	//    header("Location:adminlogin.html");
	//    exit();
	//}
	$id = $_GET['id'];
	$deletesql = "delete from profile where id=$id";
	if(mysqli_query($con,$deletesql)){
		echo "<script>alert('删除文章成功');window.location.href='adminarticle.manage.php';</script>";
	}else{
		echo "<script>alert('删除文章失败');window.location.href='adminarticle.manage.php';</script>";
	}
?>
