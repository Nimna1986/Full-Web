<?php 

    $server = " ftp.epizy.com";
    $username = "epiz_29588742";
    $password = "PHhH8Nr2YYs";
    $dbname = "epiz_29588742_XXX";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die("Connection Failed:" .mysqli_connect_error());
    }
    
    ?>
   
    