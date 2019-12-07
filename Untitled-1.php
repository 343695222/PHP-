<script>
        	$(function(){
        		/*console.log(this.location.href);*/
        		/*console.log($("#num").val());*/
        		var usrN = $("#num").val();
        		$.ajax({
	        		url: 'LoginUsr.php',
	        		type: 'post',
	        		data: {usrname : usrN},
	        		async:true,
	        		success: function(data){
	        			//console.log( typeof data);
	       				var res = JSON.parse(data);
	       				console.log(res);
	       				var text = "";
	       				for(var i = 0; i < res.length; i++)
	       				{
	       					text += res[i] + "<br>";
	       				}
	       				/*console.log(text);*/
	       				$("#onLinePanel").html("在线用户"+ "<br>" + text);
	        				
	       			}
	       		},500);
        		count = 0;
	        	
	        	setInterval( function(){
	        		
	        		$.ajax({
	        			url: 'LoginUsr.php',
	        			type: 'get',
	        			success: function(data){
		        			//console.log( typeof data);
		       				var res = JSON.parse(data);
		       				/*console.log(res);*/
		       				var text = "";
		       				for(var i = 0; i < res.length; i++)
		       				{
		       					text += res[i] + "<br>";
		       				}
		       				/*console.log(text);*/
		       				$("#onLinePanel").html("在线用户"+ "<br>" + text);
		        				
		       			}
	        		});
	        	}, 2000);
        		
	        	$("#btn").click(function(){
	        		//得到用户要发送的消息
	        		var mes = encodeURIComponent($("#content").val());
	        		//将用户名和消息发送到服务器，服务器将该条消息存到messages表中,然后将信息再写到chatContent那个div里面
	        		$.ajax({
	        			url: 'Chat.php',
	        			type: 'post',
	        			data : {usrname : usrN, content : mes},
	        			async : true,
	        			success : function(response){
	        				//将响应数据写回到chatContent div里面
	        				var res = JSON.parse(response);
	        				/*console.log("聊天内容为:" + res.usrname);
	        				console.log(res.content);*/
	        				$("#chatContent").append($("<p>" + res.usrname + ":</p>" + "<p id='indexp'>" + decodeURIComponent(res.content) +"</p>"));
	        			}
	        		});
	        	});
	        	window.onbeforeunload = function(){
	        		//console.log("刷新");
	        		$.ajax({
		        		url: 'delLogin.php',
		        		type: 'post',
		        		data: {usrname : usrN},
		        		async : true,
		        		success: function(data){
		        			
		        			/*console.log(data);*/
		        		}
		        	});
	        	}
	        	/*window.onunload = function(){
		        	//console.log("删除事件");
		        	//将当前用户名从Logined表中删除掉
		        	$.ajax({
		        		url: 'delLogin.php',
		        		type: 'post',
		        		data: {usrname : usrN},
		        		async : true,
		        		success: function(data){
		        			
		        			console.log(data);
		        		}
		        	}); 
		        }*/
		        //每个用户（页面）每隔一段时间(2s)就向后台请求，访问数据库中的message表，并将这些message返回
		        setInterval(function(){
		        	$.ajax({
		        		url: 'usrMess.php',
		        		type: 'get',
		        		async: true,
		        		success : function(response){
		        			//将返回的所有消息表现在chatContent中
		        			/*console.log(typeof response);*/
		        			var res = JSON.parse(response);
		        			var text = "";
		        			console.log(res.length);
		        			//最多只显示之前发的9条消息
		        			if(res.length <= 9)
		        			{
		        				i = 0;
		        			}
		        			else
		        			{
		        				i = res.length - 9;
		        			}
		        			for(; i < res.length; i++)
		        			{
		        				var res_json = JSON.parse(res[i]);
		        				/*console.log(JSON.parse(res[i]));*/
		        				/*console.log(typeof res_json); */    //数据处理：如何把PHP返回的字符串数组变成JSON对象
		        				console.log(JSON.parse(res_json).usrname);
		        				console.log(decodeURIComponent(JSON.parse(res_json).content));
		        				text += "<p>";
		        				text += JSON.parse(res_json).usrname + ":</p>";
		        				text += "<p id='indexp'>" + decodeURIComponent(JSON.parse(res_json).content) +"</p>";
		        				/*console.log(text);*/
		        			}
		        			$("#chatContent").html(text);
		        		}
		        	});
		        }, 2000);
        	});
        </script>