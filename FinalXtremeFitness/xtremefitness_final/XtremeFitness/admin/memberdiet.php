<?php
session_start();
error_reporting(0);
require_once('include/config.php');
$id=$_GET['id'];
if(strlen( $_SESSION["adminid"])==0)
    {   
header('location:login.php');
}
else{

  $ademp="SELECT * FROM `usignup` Where `Id` = '$id' ";
  $powadem = mysqli_query($con,$ademp);
  $sdm=mysqli_fetch_assoc($powadem);

if(isset($_POST['submit']))
{
$adminid=$_SESSION['adminid'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

// $sql="update tbladmin set name=:name,email=:email,mobile=:mobile where id=:adminid";
// $query = $dbh->prepare($sql);
// $query->bindParam(':name',$name,PDO::PARAM_STR);
// $query->bindParam(':email',$email,PDO::PARAM_STR);
// $query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
// $query->bindParam(':adminid',$adminid,PDO::PARAM_STR);
// $query->execute();
//$msg="<script>toastr.success('Mobile info updated Successfully', {timeOut: 5000})</script>";
echo "<script>alert('Profile has been updated.');</script>";
echo "<script> window.location.href =profile.php;</script>";

}


 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a">
   <title>Admin Profile</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
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
    /* background: #b5bcc1 !important; */
    background: #b5bcc1 !important;
    position: relative;
    height: 100%;
}
.ashar
{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
}
.text-primary {
  color: #db0d0c!important;
    font-size: 25px;
    font-family:sans-serif;
    font-weight: 500;
    text-align: center;
    padding-top: 10px;
}

p
{
    color: #6f757b!important;
    font-size: 17px;
    font-family: math;
    font-weight: 500;

    text-align: center;
}
.form-group
{
    font-size: 16px !important;
    font-family: sans-serif !important;
    color: #6f757b !important;
    font-weight:500 !important;
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
button, input, optgroup, select, textarea {

    font-weight: 500 !important;
 
}

.form-control {
    -moz-border-radius: 5px !important;
    border-radius: 5px !important;
    font-size: 17px !important;
    background: #f0f0f0 !important;
    color: #ff4842 !important;
    font-weight: 600 !important;
}

button, input, optgroup, select, textarea {
background:no-repeat;
width:100%;
border:none;
color: #1f1f1f!important;
font-weight: 600 !important;
}
input
{
outline:none; font-size:15px!important; font-weight:500!important;
}
label {
    color: #3e3e3e !important ;
}
.form{color:black !important;}

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
.add{color:#2d2d2d !important;}

    </style>

  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
   <?php include 'include/header.php'; ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include 'include/sidebar.php'; ?>
    <main class="app-content">
    
      

      <form action="" method="post"> 
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ashar">
          <div class="card h-100">
              <div class="card-body asd">
                      <div >
                      <!-- <h2 style="font-family:math; text-align:center; color:black;">Your Profile</h2> -->
                      <!-- <center><a href="index"><img src="XtremeFitnessLogo.png" class="img-fluid" alt="" style="width: 8%;"></a></center> -->
                      
                  <div class="row gutters">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <h6 class="mb-2 text-primary" style="margin-top:10px;">Personal Information</h6>
                          <!-- <p>Enter your details to create your account</p> -->
                      </div>
                      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                          <div class="form-group">
                              <label for="fullName">Name: </label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-user" aria-hidden="true"></i> </div>
                                  <div class="col-md-11">    <input type="text"  name="name" value="<?php echo $sdm['name']?>"   placeholder="Enter Full Name"></div>
                              </div>
                          </div>
                      </div>
  
                      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                          <div class="form-group">
                              <label for="eMail">Date of Birth:</label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-user-circle" aria-hidden="true" ></i> </div>
                                  <?php $olddate= $sdm['dob']; ?>
                                  <div class="col-md-11">    <input type="text" name="dob" value="<?php echo $newdate = date('d-M-Y', strtotime($olddate)) ?>" placeholder="Enter Date Here" required></div>
                              </div>                            
                          </div>
                      </div>          
                      
                      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                          <div class="form-group">
                              <label for="eMail">Age:</label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-user-o" aria-hidden="true"></i> </div>
                                  <div class="col-md-11">    <input type="text"  name="age"  value="<?php echo $sdm['age']?>"  placeholder="Enter Age"></div>
                              </div>                            
                          </div>
                      </div>    
                          
                      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 0px;">
                          <div class="form-group">
                              <label for="eMail">Gender:</label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-male" aria-hidden="true"></i> </div>
                                  <div class="col-md-11">    <input type="text"  name="gender"  value="<?php echo $sdm['gender']?>"  placeholder="Enter Gender"></div>
                              </div>                            
                          </div>
                      </div>
                  
                      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 0px;">
                          <div class="form-group">
                              <label for="eMail">Email:</label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                                  <div class="col-md-11">    <input type="text"  name="email"  value="<?php echo $sdm['email']?>"  placeholder="Enter Email" ></div>
                              </div>                            
                          </div>
                      </div>
                      
                      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 0px;">
                          <div class="form-group">
                              <label for="eMail">Phone Number:</label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-mobile" aria-hidden="true" style="font-size: 25px;"></i> </div>
                                  <div class="col-md-11">    <input type="text"  name="phone" value="<?php echo $sdm['phone']?>"   placeholder="Enter Phone No" ></div>
                              </div>                            
                          </div>
                      </div>
  
                   
                      
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <div class="form-group">
                              <label for="city">Address:</label>
                              <textarea  name='add' placeholder="Enter Address"   rows="1" style="width:100%;color: #1f1f1f!important;font-weight: 500!important;" class="form-control add"><?php echo $sdm['address']?></textarea>    
                          </div>
                      </div>
  
                     
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <h6 class="mb-2 text-primary">Fitness Information</h6>
                          <!-- <p>Enter your details to create your account</p> -->
                      </div>
                      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                          <div class="form-group">
                              <label for="fullName">Fitness Activity:</label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                  <div class="col-md-11">    <input type="text"  name="fitness" value="<?php echo $sdm['fitness']?>"   placeholder="Fitness Activity" ></div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                          <div class="form-group">
                              <label for="fullName">Intensity:</label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                  <div class="col-md-11">    <input type="text"  name="fitness" value="<?php echo $sdm['intensity']?>"   placeholder="Enter Intensity" ></div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                          <div class="form-group">
                              <label for="fullName">Time Shedule:</label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-clock-o" aria-hidden="true"></i> </div>
                                  <div class="col-md-11">    <input type="text"  name="time" value="<?php echo $sdm['time']?>"   placeholder="Time Shedule:" ></div>
                              </div>
                          </div>
                      </div>
  
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <h6 class="mb-2 text-primary">Membership</h6>
                          <!-- <p>Enter your details to create your account</p> -->
                      </div>
                     
                     
                      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                          <div class="form-group">
                              <label for="fullName">Membership :</label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                  <div class="col-md-11">    <input type="text"  name="fitness" value="<?php echo $sdm['member']?>"   placeholder="Fitness Activity" ></div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                          <div class="form-group">
                              <label for="fullName">Price :</label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                  <div class="col-md-11">    <input type="text"  name="fitness" value="<?php echo $sdm['memberpay']?>"   placeholder="Enter Intensity" ></div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                          <div class="form-group">
                              <label for="fullName">Card No :</label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                  <div class="col-md-11">    <input type="text"  name="fitness" value="<?php echo $sdm['card']?>"   placeholder="Enter Intensity" ></div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                          <div class="form-group">
                              <label for="fullName">CVV :</label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                  <div class="col-md-11">    <input type="text"  name="fitness" value="<?php echo $sdm['cvv']?>"   placeholder="Enter Intensity" required readonly></div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                          <div class="form-group">
                              <label for="fullName">Expiry Date :</label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                  <div class="col-md-11">    <input type="text"  name="fitness" value="<?php echo $sdm['exp']?>"   placeholder="Enter Intensity" required readonly></div>
                              </div>
                          </div>
                      </div>
                      

                      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                          <div class="form-group">
                              <label for="fullName">Membership Paid:</label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-money" aria-hidden="true"></i> </div>
                                  <div class="col-md-11">  
                                  <select  name="paid" id="cars" >
  <option value="<?php echo $sdm['memberpaid']?>"> <?php echo $sdm['memberpaid']?></option>
   <option value="No">No</option>
  <option value="Yes">Yes</option>

</select>  
                                  
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                          <div class="form-group">
                              <label for="fullName">Fitness Recommendation :</label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                  <div class="col-md-11">    <input type="text"  name="fitnessRe" value="<?php echo $sdm['fitr']?>"   placeholder="Enter Fitness Recommendation" ></div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                          <div class="form-group">
                              <label for="fullName">Diet Recommendation :</label>
                              <div class="form-control row">
                                  <div class="col-md-1">  <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                  <div class="col-md-11">    <input type="text"  name="DietRe" value="<?php echo $sdm['diet']?>"  placeholder="Enter Diet Recommendation"></div>
                              </div>
                          </div>
                      </div>
                    
                            
                          
                                        
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <a href="upackag.php" style="font-size: 15px;font-family: sans-serif;font-weight: 500;width: 100px;" class="btn btn-danger">Back</a> 
                       </div>
  
                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                         <input type="submit" id="submit" name="update" style="font-size: 17px; font-family:sans-serif;font-weight: 500; float:right; width:140px !important; color:white !important;" class="btn btn-primary" value="Update Profile"> 
                        
                       </div>
                       
                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">                      <button type="submit" id="submit" name="update" style="font-size: 17px; font-family: math;font-weight: 700; float:right;" class="btn btn-primary">Update</button> -->
                      </div>       
                       </div>
  
  
                  <?php echo "<input type='hidden' class='form-control mt-3' style=' height: 50px;font-size:18px;' name='update' readonly value='" . date('d-M-Y') . "' required readonly/>";?>  
                    
             
          </div>
          </div>
          </div>
      </form> 
<?php if (isset($_POST['update'])) {
    $paid=$_POST['paid'];
    $fit =$_POST['fitnessRe'];
    $diet= $_POST['DietRe'];
    
    $run= "UPDATE `usignup` SET `fitr`='$fit',`diet`='$diet', `memberpaid`='$paid' WHERE `id`=$id";
$data=mysqli_query($con,$run);

if ($data == true) {
    echo "<script>alert('Profile has been updated.');</script>";
    echo '<script>

    window.open("upackag.php", "_self");
  
  
  </script>';
}
}?>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
  
  </body>
</html>
<?php } ?>

  <style>
.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #dd3d36;
    color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #5cb85c;
    color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
