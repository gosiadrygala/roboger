<html>
  <head>
    <meta charset="utf-8">
    <!-- Importing the stylesheets -->
    <link rel="stylesheet" href="styleforthetextonthepage.css">
  </head>
  <body>
    <center><a href="frontpage.php"><img src="logo.png" style="width:800px;height:300px;"></a></center>
    <center><h1>We are sorry, but you inserted wrong password.</h1></center>
    <center><p>Try again, we will redirect you again to the login page...</p></center>
    <?php
    header('Refresh: 3; URL=http://localhost/project5/frontpage.php');
    ?>
  </body>
</html>
