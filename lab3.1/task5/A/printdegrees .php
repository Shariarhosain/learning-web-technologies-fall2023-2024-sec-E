<?php
if(isset($_POST['ssc']) || isset($_POST['hsc']) || isset($_POST['bsc']) || isset($_POST['msc']) ){
    if(isset($_POST['ssc'])){
        echo " ".$_POST['ssc'];
    }
    if(isset($_POST['hsc'])){
        echo " ".$_POST['hsc'];
    }
    if(isset($_POST['bsc'])){
        echo " ".$_POST['bsc'];
    }
    if(isset($_POST['msc'])){
        echo " ".$_POST['msc'];
    }
}
else{
    echo "Please select at least one degree";
}

?>