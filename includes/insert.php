<?php
      include_once 'db.php';
      include_once 'functions.php';

        $compname = $_REQUEST['compname'];
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $telephone = $_REQUEST['telephone'];
        $address = $_REQUEST['address'];

        $sql = "INSERT INTO clientdetails (compname, fname, lname, telephone, address)
            VALUES ('$compname', '$fname', '$lname', '$telephone', '$address' )";
        
        if ($conn->query($sql) === TRUE) {
          alert ("New record created successfully");
        } else {
          alert ("Error: " . $sql . "<br>" . $conn->error);
        }
        $conn->close();
?>