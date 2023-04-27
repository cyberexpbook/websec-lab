<!DOCTYPE html>
<?php
require "session_management.php";
require "config.php";
header("Content-type: text/html; charset=utf-8");


if(!forumIsLoggedIn()){
	forumRedirect('login.php');
}

echo "<div align='right'>
	<p>
		<h4>
			Welcome back! User:<font style='color:red'>{$_SESSION['forum']['username']}</font>
			<a href='main.php'>[Back]</a>
			<form action='logout.php' method='GET'><input type='submit' value='Logout' name='Logout'></form>	
		</h4>		
	
	</p>
	</div>";



if(isset($_GET[add])){
	$username = $_SESSION['forum']['username'];
	$password = $_GET["password"];
	$sql_del = "DELETE FROM users WHERE username='$username'";
	$sql_add = "insert into users (username, password) values ('$username', '$password')";		
	$flag1= mysqli_query($link,$sql_del);
	$flag2 = mysqli_query($link, $sql_add); 
	mysqli_close($link);
	if ($flag1 and $flag2){
		forumLogout();        
		forumRedirect('login.php');
	}
}

?>

<html>
<head></head>
<body>

	<div align='center'>
		<div>
			<h1>Change Password</h1>
		</div>
		<form action="ChangeCode.php" name="codeform" method="GET">	
			<label for="password">new Password</label>		
			<input style="margin-left:20px" value="" name="password"/>
		<input style="margin-left:530px;width:80px" type="submit" name="add" value="submit"/>
		</form>
	
	
		</div>
	</div>


<br/>	<br/>	<br/>	<br/>	

</body>

</html>
