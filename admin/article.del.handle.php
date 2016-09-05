<?php
	require_once('../connect.php');
	$id = $_GET['id'];
	$deletesql = "delete from profile where id=$id";
	if(mysqli_query($con,$deletesql)){
		echo "<script>alert('简历删除成功');window.location.href='article.manage.php';</script>";
	}else{
		echo "<script>alert('简历删除失败');window.location.href='article.manage.php';</script>";
	}
?>
