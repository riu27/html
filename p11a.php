<?php
if(isset($_GET["name"]) || isset($_GET["age"])){
echo "welcome  ".$_GET['name']."<br/>";
echo "you are   ".$_GET['age']."  years old.";
exit();
}
?>
