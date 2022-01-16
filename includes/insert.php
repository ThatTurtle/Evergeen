<?php
      include_once 'db.php';
      include_once 'functions.php';
      session_start();

        $compname = $_REQUEST['compname'];
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $telephone = $_REQUEST['telephone'];
        $address = $_REQUEST['address'];
        $UID = $_SESSION['UID'];

        $sql = "INSERT INTO clientdetails (compname, fname, lname, telephone, address, client_of)
            VALUES ('$compname', '$fname', '$lname', '$telephone', '$address', '$UID' )";
        
        if ($conn->query($sql) === TRUE) {
          alert ("New record created successfully");
        } else {
          alert ("Error: " . $sql . "<br>" . $conn->error);
        }
        $conn->close();
?>