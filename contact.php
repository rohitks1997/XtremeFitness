<?php

include('head.php');

include "db.php";
if(isset($_POST['send']))
{

    $name=$_POST['name'];
    $email= $_POST['email'];
    $number=$_POST['number'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    

    $Conquery= "INSERT INTO `contact`(`name`, `email`, `number`, `subject`, `message`) VALUES 
    ('$name','$email','$number','$subject','$message')";

    $Condata = mysqli_query($con,$Conquery);

    // $count = mysqli_num_rows($Condata);

    if($Condata==1)
            {echo
                "<script>
                    alert('Your message has been sent !');
                    window.location.href='contact';
                </script>";
            }

    else
            {
               echo
                        "<script>
                        alert('Error !';
                    </script>";
            }
}
               
                    



?>
 <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
<style>

.text-body:hover {
    color: #00284a !important;
}
.page-header {
 
 padding-top: 7rem;
 padding-bottom: 7rem;
 background: url(img/SecondFinal.jpg) top right no-repeat;
 background-size: cover;

}
.kunhi
{
 width: 35%;
 margin-top: 3%;
 height: 60px;
 border:2px solid #2d9ab6;
 border-radius: 20px;
}
.kunhi1
{
 width: 15%;
 height: 60px;
 border: 2px solid #2d9ab6;
 border-radius: 20px;
 color: #2d9ab6;
 /*font-family: math;*/
 font-weight: 900;
 font-size: 19px;
}
.kunhi1:active
{
 
 color:white;
 background: #2d9ab6;
 /*font-family: math;*/
 font-weight: 900;
 font-size: 19px;
}

.d-flex {
    display: flex!important;
}
.align-items-stretch {
    align-items: stretch!important;
}
.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-.5 * var(--bs-gutter-x));
    margin-left: calc(-.5 * var(--bs-gutter-x));
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,0.125);
    border-radius: 0;
}
*, ::after, ::before {
    box-sizing: border-box;
}

.section-title {
    text-align: center;
    padding-bottom: 30px;
}

.section-title h2 {
    padding-top: 3%;
   
    /*font-family: Math;*/
    text-align: center;
    font-size: 50px;
    font-weight: 800;

}
.contact .info {
    border-top: 3px solid #c52523;
    border-bottom: 3px solid#c52523;
    padding: 0px;
    padding-right: 25px;
    background: #fff;
    width: 100%;
    box-shadow: 0 0 24px 0 rgb(0 0 0 / 10%);
}

.contact .info h4 {
    padding: 0 0 0 60px;
    font-size: 18px;
    /*font-weight: 600;*/
    margin-bottom: 5px;
    color: #5a0604;
    /*font-family: math;*/
}
.contact .info p {
    /*font-family: math;*/
    padding: 0 0 10px 60px;
    margin-bottom: 2.5%;
    /*font-size: 20px;*/
    font-weight: 600;
    color: #353535;
    line-height: 170%;text-align: justify;

}

.contact .info i {
    font-size: 22px;
    font-weight: bold;
    color: white;
    /* float: left; */
    
    width: 44px;
    height: 30px !important;
    margin-left:15px;
    background:  !important;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px !important;
    transition: all 0.3s ease-in-out;
}
*, ::after, ::before {
    box-sizing: border-box;
}
.contact .info h4 {
    padding: 0 0 0 60px;
    /*font-size: 24px;*/
    font-weight: 600;
    margin-bottom: 5px;
    color: #ac0300;
}
.contact .php-email-form {
    width: 100%;
    border-top: 3px solid #379ab5;
    border-bottom: 3px solid #379ab5;
    padding: 30px;
    background: #fff;
    box-shadow: 0 0 24px 0 rgb(0 0 0 / 12%);
}
.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-.5 * var(--bs-gutter-x));
    margin-left: calc(-.5 * var(--bs-gutter-x));
}
.contact .php-email-form .form-group {
    margin-bottom: 16px;
}
.contact .php-email-form label {
    padding-bottom: 8px;
}
.sahsa label {
    /*font-family: math;*/
    font-size: 19px;
    font-weight: 600;
    color: #ac0300 !important;
}
label {
    display: inline-block;
}
.contact .php-email-form input, .contact .php-email-form textarea {
    box-shadow: none;
    font-size: 17px;
    /*font-family: math;*/
    border-radius: 5px;
    /*border: 2px solid #b8bdc2;color: #31363a;*/
}
.contact .php-email-form input {
    height: 44px;
}
.contact .php-email-form label {
    padding-bottom: 8px;
}
.sahsa label {
    /*font-family: math;*/
    font-size: 19px;
    font-weight: 600;
    color: #2788a7;
}
label {
    display: inline-block;
}
textarea.form-control {
    min-height: calc(1.5em + .75rem + 2px);
}
.contact .php-email-form button[type=submit] {
    background: none;
    border: 0;
    padding: 5px 0px;
    color: #ac0300;
    border: solid 1.65px #ac0300;
    font-size: 18px;
    /*font-family: math;*/
    font-weight: 600;
    transition: 0.5s;
    border-radius: 5px;
    width: 100%;

}
/* .text-center {
    text-align: center!important;
} */
.contact .php-email-form {
    width: 100%;
    border-top: 3px solid #c52523;
    border-bottom: 3px solid #c52523;
    padding: 30px;
    background: #fff;
    box-shadow: 0 0 24px 0 rgb(0 0 0 / 12%);
}

.contact .php-email-form button[type=submit]:hover{
    background:  #5a0604;
    color: white !important ;

}
.ali{
    
    background:#ac0300 !important;
    margin-left: 4%;
    margin-top: 2%;
    
   transition:0.5s;
}
.ali:hover {
    background: none !important;
    border: 1px solid red;
    color: #a90a04 !important;
    transition:0.5s;
}
.contact .info i{
color: #43484d;
    float: left;
    width: 44px;
    height: 44px;
    background: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
}

.bi-envelope::before {
    content: "\f32f";
    font-size: 25px;
}
.bi-geo-alt::before {
    content: "\f3e8";
    font-size: 25px;
}

.bi-phone::before {
    content: "\f4e7";
    font-size: 25px;
}
.ali{color:white!important;}

@media (max-width: 426px){
.abid3 {
    padding-left: 6% !important;
    padding-right: 3% !important; 
}
.section-title h2 {font-size:45px;}
}

@media (max-width: 426px){
.text-white {
    margin-left: 0px !important;
    padding-left: 6% !important;}

}

@media (max-width: 376px){
    .contact .info i{display:none;}
    .contact .info p {padding: 0 0 0px 0px !important;}
    .contact .info h4 {padding: 0 0 0px 0px !important;}
    .contact .info .socialicon i{display:flex;}
    .contact .info .socialicon {margin-right:12px;   }
    
}

@media (max-width: 321px){
    .section-title h2 {font-size:40px;}
    .contact .info {padding: 0;padding-right: 5px !important;}
    .contact .info p{font-size: 16.55px !important;}
    .contact .info h4{font-size: 20px !important;font-weight: 600;margin-bottom: 0px !important;margin-top: 10px!important;}
    .contact .info i{width:35px;height:30px;}

}

@media (max-width:1440px){
.contact .info .socialicon i{margin-left: 20px !important;     }

}


@media (max-width: 1025px){
.contact .info i {margin-left: 5px;}
.contact .info{   padding: 0;
    padding-right: 12px;}
.contact .info p{padding: 0 0 10px 58px;font-size: 19px;    line-height: 160%;    }
.contact .info .address{margin-top:28px!important;}
.contact .info .socialicon i{margin-left: 6px !important;}
.section-title {padding-bottom: 20px;}
}
@media (max-width: 769px){
    .contact .info .socialicon{margin-bottom: 30px !important;}
    .contact .info p{    padding: 0 0 0px 58px;}
    .contact .php-email-form{padding: 0px !important;
    padding-bottom: 25px !important;
    padding-left: 25px !important;
    padding-right: 25px !important;
    padding-top: 20px !important;}
    .col-md-6 {margin-top: 0px !important;}
    .contact .php-email-form .form-group {
    margin-bottom: 20px !important;
     }
     .contact .info .socialicon i{margin-left: 20px !important;}
     .section-title h2{margin-top: 35px;}
     .section-title {padding-bottom: 20px;}
}




</style>
 <!-- Page Header Start -->
 <!-- <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown"  style="    font-family: math;font-size: 21px; font-weight: bolder;">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="product.php">Products</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
            
        </div>
    </div> -->
    <!-- Page Header End -->
 
  </head>
  <body>
  
    <div class="container-fluid">
  <div class="card" style=" border: none;">
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title mt-5 mb-5">
          <h2>Contact Us</h2>
          </div>

        <div class="row">
       
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address" style="margin-top: 30px;">
                <i class="bi bi-geo-alt-fill"></i>
                <h4>Address:</h4>
                <p><?php echo $uapp['address']?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope-fill"></i>
                <h4>Email:</h4>
                <p>  <?php echo $uapp['email']?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone-fill"></i>
                <h4>Contact:</h4>
                <p> <?php echo $uapp['contact']?></p>
              </div>
          
              <div class="social">
              <i class="bi bi-hand-thumbs-up-fill"></i>
                <h4>Follow Us:</h4>    
               
              </div>

              <div class="socialicon" style="display:flex;justify-content:center;margin-top: 10px;">
               <!-- <a href="#"> <i class="fab fa-twitter ali"></i></a> -->
               <a href="https://www.facebook.com/xtremefitness32/"> <i class="fab fa-facebook-f ali"></i></a>

               <!-- <a href="#"> <i class="fab fa-youtube ali"></i></a> -->

               <!-- <a href="#"> <i class="fab fa-linkedin-in ali"></i></a> -->
               <a href="https://www.instagram.com/xtreme_fitness32/?hl=en"> <i class="fab fa-instagram ali"></i></a>
</div>
                </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form method="POST" class="php-email-form sahsa">
              <div class="row">
                <div class="form-group col-md-6 ">
                  <label for="name">Full Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Full Name" required>
                </div>
                
                <div class="form-group col-md-6">
                <label for="name">Phone Number</label>
                <input type="text" class="form-control" name="number" id="subject" placeholder="Enter Your Phone Number" required>
                </div>

                <div class="form-group col-md-6">
                  <label for="name">Email Address</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email Address" required>
                </div>
              
             
              <div class="form-group col-md-6">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Subject Here" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="3"  placeholder="Enter Your Message" required></textarea>
              </div>
               <div class="text-center"><button type="submit" name="send">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    
</div>
  </div>
</div>
    <!-- Contact End -->


    <!-- Google Map Start -->
    <div class="container" style="margin-top: 35px; margin-bottom:35px;">
        <iframe class="w-100" style="height: 450px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d576.1231975524774!2d100.47017179606861!3d13.73784666879352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e299ca78c11a51%3A0x8945ea55581980ca!2sXtreme%20Fitness!5e0!3m2!1sen!2s!4v1693481772640!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Google Map End -->
  
    </body>
  </html>
    

<?php

include('footer.php');

?>