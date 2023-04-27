<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	// 与数据库链接
	require_once "config.php";
	$user = trim($_POST["username"]);
	$pwd = trim($_POST["password"]);
	// 此处需要插入相应代码
	mysqli_close($link);
}

	
?>

<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><tittle>Sign Up</title></head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<div>
<h1>Register</h1>
<p>Please fill in this form to create an account.</p>
<hr>

<lable for="user"><b>User</b></label>
<input type="text" name="username" value="<?php echo $user; ?>">
<lable for="psw"><b>Password</b></label>
<input type="password" name="password" value="<?php echo $pwd; ?>">
<hr>
<button type = "submit">Register</button>

</div>

<div>
<p>Already have an account? <a href="login.php">Sign in</a>.</p>
</div>
</form>

</body>
</html>

