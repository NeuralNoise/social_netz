<?php //this is the unique header for the whole website
require_once '/lib/FirePHPCore/fb.php';
ob_start();
session_start();
echo '<!DOCTYPE html>
<html lang="EN">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Social Media Network Site" />
		<meta name="keywords" content="Socail Media, Simple Social Media" />
		<meta name="author" content="Faysal Shahzad" />

		<!-- <link rel="stylesheet" type="text/css" href="css/normalize.css" media="screen" /> -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
		
		<script src = "js/OSC.js"></script>';
		
		require '/functions.php';
		include '/variables/variables.php';
		
		$userstr = "(Guest)";
		
		if (isset($_SESSION["user"]))
		{
			$user = $_SESSION["user"];
			$loggedin = TRUE;
			$userstr = " ($user)";
		}
		else $loggedin = FALSE;

		echo "<title>$appname$userstr</title>".
			 
	"</head>
	<body>
		<div id='wrapper'>
			<header>
				<h2>$appname$userstr</h2>
			</header>	<!-- end #header -->";

	if ($loggedin)
	{
		echo "<br ><ul class='menu'>" .
		"<li><a href='members.php?view=$user'>Home</a></li>" .
		"<li><a href='members.php'>Members</a></li>" .
		"<li><a href='friends.php'>Friends</a></li>".
		"<li><a href='messages.php'>Messages</a></li>" .
		"<li><a href='profile.php'>Edit Profile</a></li>" .
		"<li><a href='logout.php'>Log out</a></li></ul>";
	}
	else
	{
		echo "<nav><ul class='menu'>" .
		"<li><a href='index.php'>Home</a></li>" .
		"<li><a href='signup.php'>Sign up</a></li>" .
		"<li><a href='login.php'>Log in</a></li></ul><span class='info'> You must be logged in to view this page</span></nav>";
	}
?>
