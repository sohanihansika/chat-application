<?php
    $conn = mysqli_connect("localhost" , "root" , "" ,"chat");
    if(!$conn){
        die ("Database connection failed : " .mysqli_connect_error());
    }


?>