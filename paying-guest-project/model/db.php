<?php




 function connection($host,$user,$pass,$db)
{
    $conn=mysqli_connect($host,$user,$pass,$db);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}







?>