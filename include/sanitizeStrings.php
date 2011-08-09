<?php
function sanitizeString($string){
	$string = strip_tags(htmlentities(stripslashes($string)));
	return $string;
}
function sanitizeMySQL($string){
	$string = sanitizeString(mysql_real_escape_string($string));
	return $string;
}
?>