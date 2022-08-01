<?php
session_start();
$_SESSION["uname"] = $_POST["uname"];
$_SESSION["pass"] = $_POST["pass"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["gender"] = $_POST["gender"];
$_SESSION["sectors"] = $_POST["sectors"];
$_SESSION["institute"] = $_POST["institute"];
$_SESSION["address"] = $_POST["address"];
$_SESSION["bio"] = $_POST["bio"];
if($_POST["uname"]!="" && $_POST["pass"]!="" && $_POST["email"]!="" && $_POST["gender"]!="" && $_POST["sectors"]!="" && $_POST["address"]!="" && $_POST["bio"]!="" )
{
	header("Location:../controller/agriculturist profile.php");
}
 
?>