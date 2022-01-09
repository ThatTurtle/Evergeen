<?php
?>
<html>
  <head>
    <title>Technical Test</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="clients.php">Client Details</a></li>
    </ul>
  </head>
  <body>
    <main>
    <div style = text-align:center>
      <form action = "includes/insert.php" method="post">
        <h1 style="text-align:center;">Input Form</h1>
          <div>
              <!---<label for ="compname">Company Name:</label></p>--->
              <input type ="text" name = "compname" id = "compname" required placeholder="Your companies name">
            </div>

          <div>
              <!---<label for ="fname">First Name:</label></p>--->
              <input type ="text" name = "fname" id = "fname" required placeholder="Your first name">
          </div>

          <div>
              <!---<label for ="lname">Last Name:</label></p>--->
              <input type ="text" name = "lname" id = "lname" required placeholder="Your last name">
          </div>

          <div>
              <!---<label for ="telephone">Telephone Number:</label></p>--->
              <input type ="number" name = "telephone" id = "telephone" required placeholder="Your telephone number">
          </div>

          <div>
              <!---<label for ="address">Address:</label></p>--->
              <textarea name = "address" rows="4" cols="50" id = "address" required placeholder="Your companies address"></textarea>
          </div>
          <input type = "submit" id="input"></input>
      </div>
      </form>
    </main>
  </body>
</html>