<?php

session_start();
require_once "../model/databaseFunction.php";

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $password=$_POST['password'];
    
    $result=checklogin($id, $password);
   if($result!=false){
    $_SESSION['name']=$result['name'];
    $_SESSION['id']=$result['id'];
    $_SESSION['user']=$result['user'];
    $_SESSION['flag'] = 'true';
   }
   if($result==false){
    $_SESSION['message'] = "fail";
    header("location:../view/login.php");
   }
   else{
    if($result['user']=="admin"){
        
       
       header("location:../view/admin_home.php");
    }
    else{
       
        header("location:../view/user_home.php");
    }
   }
  
}














?>