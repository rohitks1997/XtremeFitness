



<!DOCTYPE html>
<html lang="en">

<head>
    <link href="XtremeFitnessLogo.png" rel="icon">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Xtreme Fitness Sign-Up</title>

<style>

.form-control:focus {
    color: #212529;
    background-color: #fff;
    border-color: red;
    outline: 0;
    box-shadow: none;
}
label {
/*    font-family: math!important;*/
/*    font-size: 19px;*/
    color: #414951;
    margin-top: 20px;
    margin-bottom: 5px;
    font-weight: 600;
}
.form-control { 
/*    font-family: math!important;*/
/*    font-size: 18px;*/
    color: black;        padding: 4px 15px;}

a {
    color: #842029;
    text-decoration: none;
}
a:hover {
    color: #842029;
    text-decoration: none;
}
.btn {
    border: var(--bs-btn-border-width) solid #b41512;
    border-radius: var(--bs-btn-border-radius);
    background-color: #5a0604;
    transition: color 0.5s ease-in-out,background-color 0.5s ease-in-out,border-color 0.5s ease-in-out,box-shadow 0.5s ease-in-out;}
.btn:hover {
    color: var(--bs-btn-hover-color);
    background-color:#450706;
    border-color: #842029;
}

@media (max-width: 1025px)
{
    
    #fahad{    display: none;}
    
}
#fahad{cursor:pointer; width: 25%}
@media (max-width: 769px){

    
    #hasnain{    display: none;}
    #jihasnain{    padding-left: 25px;}
    #fahad{    display: flex;}

    form{
        width: 90%;
    }
    
}

</style>
	
<body style="overflow-x: hidden;">



        <div class="row" style="overflow-x: hidden!important;">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <img src="gmsfinal.png" class="img-fluid" id="hasnain" style="width: 100%;height: 100%;">
                  
                </div>       


                <div class="offset-1 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <form method="POST" action="data.php">
                    <center style="margin-top: ;">
                    
                    <a href="index">   <img src="XtremeFitnessLogo.png" id="fahad" ></a>
                            <h1 style="margin-top:20px;font-weight: 600;font-size: 35px;">Sign Up </h1>
                    </center>
                   

                    <div class="row" id="jihasnain" style="padding-right:20px;">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding-left:10px;">
                                   <label for="email" class="" >Name:</label>
                                    <input class="form-control" id="name" name="name"  placeholder="Enter Name" type="name" required>
                        </div>
                       
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="padding-left:10px;">
                        <label for="email">Date of Birth:</label>
                                    <input class="form-control" id="dob" name="dob"  placeholder="Enter Date of Birth" type="date" required>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="padding-left:10px;">
                                    <label for="age">Age:</label>
                                    <input class="form-control" id="age" name="age"  placeholder="Enter Age" type="number" required>
                        </div>
                 

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="padding: 0px 10px;">
                                    <label for="weight">Weight:</label>
                                    <input class="form-control" id="weight" name="weight"  placeholder="Weight" type="text">
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="padding: 0px 10px;">
                                    <label for="height">Height:</label>
                                    <input class="form-control"id="height" name="height"  placeholder="Height" type="text">
                        </div>



                       

                       <!--  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="padding: 0px 10px;">
                                    <label for="height">BMI:</label>
                                    <input class="form-control"id="height" name="BMI"  placeholder="Enter BMI" type="text">
                        </div> -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding-left:10px;">
                                    <label for="bloodgroup">Blood Group</label>
                                    <input class="form-control" id="bloodgroup" name="bloodgroup"  placeholder="Enter Blood Group" type="name">
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding-left:10px;">
                                   <label for="email" class="" >Gender:</label>
                                   <select class="form-control" name="gender" id="user" required >
                                        <option value="" disabled selected hidden>Select Gender</option>    
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                        </div>

                       
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding: 0px 10px;">
                             <label for="food-allergies">Food Allergies</label>
                             <input class="form-control" id="food-allergies" name="food"  placeholder="Enter Food Allergies" type="name">
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding: 0px 10px;">
                                    <label for="health-issues">Health Issues</label>
                                    <input class="form-control" id="health-issues" name="health"  placeholder="Enter Health Issues" type="name">
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding-left:10px;">
                                    <label for="phone-number">Phone Number</label>
                                    <input class="form-control" id="phone-number" name="phone"  placeholder="Enter Phone Number" type="number" required>
                        </div>


                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding: 0px 10px;">
                             <label for="address">Address</label>
                             <textarea class="form-control" id="address" name="address" rows="2" placeholder="Address" type="address" required></textarea>
                     
                        </div>


                       
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="padding: 0px 10px;">
                                    <label for="email">Email</label>
                                    <input  class="form-control" id="email" name="email"  placeholder="Enter Email" type="email" required>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="padding: 0px 10px;">
                                    <label for="password">Password</label>
                                    <input class="form-control" id="password" name="password" placeholder="Enter Password" type="password" required>
                        </div>


                        



                    </div>
                    
                    <center>
                        <input class="btn btn-block" type="submit" style=" width: 100%; color:white; margin-top: 20px; margin-bottom: 5px; " name="signup" value="Sign Up">
                    
                        <div class="login-container">
                            <p style="   margin: 15px 0px;">If you already have a account?<a href="signin"><strong> Sign In</strong></a></p>
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
