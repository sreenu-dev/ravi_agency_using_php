<?php
    $servername="localhost";
    $username="root";
    $password="";
    
    $conn=new mysqli($servername,$username,$password,"ravi_agency");
    
    if($conn){
        echo "Connection Successfull";
    }
    else{
        echo "Connection failed";
    }    
?>