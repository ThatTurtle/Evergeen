<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="clients.php">Client Details</a></li>
    </ul>
</head>
<?php
          include_once 'includes/db.php';

          $sql = "SELECT * FROM clientdetails";
          if($result = mysqli_query($conn, $sql)){
              if(mysqli_num_rows($result) > 0){
                  echo "<table id ='clients'>";
                      echo "<tr>";
                          echo "<th>id</th>";
                          echo "<th>Company Name</th>";
                          echo "<th>Telephone Number</th>";
                          echo "<th></th>";
                      echo "</tr>";
                  while($row = mysqli_fetch_array($result)){
                      echo "<tr>";
                          echo "<td>" . $row['ID'] . "</td>";
                          echo "<td>" . $row['compname'] . "</td>";
                          echo "<td>" . $row['telephone'] . "</td>";
                          echo "<td> <a href='record.php?ID=".$row['ID']."'><input type ='submit' id='clientbutton' value='View record'></input></a>";
                      echo "</tr>";
                  }
                  echo "</table>";
                  mysqli_free_result($result);
              } else{
                  echo "No records matching your query were found.";
              }
          } else{
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }
           
          // Close connection
          mysqli_close($conn);

?>
