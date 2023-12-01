<?php


function getemployee(){
    $conn = mysqli_connect('localhost', 'root', '', 'lab8');
   $query="SELECT EmployerName FROM employers";
    $result=mysqli_query($conn,$query);
    $employee=[];
    while($row=mysqli_fetch_assoc($result)){
        array_push($employee,$row);
    }
    return $employee;

   
}






