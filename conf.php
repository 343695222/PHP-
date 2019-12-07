<?php
$dhost = "127.0.0.1";
$duser = "root";
$dpass = "root";
$dname = "test2";
$dcharacter = 'utf8';
session_start();
date_default_timezone_set('Asia/Shanghai'); //设置时区

require_once('./mysql.php');
$mysql = new MysqlObj($dhost, $duser, $dpass, $dname, $dcharacter);#new一个新对象，使用这个类












