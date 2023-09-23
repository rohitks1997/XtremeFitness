<?php

include('head.php');

include "db.php";

// if(isset($_POST['send']))
// {

//     $name=$_POST['name'];
//     $email= $_POST['email'];
//     $number=$_POST['number'];
//     $subject=$_POST['subject'];
//     $message=$_POST['message'];
    

//     $Conquery= "INSERT INTO `contact`(`name`, `email`, `number`, `subject`, `message`) VALUES 
//     ('$name','$email','$number','$subject','$message')";

//     $Condata = mysqli_query($con,$Conquery);

//     // $count = mysqli_num_rows($Condata);

//     if($Condata==1)
//             {echo
//                 "<script>
//                     alert('Your message has been sent !');
//                     window.location.href='contact';
//                 </script>";
//             }

//     else
//             {
//                echo
//                         "<script>
//                         alert('Error !';
//                     </script>";
//             }
// }
               
$about="SELECT * FROM `about_text`";
$databo=mysqli_query($con,$about); 

$abo=mysqli_fetch_assoc($databo);



?>
 <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
<style>

.title-1 {
    padding-top: 3%;
   
    
    /*font-family: Math;*/
    text-align: center;
    font-size: 46px;
    font-weight: 800;
}

.card img:hover{  transform:scale(1.03); transition:0.5s;  }
.card img{   transition:0.5s; }

@media(max-width: 1025px)
{
    .shahzaib .col-lg-6
    {
        margin-left: 0px !important;
         margin-right: 0px !important;
    }
    .shahzaib .col-md-6 p
    {
        
        text-indent:22%!important;
        font-size:22px!important;
    }
    
}

@media(max-width: 769px)
{
    .shahzaib .col-lg-6
    {
        margin-left: 0px !important;
         margin-right: 0px !important;
         width: 50%!important;
    }
    .shahzaib .col-md-6 p
    {
        
        text-indent:12%!important;
        font-size:22px!important;
    }
    
}

@media(max-width: 426px)
{
.shahzaib .col-sm-12
    {
        width: 100%;
    }
  p
    {
        text-indent:0%!important;
        font-size:22px!important;
        padding-bottom: 0px!important;
        
        }
.shahzaib .col-lg-6 {
    margin-left: 0px !important;
    margin-right: 0px !important;
    width: 100%!important;
}
   .shahzaib .col-sm-12 p
    {
        text-indent:0%!important;
        font-size:21px!important;
        padding-bottom: 0px!important;
        padding-left: 15px;
        }

            
}

</style>

 
  </head>
  <body>
  
    <div class="container-fluid" style="max-width:90%;"> 
  

        <center> 
            <h2 class="title-1 mt-5">About Us</h2>
            <img src="XtremeFitnessLogo.png" class="img-fluid" alt="" style="margin-top:15px;margin-bottom:15px;">
            <div class="row">

            <!-- <div class="col-md-12" >
                <?php #echo $abo['text']?></div>    -->
            <h3 style="text-align:Justify; Font-size:30px; font-weight:Bold; margin-top: 100px">Introduction:</h3>
            <p style="text-align:Justify;  Font-size:24px;  margin-bottom: 100px;">Xtreme Fitness is a web application used by a particular gym. Xtreme Fitness allows the customers to select the fitness activity which they are interested to do and apply the membership via a website and perform in the gym. The User can look their profile about the activity which is selected and even tell about its personal and health information.</p>
            </div>

            <div class="col-md-12" style="margin-top:10px;">
            <h3 style="text-align:Justify;  Font-size:30px; font-weight:Bold;">Objectives:</h3>
            <p style="text-align:Justify;  Font-size:24px; margin-bottom: 100px">The main objective of Xtreme Fitness is to provide the customers an another option for choosing exercise or any other fitness activities applying membership via web application in order to perform at gym rather than visiting or making phone call.</p>
            </div>
            <div class="col-md-12" style="margin-top:10px;">
                <h3 style="text-align:Justify;  Font-size:30px; font-weight:Bold;">Opening Hours:</h3>
                <div class="row shahzaib mb-4">
                    <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"> -->
                        <p style="text-align:center;  Font-size:24px; text-indent:12%; ">Monday 7 AM–11:55 PM</p>
                    <!-- </div> -->
                    <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12"> -->
                        <p style="text-align:center;  Font-size:24px; text-indent:12%; ">Tuesday 7 AM–11:55 PM</p>
                    <!-- </div> -->
                    <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"> -->
                        <p style="text-align:center;  Font-size:24px; text-indent:12%; ">Wednesday 7 AM–11:55 PM</p>
                    <!-- </div> -->
                    <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"> -->
                        <p style="text-align:center;  Font-size:24px; text-indent:12%; ">Thursday 7 AM–11:55 PM</p>
                    <!-- </div> -->
                    <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"> -->
                        <p style="text-align:center;  Font-size:24px; text-indent:12%; ">Friday 7 AM–11:55 PM</p>
                    <!-- </div> -->
                    <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"> -->
                        <p style="text-align:center;  Font-size:24px; text-indent:12%; ">Saturday 8 AM–11:55 PM</p>
                    <!-- </div> -->
                    <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"> -->
                        <p style="text-align:center;  Font-size:24px; text-indent:12%; ">Sunday 8 AM–11:55 PM</p>
                    <!-- </div> -->
                    
                </div>
           
            </div>
            <div class="col-md-12 " style="margin-top:10px; margin-bottom: 8%">
                    <h3 class="my-5" style="text-align:justify; font-size:35px; font-weight:bold;">Photo Gallery:</h3>
                    <div class="row" style="margin-top:1%; margin-bottom:3%;">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $abo['img1']?>" alt="Card image cap" style="height: 280px;">
                        
                        </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $abo['img2']?>" alt="Card image cap" style="height: 280px;">
                        
                        </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $abo['img3']?>" alt="Card image cap" style="height: 280px;">
                        
                        </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $abo['img4']?>" alt="Card image cap" style="height: 280px;">
                        
                        </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" style="margin-top:20px;">
                        <div class="card" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $abo['img5']?>" alt="Card image cap"  style="height: 280px;">
                        
                        </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" style="margin-top:20px;">
                        <div class="card" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $abo['img6']?>" alt="Card image cap" style="height: 280px;">
                        
                        </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" style="margin-top:20px;">
                        <div class="card" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $abo['img7']?>" alt="Card image cap" style="height: 280px;">
                        
                        </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" style="margin-top:20px;">
                        <div class="card" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $abo['img8']?>" alt="Card image cap" style="height: 280px;">
                        
                        </div>
                </div>
        </div>
            </div>
        
            
                

            
            </div>
        </center>
  
    
    </div>


  
    </body>
  </html>
    

<?php

include('footer.php');

?>