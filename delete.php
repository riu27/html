<?php
include('config.php');

$sql = "delete from zahid where id=104";

if(mysqli_query ($bd,$sql))
{
echo "record deleted sucessfully";
}
else
{
echo "ERROR : could not delete.";
}
mysqli_close($bd);
?>
