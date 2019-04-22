<?php
include('config.php');
$sql="update employee set name='jon snow' where id=1";
if(mysqli_query($bd,$sql)){
echo("record was updated successfully.");
} else 
{
echo ("ERROR: cold not able to execute $sql.");
}
