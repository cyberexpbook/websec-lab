<?php
	
	if(isset($_POST["num"])){
		if($_POST["num"] != md5("17")){
			echo "UmF0c1RlYXNlZHlvdQ==";
		}
		else{
			echo "WU9VZG9ub3dSYXRzV2VsbA==";
		}
	}
	
	else{
		echo "UmF0c1RlYXNlZHlvdQ==";
	}
	
?>