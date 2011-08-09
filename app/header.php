<?php

	require_once("../config/config.php");
	require_once("../include/sanitizeStrings.php");
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);
	
	//must define pageTitle before requiring header in other pages!!
	$title = "onTapp | " . $pageTitle; 
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; 
	?></title>
	<!--meta data tags-->
	<link rel="stylesheet" href="../public/stylesheets/main.css" type="text/css" />
	<!--link the style sheet here-->
	<!--link the favicon-->
</head>
<body>
	<div id="wrapper">
		<header>
			<h1>onTapp</h1>
<?php 
  /* 
     code to see if person is signed in and
     proceed accordingly, printing either 
     "Hey, Welcome Back John!" with options
     or sign in/sign up.
  */
?>
		</header>
<?php
  //require_once("notificationbar.php")
?>
		
		
		