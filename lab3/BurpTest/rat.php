<?php
	
	if(isset($_POST["feed"])){
		if($_POST["feed"] != "rice"){
			echo "Why don't you feed me rice!!!";
		}
		else{
			echo "Thank you, my friend! The key is UmF0RnJpZW5kaXNoZXJl";
		}
	}
	
	else{
		echo "Why don't you feed me!!!";
	}
	
?>