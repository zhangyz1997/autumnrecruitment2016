<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['userid'])){
    header("Location:adminlogin.html");
    exit();
}
	require_once('connect.php');
	//读取旧信息
	$id = $_GET['id'];
	$query = mysqli_query($con,"select * from profile where id=$id");
	$data = mysqli_fetch_array($query,MYSQL_ASSOC);
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
		<h1><a href="#">简历修改<sup></sup></a></h1>
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
<!--
  <tr>
    <td height="89" colspan="2" bgcolor="#FFFF99"><strong>后台管理系统</strong></td>
  </tr>
  -->
  <tr>
<!--
	<td width="213" height="287" align="left" valign="top" bgcolor="#FFFF99"><p><a href="article.add.php">发布文章</a></p>
    <p><a href="article.manage.php">管理文章</a></p>      <a href="article.add.php"></a></td>
-->
    <td width="837" valign="top" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="adminarticle.modify.handle.php">
    	<input type="hidden" name="id" value="<?php echo $data['id']?>" />
      <table width="779" border="0" cellpadding="8" cellspacing="1" align=center>
<!--
		<tr>
          <td colspan="2" align="center">修改文章</td>
          </tr>
	  -->
	  <tr>
	  <td width="119">
		  注册账号
	</td>
	  <td width="625">
		  <label for="author"></label>
		<input type="text" name="author" id="author" value="<?php echo $data['author']?>"/>
	  </td>
	</tr>
	<tr>
		<td>
			姓名
		</td>
		 <td width="625">
			<label for="usrname"></label>
			<input type="text" name="usrname" id="usrname" value="<?php echo $data['usrname']?>"/>
		</td>
	</tr>
	<tr>
		<td>
			手机号码
		</td>
		<td width="625">
			<label for="phone"></label>
			<input type="text" name="phone" id="phone" value="<?php echo $data['phone']?>"/>
		</td>
	</tr>
	<tr>
		<td>
			年级
		</td>
		<td width="625">
			<label for="grade"></label>
			<input type="text" name="grade" id="grade" value="<?php echo $data['grade']?>"/>
		</td>
	</tr>
	<tr>
		<td>
			班级
		</td>
		<td width="625">
			<label for="class"></label>
			<input type="text" name="class" id="class" value="<?php echo $data['class']?>"/>
		</td>
	</tr>
	<tr>
		<td>
			邮箱
		</td>
		<td width="625">
			<label for="email"></label>
			<input type="text" name="email" id="email" value="<?php echo $data['email']?>"/>
		</td>
	</tr>
	<tr>
		<td>
			籍贯(省市)
		</td>
		<td width="625">
			<label for="location"></label>
			<input type="text" name="location" id="location" value="<?php echo $data['location']?>"/>
		</td>
	</tr>
	<tr>
		<td>
			英语四级成绩
		</td>
		<td width="625">
			<label for="eng_4"></label>
			<input type="text" name="eng_4" id="eng_4" value="<?php echo $data['eng_4']?>" />
		</td>
	</tr>
	<tr>
		<td>
			英语六级成绩
		</td>
		<td width="625">
			<label for="eng_6"></label>
			<input type="text" name="eng_6" id="eng_6" value="<?php echo $data['eng_6']?>" />
		</td>
	</tr>
	<tr>
	  <td>
		  计算机水平
	  </td>
	  <td>
		  <label for="computer"></label>
		<textarea name="computer" id="computer" cols="60" rows="5"><?php echo $data['computer']?></textarea>
	  </td>
	</tr>

	<tr>
	  <td>
		  在校经历、社会实践经历、基础实验室/meta学习经历
	  </td>
	  <td><textarea name="jingli" cols="60" rows="15" id="jingli"><?php echo $data['jingli']?></textarea></td>
	</tr>
	<tr>
	  <td>
		  获奖情况
	  </td>
	  <td><textarea name="jiangli" cols="60" rows="15" id="jiangli"><?php echo $data['jiangli']?></textarea></td>
	</tr>
	<tr>
	  <td>
		  专业课掌握程度及其他能力（统计、PS等）
	  </td>
	  <td><textarea name="zhuanye" cols="60" rows="15" id="zhuanye"><?php echo $data['zhuanye']?></textarea></td>
	</tr>
	<tr>
	  <td>
		  自我推荐理由、小组建设建议
	  </td>
	  <td><textarea name="selfintro" cols="60" rows="15" id="selfintro"><?php echo $data['selfintro']?></textarea></td>
	</tr>
        <tr>
          <td colspan="2" align="right"><input type="submit" name="button" id="button" value="提交" /></td>
          </tr>
      </table>
    </form></td>
  </tr>
<!--
  <tr>
    <td colspan="2" bgcolor="#FFFF99"><strong>版权所有</strong></td>
  </tr>
-->
</table>
</body>
</html>
