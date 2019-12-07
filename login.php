<?php
require_once('./conf.php');
?>
<!DOCTYPE html>
<html>
<head>
        
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta http-equiv="Pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-cache"> 
<meta http-equiv="Expires" content="0"> 
<title>登录</title> 

<link href="css/login.css" type="text/css" rel="stylesheet"> 
</head> 
<body> 

<div class="login">
    <div class="message">登录</div>
    <div id="darkbannerwrap"></div>
    
    <form action="./logindo.php" method="post" enctype="multipart/form-data">
        <input name="action" value="login" type="hidden">
        <input name="username" placeholder="用户名" required="" type="text">
        <hr class="hr15">
        <input name="password" placeholder="密码" required="" type="password">
        <hr class="hr15">
        <input value="登录" style="width:50%;" type="submit">
        <a href="./register.php" style="width: 50%">注册</a>
        <hr class="hr20">
        <!-- 帮助 <a onClick="alert('请联系管理员')">忘记密码</a> -->
    </form>

    
</div>
</body>
</html>