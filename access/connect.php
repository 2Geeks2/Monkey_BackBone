<?php 
$ini_array = parse_ini_file ('config.ini');

$con = mysql_connect($ini_array["database_access"]["DB_HOST"],$ini_array["database_access"]["DB_USER"]) or die(mysql_error());

if (!$con) {
	echo "Unable to connect to DB: " . mysql_error();
	exit;
}

if (!mysql_select_db($ini_array["database_access"]["DB_NAME"])) {
	echo "Unable to select mydbname: " . mysql_error();
	exit;
}
?>
