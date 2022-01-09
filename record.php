<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="clients.php">Client Details</a></li>
    </ul>
</head>
<?php

    include_once 'includes/db.php';
    include_once 'includes/functions.php';

    $ID = $_GET['ID'];

    $sql = "select * from clientdetails where ID=".$ID;

    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0)
        {
            echo "<table id = 'clients'>";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th>Company Name</th>";
                    echo "<th>First Name</th>";
                    echo "<th>Last Name</th>";
                    echo "<th>Telephone Number</th>";
                    echo "<th>Address</th>";
                echo "</tr>";
                $row = mysqli_fetch_array($result);
                echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" . $row['compname'] . "</td>";
                    echo "<td>" . $row['fname'] . "</td>";
                    echo "<td>" . $row['lname'] . "</td>";
                    echo "<td>" . $row['telephone'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                echo "</tr>";
            echo "</table>";

            ?>
            <div style = text-align:center>
                <iframe
                    width="1000"
                    height="750"
                    style="border:0"
                    loading="lazy"
                    allowfullscreen
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAzyiiEO61G8mt8uEdARFFoJ6ye5groxts&q=<?php echo $row['address']?>">
                </iframe>
            </div>
            <?php

            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    mysqli_close($conn);

?>
