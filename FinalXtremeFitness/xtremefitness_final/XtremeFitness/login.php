
<?php 
include "db.php";
session_start();


if(isset($_POST['login']))
{
      $Email=$_POST['Email'];
      $Passw=$_POST['Passw'];
	//   $user=$_POST['usap'];
  
        
      $Uquery = "SELECT * FROM `signup` WHERE `Email_Address`= '$Email' AND `Password`='$Passw'; ";

      $Data = mysqli_query($con,$Uquery); 

     $count=mysqli_num_rows($Data);
$dad=mysqli_fetch_assoc($Data);

$app=$dad['approve'];


if($app == 'n' )
{
	echo
	"<script>
	alert('Admin will aprroved you later !');
  
	</script>";

}
elseif($app == 'c' )
{
	echo
	"<script>
	alert('Yours Account is Rejected By Admin!');
  
	</script>";

}
else{
      if($count==1)
          {
				$_SESSION['logedin']=true;
            	$_SESSION['Email_Address']=$Email;
			   	$_SESSION['usap']=$user; 
			   	$_SESSION['approve']=$app; 
			  
			  
             
            //   print_r($Email); 
             
              header('location:index.php');
          }

      else{
        echo
            "<script>
            alert('Please Enter Correct Email Address or Password');
          
            </script>";
         }

}}



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="icon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ulogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ulogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ulogin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="ulogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ulogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ulogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="ulogin/css/main.css">
<!--===============================================================================================-->

<style>
img {
    vertical-align: middle;
    border-style: none;
    width: 100%;
    margin-bottom: 10%;
}
.container-login100 
{
    background: linear-gradient(-135deg, #a2a1a0, #1c959e) !important;
}
.wrap-login100 {
    width: 960px;
    background: #fff;
     padding: 80px 130px 80px 100px;
}


.p-t-136 {
    padding-top: 20px;
}
.login100-form-title {
    font-family: math;
    font-size: 35px;
    color: #0e7786;
	font-weight:900;
    line-height: 1.2;
    text-align: center;
    width: 330px;
    display: block;
    padding-bottom: 35px;
    padding-top: 10px;
}
.input100 {
	width: 330px;
    font-family: math !important;
    font-size: 18px !important;
    font-weight: 700 !important;
    
    background: #ebebeb !important;
    border-radius: 12px !important;
	border:1px solid #c0c9cb !important;
    
}
.container-login100-form-btn {
    width: 330px;
    
}
.symbol-input100 {
    font-size: 16px;
    color: #1c7785 !important;
    
}
.focus-input100 {
	box-shadow: 0px 0px 0px 0px;
    color: rgb(255 255 255 / 80%) !important;
}
.p-t-12 {
    padding-top: 25px;
    width: 330px;
}
.p-t-136 {
	padding-top: 10px;
    padding-left: 0px;
    width: 330px;
}

.login100-form-btn {
    font-family: math !important;
    font-size: 17px !important;
    color: white  !important;
    background: #1c959e !important;
    font-weight: 900 !important;
	border-radius:10px;
}
.login100-form-btn:hover {
    background: #e9e9e9 !important;
    color: #257784 !important;
    border: 1px solid #1e929b !important;
    transition: 0.5s;
}

.input100 {
   
    padding: 0 0px 0 40px ;
}

.symbol-input100 {
    font-size: 16px;
    padding-left: 14px;

}
.txt1 {
    font-family: math;
    font-size: 17px;
    line-height: 1.5;
    color: #646262;
	font-weight: 700;
}
.txt2 {
    font-family: math;
    font-size: 17px;
    line-height: 1.5;
    color: #646262;
	font-weight: 700;
}
textarea:focus, input:focus {
    /* border-color: transparent !important; */
    padding-left:40px !important;
	
}
.input100:focus + .focus-input100 + .symbol-input100 {
    padding-left: 14px;
}
#user{font-weight: 500;
    width: 100%;
    /* margin-left: 15px; */
    border-radius: 5px;
    font-family: math;
    height: 5%;
    /* color: #107e86; */
    background: whitesmoke;}

	a:hover {
    text-decoration: none;
    color: #05666d;
    font-weight: 700;
}

@media (max-width: 992px){
.login100-pic {
    width: 100%;
    display: none !important;
}

}

@media (max-width: 768px){
.wrap-login100 {padding: 10% !important;}

img{width:100% !important;
	margin-bottom: 4%;}
.input100 {
    width: 100%;

}
.symbol-input100 {
   
    display: flex;
    margin-left: 0%;
    font-size: 15px !important;
}
.container-login100-form-btn {
    width: 100%;
}
.login100-form-title{width: 100%;}

.p-t-12{width: 100%;}
.p-t-136{width: 100%;}
}

</style>

</head>
<body style="background: linear-gradient(-135deg, #a2a1a0, #1c959e) !important;"> 
<center>
	<div class="limiter" >
		<div class="container-login100">
			<div class="wrap-login100">
				
				<div class="login100-pic js-tilt" data-tilt style="display: flex;text-align: center;align-items: center;justify-content: center;">
					<img src="ulogin/images/img-01.png" alt="IMG" >
				</div>
				
				<form class="login100-form validate-form" method="post">
				<a href="index"><div><img src="Logo.png" alt=""></div></a>
					<span class="login100-form-title">
						User Login
					</span>
				
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="Email" placeholder="Enter Your Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="Passw" placeholder="Enter Your Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<!-- <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="hidden" name="usap" value="n">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
					
						</span>
					</div> -->

						<!-- <select name="user" id="user" required>
							<option value="" disabled selected hidden>Select Account</option>	
							<option value="a">Admin Account</option>
							<option value="e">Employee Account</option>
						</select> -->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Email / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="husignup">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					
				</form>
				
			</div>
		</div>
	</div>
	</center>
	
	
	
<!--===============================================================================================-->	
<script src="ulogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="ulogin/vendor/bootstrap/js/popper.js"></script>
	<script src="ulogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="ulogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="ulogin/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="ulogin/js/main.js"></script>
</body>
</html>