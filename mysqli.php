<?php

    $servername = "localhost:8024";
    $username = "root";
    $password = "";
    $dbName = "cozy cup";

    $conn = mysqli_connect($servername ,$username , $password ,  $dbName);

    if(!$conn){
        die("Something went wrong!" .mysqli_connect_error());

    }
    echo"Sukses";

?>