<html>
  <head>
    <meta charset="utf-8">
    <!-- Importing the stylesheets -->
    <link rel="stylesheet" href="styleforthetextonthepage.css">
    <link rel="stylesheet" href="styleforbuttons.css">
  </head>
  <body>
      <center><a href="frontpage.php"><img src="logo.png" style="width:800px;height:300px;"></a></center>
      <p align=center id=welcometext>Welcome to roboger <?php session_start(); $Name = $_SESSION['Name']; echo $Name;?><br>
      Which operation would you like to perform?</p>
      <a href=createdatabase.php><center><button type="submit">Create a new database</button></center></a>
      <a href=managedatabase.php><center><button type="submit">Manage already existing databases</button></center></a>
      <br><br><br>
      <div class=button1>
      <a href=logout.php><button1 type="submit" align=left><center>Log out</center></button1></a>
      </div>
  </body>
<html>
