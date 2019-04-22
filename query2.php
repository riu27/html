<?php
include('config.php');

$sql ="insert into zahid(id,name,salary,address) values('101','shwetha','222,'bangalore')";

if(mysqli_query ($bd,$sql))
{
echo "record inserted sucessfully";
}
mysqli_close($bd);
?>
