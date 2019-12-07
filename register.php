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
<title>注册</title> 
<link href="css/login.css" type="text/css" rel="stylesheet"> 
</head> 
<body> 

<div class="login">
    <div class="message">注册新用户</div>
    <div id="darkbannerwrap"></div>
    <!--使用 isset() 函数用于检测变量是否已设置并且非 NULL。 -->
    <form action="./registerdo.php" method="post" enctype="multipart/form-data">
        <input name="username" placeholder="用户名" required="" type="text" value="<?php if (isset($_SESSION['username'])) { echo $_SESSION['username']; } ?>">
        <hr class="hr15">
        <input name="headimg" placeholder="用户头像" required="" type="file" value="<?php if (isset($_SESSION['headimg'])) { echo $_SESSION['headimg']; } ?>">
        <hr class="hr15">
        <input name="password" placeholder="密码" required="" type="password" value="<?php if (isset($_SESSION['password'])) { echo $_SESSION['password']; } ?>">
        <hr class="hr15">
        <input name="ppassword" placeholder="再次输入密码" required="" type="password" value="<?php if (isset($_SESSION['ppassword'])) { echo $_SESSION['ppassword']; } ?>">
        <hr class="hr15">
        <input value="提交" style="width:100%;" type="submit">
        <hr class="hr20">
    </form>

    
</div>
</body>
</html>