<?php
	require_once('config.php');
	//连接数据库
	if(!($con = mysqli_connect(HOST, USERNAME, PASSWORD))){
		echo mysql_error($con);
	}
	//选择数据库
	if(!mysqli_select_db($con,'database')){
		echo mysql_error($con);
	}
	//字符集
	if(!mysqli_query($con,'set names utf8')){
		echo mysql_error();
	}
?>
