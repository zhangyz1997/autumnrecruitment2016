<?php
	require_once('connect.php');
	$sql = "select * from  introduce";
	$query = mysqli_query($con,$sql);
	if($query&&mysqli_num_rows($query)){
		$about = mysql_result($query,0,'about');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>CDMG</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="#">关于我们<sup></sup></a></h1>
		<h2></h2>
	</div>
	<div id="menu">
		<ul>
			<li><a href="admin/article.add.php">新建简历</a></li>
			<li class="active"><a href="admin/article.manage.php">简历管理</a></li>
			<li><a href="about.php">关于我们</a></li>
			<li><a href="user_reg/login.php?action=logout">注销登陆</a></li>
		</ul>
	</div>
</div>
<!-- end header -->
</div>

<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">

		<div class="post">
			<h1 class="title">ABOUT ME</h1>
			<div class="entry">
			</div>
        <p>
        	CDMG(Clinical Data Minging Group)
        </p>
		</div>

	</div>
	<!-- end content -->

	<!-- start sidebar
	<div id="sidebar">
		<ul>
			<li id="search">
				<h2><b class="text1">Search</b></h2>
				<form method="get" action="">
					<fieldset>
					<input type="text" id="s" name="s" value="" />
					<input type="submit" id="x" value="Search" />
					</fieldset>
				</form>
			</li>
		</ul>
	</div>
-->
	<!-- end sidebar -->
	<!--<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<!--	<div id="footer">
	<p id="legal"></p>-->
</div>
<!-- end footer -->
</table>
</body>
</html>
