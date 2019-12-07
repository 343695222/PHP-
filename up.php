<?php
require_once('./conf.php');

?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>

	<?php 
	$id=$_GET['id'];
  $sql="select * from ly_content where id=".$id." ";//找出对应id的信息内容
$contents = $mysql->query($sql);#查询返回一个对象
$row = $contents->fetch_array(MYSQLI_ASSOC);#把查询回来的对象值变成数组，并以字段作为健
	?>
  
	<form action="up_do.php" method="post" >
		<input type="hidden" name="xg" value="<?php echo $row['id']; ?>"/>
	<table align="center" width="441" border="1">
  <tbody>
    <tr>
		<td height="30" colspan="2" align="center">编辑留言</td>
    </tr>
    <tr>
      <td width="74px" height="74">留言内容</td>
      <td width="355px"><textarea name="content" style="width:355px;height:70px;"><?php echo $row['content'];?></textarea></td>
    </tr>
    <tr>
     <td colspan="2"><div align="center">
      <input type="submit" value="确认修改" >
      </div></td>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>