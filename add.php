<html>
   <head>
     <title>添加留言</title>
	 <meta charaet="utf-8"/>
	 <script type="text/javascript">
	 function checksmt()
	 {
	  var t = document.getElementById('title').value;
	  var c = document.getElementById('content').value;
	  if(t.length<1||c.length<1)
	  {
	  alert("留言标题和内容是必填项")；
	  return false;
	  }
	  return true;
	 }
	 </script>
   </head>
   <body style="margin:20px auto;background-color:#ccc;">
     <div style="margin:50px auto;margingin-left:40px">
	 <a href="view.php" title="查看留言">查看留言</a><br/>
	 <form action="add.php" method="post" onsubmit="return checksmt()">
	   <b>标题：</b>&nbsp;&nbsp;&nbsp;<input id="title" type="text" name="title" size="30"/>
	   <br/><br/>
	   <b>内容:</b>&nbsp;&nbsp;
	   <textarea name="content" rows="10" cols="30"></textarea>
	   <br/><br/>
	   <input id="content" style="margin-left:90px" type="submit" name="smt" value="添加留言"/>
	   &nbsp;&nbsp;
	   <input type="reset" name="reset" value="重置"/>
	   </form>
	  </div>
	   <?php
	  //添加到留言板
	 if(isset($_POST['smt']))
      {  
		  {
			  if($_POST['smt'])
		{
	    $title =mysql_escape_string(trim($_POST['title']));
		$content =mysql_escape_string(trim($_POST['content']));
		
		//插入数据库
		$con =mysql_connect('localhost','root','960819')or die('error in connection to mysql server');
		mysql_select_db('lyb',$con);
		//避免乱码
		mysql_query("SET NAMES 'gbk'",$con);
		$sql="INSERT INTO guestbook(title,content) VALUES('".$title."','".$content."')";
		if(mysql_query($sql,$con))
		{
		echo '<script type="text/javascript">alert("添加留言成功!")</script>';
		}
		else
		{
		echo '<script type="text/javascript">alert("添加留言失败,请稍后重试!")</script>';
		}
		}
	  }
	  }
	   ?>
	  
	 </body>
</html>