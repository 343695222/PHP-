<?php
require_once('./conf.php');
?>
	<?php 
     $id =$_POST['xg'];#获取当前用户id
	 $content=$_POST['content'];#获取用户修改后的留言
	 $sql =" update ly_content set content ='".$content."' where id='".$id."' ";
	 $result = $mysql->updata($sql);#调用成员函数执行updata修改操作
	// $rs=mysqli_query($db,$sql);
	 if($result){
		 exit('<script>alert("编辑成功");window.location.href ="show.php"</script>)');}else{
			 exit('<script>alert("编辑失败");history.back();</script>');
			 }
?>		
