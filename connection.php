<?php
    $SERVER="localhost";
    $username="root";
    $Password="";
    $dbn="Bank";
    
    
    $con=mysqli_connect($SERVER,$username,$Password,$dbn);
    if (!$con) {
        die("connection failed due to".mysqli_connect_error());
     }
     
     //echo "<h1> Successfully connected </h1>";

?>