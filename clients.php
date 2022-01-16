<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#clients').DataTable();
        } );
    </script>
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
        if(isset($_SESSION['UID'])){
            $UID = $_SESSION['UID'];
        }else{
            echo "<script type='text/javascript'>alert('Error: No user logged in'); window.location.href='index.php';</script>";
        }

          echo "<h1> Client details</h1>";
          $sql = "SELECT * FROM clientdetails where client_of = '$UID'";
          if($result = mysqli_query($conn, $sql)){
              if(mysqli_num_rows($result) > 0){
                  echo "<table id ='clients' class = 'display'>";
                  echo "<thead>";
                      echo "<tr>";
                          echo "<th>id</th>";
                          echo "<th>Company Name</th>";
                          echo "<th>Telephone Number</th>";
                          echo "<th></th>";
                      echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while($row = mysqli_fetch_array($result)){
                      echo "<tr>";
                          echo "<td>" . $row['ID'] . "</td>";
                          echo "<td>" . $row['compname'] . "</td>";
                          echo "<td>" . $row['telephone'] . "</td>";
                          echo "<td> <a href='record.php?ID=".$row['ID']."'><input type ='submit' id='clientbutton' value='View record'></input></a>";
                      echo "</tr>";
                    }
                    echo "</tbody>";
                  echo "</table>";
                  mysqli_free_result($result);
              } else{
                  echo "No records matching your query were found.";
              }
          } else{
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }
          echo "</div>";
          // Close connection
          mysqli_close($conn);

?>
