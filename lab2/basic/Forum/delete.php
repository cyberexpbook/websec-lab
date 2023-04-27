<?php
	require "session_management.php";
	include 'config.php';
	$user=$_GET['user'];
	if($_SESSION['forum']['username']==$user){
		$query="delete from messages where user='$user'";
		mysqli_query($link,$query);
		$url = "board.php";
	}else{
		echo "<script>alert('no permission');</script>";
	}
	echo "<script language='javascript' type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"
?>
