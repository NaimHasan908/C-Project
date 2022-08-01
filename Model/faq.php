<html>
<body>
<div style = "background-color: white;" >
<img src="../view/logo.jpg" height=130 style="float:left;" ><br>
<br><h1 style= "color: cmyk(0,0,0,1);font-size:30px;font-family:'public sans'"> <b>AGRICULTURAL GAIN </b> </h1>
<h4 style= "color:RGB(105,105,105) ;font-size:18px;font-family:'public sans'"> A complete solution of farming <br></h4>
<div style = "background-color: RGB(46,139,87);" ><br><br></div>
<h1><u>Frequently Asked Questions are:</u></h1>
<?php
$firstQuestion =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<q1>What to do if any virus attacks the rice</q1>
<topic>agriculture</topic>

</note>";

$xml=simplexml_load_string($firstQuestion) or die("Error: Cannot create object");
print_r($firstQuestion);
?>
<br>
<br>
<?php
$secondQuestion =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<q2>What is soil health</q2>
<topic>agriculture</topic>

</note>";

$xml=simplexml_load_string($secondQuestion) or die("Error: Cannot create object");
print_r($secondQuestion);
?>
<br>
<br>
<?php
$thirdQuestion =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<q3>What are pesticides</q3>
<topic>agriculture</topic>

</note>";

$xml=simplexml_load_string($thirdQuestion) or die("Error: Cannot create object");
print_r($thirdQuestion);
?>

</html>
</body>