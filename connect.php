<?php
$username = "";
$password = "";
$hostname = "";
$dbname = "";

//connectoin to the database
$dbhadnle = mysql_connect($hostname, $username, $password)or die("Unable to connect to MySQL");
echo "Connected to MySQL using username - $username, password - $password, host - $hostname<br>";
$selected = mysql_select_db("$bdname", $dbhandle) or die("Unable to connect to MySQL DB - check the database name and try again.");
?>