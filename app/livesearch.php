<?php
	session_start();
	require_once("../config/config.php");
	require_once("../include/sanitizeStrings.php");
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);
	
	if(isset($_POST['searchname'])){
		$restName = sanitizeMySQL($_POST['searchname']);
		$query = "SELECT * FROM restaurants WHERE rest_name='$restName'";
	//	echo $query . "<br />";
		$result = mysql_query($query);
		if(!$result){
			die("something wrong");
		}
		else if (mysql_num_rows($result)==0){
			echo("no suggestions");
		}
		else{
			$rows = mysql_num_rows($result);
		
			for($j=0;$j < $rows; $j++){
				$row = mysql_fetch_row($result);
				echo $row[1] . "<br />";
				echo "Phone: " . $row[3] . "<br />";
			}
		}
	}



?>