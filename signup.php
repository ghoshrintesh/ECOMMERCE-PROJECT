<?php include('register.php');?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
      <form action="signup.php" class="signup-form" method="post">
       <h1>Sign up</h1>
        <?php include('errors.php');?>
        <div class="tb">
          <input type="text" name="name" placeholder="Full name"> 
        </div>
    
      <div class="tb">
          <input type="text" name="username" placeholder="Username">
      </div>
        <div class="tb">
          <input type="password" name="password" placeholder="Password">
        </div>
      <div class="tb">
        <input type="text" name="mobno" placeholder="Mobile No">
      </div>

      <div class="tb">
        <input type="email" name="email" placeholder="Email">
      </div>
        <input type="submit" name="submit" class="signupbtn" value="Sign up">
        <div class="home_text">
        <br/><a href="home.php"><h3>HOME</h3></a></div>
       </form>
  </body>
</html>