<?php
    include_once 'db.php';
    include_once 'functions.php';
    session_start();

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);


    $sql = "SELECT id from logindetails where username = '$username' and password = '$password'";

    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            $_SESSION["UID"] = $result->fetch_array()[0];
            header("Location:../clients.php");
        }else{
            alert ("Error: Incorrect login details");
        }
    }else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>