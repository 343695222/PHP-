
<?php
     require_once('./conf.php'); ?>
<!DOCTYPE html>
<meta charset=utf-8>
<head>
<title>聊天室</title>
<style>
 *{
    margin:0;
    padding:0;
    font-family: "microsoft yahei";
 }
 .box{
    margin: 20px auto;
    width: 800px;
    height: 500px;
    padding:20px;
    box-sizing:border-box;
    border:1px solid #000;
 }
 h1{
    text-align:center;
 }
 div#chat{
     width: 750px;
     height: 300px;
     padding:5px;
     margin:20px 0;
     border: 1px solid #bbb;
     overflow:scroll;
     color:red;
 }
 .msg {
    width: 600px;
    height: 25px;
 }
 .btn,.btn2 {
    border:none;
    width: 80px;
    height: 30px;
    border-radius:3px;
    cursor:pointer;
    background:#4c8cf5;
    color:#fff;
 }
 .btn2{
    float:right;
    background:#de5145;
 }
  .btn2:hover{
    background:#cd3225;
  }
 .btn:hover{
     background: #8ab4f9;
 }
 .name{
    background:#5cb85c;
    color:#fff;
    border-radius:3px;
    padding:3px;
    font-size: 15px;
  }
  .time {
     background:#ccc;
     border-radius:3px;
     font-size: 12px;
     color:#fff;
  }
 input{
     margin:0 10px;
 }
</style>

</head>
<body>

<div class="box">
	在线列表：
	<div id="list" style=" width: 750px; height: 50px;"></div>
  <h1>聊天室 </h1> 当前用户 <h2 id="usrname"><?php echo($_SESSION['username']) ?></h2>
  <form>
    <input id="clear" class="btn2" type="button" value="删除聊天记录"/>
    <p></p>
    <div id="chat"></div>
    <input id="txtmsg" class="msg" type="text" name="msg" />
    <input id="btn" class="btn" type="button" value="发送"/>
  </form>
</div>
</body>
<script src="js/jquery-3.4.1.min (1).js"></script>
<script type="text/javascript">

$(function(){
    var usrN =$("#usrname").val();
        		$.ajax({
	        		url: './LoginUsr.php',
	        		type: 'post',
	        		data: {usrname : usrN},
	        		async:true,
	        		success: function(data){
	        			
	       				
	        				
	       			}
              });



},500);
count = 0;

	
var t = setInterval(get_chat_msg,1000);
// 获取每隔1000毫秒就请求一次会话信息
function get_chat_msg()
{
   //获取聊天消息打印到消息框
  $.get("./chat_recv.php",function(data){
        $("#chat").html("");
        var obj = eval("("+data+")");
        var array = obj.result;
        for(var i=0;i<array.length;i++){
             var obj2 = eval("("+array[i]+")");
             var time = "<span class = time>"+obj2.chatdate+"</span>";
             $("#chat").append($("<p>"+time+obj2.username+":"+obj2.msg+"</p>"))
        };
      
  });
  //将当前用户存入在线列表
  
              //请求在线列表中的数据
              
             
	//if($){}
	//$("list").show(1000);
};

$("#btn").click(function(){
  
    strmsg = $("#txtmsg").val();
   $.ajax({
	        			url: './chat_send.php',
	        			type: 'post',
	        			data : { msg : strmsg},
	        			async : true,
	        			success : function(msg){
           $("#txtmsg").val("");
        }
	    
        })
	
	});

// 清空数据库信息$.get(URL,callback);
//必需的 URL 参数规定您希望请求的 URL。
//可选的 callback 参数是请求成功后所执行的函数名。

 $("#clear").click(function(){
     $.get("delete.php",function(msg){
     });
 });



</script>
</html>
