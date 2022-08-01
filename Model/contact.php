<html>
<body>
<?php
session_start();
?>
    <img src="../view/logo.jpg" height=130 style="float:left;" >
	 <h3 style="float: right; color: RGB(46,139,87)"><br><br><br>Welcome, <?php echo $_SESSION["uname"] ; ?></h3>
	 <br><h1 style= "color: cmyk(0,0,0,1);font-size:30px;font-family:'public sans'"> <b>AGRICULTURAL GAIN </b> </h1>
    <h4 style= "color:RGB(105,105,105) ;font-size:18px;font-family:'public sans'"> A complete solution of farming <br><br></h4>
  

<div style = "background-color: RGB(46,139,87);" ><br><br></div>
<img src="../view/contact.jpg" height=400 width=1320   >


<!DOCTYPE html>
<html>
<body>

<h3><?php
// Echo session variables that were set on previous page
echo "Agriculturist :" . $_SESSION["uname"] . ".<br>";

?></h3>
<h3><u>List of agriculturists whom you may contact : </u></h3>
<div style = "background-color: RGB(46,139,87);">
<p style="color:white">
<?php
//READ PART: 
$myfile = fopen("agriculturist.txt", "r") or die("Unable to open file!");

while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
</p>
</div>


</body>
</html>