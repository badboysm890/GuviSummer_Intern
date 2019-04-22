<?php
session_start();//session starts here

?>

<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Landing Page</title>

 <link rel="stylesheet" href="css/style.css">

 <link rel="stylesheet" href="css/stylelog.css">


</head>

<body>

  <html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
  </head>
  <body>
    <main>
      <div class="background">
        <div class="background-border-horizontal"></div>
        <div class="background-border-vertical"></div>
      </div>
      <header>
        <span ><img class="logo"src="assets/guvi.svg" alt="Image description" /></span>
        <menu>
          <a href="index.php">Home</a>
          <a href="profile1.php">Profile</a>
          <a href="login.php">Login</a>
          <a href="signup.php">Sign Up</a>
          <a href="logout.php">Logout</a>
        </menu>
      </header>
      <section class="hero">
        <div class="layer">
          <div class="item item-displayed">
            <img class="banner1" src="assets/login.svg" alt="Image description" />
          </div>
        </div>
        <div class="layer">
          <div class="item item-revealed item-displayed">
            <h2 style="margin-top: 0px;">Log in to use all the available Resource From Us....</h2>
            <span class="text-flaveur1">
              <h3>Login get into the verse of learning with Guvi and Get hired Quickly</h3>
            </span>

            <span class="text-log" style="margin-top: -58%;margin-bottom: 0px;">
            <div class="login wrap">
              <h1>Login</h1>
              <form role="form" method="post" action="login.php">
                  <fieldset class="lo">
              <input name="email" type="email" id="email" placeholder="Email" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">
              <!-- <input type="text" name="email" id="email" placeholder="Email" /> -->
              <input name="pass" type="password" value="" id="password" placeholder="Password">
              <!-- <input type="button" value="Help!" /> -->
              <input type="submit" value="login" name="login">
            </fieldset>
            </form>
            </div>
            </span>


          </div>
        </div>
      </section>
      </main>
  </body>
</html>

</body>

</html>

<?php

include("db_connect.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$password'";

    $run=mysqli_query($conn,$check_user);

    if (!$run || mysqli_num_rows($run) == 0)
    {
        echo "<script>window.open('welcome.php','_self')</script>";

        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
      echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>
