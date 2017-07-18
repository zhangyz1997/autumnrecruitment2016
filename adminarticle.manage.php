<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['userid'])){
    header("Location:adminlogin.html");
    exit();
}
	require_once('connect.php');
	$author = $_SESSION['username'];
	$sql = "select * from profile order by dateline desc";
	$query  = mysqli_query($con,$sql);
	if($query&& mysqli_num_rows($query)){
		while($row =mysqli_fetch_array($query, MYSQL_ASSOC)){
			$data[] = $row;
		}
	}else{
		$data = array();
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CDMG</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- <link href="../default.css" rel="stylesheet" type="text/css" /> -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
   body{
       background: #CCC
   }
     html{font-size:11px;}
   fieldset{width:520px; margin: 0 auto;}
   legend{font-weight:bold; font-size:14px;}
   label{float:left; width:70px; margin-left:10px;}
   .left{margin-left:80px;}
   .input{width:150px;}
   span{color: #666666;}

</style>
<body>
<h1>COMPUTATIONAL DATA MINING GROUP</h1>
<div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
    <a class="navbar-brand" href="../index.html">CDMG</a>
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    </div>
    <div class="collapse navbar-collapse" id="collapse">
		<ul class="nav navbar-nav">
			<li><a href="adminarticle.manage.php" class="active">简历管理</a></li>
			<li><a href="user_reg/login.php?action=logout">注销登陆</a></li>
		</ul>
    </div>
</div>
<div class="container-fluid" style="background:white; padding-bottom:20px; margin-bottom:10px">
<!-- <div class="col-lg-    4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-12" style="background:white;"> -->
<table class="table table-striped table-response">
  <!-- <caption></caption> -->
  <thead>
    <tr>
      <th width="20%">编号</th>
      <th width="60%">标题</th>
      <th>操作</th>
    </tr>
  </thead>
  <?php
      if(!empty($data)){
          foreach($data as $value){
  ?>
  <tbody>
    <tr>
      <td>&nbsp;<?php echo $value['uid']?></td>
      <td>&nbsp;<?php echo $value['author']?></td>
      <td><a href="adminarticle.del.handle.php?id=<?php echo $value['uid']?>">删除</a> <a href="adminarticle.modify.php?id=<?php echo $value['uid']?>">查看</a></td>
    </tr>
  </tbody>
  <?php
          }
  }
  ?>
</table>
<!-- <div id="wrapper">
<!-- start header -->
<!-- <div id="header">
	<div id="logo">
		<h1><a href="#">后台管理系统<sup></sup></a></h1>
		<h2></h2>
	</div>
	<div id="menu">
		<ul>
			<li class="active"><a href="adminarticle.manage.php">简历管理</a></li>
			<li><a href="user_reg/login.php?action=logout">注销登陆</a></li>
		</ul>
	</div> -->
<!-- </div>  -->
<!-- end header -->
<!-- <table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000"> -->
 <!-- <tr>
    <td height="89" colspan="2" bgcolor="#FFFFFF"><strong>用户中心</strong></td>
</tr> -->
  <!-- <tr> -->
<!--    <td width="80" height="450" align="center" valign="center" bgcolor="#FFFFFF"><p><a href="article.add.php">发布简历</a></p>
    <p><a href="article.manage.php">管理简历</a></p></td>-->
    <!-- <td width="837" valign="top" bgcolor="#FFFFFF"><table width="900" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000" align=center> -->
      <!-- <tr>
       <td colspan="3" align="center" bgcolor="#FFFFFF">简历列表</td>
   </tr>
      <tr>
        <td width="37" bgcolor="#FFFFFF">编号</td>
        <td width="572" bgcolor="#FFFFFF">标题</td>
        <td width="82" bgcolor="#FFFFFF">操作</td>
      </tr>
	<?php
		// if(!empty($data)){
			// foreach($data as $value){
	?>
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['id']?></td>
        <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['author']?></td>
        <td bgcolor="#FFFFFF"><a href="adminarticle.del.handle.php?id=<?php echo $value['id']?>">删除</a> <a href="adminarticle.modify.php?id=<?php echo $value['id']?>">查看</a></td>
      </tr>

    </table></td>
  </tr> -->
<!--  <tr>
    <td colspan="2" bgcolor="#FFFFFF"><strong>CDMG版权所有</strong></td>
</tr>-->
<!-- </table> -->
</div>
</div>
<div class="container-fluid">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center">
    <foot>
        版权所有 2017 @CDMG
    </foot>
</div>
</div>
</body>
</html>
