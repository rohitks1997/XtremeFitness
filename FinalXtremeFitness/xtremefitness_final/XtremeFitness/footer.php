
    <style>

body{
  overflow-x: hidden;
}


p {
    padding-bottom: 10px;
    margin-top: 0;
    margin-bottom: 0;
}
       .footer h3{font-weight: 800; font-family: math; font-size: 30px; }
       .asid{margin-top: 20px;}
       .asid ul{    font-size: 20px;font-family: math;line-height: 36px;}
       .footer ul{text-decoration: none ;} 
       .footer p{text-align: justify;font-family: math;font-size: 20px;color: white;}
       .footer{    background-color: #007a8a; color: white;}
       .icon i{font-size: 22px;
    margin: 3px 15px;}
  .as{

/* background-color: black ; */

color: white !important;
/* width:100%; */
height:300px;
background-repeat: no-repeat;
  /* background-attachment: fixed; */
  background-size: cover;}
 
.mt-3 {
    margin-top: 0rem!important;
} 
.text-uppercase {
    text-transform: uppercase!important;
    font-family: sans-serif;
    font-size: 22px;
    padding-top: 35px;
}  
.abid {
    font-family: sans-serif !important;
    padding-bottom: 0px !important;
    margin-top: 0;
    margin-bottom: 0;
    text-align: justify !important;
    font-size: 17px !important;
    line-height: 205%;
}
.abid3 {
    font-family: sans-serif !important;
    padding-bottom: 0px !important;
    margin-top: 0;
    margin-bottom: 0;
    text-align: justify !important;
    font-size: 17px !important;
    line-height: 205%;
}

.abid2 {
    font-family: sans-serif !important;
    padding-bottom: 0px !important;
    margin-top: 0;
    margin-bottom: 0;
    text-align: justify !important;
    font-size: 17px !important;
    padding-right: 17%;
    line-height: 205%;
}

element.style {
    width: 100px;
    background-color: white;
    height: 2px;
}
.mb-4 {
    margin-bottom: 1.5rem!important;
}
.mt-0 {
    margin-top: 0!important;
}
.mx-auto {
    margin-right: auto!important;
    margin-left: auto!important;
}
.d-inline-block {
    display: inline-block!important;
}
hr {
    margin: 1rem 0;
    color: inherit;
    border: 0;
    border-top: 1px solid;
    opacity: 0.6;
}
.my-5 {
    margin-top: 0rem!important;
    margin-bottom: 0rem!important;
}
@media (max-width: 1200px){
.col-lg-3 {
  padding-left:0px !important;
}
.abid3{line-height: 28px;
    font-size:15px !important;
    padding-top: 0px!important;
}
.abid{font-size:16px;}

}
@media (max-width: 768px){
    .abid2{
        padding-right: 0%;
        line-height: 30px!important;
}
.abid3 {padding-top: 2px!important;}
}


@media (max-width: 1441px){
    .abid2{
       
        line-height: 175%!important;
}
.abid3 {padding-top: 2px!important;
    line-height: 27px!important;
}

}
@media (max-width: 1025px){
    .abid2{
       line-height: 148%!important;
    }
   
}


@media (max-width: 768px){
    .abid{
        line-height: 180%;
    
    }
    .col-lg-6{width: 100%!important; padding: 0;}
    h6{
        text-align:justify;
    }
}
@media (max-width: 426px){
    .mx-auto h6{
        text-align:center;
       
    }
    .abid2{padding-right: 3%;
    padding-left: 3%;}
    .hasan{padding-top:10px;}
    .text-white {margin-left: 0px;    padding-left: 3%;}
    .abid3{padding-left: 3%;padding-right: 3%;}
    .social i{font-size:25px!important;}
    .p-3 {
    padding: 10px!important;
}
}
.p-3 {
    padding: 15px!important;
}

</style>

<?php 
$upapper="SELECT * FROM `upapper`";
$databo=mysqli_query($con,$upapper); 

$uapp=mysqli_fetch_assoc($databo);
?>
		
<!-- Remove the container if you want to extend the Footer to full width. -->


<!-- Footer -->
<!-- <footer class="text-center text-lg-start text-white" style="background-color: #1c2331"> -->
    <!-- Section: Links  -->
    <!-- <section class=""> -->

<div class="as"  style="background-color: #000c; height: 100%;">
            <!-- Grid row -->
    <div class="" style="background-color: #5c0403;">
        <div class="container-fluid" style="max-width: 90%;">    
            <div class="row mt-3 py-5" style="padding-bottom: 15px;" >
                    <!-- Grid column -->
                    
                    <div class="col-md-12 col-lg-6 col-xl-5 mx-auto " >
                          <h6 class="text-uppercase fw-bold" >About Us</h6>
                          <p class="abid2"><?php echo $uapp['aboutus']?></p>
                    </div>
           
                    <div class="col-md-6 col-lg-3 col-xl-4 mx-auto " style="padding-left: 7%;">
                          <h6 class="text-uppercase fw-bold hasan" >Useful links</h6>
                          <p class="abid"><a href="about.php" class="text-white">About Us</a></p>
                          <p class="abid"><a href="excercises.php" class="text-white">Exercises</a></p>
                          <p class="abid"><a href="membership.php" class="text-white">Membership</a></p>
                          <p class="abid"><a href="promotion.php" class="text-white">Promotion</a></p>

                          <!-- <p class="abid"><a href="about" class="text-white">Contact Us</a></p> -->
                    </div>

                    <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mb-md-0 ">
                          <h6 class="text-uppercase fw-bold hasan" >Contact</h6>
                          <p class="abid3" style="line-height:28px; padding-top:8px;   "><i class="fas fa-home mr-3"></i><?php echo $uapp['address']?> </p>
                          <p class="abid3" style="padding-top: 8px;"><i class="fas fa-envelope mr-3" style="padding-right: 15px;"></i>  <?php echo $uapp['email']?></p>
                          <p class="abid3"><i class="fa fa-phone mr-3" style="padding-right: 15px;"></i>  <?php echo $uapp['contact']?> </p>
                          <!-- <p class="abid3"><i class="fas fa-fax mr-3" style="padding-right: 15px;"></i> 0830219001</p> -->
                          <!-- <p class="abid3"><i class="fas fa-mobile-phone mr-3" style="padding-right: 15px;"></i> + 92 305-2561915</p> -->
                          <a href="https://www.facebook.com/xtremefitness32/" style="color:white;"> <i style="font-size: 30px; padding:5px; " class="fa fa-facebook-square"></i></a>
                        <!-- <a href="#" style="color:#05af56;"> <i style="font-size: 30px; padding:5px;" class="fa fa-whatsapp"></i></a> -->
                        <a href="https://www.instagram.com/xtreme_fitness32/?hl=en" style="color:white"> <i style="font-size: 30px; padding:5px;" class="fa fa-instagram"></i></a>
                        <!-- <a href="#" style="color:#157dff;"> <i style="font-size: 30px; padding:5px;"  class="fa fa-linkedin-square"></i></a> -->
                        <!-- <a href="#" style="color:#d90d0e;"> <i style="font-size: 30px; padding:5px;" class="fa fa-youtube-square"></i></a> -->
                    </div>
            </div>
        </div>
    </div>     
</div>






<!-- <div class="social"  style="border-bottom: 1px solid #5a0604;background: #ffffff;padding:5px;">  -->
                    <center>
                        <!-- <a href="#" style="color:#0b67ff;"> <i style="font-size: 30px; padding:5px; " class="fa fa-facebook-square"></i></a> -->
                        <!-- <a href="#" style="color:#05af56;"> <i style="font-size: 30px; padding:5px;" class="fa fa-whatsapp"></i></a> -->
                        <!-- <a href="#" style="color:#ff268d;"> <i style="font-size: 30px; padding:5px;" class="fa fa-instagram"></i></a> -->
                        <!-- <a href="#" style="color:#157dff;"> <i style="font-size: 30px; padding:5px;"  class="fa fa-linkedin-square"></i></a> -->
                        <!-- <a href="#" style="color:#d90d0e;"> <i style="font-size: 30px; padding:5px;" class="fa fa-youtube-square"></i></a> -->
                    </center>
<!-- </div> -->








            
            <!-- Copyright -->

<div class="row" style="background-color: white ;">
    <div class="col-sm-6">
        <div class="text-center m-3" >
                  <p style="text-align: left">  © 2023 Copyright: <a class=""  href="index">Xtreme Fitness</a></p> 
        </div>
    </div>
    <div class="col-sm-6">
        <img src="img/p1.png" class="m-2" width="50" style="float: right;">
        <img src="img/p2.png" class="m-2" width="50" style="float: right;">
        <img src="img/p3.png" class="m-2" width="50"  style="float: right;">
        <img src="img/p4.png" class="m-2" width="50" style="float: right;">
        <img src="img/p5.png" class="m-2" width="50" style="float: right;">
        <img src="img/p6.png" class="m-2" width="50" style="float: right;">
        <img src="img/p7.png" class="m-2" width="50" style="float: right;">
    </div>    
</div>




            <!-- Copyright -->

</body>
</html>