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

	<body>
		<div align='center'>
		<form name='queryform' method="GET" action='query.php'>
			Input username:
			<input type="text" name="username"/>			
			<input type="submit" name="Submit" value="Submit"/>		
		</form>
		</div>
	</body>

</html>

<?php
	require 'config.php';
	if(isset($_GET['Submit'])){
		// 获取数据
		$username = $_GET['username'];
		$sql = "SELECT title,content,user,created_at FROM message WHERE user='$username'";	

	}

	$query = mysqli_query($link, $sql);

	
	if($query!=null){
		while($row=mysqli_fetch_array($query)){
	
			echo "<div align='center'><table width='700px'>
				<tr bgcolor='#eff3ff'>
					<td>title:<font color='red'>$row[title]</font><div align='right'><a href='delete.php?user=$row[user]'>delete</a></div></td>
				</tr>
				<tr bgcolor='#ffffff'>
					<td> Content:$row[content]</td>
				</tr>
				<tr bgcolor='#ffffff'>
					<td><div align='right'>Published Date:$row[created_at]</div></td>
				</tr>
				<tr>
					<td><div align='right'>Published By:$row[user]</div></td>
				</tr>
				</table></div>";
			
			
		}	
	}
	if(mysqli_num_rows($query)==0){
		echo "<div align='center'><h1>There is no content</h1></div>";
	}		
	mysqli_close($link);
?>
