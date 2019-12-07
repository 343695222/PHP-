<?php
require_once('./conf.php');
if (!$title = $_POST['title']) {
    echo '
        <script language="javascript" type="text/javascript">
            alert("请输入留言标题！");
            window.location.href="./add.php"; 
        </script>';
    exit;
}
if (!$content = $_POST['content']) {
    echo '
        <script language="javascript" type="text/javascript">
            alert("请输入留言内容！");
            window.location.href="./add.php"; 
        </script>';
    exit;
}
$contents = $mysql->query("select * from ly_user where username=".$_SESSION['username']."");#查询返回一个对象
$row = $contents->fetch_array(MYSQLI_ASSOC);#把查询回来的对象值变成数组，并以字段作为健
//$row = mysqli_fetch_array($contents);
$contents=$row['headimg'];#获取到头像的地址
$sql = "insert into ly_content (usernameid, headimg,title, content, time) values (".$_SESSION['username'].",'".$contents."','".$title."', '".$content."', '".time()."')";
$result = $mysql->insert($sql);#调用mysql里的 方法
//$db=mysqli_connect('127.0.0.1','root','root','test2');
//$username=$_SESSION['username'];

//$sqll="select headimg from ly_user where username=".$_SESSION['username']."";
//$r=mysqli_query($db,$sqll);
//$row = mysqli_fetch_array($r);
//$headimg=$row['headimg']; 
//留言成功，更新用户头像地址到guestbook表中
//$t = $mysql->updata('update ly_content set headimg="'.$headimg.'" where username="'.$username.'"');
if ($result) {
    echo '
        <script language="javascript" type="text/javascript">
            alert("留言成功！");
            window.location.href="./show.php"; 
        </script>';
    exit;
} else {//弹出错误码和错误信息
    echo '
        <script language="javascript" type="text/javascript">
            alert("留言失败，错误代码：'.$mysql->err['code'].',错误为：'.$mysql_err['msg'].'！");  
            window.location.href="./add.php"; 
        </script>';
    exit;
}
?>