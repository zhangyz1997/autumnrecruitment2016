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
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="#">后台管理系统<sup></sup></a></h1>
		<h2></h2>
	</div>
	<div id="menu">
		<ul>
			<li class="active"><a href="adminarticle.manage.php">简历管理</a></li>
			<li><a href="user_reg/login.php?action=logout">注销登陆</a></li>
		</ul>
	</div>
</div>
<!-- end header -->
<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
 <!-- <tr>
    <td height="89" colspan="2" bgcolor="#FFFFFF"><strong>用户中心</strong></td>
</tr> -->
  <tr>
<!--    <td width="80" height="450" align="center" valign="center" bgcolor="#FFFFFF"><p><a href="article.add.php">发布简历</a></p>
    <p><a href="article.manage.php">管理简历</a></p></td>-->
    <td width="837" valign="top" bgcolor="#FFFFFF"><table width="900" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000" align=center>
      <tr>
       <td colspan="3" align="center" bgcolor="#FFFFFF">简历列表</td>
   </tr>
      <tr>
        <td width="37" bgcolor="#FFFFFF">编号</td>
        <td width="572" bgcolor="#FFFFFF">标题</td>
        <td width="82" bgcolor="#FFFFFF">操作</td>
      </tr>
	<?php
		if(!empty($data)){
			foreach($data as $value){
	?>
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['id']?></td>
        <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['author']?></td>
        <td bgcolor="#FFFFFF"><a href="adminarticle.del.handle.php?id=<?php echo $value['id']?>">删除</a> <a href="adminarticle.modify.php?id=<?php echo $value['id']?>">查看</a></td>
      </tr>
        <?php
        		}
		}
        ?>
    </table></td>
  </tr>
<!--  <tr>
    <td colspan="2" bgcolor="#FFFFFF"><strong>CDMG版权所有</strong></td>
</tr>-->
</table>
</body>
</html>
