<?php
?>
<html>
  <head>
    <title>Technical Test</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <main>
    <div style = text-align:center>
      <form action = "includes/login.php" method="post">
        <h1>Input Form</h1>
          <div>
              <input type ="text" name = "username" id = "username" required placeholder="Input Username">
            </div>

          <div>
              <input type ="password" name = "password" id = "password" required placeholder="Input Password">
          </div>
          <input type = "submit" id="input"></input>
      </div>
      </form>
    </main>
  </body>
</html>