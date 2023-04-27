<?php
	define('DB_SERVER', '[db_ipaddr]');
	define('DB_USERNAME', 'forumuser');
	define('DB_PASSWORD', '[passwd]'); 
	define('DB_NAME', 'Forum_Backend');

$link=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($link === false){
	die("ERROR: Could not connect .".mysqli_connect_error());
}

?>
