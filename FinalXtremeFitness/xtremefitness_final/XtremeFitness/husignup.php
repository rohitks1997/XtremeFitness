<?php 

include "db.php";


    if(isset($_POST['signup'])){

        $nam=$_POST['nam'];
        $pnum=$_POST['pnum'];
        $cnam=$_POST['cnam'];
        $des=$_POST['des'];
        $eadd=$_POST['eadd'];
        $pass=$_POST['pass'];
        $confpa=$_POST['confpa'];
        $cit=$_POST['cit'];
        $add=$_POST['add'];
        $date=$_POST['update'];
        
        $Usquery = "SELECT * FROM  `signup` WHERE `Email_Address` = '$eadd'";

			$Udat = mysqli_query($con,$Usquery);
		
			$count = mysqli_num_rows($Udat);
		
			if($count==1)
					{echo
						"<script>
							alert('Sorry! This Email Address is Already Registered');
							window.location.href='login';
						</script>";
					}
		
				else
				{ if($pass == $confpa){

					$date1 = strtotime("+3 day", strtotime("$date"));
	                $date12=date("d-M-Y", $date1);
					$Usquery= "INSERT INTO `signup` (`Full_Name`, `Designation`, `Compname`, `Phone_Number`, `Email_Address`, `Password`, `Confirm_Password`, `city`, `addres`, `Date`, `approve`, `tdate`)
                     VALUES ('$nam','$des','$cnam','$pnum','$eadd','$pass','$confpa','$cit','$add','$date','v','$date12')";
				                
		
					$Data = mysqli_query($con,$Usquery);
		
                    if ($Data == 'true' ) 
                    {
                     
                     
            $Para1='<!DOCTYPE html>
<html>

<head>
<title>Welcome to Taxhelpline</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<style type="text/css">
    @media screen {
        @font-face {
            font-family: \'Lato\';
            font-style: normal;
            font-weight: 400;
            src: local(\'Lato Regular\'), local(\'Lato-Regular\'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format(\'woff\');
        }

        @font-face {
            font-family: \'Lato\';
            font-style: normal;
            font-weight: 700;
            src: local(\'Lato Bold\'), local(\'Lato-Bold\'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format(\'woff\');
        }

        @font-face {
            font-family: \'Lato\';
            font-style: italic;
            font-weight: 400;
            src: local(\'Lato Italic\'), local(\'Lato-Italic\'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format(\'woff\');
        }

        @font-face {
            font-family: \'Lato\';
            font-style: italic;
            font-weight: 700;
            src: local(\'Lato Bold Italic\'), local(\'Lato-BoldItalic\'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format(\'woff\');
        }
    }

    /* CLIENT-SPECIFIC STYLES */
    body,
    table,
    td,
    a {
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }

    table,
    td {
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
    }

    img {
        -ms-interpolation-mode: bicubic;
    }

    /* RESET STYLES */
    img {
        border: 0;
        height: auto;
        line-height: 100%;
        outline: none;
        text-decoration: none;
    }

    table {
        border-collapse: collapse !important;
    }

    body {
        height: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        width: 100% !important;
    }

    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }

    /* MOBILE STYLES */
    @media screen and (max-width:600px) {
        h1 {
            font-size: 32px !important;
            line-height: 32px !important;
        }
    }

    /* ANDROID CENTER FIX */
    div[style*="margin: 16px 0;"] {
        margin: 0 !important;
    }
</style>
</head>

<body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px;  max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"><b>Taxhelpline</b>  We\'re thrilled to have you here! Get ready to dive into your new account.
</div>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <!-- LOGO -->
   
    
    <tr>
        <td bgcolor="#1c959e" align="center" style="padding: 0px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td bgcolor="#ffffff" align="center" valign="top" style="padding: 10px 20px 5px 20px; border-radius: 4px 4px 0px 0px; color: #111111;  font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
                       <h2 style="font-size: 22px;
font-family: unset;
color: #666666;"> Thanks for visiting </h2>
                        <img width="300px" src="https://www.taxhelplines.com.pk/Logo.png" alt="">
                    </td>

                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td bgcolor="#ffffff" align="left" style="text-align:justify; padding: 20px 30px 40px 30px; color: #666666;  font-size: 18px; font-weight: 400; line-height: 25px;">
                        <center><p style="font-size: 20px;"><b>‘Welcome to TaxHelpline’</b></p></center><br>
                        <p style="margin: 0;text-align:justify;"><B>Dear '.$nam.',</B><br><r> We’d like to confirm that your Sign-up request for user account is received and your account is created successfully. <br>
                            </a></p>
                    
                        
                        </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff" align="left">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              
                            </tr>
                        </table>
                    </td>
                </tr> <!-- COPY -->
                <tr>
                    <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 0px 30px; color: #666666;  font-size: 18px; font-weight: 400; line-height: 25px;">
<center>                                  <b><p>Account Detail</p></b></center>
                        <p style="margin: 0;"><b>Name : </b> '.$nam.' <br>
                                                <b>Designation : </b> '.$des.' <br>
                                                <b>Email : </b> '.$eadd.' <br>
                                                <b>Password : </b> '.$pass.' <br>
                                                <b>Contact  : </b> '.$pnum.' <br></p>
                                                
                    </td>
                </tr> <!-- COPY -->
                <tr>
                    <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666;  font-size: 18px; font-weight: 400; line-height: 25px;">
                      
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 20px 30px; color: #666666;  font-size: 18px; font-weight: 400; line-height: 25px;">
                        <p style="margin: 0;">We welcome your feedback while using our website or any issues logging into your account, Feel free to reach out to us at: <a href="https://taxhelplines.com.pk/contact"> https://taxhelplines.com.pk</p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666;  font-size: 18px; font-weight: 400; line-height: 25px;">
                        <p style="margin: 0;">Best Regards,<br><b> TaxHelpline Team</b></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#f4f4f4" align="center" style="padding: 30px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td bgcolor="#1c959ea1" align="center" style="padding: 15px 15px 15px 15px; border-radius: 4px 4px 4px 4px; color: #666666;  font-size: 18px; font-weight: 400; line-height: 25px;background:#5e5d5b73;">
                        <h2 style="font-size: 20px; font-weight: 400; color: #111111; margin: 0;">Need more help?</h2>
                        </p>
                   
                        <div class="row">
                            <div class="col-md-4"><p style="font-weight: 800;
color: #ffffffa8;" ><i class="fa fa-phone" aria-hidden="true"></i>
021-32462161</p></div>
                            <div class="col-md-4"><p style="font-weight: 800;
color: #ffffffa8;"><i class="fa fa-phone" aria-hidden="true"></i>
0333-2214794</p></div>
                            <div class="col-md-4"><p style="font-weight: 800;
color: #ffffffa8;"><i class="fa fa-phone" aria-hidden="true"></i>
0314-4062161</p></div>

                            </div>
                        </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td bgcolor="#f4f4f4" align="left" style="padding: 0px 30px 30px 30px; color: #666666;  font-size: 14px; font-weight: 400; line-height: 18px;"> <br>
                        <p style="margin: 0; text-align: justify;"><b> DISCLAIMER:</b> All information has been given in good faith; however, the Readers must study the original text from Officials Websites of the Department and Libraries. This data may contains errors or any mistakes but the Owner/ CEO of the website will not be responsible.</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>

</html>';
                    
                      $subject ="Welcome to Taxhelpline ";

$headers = 'From: Taxhelpline info@taxhelplines.com.pk'       . "\r\n" .
         'Reply-To: info@taxhelplines.com.pk' . "\r\n" .
         'X-Mailer: PHP/' . phpversion();


$headers .="MIME-Version: 1.0\r\n";
$headers .="Content-Type:text/html; charset=ISO-8859-1\r\n";

mail($eadd,$subject,$Para1,$headers);

if(mail == true){
echo	"<script>
                    
                    window.location.href='noway?em=$eadd';
                </script>";

}
     
                     
                     




                    }
                else
                    {
                        echo
                        "<script>
                        alert('Registraion Failed');
                        window.location.href='husignup';
                    </script>";
                    }
        }else{echo
            "<script>
            alert('Password and Confirm Password are not same!');
            
        </script>";}
    }}

            
            ?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>User Signup</title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sdm['Full_Name'] ?> Profile</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    padding-top: 0px !important;
    margin: 0;
    color: #2e323c;
    background: #b5bcc1 !important;
    position: relative;
    height: 100%;
}
.ashar
{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 13px;
}
.text-primary {
   
    color: #0e223e!important;
    font-size: 30px;
    font-family: math;
    font-weight: 900;

    text-align: center;
}

p
{
    color: #6f757b!important;
    font-size: 18px;
    font-family: math;
    font-weight: 900;

    text-align: center;
}
.form-group
{
    font-size: 18px !important;
    font-family: math !important;
    color: #6f757b !important;
    font-weight: 600 !important;
}
.form-control {
    border-color: hsla(0,0%,40%,.1)!important;
    border-radius: 5px!important;
}
.form-control:hover {
    transform: translateY(0px);
    box-shadow: 0 2px 5px 0 rgba(5,19,79,.09);
    background: #f0f0f0 !important;
    /* filter: drop-shadow(0px 5px 5px rgba(0, 0, 0, 0.3)); */
    transition: all .3s ease; cursor:pointer;
}
.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ffffff;
    outline: 0;
    box-shadow: none;
}
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 0px;
    margin-left: 0px;
}
.card-body {
   
    padding: 0.25rem !important;
}

.form-control {
    -moz-border-radius: 5px !important;
    border-radius: 5px !important;
    font-size: 1.075rem !important;
    background: #f0f0f0 !important;
    color: #108892 !important;
    font-weight: 600 !important;
}

button, input, optgroup, select, textarea {
background:no-repeat;
width:100%;
border:none;
color: #2d2d2d !important;
font-weight: 600 !important;
}
input
{
outline:none;
}
label {
    color: #10223d !important;
}


@media (min-width: 768px){
.col-md-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 85.666667%;
}

}

@media (max-width: 1040px){
.h-100 {
    padding-bottom: 1.5%;padding-top: 0.5%;
}}


@media (max-width: 767px){
.col-md-1 {
    
    display: none !important;
}
p{display:none;}
.h-100{padding:5% !important;}
}
@media (max-width: 374px)
{
   
    img{width:100% !important;}
    input{font-size: 15px;}
    .form-control {font-size: 15px!important;}
}
@media (max-width: 767px)
{
    .text-primary{padding-bottom: 2.5%!important;}
}
</style>
</head>

<body style="background: linear-gradient(-135deg, #a2a1a0, #1c959e) !important;">
    <div class="container" style="border-radius: 20px; max-width: 1155px; box-shadow: 5px 5px 5px 5px #888888;background: #f7f7f7;border: 3px solid #a0a0a0; padding: 40px;margin-top: 2%;">
      

    <form action="" method="post"> 
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ashar">
        <div class="card h-100">
            <div class="card-body asd">
                    <div >
                   <center><a href="index.php"> <img src="Logo.png" alt="Taxhelpline" style="width: 270px; padding-bottom: 20px;"></a>                  </div></center>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-2 text-primary">User Signup</h6>
                        <p>Enter your details to create your account</p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-user" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="nam"    placeholder="Enter Full Name" required></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label for="eMail">Phone Number</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-mobile" aria-hidden="true" style="font-size: 25px;"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="pnum"    placeholder="Enter Phone Number" required></div>
                            </div>                            
                        </div>
                    </div>          
                    
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label for="eMail">Company Name</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-building" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="cnam"    placeholder="Enter Company Name" required></div>
                            </div>                            
                        </div>
                    </div>    
                        
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label for="eMail">Designation</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-id-card" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="des"    placeholder="Enter Designation" required></div>
                            </div>                            
                        </div>
                    </div>
                
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label for="eMail">Email Address</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="email"  name="eadd"    placeholder="Enter Email Address" required></div>
                            </div>                            
                        </div>
                    </div>
                    
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label for="eMail">Password</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-lock" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="password"  name="pass"    placeholder="Enter Password" required></div>
                            </div>                            
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label for="eMail">Confirm Password</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-lock" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="password"  name="confpa"    placeholder="Confirm Password" required></div>
                            </div>                            
                        </div>
                    </div>
                    <?php echo "<input type='hidden' name='date'  value='" . date('d-M-Y') . "' required/>";
?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label for="eMail">City Name</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-globe" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="cit"    placeholder="Enter City Name"></div>
                            </div>                            
                        </div>
                    </div>
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label for="city">Address</label>
                            <textarea  name='add' placeholder="Enter Your Address"   rows="3" style="width:100%;" class="form-control add"></textarea>    
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    
                    
                    <input type="submit" name="signup" style="font-size: 17px; font-family: math;font-weight: 700;color:white !important;" class="btn btn-info" value="Create Account"> 
                    </div>

                  <?php echo "<input type='hidden' class='form-control mt-3' style=' height: 50px;font-size:18px;' name='update' readonly value='" . date('d-M-Y') . "' required/>";?>  
                  
           
        </div>
        </div>
        </div>
    </form> 
</body>
</html>
<style>body {
    margin: 0;
    padding-top: 40px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #404040 !important;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 15px;
    border: 0;
    margin-bottom: 10px;}
    body {line-height: 1 !important;}
    .add{color:#2d2d2d !important;}

    