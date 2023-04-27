<!DOCTYPE html>
<?php
require "session_management.php";

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
?>

<?php
	echo "<h2>Please confirm the change:</h2>";
	$content = $_POST["content"];
	echo  "$content";
?>


<html lang="en">
<head></head>
<body>
	<script>
		function backclick(){
			window.location.href ="info.php"	
		}	
	</script>
	<form action='msg_edit.php' method='GET'>
		<input type='submit' name='submit' value='submit'>
	</form>
</body>

</html>



