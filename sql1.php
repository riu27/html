<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "employeedb";
$bd = mysqli_connect ($mysql_hostname, $mysql_user, $mysql_password) or die ("could not connect databse");
mysqli_select_db($bd, $mysql_database) or die ("could not select database");
?>





<?php
include('config.php');
$result = mysqli_query($bd, " SELECT *FROM employee");
while ($row=mysqli_fetch_array($result))
{
$id = $row ['id'];
$name = $row ['name'];
$salary = $row ['address'];
echo "ID: ".$id.""."Name: ". $name. "".
"Salary: ".$salary . "". "Address: ". $address;
echo "<br>/";
}
?>

<?php
include('config.php');
$rename='jon snow';
$result = mysqli_query($bd, " SELECT count(*) as cnt FROM employee");
$row=mysql_fetch_array($result);
$temp=$row['cnt'];
echo $temp;
echo "<br>";

