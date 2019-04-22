<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "2016cse308";
$bd = mysqli_connect ($mysql_hostname, $mysql_user, $mysql_password) or die ("could not connect databse");
mysqli_select_db($bd, $mysql_database) or die ("could not select database");
?>
