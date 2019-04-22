<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <?php
    include_once("db_connect.php");


    ?>

    <meta charset="utf-8">
    <title>BadBoy17G</title>


    <link rel="stylesheet" href="css/stylelog.css">
    <link rel="stylesheet" href="css/stylel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/validation.min.js"></script>
    <script type="text/javascript" src="script/changes.js"></script>


  </head>

<body>
  <main>
    <!-- <div class="background">
      <div class="background-border-horizontal"></div>
      <div class="background-border-vertical"></div>
    </div> -->
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
          <h2 style="margin-top: 0px;">Here Is Your Profile</h2>
          <span class="text-flaveur1">
            <h3 style="margin-left: -51%;">Make any changes in profile</h3>
          </span>

  <?php
  include_once("db_connect.php");
  $sql = "SELECT * FROM users WHERE user_email = '{$_SESSION['email']}'";
  $res = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($res))
  {
  echo <<< EOF

  <span class="text-log" style="margin-top: -58%;margin-bottom: 0px;">
    <div class="nes-container with-title is-centered">
    <div class="register_container">
    <form class="form-signin" method="post" id="register-form">
    <h2 class="form-signin-heading title">Profile</h2><hr />
    <div id="error">
    </div>
    <div class="form-group r1">
    <lable class="labs">FirstName</lable><input type="text" class="form-control" placeholder="first name" name="f_name" id="f_name" value='{$row['f_name']}'/>
    </div>
    <div class="form-group r1">
    <lable class="labs">LastName</lable><input type="text" class="form-control" placeholder="last name" name="l_name" id="l_name" value='{$row['l_name']}' />
    </div>
    <div class="form-group r1">
    <lable class="labs">Username</lable><input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name" value='{$row['user_name']}' />
    </div>
    <div class="form-group r1">
    <lable class="labs">Email</lable><input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" value='{$row['user_email']}'/>
    <span id="check-e"></span>
    </div>
    <div class="form-group r1">
    <lable class="labs">Github</lable><input type="text" class="form-control" placeholder="Github" name="github" id="github" value='{$row['github']}'/>
    </div><div class="form-group r1">
    <lable class="labs">Nickname</lable><input type="text" class="form-control" placeholder="nickname" name="n_name" id="n_name" value='{$row['n_name']}'/>
    </div>
    <hr/>
    <div class="form-group r1">
    <button type="submit" class="btn nes-btn is-success" name="btn-save" id="btn-submit">
    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Save Changes
    </button>
    </div>
    </form>
    </div>
    </div>
  </span>


  </div>
  </div>
  </section>
  </main>

EOF;
  }

  ?>


</body>
</html>
