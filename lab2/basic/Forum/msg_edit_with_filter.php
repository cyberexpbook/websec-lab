<?php
	function filter($content)
	{
		$filter = "/script|img/i";
		preg_match($filter, $content) && die("Your code has been filtered.");
		return $content;
	}

	echo "<h2>Please confirm the change:</h2>";
	$content = $_POST["content"];
	if($content == ''){
		header("location: info.php");
	}
	$content= filter($content);
	echo $content;
?>

<!DOCTYPE html>
<html lang="en">
<head></head>
	<body>
		<script>
			function backclick(){
				window.location.href="main.php";			
			}
		</script>
		<p>
			<button name="back" class="button" onclick="backclick()">Back</button>
		</p>
	</body>
</html>




