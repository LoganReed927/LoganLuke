<?php
$userName = "";
$userPass = "";
if (isset($_POST['btn-signIn'])) {
    $userName = trim($_POST['userName']);
    $userPass = trim($_POST['userPass']);
    $code = md5($userPass);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login - Nebraska</title>
  </head>
  <body>

  <!-- Start of the navigation bar-->
  <?=$nav; ?>

    <!-- Start of login part -->
    <div class="container">
      <h2 class="text-center">Sign In</h2>
      <br /><br /><br />
      <div class="row">
        <div class="col text-center">
          <br /><br />
            <div id="formm">
              <form method="POST">
                  <div class="form-row">
                      <div class="col">
                          <input type="username" class="form-control" id="user" aria-describedby="user" placeholder="User name" name="userName"/>
                      </div>
                      <div class="col">
                          <input type="Password" class="form-control" id="pass" aria-describedby="password" placeholder="Password" name="userPass"/>
                      </div>
                      <button type="submit" class="btn btn-primary" name="btn-signIn">Let's do this thing</button>
                  </div>
              </form>
            </div>
          <br />

          <?php if(isset($userName) && $userName === "Luke"){
            if ($code === "a5ab588786f25a4ef5feacf9f27b18d4"){?>
                Hey Luke, it looks like your login was a success!<br /><?php
            }else {
                echo "It does not appear you typed the correct password for ".$userName;
            }
          }else if(isset($userName) && $userName === "ct310"){
            if ($code === "48f2f942692b08ec9de1ef9ada5230a3"){?>
                Hey ct310, it looks like your login was a success!<br /><?php
            }else {
                echo "It does not appear you typed the correct password for ".$userName;
            }
          }else {
            echo "We didn't recognize you, ".$userName.". Perhaps try again with a different login name/pass.";
          } ?>
        </div>
      </div>
    </div>

    <div class="container">
      <?= $footer; ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
