<?php

     require_once('./conf.php');


     $sql = "select * from chat ORDER BY ID DESC";
  //   $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
 

     $result = $mysql->query($sql);
     $array = array("result"=>array());
  //   $row = $->fetch_array(MYSQLI_ASSOC);
     //$row = mysqli_fetch_array($contents);
    // $contents=$row['headimg'];

     while($row = $result->fetch_array(MYSQLI_ASSOC)){
         array_push($array["result"],json_encode($row));
     }
     echo json_encode($array);
?>





