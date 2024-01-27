<?php

    session_start();

    include "DatabaseConnection.php";

    if(isset($_SESSION['user'])){


        if($_SESSION['type'] == 'user'){
            header("location : ../index.php");

        }
        if($_SESSION['type'] == 'admin'){
            header("location : dashboard.php");

        }

    }
?>