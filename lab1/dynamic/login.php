<?php
// 初始化session
session_start();

// 检查用户是否已经登录，如果是则将其导航到main.php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        // 此处需要插入相应代码
    exit;
}

require "config.php";

// 此处需要插入相应代码


?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Sign in</title></head>
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

