<?php
require_once('./conf.php');
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>添加留言</title>
    <link href="css/logindo.css" type="text/css" rel="stylesheet"> 
</head>
<body>
<div class="main">
    <h2>添加留言</h2>
    <form action="./addto.php" method="post" enctype="multipart/form-data">
    <table class="table-integral">
        <tbody id="content_page">
            <tr>
                <td>标题</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td>内容</td>
                <td><input type="text" name="content"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="提交"></td>

            </tr>
            
            
        </tbody>
    </table>
    </form>
</div><!--main-->
</body>
</html>

