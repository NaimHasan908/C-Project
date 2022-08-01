<?php 

session_start(); 

?>
<html>
<body>
    <img src="../view/logo.jpg" height=130 style="float:left;" >
	 <h3 style="float: right; color: RGB(46,139,87)"><br><br><br>Welcome, <?php echo $_SESSION["uname"] ; ?></h3>
	 <br><h1 style= "color: cmyk(0,0,0,1);font-size:30px;font-family:'public sans'"> <b>AGRICULTURAL GAIN </b> </h1>
    <h4 style= "color:RGB(105,105,105) ;font-size:18px;font-family:'public sans'"> A complete solution of farming <br><br></h4>
  

<div style = "background-color: RGB(46,139,87);" ><br><br></div>
<img src="../view/FRESH.jpg" height=500 width=1320   >

<?php
//include("F:\XAMP\htdocs\Model\Agriculturist sign up.php");
// Start the session
?>
<div style = "background-color: RGB(46,139,87);" >
<h2 style="color:white">Agriculturist's profile:</h2>
</div>
<h1><b><?php echo $_SESSION["uname"]; ?></b></h2>

Email: <?php echo  $_SESSION["email"]; ?>

<br>Gender: <?php echo $_SESSION["gender"]; ?>

<br>Expertizes: <?php
$txt4_2 =$_SESSION["sectors"] ;
 foreach ($txt4_2 as $expertize){
   echo $expertize."  ";
} ?>

<br>Institute: <?php echo $_SESSION["institute"]; ?>

<br>Address: <?php echo $_SESSION["address"] ?>

<br>About: <?php echo $_SESSION["bio"]; ?>


<?php
//WRITE PART: 
$myfile = fopen("agriculturist.txt", "a") or die("Unable to open file!");
$txt =$_SESSION["uname"];
fwrite($myfile, "Username: ");
fwrite($myfile, $txt);
fwrite($myfile, " ");

$txt2 =$_SESSION["email"] ;
fwrite($myfile, "Email: ");
fwrite($myfile, $txt2);
fwrite($myfile, " ");

$txt3 =$_SESSION["pass"] ;
fwrite($myfile, "Password: ");
fwrite($myfile, $txt3);
fwrite($myfile, " ");

$txt4 =$_SESSION["gender"] ;
fwrite($myfile, "Gender: ");
fwrite($myfile, $txt4);
fwrite($myfile, " ");

$txt4_1 =$_SESSION["sectors"] ;
fwrite($myfile, "Expertize: ");
foreach ($txt4_1 as $expertize){
	fwrite($myfile, $expertize);
	fwrite($myfile, " ");
}



$txt5 =$_SESSION["institute"] ;
fwrite($myfile, "Institute: ");
fwrite($myfile, $txt5);
fwrite($myfile, " ");

$txt6 =$_SESSION["address"] ;
fwrite($myfile, "Address: ");
fwrite($myfile, $txt6);
fwrite($myfile, " ");

$txt6 =$_SESSION["bio"] ;
fwrite($myfile, "Bio: ");
fwrite($myfile, $txt6);
fwrite($myfile, " "); 

fclose($myfile); 
?><br><br>
<div style = "background-color: RGB(46,139,87);" >
<h2 style="color:white"><b>What can you do for farmers : </b></h2>
</div>



<img src="../view/advice.png" height=45 style="float:left;" ><a href="../Model/farmers list.php"><h2 style="color:RGB(46,139,87);font-size:20px;" ><u>See Farmers asking for advice ></u> </h2></a><br>


<img src="../view/FAQ.png" height=45 style="float:left;" ><a href="../Model/faq.php"><h2 style="color:RGB(46,139,87);font-size:20px;"><u>Answer FAQs ></u> </h2></a><br>


<img src="../view/contact.png" height=45 style="float:left;" ><a href="../Model/contact.php"><h2 style="color:RGB(46,139,87);font-size:20px;"><u>Contact with other Agriculturists ></u> </h2></a><br>



</body>
</html>