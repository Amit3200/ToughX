<?php
if($_POST)
{
    $user=$_POST['t12'];
    $pass=$_POST['t13'];
    if($user=='AdminToughX' && $pass=='12345')
    {
        header("Location:JudgeAllot.php");
        exit;
    }
    else
    {
            $output='<div class="alert alert-danger"><strong>Log-In Failed</strong>|Wrong Credentials</div>';
        echo $output;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Admin|Signin</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
       <div class="header">
        <h3 class="text-muted"><img src="ToughX.png" width="150px"></h3>
      </div>
      <form class="form-signin" action="AdminLogin.php" method="post">
        <h2 class="form-signin-heading">Admin Security Sign In</h2>
            <div id="1">
                <label><h4>User Name</h4></label>
        <input name="t12" type="text" id="t1" class="form-control" placeholder="User name" required autofocus><br>
              </div>
          <div id="2">
              <label><h4>Password</h4></label>
        <input name="t13" type="password" id="t2" class="form-control" placeholder="Password" required><br>
          </div>
        <div id="3">       
        <button class="btn btn-lg btn-primary btn-block" >Sign in</button>
          </div>
      </form>
    </div> <!-- /container -->
  </body>
</html>