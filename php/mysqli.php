<?php

    $servername = "localhost";
    $db = "g56";
    $username = "root";
    $password = "";


    $conn = mysqli_connect($servername ,$username , $password ,  $db);

    if(!$conn){
        die("Lidhja DESHTOI!" .mysqli_connect_error());

    }
    echo"Sukses";

?>