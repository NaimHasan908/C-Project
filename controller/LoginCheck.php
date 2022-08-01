<?php
session_start();
require ('../Model/UserModel.php');
if(isset($_POST['btnclick']))
{
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    if($username !=null && $password !=null){
    $status=Login($username,$password);
    if($status)
    {
        $_SESSION['uname'] = $username;
        header("Location:../controller/agriculturist profile.php");
    }
    else
    {
        echo "Invalid or incomplete action";
    }
}
}

?>