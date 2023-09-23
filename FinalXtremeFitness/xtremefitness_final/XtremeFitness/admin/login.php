
<?php
session_start();
error_reporting(0);
require_once('include/config.php');
$msg = ""; 
if(isset($_POST['submit'])) {
  $email = trim($_POST['email']);
  $password = md5(($_POST['password']));
  if($email != "" && $password != "") {
    try {
      $query = "select id, name, email, mobile, password, create_date from tbladmin where email=:email and password=:password";
      $stmt = $dbh->prepare($query);
      $stmt->bindParam('email', $email, PDO::PARAM_STR);
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)) {
        /******************** Your code ***********************/
        $_SESSION['adminid']   = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['fname'];
       header("location: index.php");
      } else {
        $msg = "Invalid username and password!";
      }
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
  } else {
    $msg = "Both fields are required!";
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="XtremeFitnessLogo.png" rel="icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Xtreme Fitness | Admin login</title>

    <style>
      .material-half-bg .cover 
        {
          background-color: rgb(94, 2, 2)!important;
          height: 50vh;
        }
        .login-content .login-box .login-head {
            margin-top: 0;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
            text-align: center;
            color: #c30c0d;
        }
        .custom {
            color: #FFF;
            background-color: #5a0604 !important;
            width: 100%;
            padding-top: 3%;
            padding-bottom: 3%;
            /*border-color: #c01311;transition:0.5s;*/
        }
        .custom:hover {
          color: #FFF;
    background-color: #450706;
    /*border-color: #450706;*/
    /*transition:0.5s;*/
    font-weight: bold;
    cursor: pointer;
        }
        .form-control:focus {border: 1px solid #5a0604;}
    </style>

  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover">
        
      </div>
    </section>
    <section class="login-content">
      <div class="logo">  <center><img src="XtremeFitnessLogo.png" alt="" style="width:60%;"></center>

        <h1 style="font-family: Helvetica "> Admin login</h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user" style="color: #ac0300"></i>SIGN IN</h3>
           <?php if($error){?><div class="errorWrap" style="color:red;"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap" style="color:red;"><strong>Error</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
          <div class="form-group">
            <label class="control-label">Email </label>
            <input class="form-control" name="email" id="email" type="text" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" name="password" id="password" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="utility">
      
  <!--             <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p> -->
            </div>
          </div>
          <div class="form-group btn-container">
           
            <input class="custom" type="submit" name="submit" id="submit" value="SIGN IN" class="btn">
          </div>
          <hr />
          <!-- <a href="../index.php">Back to Home Page</a> -->
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>