<?php
     require_once('./conf.php');

     $msg = $_POST["msg"];
     $dt = date("H:i:s");
     $user = $_SESSION['username'];
 // $sql = "insert into ly_content (usernameid, headimg,title, content, time) values (".$_SESSION['username'].",'".$contents."','".$title."', '".$content."', '".time()."')";
    
     $sql="insert into chat (username,chatdate,msg) values (".$user.",'".$dt."','".$msg."')";
     $result = $mysql->insert($sql);

  # $result = mysql_query($sql);
     if(!$result)
     {
        echo $mysql->error_log;
		 exit;
       
     }
     echo "1";
?>





