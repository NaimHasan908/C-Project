<?php
include "../controller/LoginCheck.php";
$username=$password="";
$nameError="";
$passwordError="";
if (isset($_POST["btnclick"])) {
    $error = false;
    if (empty($_POST['uname'])) {
      $nameError = "username is required";
      $error = true;
    }
if(empty($_POST['pass']))
{
 $passwordError = "password is required";
 $error = true;
}
}
//setcookie("uname",$_SESSION["uname"],time()+(86400*2),"/");
?>
<form action="#" method="post">
Username :

<input type="text" id="uname" name="uname" style="height: 30px; width: 300px;"><br><span style="color:red;"><?php echo $nameError; ?></span><br>
<br>
Pasword :
<input type="password" id="pass" name="pass"style="height: 30px; width: 300px;"><br><span style="color:red;"><?php echo $passwordError; ?></span><br>
<br>
<br>
<center><button type="submit"  name="btnclick" style="background-image:url('lin.jpg'); height: 75px; width: 150px;"></button></center><br>
</form>