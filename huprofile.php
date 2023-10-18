<?php
include("db.php");
$id=$_GET['id'];

?>

<?php
Session_start();
if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true) {
    
    $email= $_SESSION['email'];
   

  

    $ademp="SELECT * FROM `usignup` Where `Id` = '$id' ";
    $powadem = mysqli_query($con,$ademp);
    $sdm=mysqli_fetch_assoc($powadem);

    if(isset($_POST['update']))
    {
            $name=$_POST['name'];
            $dob=$_POST['dob'];
            $age=$_POST['age'];
            $gender=$_POST['gender'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $add=$_POST['add'];
            $weight=$_POST['weight'];
            $height=$_POST['height'];
            $bloodgroup=$_POST['bloodgroup'];
            $BMI=($weight/$height/$height)*10000;
            $health=$_POST['health'];
            $food=$_POST['food'];

            $updamp="UPDATE `usignup` SET 
            `name`='$name',`dob`='$dob',`age`='$age',`gender`='$gender',`weight`='$weight',`height`='$height',`BMI`='$BMI',`bloodgroup`='$bloodgroup',`food`='$food',`health`='$health',`phone`='$phone',`email`='$email', `address`='$add' WHERE `Id` = '$id'";
            $poupdamp = mysqli_query($con,$updamp);
            
          
            if( $poupdamp== 1){

               
                echo '<script>';
                echo 'alert("Profile Has Been Updated!");';
                echo 'window.location.href = "huprofile?id=' . $id . '";';
                echo '</script>';
           
                    
            }

           
             
    
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- <title>User Signup</title> -->
    <meta charset="UTF-8">
    
    <link href="XtremeFitnessLogo.png" rel="icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sdm['name'] ?> Profile</title>
    
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
    color: #ac0300 !important;
    font-size: 30px;
    /*font-family: math;*/
    font-weight: 900;
    text-align: center;
}

p
{
    color: #6f757b!important;
    font-size: 18px;
    /*font-family: math;*/
    font-weight: 900;

    text-align: center;
}
.form-group
{
    font-size: 18px !important;
    /*font-family: math !important;*/
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
    /*font-weight: 600 !important;*/
}

button, input, optgroup, select, textarea {
background:no-repeat;
width:100%;
border:none;
color: #1f1f1f!important;
/*font-weight: 600 !important;*/
}
input
{
outline:none;
}
label {
    color: #000000 !important;
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
@media (min-width: 1200px){
.container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 1215px;}
}
.add{color:#2d2d2d !important;}
</style>
</head>

<body >



    <div class="container-fluid" style="max-width:95%;">
      

    <form action="" method="post"> 
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ashar">
        <div class="card h-100">
            <div class="card-body asd">
                    <div >
                    <!-- <h2 style="font-family:math; text-align:center; color:black;">Your Profile</h2> -->
                    <center><a href="index"><img src="XtremeFitnessLogo.png" class="img-fluid" alt="" style="width: 8%;"></a></center>
                    <div class="container">   
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-5 text-primary mt-5">Personal Information</h6>
                        <!-- <p>Enter your details to create your account</p> -->
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="fullName">Full Name:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-user" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="name" value="<?php echo $sdm['name']?>"   placeholder="Enter Full Name" required></div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="eMail">Date of Birth:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-calendar-o" aria-hidden="true" ></i> </div>
                                <?php $olddate= $sdm['dob']; ?>
                                <div class="col-md-11">
                                <input type="text" name="dob" value="<?php echo $newdate = date('d-M-Y', strtotime($olddate)) ?>" placeholder="Enter Date Here" required>
                            </div>
                            </div>                            
                        </div>
                    </div>      -->
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="eMail">Date of Birth:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-calendar-o" aria-hidden="true" ></i> </div>
                                
                                <div class="col-md-11">
                                <input type="date" name="dob" value="<?php echo date('Y-m-d', strtotime($sdm['dob'])); ?>" placeholder="Enter Date Here" required>
                            </div>
                            </div>                            
                        </div>
                    </div>  
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="eMail">Age:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-user-o" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="age"  value="<?php echo $sdm['age']?>"  placeholder="" required></div>
                            </div>                            
                        </div>
                    </div>    
                        
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 0px;">
                        <div class="form-group">
                            <label for="eMail">Gender:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-male" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="gender"  value="<?php echo $sdm['gender']?>"  placeholder="" required></div>
                            </div>                            
                        </div>
                    </div>
                
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 0px;">
                        <div class="form-group">
                            <label for="eMail">Email:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="email"  value="<?php echo $sdm['email']?>"  placeholder="" required></div>
                            </div>                            
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 0px;">
                        <div class="form-group">
                            <label for="eMail">Phone Number:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-mobile" aria-hidden="true" style="font-size: 25px;"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="phone" value="<?php echo $sdm['phone']?>"   placeholder="Enter Password" required></div>
                            </div>                            
                        </div>
                    </div>

                 
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label for="city">Address:</label>
                            <textarea  name='add' placeholder="Enter Your Address"   rows="1" style="width:100%;color: #1f1f1f!important;" class="form-control add"><?php echo $sdm['address']?></textarea>    
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-5 text-primary mt-5">Health Information</h6>
                        <!-- <p>Enter your details to create your account</p> -->
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="fullName">Weight:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-user" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="weight" value="<?php echo $sdm['weight']?>"   placeholder="" required></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="fullName">Height:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-user-o" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="height" value="<?php echo $sdm['height']?>"   placeholder="" required></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="eMail">Blood Group:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-user-circle" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="bloodgroup"  value="<?php echo $sdm['bloodgroup']?>"  placeholder="" required></div>
                            </div>                            
                        </div>
                    </div>    
                        
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="fullName">BMI:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-male" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="BMI" value="<?php echo  number_format($sdm['BMI'],2)?>"   placeholder="" required disabled></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="fullName">Health Issue:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-medkit" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="health" value="<?php echo $sdm['health']?>"   placeholder="" requierd></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="eMail">Food Alergies:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-cutlery" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="food"  value="<?php echo $sdm['food']?>"  placeholder="" requierd></div>
                            </div>                            
                        </div>
                    </div>  

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-5 mt-5 text-primary">Fitness Information</h6>
                        <!-- <p>Enter your details to create your account</p> -->
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="fullName">Fitness Activity:</label>
                            <div class="form-control row">
                                    <div class=""><input type="text"  name="fitness" value="<?php echo $sdm['fitness']?> "   placeholder="Activity"  readonly></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="fullName">Intensity:</label>
                            <div class="form-control row">
                                    <div class=""><input type="text"  name="fitness" value="<?php echo $sdm['intensity']?> "   placeholder="Intensity" readonly></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="fullName">Time Shedule:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-clock-o" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="time" value="<?php echo $sdm['time']?>"   placeholder="Time" readonly></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="fullName">Membership:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="Height"  name="membership" value="<?php echo $sdm['member']?>"   placeholder="Membership" readonly></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="eMail">Membership Paid:</label>
                            <div class="form-control row">
                                <!-- <div class="col-md-1">  <i class="fa fa-money" aria-hidden="true"></i> </div> -->
                                <div class="">    <input type="text"  name="mempaid"  value="<?php echo $sdm['memberpaid']?>"  placeholder="Payment" readonly></div>
                            </div>                            
                        </div>
                    </div>  
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="eMail">Promotion:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="promotion"  value="<?php echo $sdm['promotion']?>"  placeholder="Promotion"  readonly></div>
                            </div>                            
                        </div>
                    </div>    
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="fullName">Promotion Paid:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-money" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="propaid" value="<?php echo $sdm['promotionpaid']?>"   placeholder="Payment" readonly></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="fullName">Diet Recommendation:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-cutlery" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="Height"  name="diet" value="<?php echo $sdm['diet']?>"   placeholder="Diet" readonly></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="eMail">Fitness Recommendation:</label>
                            <div class="form-control row">
                                <div class="col-md-1">  <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                <div class="col-md-11">    <input type="text"  name="recom"  value="<?php echo $sdm['fitr']?>"  placeholder="Fitness" readonly></div>
                            </div>                            
                        </div>
                    </div>  
                  
                          
                        
                                      
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <a href="index" style="font-size: 17px;font-weight: 700;width: 100px;" class="btn btn-danger mt-3 mb-3">Back</a> 
                     </div>

                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                       <input type="submit" id="submit" name="update" style="font-size: 17px; font-weight: 700; float:right; width:140px !important; color:white !important;" class="btn btn-primary  mt-3 mb-3" value="Update Profile"> 
                      
                     </div>
                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <button type="submit" id="submit" name="update" style="font-size: 17px; font-family: math;font-weight: 700; float:right;" class="btn btn-primary">Update</button>
                    </div>       
                     </div> -->
                    </div>

                <!-- <?php echo "<input type='hidden' class='form-control mt-3' style=' height: 50px;font-size:18px;' name='update' readonly value='" . date('d-M-Y') . "' required/>";?>   -->
                  
           
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
    background: #fafafa !important;
    color: #b5090a !important;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 15px;
    border: 0;
    margin-bottom: 10px;padding:15px;}
    body {line-height: 1 !important;}

    <?php }
else{ echo '<script>window.open("signin", "_self")</script>'; } ?> 