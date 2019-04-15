
<html>
  <head>
    <meta charset="utf-8">
    <!-- Importing the stylesheets -->
    <link rel="stylesheet" href="styleforthetextonthepage.css">
    <link rel="stylesheet" href="loginform.css">
    <link rel="stylesheet" href="styleforbuttons.css">
  </head>
  <body>
    <center><a href="frontpage.php"><img src="logo.png" style="width:800px;height:300px;"></a></center>
    <center><h1>Welcome to Roboger!</h1></center>
    <center><p>Platform which will help you, and your company manage databases in an easy and fast way!</p></center>
    <!-- Button to open the modal login form -->
    <center><button onclick="document.getElementById('id01').style.display='block'">Login to your management account</button></center>

    <!-- The Modal -->
    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="login.php" method="POST">
    <div class="imgcontainer">
      <center><img src="avatarlogin.jpg" style="width:200px;height:200px;" alt="Avatar" class="avatar"></center>
    </div>

    <div class="container">
      <center><label for="Username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="Username" required></center>

      <center><label for="Password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" required></center>

      <center><button type="submit">Login</button></center>

    </div>

    <div class="container" style="background-color:#f1f1f1">
    </div>
  </form>
</div>


  </body>
</html>
