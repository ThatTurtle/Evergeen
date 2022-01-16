<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">-->
    <!--<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>-->
    <!--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>-->
    <ul>
      <li><a href="addcustomer.php">Home</a></li>
      <li><a href="clients.php">Client Details</a></li>
      <li><a href="includes/logout.php">Logout</a></li>
    </ul>
</head>
<?php

    include_once 'includes/db.php';
    include_once 'includes/functions.php';
    session_start();   
    $ID = $_REQUEST['ID'];
    if(isset($_SESSION['UID'])){
        $UID = $_SESSION['UID'];
    }else{
        echo "<script type='text/javascript'>alert('Error: No user logged in'); window.location.href='index.php';</script>";
    }

    $sql = "select * from clientdetails where ID=".$ID." and client_of =".$UID;

    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0)
        {
            echo "<div>";
                echo "<table id = 'clients' class='display'>";
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th>id</th>";
                            echo "<th>Company Name</th>";
                            echo "<th>First Name</th>";
                            echo "<th>Last Name</th>";
                            echo "<th>Telephone Number</th>";
                            echo "<th>Address</th>";
                        echo "</tr>";
                    echo "</thead>";
                    $row = mysqli_fetch_array($result);
                    echo "<tbody>";
                        echo "<tr>";
                            echo "<td>" . $row['ID'] . "</td>";
                            echo "<td>" . $row['compname'] . "</td>";
                            echo "<td>" . $row['fname'] . "</td>";
                            echo "<td>" . $row['lname'] . "</td>";
                            echo "<td>" . $row['telephone'] . "</td>";
                            echo "<td>" . $row['address'] . "</td>";
                        echo "</tr>";
                    echo "</tbody>";
                echo "</table>";
            echo "</div>";

            ?>
            <!--<script>
                $(document).ready( function () {
                    $('#clients').DataTable();
                } );
            </script>-->
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
