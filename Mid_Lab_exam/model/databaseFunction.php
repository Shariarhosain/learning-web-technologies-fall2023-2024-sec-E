<?php

require_once("db.php");

function adduser($arra){
   
    $conn=connection("localhost","root","","mid_exam");
    $id=$arra['id'];
    $password=$arra['password'];
    $name=$arra['name'];
    $user=$arra['user'];
    
    $query1 = "SELECT id FROM signup WHERE id='$id'";
    $result1 = mysqli_query($conn, $query1);
    
    if(mysqli_num_rows($result1) > 0){
        // User exists
        return true;
    } else {
        // User doesn't exist, insert their details
        $query = "INSERT INTO signup VALUES('$id','$password','$name','$user')";
        mysqli_query($conn, $query);
    }
    

}

function checklogin($id,$password){
    $conn=connection("localhost","root","","mid_exam");
    $query = "SELECT * FROM signup WHERE id='$id' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        // User exists
        $data=mysqli_fetch_assoc($result);
        return $data;
    }  
    else {
        // User doesn't exist, insert their details
        return false;
    }
}

function showall(){
    $conn=connection("localhost","root","","mid_exam");
    $query = "SELECT * FROM signup";
    $result = mysqli_query($conn, $query);
    $data=array();
    if(mysqli_num_rows($result) > 0){
        // User exists
        while($row=mysqli_fetch_assoc($result)){
            array_push($data,$row);
        }
        return $data;
    }  
    else {
        // User doesn't exist, insert their details
        return false;
    }
}







?>