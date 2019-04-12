<html>
<head>
<title> hallalalalallujah</title>
</head>
<body bgcolor="cyan">
<center>
<h1>
<?php
$x=5;
$y=10;
function myTest(){
global $x,$y;
$y=$x+$y;
}

myTest();
echo "the added value is $y";

?>
</h1>
</center>
</body>
</html>
