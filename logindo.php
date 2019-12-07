<?php
require_once('./conf.php');
if (!$username = $_POST['username']) {
     echo '
        <script language="javascript" type="text/javascript">
            alert("请输入用户名！");
            window.location.href="./login.php"; 
        </script>';
    exit;
}
if (!$password = $_POST['password']) {
     echo '
        <script language="javascript" type="text/javascript">
            alert("请输入密码！");
            window.location.href="./login.php"; 
        </script>';
    exit;
}
$userinfo = $mysql->select("select * from ly_user where username=$username", true);
if (!$userinfo) {
     echo '
        <script language="javascript" type="text/javascript">
            alert("该用户不存在！");
            window.location.href="./login.php"; 
        </script>';
    exit;
}
if ($password != $userinfo['password']) {
     echo '
        <script language="javascript" type="text/javascript">
            alert("密码错误！");
            window.location.href="./login.php"; 
        </script>';
    exit;
} else {
    $_SESSION['username'] = $username;#存储会话信息
    $_SESSION['nickname'] = $userinfo['nickname'];
    echo '
        <script language="javascript" type="text/javascript">
            window.location.href="./show.php"; 
        </script>';
    exit;
}
    ?>
