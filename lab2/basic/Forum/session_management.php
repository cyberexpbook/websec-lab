<?php
	session_start([
    	'cookie_lifetime'=>3600  //SessionID在客户端Cookie储存的时间，默认是0，代表浏览器一关闭SessionID就作废
	]);
	
	
	// 重定向
	function forumRedirect($pLocation) {
		session_commit();
		header( "Location: {$pLocation}");
		exit;
	}
	

	function &forumSessionGrab() {
		if(!isset($_SESSION['forum'])){
			$_SESSION['forum'] = array();
		}
		return $_SESSION['forum'];
	}
	
	
	// 确定登录状态
	function forumIsLoggedIn() {
		$forumSession =& forumSessionGrab();
		return isset($forumSession['username']);
	}
	
	// 为用户创建session
	function forumLogin($pUsername) {
		$forumSession =& forumSessionGrab();
		$forumSession['username'] = $pUsername;
	}
	
	
	function forumLogout() {
		$forumSession =& forumSessionGrab();
		unset($forumSession['username']);
	}

	
	function forumCurrentUser() {
		$froumSession  =& forumSessionGrab();
		return ( isset($forumSession['username']) ? $forumSession['username'] : '') ;
	}
	
?>
