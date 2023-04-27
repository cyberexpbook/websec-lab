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

<html>
<head></head>
<body>

	<div align='center'>
		<div>
			<h1>Edit Personal Info</h1>
		</div>
		<form action="msg_edit.php" name="myform" method="POST">
			<label for="content">Name</label>		
			<input style="margin-left:20px" value="" name="content"/>
		<button value="submit" name="submit" class="button">change</button>
		</form>

		<form action="msg_edit_with_filter.php" name="jobform" method="POST">
			<label for="content">Age</label>			
			<input  style="margin-left:37px" value="" name="content"/>
		<button value="submit" name="submit" class="button">change</button>
		</form>
		<br>
		<div align='left' style='width:400px;height:230px'>
			<form style="align:left" action="msg_edit_with_defense.php" name="desform" method="POST">
					<label for="content">Brief Description:</label>	</br>
					<textarea  style="margin-left:3px; width:383px; height: 180px" value="" name="content"></textarea></br>
				<div align='right'><button  style="align:center" value="submit" name="submit" class="button">change</button></div>
			</form>
		</div>
	</div>


<br/>	<br/>	<br/>	<br/>	

</body>

</html>
