<?php
	$pageTitle = "search";
	session_start();
	require_once("header.php");
	
	echo "<div class = 'main' id='search'>";
	if (isset($_POST['searchname'])){
		$restName = sanitizeMySQL($_POST['searchname']);
		echo "restName: $restName <br />";
		$query = "SELECT * FROM restaurants WHERE rest_name='$restName'";
		echo $query . "<br />";
		$result = mysql_query($query);
		
		if (!$result) die("Database access failed: " . mysql_error());
		
		$rows = mysql_num_rows($result);
		
			echo "rows: " . $rows . "<br />";
			for($j=0; $j < $rows; $j++){
				$row = mysql_fetch_row($result);
				echo "<br />" . $row[0] . "<br />";
				echo $row[1] . "<br />";
				echo $row[2] . "<br />";
				echo $row[3] . "<br />";
				echo $row[4] . "<br />";
			}
	}	
echo "works";

echo "</div>";

require_once("footer.php");
?>
