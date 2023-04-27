<!DOCTYPE html>
<?php

require "session_management.php";

if(!forumIsLoggedIn()){
	forumRedirect('login.php');
}

echo "<div align='right'>
	<p>
		<h2>
			Welcome back! User:<font style='color:red'>{$_SESSION['forum']['username']}</font>
			
			<a href='ChangeCode.php'>[Change Password]</a>
			<form action='logout.php' method='GET'><input type='submit' value='Logout' name='Logout'></form>	
		</h2>		
	
	</p>
	</div>";

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title> Main Page </title>
		<style>
			#all{
				width:600px;
				overflow:hidden;
				display:table;		
			}
			#main,#side{
				display:table-cell;
			}
			body{
				font: normal 11px verdana;		
			}
			ul {
				margin: 0;
				padding: 0;
				list-style: none;
				width: 150px;
				border-bottom: 1px solid #ccc;
			}
			ul li {
				position:relative;
			}
			li ul {
				position: absolute;
				left: 149px;
				top: 0;
				display:none;	
			}

			ul li a {
				display: block;
				text-decoration: none;
				color: #777;
				background: #fff;
				padding: 5px;
				border: 1px solid #ccc;
				border-bottom: 0;
			}


			* html ul li {float: left; height: 1%;}
			* html ul li a {height:1%;}
			ul li a:hover {color: #E2144A; background: #f9f9f9;}
			li ul li a {padding: 2px 5px;}
			li:hover ul, li.over ul {display:block;}
		</style>
		<script>
			startList = function(){
				if (document.all &&document.getElementById){	
					navRoot = document.getElementById("nav");
					for (i=0; i<navRoot.childNodes.length; i++){
						node = navRoot.childNodes[i];
						if(node.nodeName=="LI"){
							node.onmouseover=function(){
								this.className+=" over";
							}
							node.onmouseout=function(){
								this.className=this.className.replace(" over", "");
							}	
						}
					}
				}
			}
			window.onload = startList;
		</script>
		<div align='center'>
			<h1 style='font-size:65px'>Research Forum</h1><hr>
		</div>
			
		</head>
		<body>
		<div id='a'>
			<div id='main' align='left'>
			<h3 sylte='color:red'>Navigation Bar</h3><hr>
			<ul id="nav" style='font-size:15px'>

				<li><a href='#'>Home</a></li>
				<li><a href="info.php">Personal Info</a></li>
				<li><a href="board.php">Message Board</a></li>
				<li><a href="query.php">Query</a></li>
			</url></div>
			<div id='side' style="width:10%"></div>
			<div id='side' sylte="margin-left:20px"><h2 style='color:blue;font-size:30px'>This is the main page of the research forum</h2><p style='font-size:18px'>Here, you can edit your personalized information and talk freely with other researchers.....</p></div>
			</div>	<br><br><br><hr>
		</body>

</html>





