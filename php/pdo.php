<?php



    $servername = "localhost";
    $db = "g56";
    $username = "root";
    $password = "";

    try{
        $conn = new PDO("mysql:host =$servername ; dbname =$db" , $username , $password ,$db);
    
        $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        echo "Lidhje me sukses";
    
    }catch(PDOExeption $e){
        echo "Lidhja deshtoi" .$e->getMessage();

    }

    ?>