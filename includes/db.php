<?php

    $Servername = "localhost";
    $Username = "root";
    $Password = "";
    $dbName = "Evergreen";

    $conn = mysqli_connect($Servername, $Username, $Password, $dbName);

    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    ?>