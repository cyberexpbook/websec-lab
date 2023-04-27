<?php
	require 'session_management.php';
	if(isset($_GET['Logout']) ) {
	
	if(!forumIsLoggedIn()){
		forumRedirect('login.php');
	}
	
	echo "<script>alert('You have logged out !!');</script>";
	forumLogout();
        
	forumRedirect( 'login.php' );



}



?>
