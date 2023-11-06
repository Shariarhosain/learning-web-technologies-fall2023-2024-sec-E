<?php

session_start();
require_once("../model/postfunction.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") {


$_SESSION['post_data'] = $_POST;

//send user data to database
postadd($_POST);
if($_SESSION['postaddErr'] =="true"){
    $_SESSION['post_data']['address'] = '';
    $_SESSION['post_data']['housenumber'] = '';
    header("Location: ../view/makeApost.php");
   
   }
   else{
    unset($_SESSION['post_data']);
    header("Location: ../view/hostprofile.php");
   }


}




?>