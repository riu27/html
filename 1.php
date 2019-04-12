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
<a href="https://www.google.com/">Test $GET</a>
<form method="get" action="<?php echo $_SERVER[PHP_SELF];
?>">
name:<input type="text" name="name"/>
<br/>
AGE:<input type="text" name="age"/>
<br/>
<input type="submit"/>
</form>
</body>
</html>
