<?php
 require_once('./conf.php');
 $usr = $_POST['usrname'];


 $sql_insert = "insert into logined (usr)values ('$usr')";
 $sql_inser = $mysql->insert($sql_insert);
 	//然后将Table中每一项取出来
 	$sql_Usr = "select * from logined"; //把表中所有项存到结果中
     
     $Usr_res = $mysql->select($sql_Usr); 

 	$count = 0;
 	$arr = array();
 	while($row = $Usr_res->fetch_array(MYSQLI_ASSOC))
 	{
 		array_push( $arr, $row['usr']);
 	}
 	echo json_encode($arr,true);


?>