<html>
   <head>
     <title>显示留言</title>
	 <meta charaet="utf-8"/>
   </head>
   <body style="margin:20px auto;background-color:#ccc;">
     <div style="margin:50px auto;margingin-left:40px">
	  <a href="add.php" title="添加留言">添加留言</a><br/>
     <?php
	    //建立数据库连接
		$con =mysql_connect('localhost','root','960819')or die('error in connection to mysql server');
	     mysql_select_db('lyb',$con);
		 //设置编码，避免乱码
		 mysql_query("SET NAMES 'gbk'",$con);
		 $sql = "SELECT title,content FROM guestbook";
		 $query =mysql_query($sql,$con);
		 $count =1;
		 while($query && $rs=mysql_fetch_array($query) )
		 {
       ?>	  
	  <p style="color:680067">
	    <span>
		<?php echo $count ;?><b>楼</b>
		<br/>
		<b>留言标题:&nbsp;&nbsp;</b><?php echo $rs['title'];?>
		<br/>
		留言内容:&nbsp;&nbsp;</b><?php echo $rs['content'];?>
		&nbsp;&nbsp;
		</span>
		<hr/>
		</p>
		<?php
		  $count++;
		 }
		 ?>
	  </div>
	   <?php
	  //显示留言板
	
	   ?>
	  
	 </body>
</html>