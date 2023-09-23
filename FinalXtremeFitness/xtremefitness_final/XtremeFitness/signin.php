<?php 
include "db.php";
session_start();


if(isset($_POST['signin']))
{
    $email=$_POST['email'];
	$password=$_POST['password'];
	//   $user=$_POST['usap'];
  
        
      $Uquery = "SELECT * FROM `usignup` WHERE `email` = '$email' AND `password`='$password';";
      

      $hasdo = mysqli_query($con,$Uquery); 

     $count=mysqli_num_rows($hasdo);

      if($count== 1)
          {
				$_SESSION['logedin']=true;
            	$_SESSION['email']=$email;
                
                // echo $email;
			   
			  
			  
             
            //   print_r($email); 
             
              header('location:index.php');
          }

      else{
        echo
            "<script>
            alert('Please Enter Correct Email Address or Password');
          
            </script>";
         }

}



 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="XtremeFitnessLogo.png" rel="icon">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Xtreme Fitness Sign-In</title>

<style>

.form-control:focus {
    color: #212529;
    background-color: #fff;
    border-color: #86b7fe;
    outline: 0;
    box-shadow: none;
}
label {
/*    font-family: math!important;*/
/*    font-size: 21px;*/
/*    color: #414951;*/
    margin-top: 20px;
    margin-bottom: 5px;
    font-weight: 600;
}
.form-control {   
/*    font-family:math!important;*/
/*    font-size: 20px;*/
    color: black;
   
}

a {
    color: #842029;
    text-decoration: none;
}
a:hover {
    color: #6e2c32;
    text-decoration: none;
}
.btn {
    border: var(--bs-btn-border-width) solid #b41512;
    border-radius: var(--bs-btn-border-radius);
    background-color: #b41512;
    transition: color 0.5s ease-in-out,background-color 0.5s ease-in-out,border-color 0.5s ease-in-out,box-shadow 0.5s ease-in-out;}
.btn:hover {
    color: var(--bs-btn-hover-color);
    background-color: #842029;
    border-color: #842029;
}

@media (max-width: 1441px)
{
    
    /* label{    margin-left: 210px!important;}
    /* .form-control{width:50%!important;} */
    /* .btn{width:50%!important;} */ 
    #hasnain{height: 790px!important;}
    
}
@media (max-width: 1025px)
{
    
    /* label{    margin-left: 120px!important;} */
    /* .form-control{width:70%!important;} */
    /* .btn{width:70%!important;} */
    #hasnain{height: 700px!important;}
    
}
@media (max-width: 769px){

    
#hasnain{    display: none;}
#jihasnain{    padding-left: 25px;}
#fahad{    display: flex;}
.login-container{margin-bottom: 7%;}
}

@media (max-width: 425px){
#fahad{    width: 150px!important;}

}

.custom
{
    background-color: #5a0604;
    color: white;
}

.custom:hover
{
    background-color:#450706;
    color: white;
    font-weight: bold;
}

</style>
	
<body style="overflow-x: hidden;">



        <div class="row" style="overflow-x: hidden!important;">
                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                        <img src="gmsfinal.png" class="img-fluid" style="width: 100%;height: 100%;" id="hasnain">
                  
                </div>
                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
                   <form method="POST">
                    <center style="margin-top: 10%;">
                    
                    <a href="index"><img src="XtremeFitnessLogo.png" style="width:180px;" id="fahad"></a>
                            <h1 style="margin-top:3%;font-weight: 600;font-size: 45px; padding-left:4px">Sign In </h1>
                    </center>
                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-left: 30%;">
                            <label for="email" >Email</label>
                             <input id="email" name="email" class="form-control" placeholder="Enter Your Email" type="email" style="width: 45%;">                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-left: 30%;">
                            <label for="password">Password</label>
                            <input id="password" name="password" class="form-control" placeholder="Enter Your Password" type="password" style="width: 45%;">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-left: 30%;">
                            <input class="btn custom" type="submit" style="width: 45%;  margin-top: 20px; margin-bottom: 5px; " name="signin" value="Sign In">
                            <!-- <button class="btn btn-primary" type="submit" style="width: 45%;  margin-top: 20px; margin-bottom: 5px; font-family: math!important;font-size: 21px;">Sign In</button> -->
                        </div>
                    </div>
                    <center>
                        <div class="login-container">
                            <p style="margin: 15px 0px; padding-left:35px">Create an account?<a href="signup"><strong> Sign Up</strong></a></p>
                        </div>
                        </center>
                   </form>
                
                </div>
        </div>
 

</body>

</head>
</html>


</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
