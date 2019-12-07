<?php
require_once('./conf.php');
if (!$id = $_GET['id']) {
   echo '
        <script language="javascript" type="text/javascript">
            alert("参数错误！");
            window.location.href="./show.php"; 
        </script>';
    exit;
}
//echo "delete from ly_content where id=$id";die;
$result = $mysql->deldata("delete from ly_content where id=$id");
if ($result) {
    echo '
        <script language="javascript" type="text/javascript">
            alert("删除成功！");
            window.location.href="./show.php"; 
        </script>';
    exit;
} else {
   echo '
        <script language="javascript" type="text/javascript">
            alert("删除失败，错误代码：'.$mysql->err['code'].',错误为：'.$mysql_err['msg'].'！");
            window.location.href="./show.php"; 
        </script>';
    exit;
}
?>