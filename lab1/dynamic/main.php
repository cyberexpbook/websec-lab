<?php
if(isset($_POST['submit'])){
	session_start();
	$_SESSION =array();

	session_destroy();
	header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<body>

<div>
<h1>Hi, This Is Main Page.</h1>
</div>

</br>

</body>
</html>

