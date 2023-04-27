<!DOCTYPE html>
<?php
require "session_management.php";
include 'config.php';
header("Content-type: text/html; charset=utf-8");

if(!forumIsLoggedIn()){
	forumRedirect('login.php');
}



if($_POST['add']){
		$sql = "insert into message (user,title,content,created_at) values ('{$_SESSION['forum']['username']}','$_POST[title]', '$_POST[content]', now())";		
		$flag= mysqli_query($link,$sql);
		$url = "board.php";
		echo "<script>window.location.href='$url'</script>";
}

?>


<html>
<body>
	<div align='left'><h1>Input what you want to say...</h1></div></br></br>
	<form name="addForm" method="POST" action="add.php">
		Title: <input style='margin-left:30px;width:510px;height:30px' type="text" name="title"/><br/>
		</br>Content:</br>
		<textarea style='width:600px' name="content" rows="8" cols="30"></textarea><br/>
		<input style="margin-left:530px;width:80px" type="submit" name="add" value="submit"/>
	</form>
</body>
</html>
