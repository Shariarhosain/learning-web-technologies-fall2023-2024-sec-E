<?php 

require_once '../model/db.php';

if(isset($_POST['user'])){
    echo json_encode(getemployee());
}


