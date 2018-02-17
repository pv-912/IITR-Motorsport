<?php


mysql_connect("localhost", "u669053251_fsdat", "8H99LeQtXp")or die("cannot connect");
mysql_select_db("u669053251_iitrm")or die("cannot select DB");
$email=$_POST['EMAIL'];
$sql="insert into email(email) values ('$email')";
	  if(!mysql_query($sql))
	  {
		  die('Error'.mysql_error());
		  //header("location:index.html");
		  }  
		  else
		  {
			  header("location:index.html");  
			  }
		  mysql_close();
	?> ?>