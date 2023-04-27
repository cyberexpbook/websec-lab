<?php
	require "config.php";
	header("Content-type: text/html; charset=utf-8");
	require "session_management.php";
		
	if($_POST['username']!=NULL || $_POST['password']!=NULL){
		$username = $password = $username_err = $password_err = "";
	 	if(empty(trim($_POST["username"]))){
        		$username_err = "Please enter username.";
    		} else{
        		$username = trim($_POST["username"]);
    		}
    		
    		if(empty(trim($_POST["password"]))){
       	 		$password_err = "Please enter your password.";
    		} else{
        		$password = trim($_POST["password"]);
    		}	

		if(empty($username_err)&&empty($password_err)){
			$sql = "SELECT id, username, password FROM users WHERE username = '$username'";
			$result = mysqli_query($link, $sql);
			if (mysqli_num_rows($result) == 1) {
            	// 获取对应列
				$row = mysqli_fetch_assoc($result);
				if (strcmp($password, $row["password"]) == 0) {
					forumLogin($username);
					if($_SERVER['REQUEST_METHOD']=='POST'){
						if (!isset ($_SESSION['last_session_id'])){
							$_SESSION['last_session_id'] = 0;
						}
						$_SESSION['last_session_id']++;
						$cookie_value = $_SESSION['last_session_id'];
						setcookie(session_name(), session_id(), 0, '/', "", false, $httponly );
						setcookie("forum", $cookie_value);
					}
					
					forumRedirect("main.php");
					
				}
			}else{
				echo "<script>alert('username or password is wrong!');</script>";
				echo "<script>location.href='login.php'</script>";
			}
		}
	}
	 
?>

<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Sigin in</title></head>
<body>
<form action="<?php echo htmlspecialchars($SERVER["PHP_SELF"]);?>" method ="post">
<div>
<h1>Login</h1>
<p>Use your name and password to login the website.</p>
<hr>

<label for="user"><b>User</b><label>
<input type="text" name="username" value="<?php echo $user; ?>">
<label for="psw"><b>Password</b><label>
<input type="password" name="password" value="<?php echo $pwd; ?>">
<hr>
<button type="submit" class="registerbtn">Login</button>
</div>
<div><p> Do not have an account?<a href="register.php">Sign up </a>.</p>
</div></form>

</body>
</html>
