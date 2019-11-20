
<?php include('process.php');?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
   <link rel="stylesheet" href="style1.css">
   
  </head>
  <body>

      <form action="login.php" class="login-form" method="post">
        <h1>Login</h1>
         <?php include('errors.php');?>
        <div class="tb">
          <input type="text" name="username" placeholder="Username">
          
        </div>

        <div class="tb">
          <input type="password" name="password" placeholder="Password">
          
        </div>

        <input type="submit" name ="login" class="logbtn" value="Login">

        <div class="bottom-text">
          Don't have an account? <a href="signup.php" >Sign up</a>
        </div>
        <div class="home_text">
        <br/><a href="home.php"><h3>HOME</h3></a></div>
      </form>
      </script>
  </body>
</html>


