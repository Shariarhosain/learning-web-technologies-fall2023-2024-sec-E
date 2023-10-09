<?php

if(isset($_POST['dd']) && isset($_POST['mm']) && isset($_POST['yyyy'])){
    echo "Input DOB: {$_POST['dd']}/{$_POST['mm']}/{$_POST['yyyy']}";
}


