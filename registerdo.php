<?php
require_once('./conf.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
#判断用户名，密码是否输入
    if (!$username = $_POST['username']) {
        $_SESSION['username'] = $username;
        echo '
        <script language="javascript" type="text/javascript">
            alert("请输入用户名！");
            window.location.href="./register.php"; 
        </script>
        ';
        exit;
    }
    if (!$password = $_POST['password']) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        echo '
        <script language="javascript" type="text/javascript">
            alert("请输入密码！");
            window.location.href="./register.php"; 
        </script>
        ';
        exit;
    }
    if (!$ppassword = $_POST['ppassword']) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['ppassword'] = $ppassword;
        echo '
        <script language="javascript" type="text/javascript">
            alert("请再次输入密码！");
            window.location.href="./register.php"; 
        </script>
        ';
        exit;
    }
    if ($password != $ppassword) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['ppassword'] = $ppassword;
        echo '
        <script language="javascript" type="text/javascript">
            alert("两次输入密码不一致！");
            window.location.href="./register.php"; 
        </script>
        ';
        exit;
    }
 
    #上传头像，对头像进行处理（重命名）

#$_FILES['myFile']['type'] 文件的 MIME 类型，需要浏览器提供该信息的支持，例如"image/gif"。 
#$_FILES['myFile']['size'] 已上传文件的大小，单位为字节。 
#$_FILES['myFile']['tmp_name'] 文件被上传后在服务端储存的临时文件名，一般是系统默认。可以在php.ini的upload_tmp_dir 指定，但 用 putenv() 函数设置是不起作用的。 
#$_FILES['myFile']['error'] 和该文件上传相关的错误代码。['error'] 是在 PHP 4.2.0 版本中增加的。下面是它的说明：(它们在PHP3.0以后成了常量) 
$img=$_FILES['headimg'];#$_FILES['myFile']['name'] 客户端文件的原名称。
$filename=date('YmdHis').rand(100,999);#用日期加随机数进行命名
$ext=strrchr($img['name'],'.');#查找在img中原本名字的后缀位置，右面开始的最后一次出现的位置，如果成功，返回该字符以及其后面的字符，如果失败
move_uploaded_file($img['tmp_name'],'./photo/'.$filename.$ext);#移动文件到新photo文件夹里面去

#把值存入数据库
    $sql = "insert into ly_user (username, password, headimg) values ('".$username."', '".$password."', '" . './photo/'.$filename.$ext . "')";
    $result = $mysql->insert($sql);
    if ($result) {
        echo '
        <script language="javascript" type="text/javascript">
            alert("注册成功！请登录");
            window.location.href="./login.php"; 
        </script>
        ';
        exit;
    }
?>
</body>
</html>

