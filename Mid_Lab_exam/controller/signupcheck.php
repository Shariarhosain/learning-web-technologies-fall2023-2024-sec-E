<?php
session_start();
require_once "../model/databaseFunction.php";

if(isset($_POST['submit'])){
    $result=adduser($_POST) ;
   if($result){
    $_SESSION['message'] = "fail";
    header("location:../view/registration.php");
   }
   else{
    header("location:../view/login.php");
   }

}





?>