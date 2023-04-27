<?php
	echo "<h2>Please confirm the change:</h2>";
	$content = $_POST["content"];
	if($content == ''){
		header("location: info.php");
	}
	$content= htmlspecialchars($content);
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




