<?php 
include "db.php";
session_start();

if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true) 
{
    $email =$_SESSION['email'];

    $Uquery = "SELECT * FROM `usignup` WHERE `email`= '$email'";

    $Data = mysqli_query($con,$Uquery); 
    $k=mysqli_fetch_assoc($Data);
     $_SESSION['id'] =$k['id'];
     $_SESSION['name'] =$k['name'];
    // echo $_SESSION['id'] =$k['id'];
//  print_r($k);

   

}
// echo $hammad;

$upapper="SELECT * FROM `upapper`";
$databo=mysqli_query($con,$upapper); 

$uapp=mysqli_fetch_assoc($databo);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="XtremeFitnessLogo.png" rel="icon">

    <!-- Google Web Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet">  -->

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">



    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    <link rel="icon" type="image/x-icon" href="icon.png">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Laila:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">

    <style>


@media (max-width:700px)
{
    .fa-user-circle
    {
       display: none !important;

    }
}


    a {text-decoration: none !important;}
    .page {font-family: 'Laila', sans-serif;
    text-align: center;
    background: #04a3b4;
    color: white;
font-weight: 700;
    border: 2px solid;
    transition: 0.5s;
   }
.page span{color: white;}

.page:hover{background: #5f5f5f;  transition: 0.5s;}

.nav{margin-top: 15px;}
a{text-decoration: none;}
.boxe:hover{background:#049cae14; border:2px solid #929a9d; color:#929a9d !important; transition:0.5s;}
.boxe2:hover{background:#e2e2e2; border:2px solid #049cae; color:#049cae !important; transition:0.5s;}

.fahadlog
{
    font-weight: 700 !important;
    background: #04a3b4 !important;
    border: 1px solid #04a3b4 !important;
    font-family: sans-serif !important;
    width: 38% !important;
    height: 52px !important;
    float: right !important;
    margin-top: 15px !important;
}
.fahadlog:hover
{
    background:#049cae14 !important; border:1px solid #929a9d; color:#929a9d; transition:0.5s;  
}

.fahadreg
{
    font-weight: 700 !important;
    background: #929a9d !important;
    border: 1px solid #929a9d !important;
    font-family: sans-serif !important;
    width: 38% !important;
    margin-top: 15px !important;
    height: 52px !important;
    margin-right: 10px !important;
    float: right !important;
}
.fahadreg:hover
{
    background:#e2e2e2 !important; border:1px solid #049cae; color:#049cae; transition:0.5s;
}


</style>

<style>
        /* .navbar-social-list li a {
            border-radius: 4px !important;
            border: 1px solid white;
        }

        .navbar-social-list li a:hover {
            background-color: grey;
            transition: 0.6s;
        } */

      

       

      

        /* .navbar .navbar-nav .nav-item a {
            padding-left: 21px;
            padding-right: 20px;
            padding-top: 8px;
            padding-bottom: 8px;
            border-radius: 5px;
        } */

     

        /* .nav-link:hover {
        border-bottom: 2px solid red;
        transition: all 0.2s;
    } */

        .navbar-nav .nav-item a {
            font-weight: 500 !important;
    color: white;
    transition: 0.6s;
        }


        .navbar-nav .nav-item a:hover {
            color: white !important;
            background: none;
            transition: 0.6s;
            border-bottom: 1px solid;
        }
        
        .active {
            background-color: none !important;
            color: white !important; transition: 0.6s;
        }

       

        
           

/* .p-1 {
    padding: 0.45rem!important;
} */
/* .navbar .navbar-nav .nav-link {
    color: #2d2c2c;
} */



/* @media (max-width: 1007px){

.books,.books4{
    display:none !important;
}

}

@media(max-width: 1024px)
{
    .hasn
    {
        margin-right: 170px !important;
    }
}
@media(max-width: 1204px)
{
    .hasn
    {
        margin-right: 150px !important;
    }
}

@media (max-width: 1205px){
.books{
   height: 325px !important;
 
}

}

@media (max-width: 1205px){
.books4{
   height: 315px !important;
   margin-top: -30px !important;
}

} */

/* .gillani a:hover
{
 background:transparent !important;
 color:darkred !important;
} */

/*.nav-item{    padding-top: 35px;}*/
.nav-link{padding-right:25px;padding-left:25px; border-radius:3px;}
.btn{--bs-btn-border-radius: 3px;}
.navbar-btn1{
    background: white !important;
    color: #b10706 !important;
/*    margin-left: 5px;*/
/*    font-size: 18px;*/
    padding-top: 8px;
    font-family: sans-serif;
    border: 2px solid #ffffff;
    transition: 0.5s;
    border-radius: 5px;
}

           .navbar-btn{
            background: rgb(92 4 3);
    margin-left: 5px;
    font-size: 18px;
    padding-top: 8px;
    font-family: math;
    border: 2px solid rgb(255 255 255);
    transition: 0.5s;
    border-radius: 5px;
           }

           .navbar-btn:hover {
            color: #ffffff !important;
            background-color: #db0d0c !important;
            border:2px solid #ffffff;
            transition:0.5s;
        }
        .navbar-btn1:hover
        {
        
            color: #ffffff !important;
            background-color: #db0d0c !important;
            border:2px solid #ffffff;
            transition:0.5s;
        
        }
       
        .dropdown, .dropdown-center, .dropend, .dropstart, .dropup, .dropup-center {
    position: relative;}
    
    .dropdown-item:hover {
    display: block;
    width: 100%;
    padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
    clear: both;
    font-weight: 400;
    color: var(--bs-dropdown-link-color);
    /* text-align: inherit; */
    text-decoration: none;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}
@media (max-width: 1025px)
{
    .asop {
    padding-bottom: 5px !important;
}
.me-4{display: none;}
.nav-link {
    padding-right: 7px !important;
    padding-left: 12px !important;
    border-radius: 2px !important;
}
.Logi{       margin-bottom: 5px!important;}
.navbar-nav{font-size: 17px !important;}
.navbar-btn1{font-size: 14px !important;
/*    width: 70% !important;    height: 40px !important;*/
}
.navbar-btn{font-size: 14px !important;
/*    width: 70% !important;    height: 40px !important;*/
}
/* .nav-item{padding-top:10px!important;}  */
    
}

@media (max-width: 1441px)
{
    
    .nav-item{padding-top:0px!important;} 
    .col-md-6{margin-top: 10px!important; 
    }
    .nav-link {
    /*padding-right: 20px!important;
    padding-left: 20px!important;*/
    border-radius: 3px;
}
    .Logi{   width: 40%!important;
/*    height: 100px;*/
    margin-top: 0px !important;
    margin-right:   0 !important;
}
    .nav-but{    
/*        margin-top: 28px!important;*/
    }
    .navbar-btn1{
/*            padding-top: 5px!important;*/
             
    }
    .navbar-btn{
            padding-top: 5px!important;
            
    }
    
}

@media (max-width: 769px)
{
    .Logi{    margin-left: 5px;}
    .fahadg
    {
        display: block !important;
    float: left !important;
    text-align: justify !important;
    padding-left: 2% !important;
  
    padding-top: 20px !important;
    margin: 10px -250px!important;
        
    }
    .nav-item{padding-top:10px!important;} 
    .col-md-6{margin-top: 10px!important; 
    }
    .nav-but .navbar-btn1{display:none !important; }
    .nav-but .navbar-btn{margin-left: 20px !important;margin-bottom: 25px !important;}
}
/* 
 <input id="menu-toggle" type="checkbox" /> */
/* .list-inline-item a
{    padding-top: 6px;
    padding-bottom: 6px;
    padding-left: 10px;
    padding-right: 10px;
} */
.list-inline-item i
{   font-size: 27px !important;
    color: white;
    margin-right:1.5px;
    padding-top:1.5px;
    padding-left:3.5px;
    padding-right:3.5px;
}
.social i:hover
{
    /* background:none !important; */
    /*color:#c00000 !important;*/
    font-size: 105%;
    background:white;border-radius:5px;
    
    
}


@media (max-width: 1025px){
.col-lg-6 {
    flex: 0 0 auto;
    width: 50%;
    margin-left: -135px;
    margin-right: 130px;
}
.navbar-btn1{margin-right:0px !important;}

}
@media (max-width: 426px)
{
   #newworld{    display: block;
    margin-left: 240px;
    margin-top: -40px;}
}

#mynavbar
{
/*    margin-left: -150px;*/
}

</style>






</head>





<body>


























    <div>
<div class="container-fluid  px-0 wow fadeIn" data-wow-delay="0.1s"   >
        <div style="background-color: white">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center p-1">
                    <div class="copyright-text"><center>
                        <span class="col-md-4 col-lg-3 col-sm-2 text-white hanbhai" style="font-family: sans-serif;font-size: 19px;font-weight: 500;color: #b10706 !important;"> 
                        <?php
                                if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true) 
                                {echo "Welcome ", $k['name'];}
                                

                                else
                                {         $date=date("d-M-Y");
                    
                                    echo "Welcome To Xtreme Fitness";
                                    // // $view="INSERT INTO `views`(`view`, `name`, `date`) VALUES 
                                    // //             ('1','null','$date')";
                                                
                                    //             mysqli_query($con,$view);
                                                    
                                }
                                ?>
                     
                        </span></center>
                    </div>
                    <div class="footer-single-col text-start text-lg-end text-md-end social">
                        <ul class="list-unstyled list-inline navbar-social-list mb-0 ">
                            <li class="list-inline-item">
                                <a target="_blank" style=""
                                    href="https://www.facebook.com/xtremefitness32/">
                                  
                                    <i style="font-size: 20px; color:#0d6efd;" class="fa fa-facebook-square"></i>
                                </a>
                            </li>
                          <!--   <li class="list-inline-item">
                                <a target="_blank" style="" 
                                    href="#">
                                    <i style="font-size: 20px; color:#02aa5c;" class="fa fa-whatsapp"></i>
                                </a>
                            </li> -->
                            <li class="list-inline-item">
                                <a target="_blank"  href="https://www.instagram.com/xtreme_fitness32/?hl=en" 
                                style="">
                                <i style="font-size: 20px; color:#ff5875;" class="fa fa-instagram"></i>
                                </a>
                            </li>
                           <!--  <li class="list-inline-item">
                                <a target="_blank"  href="#" 
                                style="">
                                <i style="font-size: 20px; color:#4296ff;" class="fa fa-linkedin-square"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a target="_blank" style=""
                                    href="#">
                                    <i style="font-size: 20px; color:#dc3545;" class="fa fa-youtube-square"></i>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
  <style>
    .menu-button-container {
  display: none;
  height: 55%;
  width: 30px;
  cursor: pointer;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
#menu-toggle {
  display: none;
}
/*  Creating the menu button */
.menu-button,
.menu-button::before,
.menu-button::after {
  display: block;
  /* background-color: #fff; */
  position: absolute;
  height: 5px;
  width: 27px;
  border-radius: 3px;
}
.menu-button::before {
  content: '';
  margin-top: -8px;
}

.menu-button::after {
  content: '';
  margin-top: 8px;
}

#menu-toggle:checked + .menu-button-container .menu-button::before {
  margin-top: 0px;
  transform: rotate(45deg);
}

#menu-toggle:checked + .menu-button-container .menu-button {
  background: rgba(255, 255, 255, 0);
}

#menu-toggle:checked + .menu-button-container .menu-button::after {
  margin-top: 0px;
/*  transforms the hamburger icon into a cross  */
  transform: rotate(-45deg);
}
.menu-button, .menu-button::before, .menu-button::after{display: block;background-color:#ffffff;}
@media (max-width: 769px) {
  .menu-button-container {
    display: flex;
  }
  .fa{display: inline-block!important}

.Logi{    margin-top: 0% !important; width: 135px!important; height: 90px !important;}
#newworld{display:none;}
.ashiq{display:none;}
}

@media (max-width: 500px)
{
  .hanbhai{
     margin-left: 85px !important;
  }
  .text-start{display:none;}
}
@media (max-width: 376px)
{
  .hanbhai{
     margin-left: 65px  !important;
  }
  
}

@media (max-width: 321px)
{
  .hanbhai{
     margin-left: 38px !important;
  }
  .okok i{margin-right: 5px !important; font-size:25px !important;}
  .Logi{margin-top: -20% !important;margin-left: 0px;width: 70%;height: 80px;}
  .menu-button, .menu-button::before, .menu-button::after {height: 5px;
    width: 20px;}
    .dropdown {padding-right: 0px !important;    margin: 0 !important;}
}

@media (max-width: 1000px)
{
  .fa .fa-user-circele{display:none;}
}

.dropbtn {
  /* background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer; */
}

.dropdown {
  position: relative !important;
  display: inline-block !important;
  margin: 5px !important;
  font-size: 22px !important;
  padding-right: 10px;transition:0.5s !important;
}

.dropdown-content {
  display: none;
  position: absolute ;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-size:16px;
  font-family:math;transition:0.5s;
  
}

.dropdown-content a {
    font-weight: 600;
    font-family: sans-serif;transition:0.5s;
}
.menu-button-container{  float:right;  margin-top: 32px;}
.dropdown-content a:hover {background-color: #f1f1f1; color:darkred !important;font-weight:600; transition:0.5s;}
.dropdown:hover .dropdown-content {display: block;transition:0.5s;}
.dropdown:hover .dropbtn {background-color: #dfe2e2; transition:0.5s;}




 
.myNewNavBar
{
  background-color:  #5a0604;  
  font-size: 110%;
  /*font-family: poppins;*/
}


@media screen and (max-width: 1300px) and (min-width: 992px) {
    .myNewNavBar
    {
  
      font-size: 80% !important ;
      
    }
    .chote
    {
        /*1025*/
    }
}



  </style>     
                
                
               
                <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    
  $("#menu-toggle").click(function(){
    
    $("#newworld").slideToggle();
  });
});
</script>   
   























<nav class="navbar navbar-expand-lg myNewNavBar">
  <div class="container-fluid" style="background-color: rgb(94, 2, 2)!important; height:80px">

    <!-- <a class="navbar-brand" href="javascript:void(0)">Logo</a> -->
       <a href="index" class="navbar-brand mt-3">
            <img src="admin/<?php echo $uapp['img']?>" width="35%" height="auto;" alt="" class="Logi" style="margin-top: 10px;margin-bottom: 10px; padding-top:1px">      
        </a>

    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon text-light" style="background-color: white">
           <?php if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) { 
                            
                            

                            echo"
                            
                           
                        <div class='dropdown' style='float:right;'>
                        
                            
                            <b>
                                <i class='fa fa-user-circle' style='display: none; color:white; float:left;margin-right:40px'></i> 
                                <i class='fa fa-angle-down'  style='float:left ' ></i>
                            </b>
                          
                            <div class='dropdown-content'>
                                <ul  class='dropdown-menu dropdown-menu-end show' aria-labelledby='navbarDropdown' data-bs-popper='static'>
                                <li><a  class='dropdown-item' href='#!'>$k[name]</a></li>
                                <li><a  class='dropdown-item' href='huprofile?id=$k[id]'>View Profile</a></li>
                                <li><hr class='dropdown-divider'></li>
                                <li><a  class='dropdown-item' href='logout'><i
                                class='fa fa-sign-out'> <b  style='font-size:16px;font-family: sans-serif;'>SignOut</b></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                       
                            ";?>
                                <?php } else { ?>

                        <input id="menu-toggle" type="checkbox"   >
                            <label class='menu-button-container' for="menu-toggle">
                            <div class="okok"><a href="signin"><i style="font-size:30px;color: #ffffff;margin-right:20px;" class="fa fa-sign-in"></i></a></div>
                        </label>
                           <?php }?>
      </span>
    </button>

    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12" style="padding-top:2px" id="newworld">     
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link px-3" href="index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 chote" href="excercises">Excercises & Activities </a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="membership">Membership </a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="promotion">Promotion </a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="contact">Contact </a>
        </li>
      </ul>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <ul class="navbar-nav" style="float:right;display:-webkit-box;color: white; padding-bottom:12px">
                            
                            <?php if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) { 
                            
                            

                            echo "
                       
                           
                            <li class='nav-but'>
                            <a href='huprofile?id=$k[id]'> <button class='btn btn-danger navbar-btn'  style='margin-bottom:0px;margin-bottom:0px;margin-right: 10px;'>
                                    <i class='fa fa-user'><span style='font-family:sans-serif!important; font-size:14px;'> View Profile </s></i>
                                </button></a>
                            </li>
                            <li class='nav-but'>
                            <a href='logout'> <button class='btn btn-danger navbar-btn1' id='login-button' style='margin-bottom:0px;'>
                                <i class='fa fa-sign-out'> <span style='font-family:sans-serif!important; font-size:14px;'>Sign Out</span></i>
                                </button></a>
                            </li>
                        
                       
                            "
                            
                            #echo"
                       
                           
                        // <div class='dropdown' style='float:right;'>
                       
                        //     <b><i class='fa fa-user'>
                        //     <span style='font-weight: 500 !important;color: #423f3f;transition: 0.6s;font-size:18px;font-family: sans-serif;color: #ffffff;margin-left: 5px;'>$k[Full_Name]</span>

                        //     <i class='fa fa-angle-down' style='    margin-left: 5px;'>
                            
                        //     </i>
                            
                        //     </i></b>
                        //     <div class='dropdown-content'>
                        //         <ul  class='dropdown-menu dropdown-menu-end show' aria-labelledby='navbarDropdown' data-bs-popper='static'>
                               
                        //         <li><a  class='dropdown-item' href='huprofile?id=$k[Id]'>View Profile</a></li>
                             
                        //         <li><hr class='dropdown-divider'></li>
                        //         <li><a  class='nav-link' href='logout'><i class='fa fa-sign-out'> <b  style='font-size:16px; font-family:sans-serif;'>SignOut</b></i></a></li>
                        //         </ul>
                        //     </div>
                        // </div>
                        
                       
                            
                            ;?>
                                <?php } else { ?>
                                    
                                    <li >
                                    <a href="signup"> <button class="btn btn-light px-4" type="button"> <i class="fa fa-user"><span style="font-family:sans-serif!important; font-size:17px;"> Sign Up </s></i></button></a>
                                    </li>
                                    <li >
                                    <a href="signin"> <button class="btn btn-outline-light px-4 ms-3" type="button"><i class="fa fa-sign-in"> <span style="font-family:sans-serif!important; font-size:17px;">Sign In</span></i></button></a>
                                    </li>
                                
                                <?php } ?>
                        </ul>
    </div>
<!-- <form class="d-flex">
       
        <button class="btn btn-light px-4" type="button"> <i class="fa fa-user"><span style="font-family:sans-serif!important; font-size:17px;"> Sign Up </s></i></button>
        <button class="btn btn-outline-light px-4 ms-3" type="button"><i class="fa fa-sign-in"> <span style="font-family:sans-serif!important; font-size:17px;">Sign In</span></i></button>

      </form>  -->

    </div>
 </div>
</nav>



























    <!-- Scripts Libraries -->

    

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        document.getElementById("login-button").onclick = function () {
            location.href = "login";
        };

        $(document).ready(function () {
            var path = window.location.href;
            $('ul a').each(function () {
                if (this.href === path) {
                    $(this).addClass('active');
                }
            });
        })
    </script>