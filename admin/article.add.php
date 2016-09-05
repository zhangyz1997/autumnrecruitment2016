<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['userid'])){
    header("Location:../user_reg/login.html");
    exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CDMG</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="#">新建简历<sup></sup></a></h1>
		<h2></h2>
	</div>
	<div id="menu">
		<ul>
			<li><a href="../index.html">首页</a></li>
			<li><a href="../admin/article.add.php">新建简历</a></li>
			<li class="active"><a href="../admin/article.manage.php">简历管理</a></li>
			<li><a href="../user_reg/login.php?action=logout">注销登陆</a></li>
		</ul>
	</div>
</div>
<!-- end header -->
<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
 <!-- <tr>
    <td height="89" colspan="2" bgcolor="#FFFF99"><strong>后台管理系统</strong></td>
</tr>-->
  <tr>
  <td width="837" valign="top" bgcolor="#FFFFFF">
    <form id="form1" name="form1" method="post" action="article.add.handle.php">
      <table width="779" border="0" cellpadding="8" cellspacing="1" align=center>
        <td width="119">
			  注册账号
		</td>
          <td width="625">
			  <label for="author"></label>
            <input type="text" name="author" id="author" />
		  </td>
        </tr>
		<tr>
			<td>
				姓名
			</td>
			 <td width="625">
				<label for="usrname"></label>
			    <input type="text" name="usrname" id="username" />
		    </td>
		</tr>
		<tr>
			<td>
				手机号码
			</td>
			<td width="625">
				<label for="phone"></label>
			    <input type="text" name="phone" id="phone" />
		    </td>
		</tr>
		<tr>
			<td>
				年级
			</td>
			<td width="625">
				<label for="grade"></label>
				<input type="text" name="grade" id="grade" />
			</td>
		</tr>
		<tr>
			<td>
				班级
			</td>
			<td width="625">
				<label for="class"></label>
				<input type="text" name="class" id="class" />
			</td>
		</tr>
		<tr>
			<td>
				邮箱
			</td>
			<td width="625">
				<label for="email"></label>
				<input type="text" name="email" id="email" />
			</td>
		</tr>
		<tr>
			<td>
				籍贯(省市)
			</td>
			<td width="625">
				<label for="location"></label>
				<input type="text" name="location" id="location" />
			</td>
		</tr>
		<tr>
			<td>
				英语四级成绩
			</td>
			<td width="625">
				<label for="eng_4"></label>
				<input type="text" name="eng_4" id="eng_4" />
			</td>
		</tr>
		<tr>
			<td>
				英语六级成绩
			</td>
			<td width="625">
				<label for="eng_6"></label>
				<input type="text" name="eng_6" id="eng_6" />
			</td>
		</tr>
        <tr>
          <td>
		      计算机水平
	      </td>
          <td>
			  <label for="computer"></label>
            <textarea name="computer" id="computer" cols="60" rows="5"></textarea>
		  </td>
        </tr>

        <tr>
          <td>
			  在校经历、社会实践经历、基础实验室/meta学习经历
		  </td>
          <td><textarea name="jingli" cols="60" rows="15" id="jingli"></textarea></td>
        </tr>
		<tr>
		  <td>
			  获奖情况
		  </td>
		  <td><textarea name="jiangli" cols="60" rows="15" id="jiangli"></textarea></td>
		</tr>
		<tr>
		  <td>
			  专业课掌握程度及其他能力（统计、PS等）
		  </td>
		  <td><textarea name="zhuanye" cols="60" rows="15" id="zhuanye"></textarea></td>
		</tr>
		<tr>
		  <td>
			  自我推荐理由、小组建设建议
		  </td>
		  <td><textarea name="selfintro" cols="60" rows="15" id="selfintro"></textarea></td>
		</tr>
        <tr>
          <td colspan="2" align="right"><input type="submit" name="button" id="button" value="提交" /></td>
          </tr>
      </table>
    </form></td>
  </tr>
<!--
  <tr>
    <td colspan="2" bgcolor=lightgreen><strong>版权所有</strong></td>
  </tr>
-->
</table>
</body>
</html>
