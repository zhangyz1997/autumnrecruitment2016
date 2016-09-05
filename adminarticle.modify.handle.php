<?php
	require_once('connect.php');
	//if(!isset($_SESSION['userid'])){
	//    header("Location:adminlogin.html");
	//    exit();
	//}
	$id = $_POST['id'];
	$author = $_POST['author'];
	$usrname = $_POST['usrname'];
	$phone = $_POST['phone'];
	$grade = $_POST['grade'];
	$class = $_POST['class'];
	$email = $_POST['email'];
	$location = $_POST['location'];
	$eng_4 = $_POST['eng_4'];
	$eng_6 = $_POST['eng_6'];
	$computer = $_POST['computer'];
	$jingli = $_POST['jingli'];
	$jiangli = $_POST['jiangli'];
	$zhuanye = $_POST['zhuanye'];
	$selfintro = $_POST['selfintro'];
	$dateline =  time();
	$updatesql = "update profile set author='$author', usrname='usrname', phone='$phone', grade='$grade', class='$class', email='$email', location='$location', eng_4='$eng_4', eng_6='$eng_6', computer='$computer', jingli='$jingli', jiangli='$jiangli', zhuanye='$zhuanye', selfintro='$selfintro', dateline=$dateline where id=$id";
	if(mysqli_query($con,$updatesql)){
		echo "<script>alert('修改文章成功');window.location.href='adminarticle.manage.php';</script>";
	}else{
		echo "<script>alert('修改文章失败');window.location.href='adminarticle.manage.php';</script>";
	}
?>
