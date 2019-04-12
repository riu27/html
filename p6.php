<html>
<head>
<title> hallalalallujah</title>
</head>
<body bgcolor="red">
<center>
<h1>
<?php
function myTest(){
static $x=0;
echo $x;
$x++;
}

myTest();
myTest();
myTest();
?>
</h1>
</center>
</body>
</html>
