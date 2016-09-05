<?php
	require_once('../connect.php');
	//把传递过来的信息入库,在入库之前对所有的信息进行校验。
	if(!(isset($_POST['author'])&&(!empty($_POST['author'])))){
		echo "<script>alert('注册账户不能为空');window.location.href='article.add.php';</script>";
	}
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
	$insertsql = "insert into profile(author, usrname, phone, grade, class, email, location, eng_4, eng_6, computer, jingli, jiangli, zhuanye, selfintro, dateline) values('$author', '$usrname', '$phone', '$grade', '$class', '$email', '$location', '$eng_4', '$eng_6', '$computer', '$jingli', '$jiangli', '$zhuanye', '$selfintro', '$dateline')";
	if (mysqli_query($con,$insertsql)) {
		echo "<script>alert('简历创建成功');window.location.href='article.manage.php';</script>";
	}else{
		echo "<script>alert('简历创建失败');window.location.href='article.manage.php';</script>";
	}
?>
