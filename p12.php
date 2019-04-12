<?php
if(isset($_GET["name"]) || isset($_GET["age"])){
echo "welcome  ".$_GET['name']."<br/>";
echo "you are   ".$_GET['age']."  years old.";
exit();
}
?>
<html>
<head>
<title>
yessss siri!
</title>
</head>
<body>
<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
<form action="<?php $_PHP_SELF?>" method="GET">
name:<input type="text" name="name"/>
<br/>
AGE:<input type="text" name="age"/>
<br/>
<input type="submit"/>
</form>
</body>
</html>
