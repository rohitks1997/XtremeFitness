<?php include "head.php";

include "db.php";

$member="SELECT * FROM `member_pro` where `uploadin` = 'Special'";
$my=mysqli_query($con,$member);

$members2="SELECT * FROM `member_pro` where `uploadin` = 'Student'";
$my2=mysqli_query($con,$members2);

$members3="SELECT * FROM `member_pro` where `uploadin` = 'Senior'";
$my3=mysqli_query($con,$members3);
$idd= $_SESSION['id'];

$ajjd=$_GET['ajjd'];

$member1="SELECT * FROM `member_pro` where `id` = '$ajjd'";
$my1=mysqli_query($con,$member1);
$l=mysqli_fetch_assoc($my1);
$uuu="SELECT * FROM `usignup` where `id` = '$idd'";
$my11=mysqli_query($con,$uuu);
$g=mysqli_fetch_assoc($my11);
?>

<?php
           
           
           if ($ajjd == true) {
           echo'
           <div id="myModalw" class="modalw">

           <!-- Modal content -->
           <div class="modal-contentw">
           <a href="promotion.php"> 
           <button type="button" class="close" data-dismiss="modal" style="background: none;color: darkred;font-weight: bolder;border: none;font-size: 24px;    float: right;">&times;</button>
           </a>
           <h4 class="modal-title" style=" color:darkred; font-weight:700;">'.$l['title'].'</h4><hr>
          
           <center><h3 style=" font-weight:700;">Payment</h3>
           <h4 class="modal-title" style=" color:darkred; font-weight:700;">'.$l['price'].'</h4>
           </center>

           <form method="POST" class="members">
             <div class="row">
               <div class="form-group col-md-6 " style="margin-top: 5px;">
                 <label for="name">Name</label>
                 <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required value="'.$g['name'].'">
               </div>
               
               <div class="form-group col-md-6" style="margin-top: 5px;">
               <label for="name">Email Address</label>
               <input type="text" class="form-control" name="email" id="subject" placeholder="Enter Email Address" required value="'.$g['email'].'">
               </div>

               <div class="form-group col-md-6"style="margin-top: 15px;">
                 <label for="name">Card Number</label>
                 <input type="text" class="form-control" name="card" id="email" placeholder="Enter Card Number" required>
               </div>
             
            
             <div class="form-group col-md-3"style="margin-top: 15px;">
               <label for="name">CVV</label>
               <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter CVV" required>
             </div>

             <div class="form-group col-md-3"style="margin-top: 15px;">
               <label for="name">Exp Date</label>
               <input type="text" class="form-control" name="exp" id="subject" placeholder="Enter Exp Date" required>
             </div>

             <div class="form-group col-md-12"style="margin-top: 15px;">
               <label for="name">Billing Address</label>
               <textarea class="form-control" name="message" rows="3"  placeholder="Enter Billing Address" required>'.$g['address'].'</textarea>
             </div>

               <div class="form-group col-md-6" style="margin-top: 15px;">
               <a href="promotion.php">    <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:left; width:100px;">Close</button>
               </a></div>
               <div class="form-group col-md-6" style="margin-top: 15px;">
                    <input type="submit" name="pay" class="btn btn-primary" style="float:right; width:100px;">
               </div>
             
           </form>
</div>
             
          
           </div>
         </div>';
           }
          ?>
<?php if (isset($_POST['pay'])) {
 $name=$_POST['name'];
 $email=$_POST['email'];
 $card=$_POST['card'];
 $cvv=$_POST['subject'];
 $exp=$_POST['exp'];
 $message=$_POST['message'];
$data="UPDATE `usignup`
SET `name`='$name', `email`='$email', `card`='$card',
`cvv`='$cvv', `exp`='$exp', `address`='$message' ,`promotionpay`='$l[price]'  ,`promotion`='$l[title]'
WHERE `id`=$idd;
";
$pppp=mysqli_query($con,$data);
if ($pppp == true) {
  echo'<script>

  alert("Thank You for Promotion. Admin Will Contact You Soon !");

</script>';
echo '<script>

  window.open("index.php", "_self");


</script>';
;
}else{echo'<script>

  alert(" box!");

</script>';}

}?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotion</title>
    <style>
  .modalw {
  display: block; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-contentw {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.closew {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.closew:hover,
.closew:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>

<script>
// Get the modal
var modal = document.getElementById("myModalw");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closew")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<style>
.btn-1 {
    background-color: rgb(255, 0, 0);
    margin-top: 30px;
    color: white;
    border-radius: 0;
    padding: 0.1rem 1rem;
    /*font-family: math;*/
    font-size: 2rem;
    font-weight: 700;
    outline: none;
    border-radius: 5px;
}
.content {
    position: absolute;
    bottom: 0;
    /* background: rgb(0, 0, 0); */
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 126%;
    padding-right: 25%;
    padding-top: 15%;
    left: 1px;
    
}

.carousel-caption h5 {
    /*font-family: math;*/
    font-size: 80px;
    font-weight: 700;
}
.carousel-caption p {
    /*font-family: math;*/
    font-size: 22px;
   
}
.carousel-control-prev-icon, .carousel-control-next-icon {
    
    background-color: transparent!important;
    border: none!important;
    border-radius: none!important;
}
.title-1 {
    padding-top: 3%;
   
    /*font-family: Math;*/
    text-align: center;
    font-size: 50px;
    font-weight: 800;
    /*color: #8d0601;*/
}
.title-2 {
    padding-top:10px ;
    /*font-family: Math;*/
    text-align: center;
    font-size: 24px;
    font-weight: 600;
}

.btn-2{background-color: white;
    
    color: rgb(169 10 4);
    border-radius: 0;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
    width: 95%;
    /*font-family: math;*/
    font-size: 20px;
    font-weight: 600;
    /* outline: none; */
    border-radius: 5px;
    border:1px solid  #450706;
    padding: 5px 0px;
    margin-bottom: 20px;
    margin-top: 5px;
    transition: 0.5s;
  }

  .btn-2:hover
  {
    color: white!important;
    background-color: #5a0604;
    transition: 0.5s;
  }
  .btn-2:focus
  {
    color: white;
    background-color: #450706;
    transition: 0.5s;
  }





 .card:hover {
    border: 1px solid #dfdfdf;
    padding: 0px;
    /*box-shadow: 5px 10px #dfdfdf;*/
}
.card img{transform: scale(0.97);
    transition: 0.2s;}
.card img:hover{transform: scale(1.001);
    transition: 0.2s;}

</style>


</head>
<body>

<center>
<div class="container-fluid" style="max-width:90%;">
        <h1 class="title-1 mt-5">Promotions</h1>
        <h1 class="title-2 mb-5">Please Select a Special Promotion</h1>
  
        <div class="row" style="margin-top:1.5%; margin-bottom:1%;">
             
        <?php foreach ($my as $aj) {?>
        
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 85%;">
                        <h1 style="color: #ac0300;font-size: 22px;font-weight:bold;margin-top:10%;margin-bottom:10%;"><?php echo $aj['title']?></h1>
                        <center><img class="card-img-top img-fluid" src="admin/<?php echo $aj['img']?>" alt="Card image cap" style="height: 300px;
                        width:99%;">
                        <h1 style="font-size: 22px;font-weight:bold;margin-top: 10px;"><?php echo $aj['month']?></h1>
                        <h1 style="color: #ac0300;font-size: 22px;font-weight:bold;margin-top: 10px;"><?php echo $aj['price']?></h1>
                        
                        <h1 style=" font-size:18px; margin-top:10px; margin-bottom: 5%"><?php echo $aj['text']?></h1>
                       
                        <?php if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true) { ?>
                        
                            <a href="promotion?ajjd=<?php echo $aj['id']?>" class="btn btn-primary btn-2" >Select</a></center>
                        
                        <?php } else{ ?>

                            <a target="_blank" href="signin"  type="submit" name="text" class="btn btn-primary btn-2">Done</a>
                         
                        <?php }?>


                        </div>
                </div>
      <?php }?>
                <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 85%;border-top-left-radius: 20px;border-top-right-radius: 20px;">
                        <h1 style="font-family:math;color: #ac0300;font-size: 22px;font-weight:bold;margin-top: 20px;">Special Promotion (Plan-2)</h1>
                        <center><img class="card-img-top img-fluid" src="img/squatting.jpg" alt="Card image cap" style="height: 300px;
                        width:99%;">
                        <h1 style="font-family:math;font-size: 22px;font-weight:bold;margin-top: 10px;">3 Months</h1>
                        <h1 style="font-family:math;color: #ac0300;font-size: 22px;font-weight:bold;margin-top: 10px;">Price: 3300 Baht</h1>
                        
                        <h1 style="font-family:math; font-size:20px; font-weight:bold; margin-top:10px;">Applicable To all Fitness Activity</h1>
                        <button class="btn-2" data-toggle="modal" data-target="#myModal">Select</button></center>
                        
                        </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 85%;border-top-left-radius: 20px;border-top-right-radius: 20px;">
                        <h1 style="font-family:math;color: #ac0300;font-size: 22px;font-weight:bold;margin-top: 20px;">Special Promotion (Plan-3)</h1>
                        <center><img class="card-img-top img-fluid" src="img/Gym Photo 2.jpg" alt="Card image cap" style="height: 300px;
                        width:99%;">
                         <h1 style="font-family:math;font-size: 22px;font-weight:bold;margin-top: 10px;">6 Months</h1>
                        <h1 style="font-family:math;color: #ac0300;font-size: 22px;font-weight:bold;margin-top: 10px;">Price: 6000 Baht</h1>
                        
                        <h1 style="font-family:math; font-size:20px; font-weight:bold; margin-top:10px;">Applicable To all Fitness Activity</h1>
                        <button class="btn-2" data-toggle="modal" data-target="#myModal" >Select</button></center>
                        
                        </div>
                </div> -->

                
                
        </div>

        <h1 class="title-2 mt-5 mb-5">Please Select a Student Promotion</h1>
  
  <div class="row" style="margin-top:1.5%; margin-bottom:1%;">

  <?php foreach ($my2 as $aj2) {?>

          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="card" style="width: 85%;">
                  <h1 style="color: #ac0300;font-size: 22px;font-weight:bold;margin-top:10%;margin-bottom:10%;"><?php echo $aj2['title']?></h1>
                  <center><img class="card-img-top img-fluid" src="admin/<?php echo $aj2['img']?>" alt="Card image cap" style="height: 300px;
                  width:99%;">
                  <h1 style="font-size: 22px;font-weight:bold;margin-top: 10px;"><?php echo $aj2['month']?></h1>
                  <h1 style="color: #ac0300;font-size: 22px;font-weight:bold;margin-top: 10px;"><?php echo $aj2['price']?></h1>
                  
                  <h1 style="font-size:18px; margin-top:10px; margin-bottom: 5%"><?php echo $aj2['text']?></h1>
                  <a href="promotion?ajjd=<?php echo $aj2['id']?>" class="btn btn-primary btn-2" >Select</a></center>
                  
                  </div>
          </div>

  <?php }?>
          <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="card" style="width: 85%;border-top-left-radius: 20px;border-top-right-radius: 20px;">
                  <h1 style="font-family:math;color: #ac0300;font-size: 22px;font-weight:bold;margin-top: 20px;">Student Promotion (Plan-2)</h1>
                  <center><img class="card-img-top img-fluid" src="img/squatting.jpg" alt="Card image cap" style="height: 300px;
                  width:99%;">
                  <h1 style="font-family:math;font-size: 22px;font-weight:bold;margin-top: 10px;">3 Months</h1>
                  <h1 style="font-family:math;color: #ac0300;font-size: 22px;font-weight:bold;margin-top: 10px;">Price: 3000 Baht</h1>
                  
                  <h1 style="font-family:math; font-size:20px; font-weight:bold; margin-top:10px;">Applicable To all Fitness Activity</h1>
                  <button class="btn-2" data-toggle="modal" data-target="#myModal">Select</button></center>
                  
                  </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="card" style="width: 85%;border-top-left-radius: 20px;border-top-right-radius: 20px;">
                  <h1 style="font-family:math;color: #ac0300;font-size: 22px;font-weight:bold;margin-top: 20px;">Student Promotion (Plan-3)</h1>
                  <center><img class="card-img-top img-fluid" src="img/Gym Photo 2.jpg" alt="Card image cap" style="height: 300px;
                  width:99%;">
                   <h1 style="font-family:math;font-size: 22px;font-weight:bold;margin-top: 10px;">6 Months</h1>
                  <h1 style="font-family:math;color: #ac0300;font-size: 22px;font-weight:bold;margin-top: 10px;">Price: 6000 Baht</h1>
                  
                  <h1 style="font-family:math; font-size:20px; font-weight:bold; margin-top:10px;">Applicable To all Fitness Activity</h1>
                  <button class="btn-2" data-toggle="modal" data-target="#myModal" >Select</button></center>
                  
                  </div>
          </div> -->

          
          
  </div>

  <h1 class="title-2 mt-5 mb-5">Please Select a Senior Promotion</h1>
  
  <div class="row" style="margin-top:1.5%; margin-bottom:5%;">

    <?php foreach ($my3 as $lk) {?>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="card" style="width: 85%;">
                  <h1 style="color: #ac0300;font-size: 22px;font-weight:bold;margin-top:10%;margin-bottom:10%;"><?php echo $lk['title']?></h1>
                  <center><img class="card-img-top img-fluid" src="admin/<?php echo $lk['img']?>" alt="Card image cap" style="height: 300px;
                  width:99%;">
                  <h1 style="font-size: 22px;font-weight:bold;margin-top: 10px;"><?php echo $lk['month']?></h1>
                  <h1 style="color: #ac0300;font-size: 22px;font-weight:bold;margin-top: 10px;"><?php echo $lk['price']?></h1>
                  
                  <h1 style="font-size:18px; margin-top:10px; margin-bottom: 5%"><?php echo $lk['text']?></h1>
                  <a href="promotion?ajjd=<?php echo $lk['id']?>" class="btn btn-primary btn-2">Select</a></center>
                  
                  </div>
          </div>
    <?php }?>
          <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="card" style="width: 85%;border-top-left-radius: 20px;border-top-right-radius: 20px;">
                  <h1 style="font-family:math;color: #ac0300;font-size: 22px;font-weight:bold;margin-top: 20px;">Senior Promotion (Plan-2)</h1>
                  <center><img class="card-img-top img-fluid" src="img/squatting.jpg" alt="Card image cap" style="height: 300px;
                  width:99%;">
                  <h1 style="font-family:math;font-size: 22px;font-weight:bold;margin-top: 10px;">3 Months</h1>
                  <h1 style="font-family:math;color: #ac0300;font-size: 22px;font-weight:bold;margin-top: 10px;">Price: 3300 Baht</h1>
                  
                  <h1 style="font-family:math; font-size:20px; font-weight:bold; margin-top:10px;">Applicable To all Fitness Activity</h1>
                  <button class="btn-2" data-toggle="modal" data-target="#myModal">Select</button></center>
                  
                  </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="card" style="width: 85%;border-top-left-radius: 20px;border-top-right-radius: 20px;">
                  <h1 style="font-family:math;color: #ac0300;font-size: 22px;font-weight:bold;margin-top: 20px;">Senior Promotion (Plan-3)</h1>
                  <center><img class="card-img-top img-fluid" src="img/Gym Photo 2.jpg" alt="Card image cap" style="height: 300px;
                  width:99%;">
                   <h1 style="font-family:math;font-size: 22px;font-weight:bold;margin-top: 10px;">6 Months</h1>
                  <h1 style="font-family:math;color: #ac0300;font-size: 22px;font-weight:bold;margin-top: 10px;">Price: 6000 Baht</h1>
                  
                  <h1 style="font-family:math; font-size:20px; font-weight:bold; margin-top:10px;">Applicable To all Fitness Activity</h1>
                  <button class="btn-2" data-toggle="modal" data-target="#myModal" >Select</button></center>
                  
                  </div>
          </div> -->

          
          
  </div>

  </div>
    </center>

<!-- Main End -->

<style>
.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 150%;
    right: 150px;
    top: 176px;
    color: var(--bs-modal-color);
    pointer-events: auto;
    background-color: var(--bs-modal-bg);
    background-clip: padding-box;
    border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
    border-radius: var(--bs-modal-border-radius);
    outline: 0;
}
.form-control:focus {
    color: #212529;
    background-color: #fff;
    border-color: #d93846;
    outline: 0;
    box-shadow: none;
}
.members{    font-size: 17px;
    /*font-family: math;*/
    color: #41464b;
    font-weight: 600;     }
.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 17px;
    font-weight: 500;
    line-height: 1.5;
    color: #0e0e0e;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.375rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

</style>

 <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title" style=" color:darkred; font-weight:700;">Special Promotion (Plan-2)</h4>
          <button type="button" class="close" data-dismiss="modal" style="background: none;color: darkred;font-weight: bolder;border: none;font-size: 24px;">&times;</button>
        </div>
        <div class="modal-body" >
            <center><h3 style=" font-weight:700;">Payment</h3>
            <h4 class="modal-title" style=" color:darkred; font-weight:700;">Price: 3300 Baht</h4>
            </center>

            <form method="POST" class="members">
              <div class="row">
                <div class="form-group col-md-6 " style="margin-top: 5px;color: #ac0300 !important">
                  <label for="name" style="color: red !important">Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
                </div>
                
                <div class="form-group col-md-6 mt-5 mb-5" style="margin-top: 5px;color: #ac0300">
                <label for="name">Surname</label>
                <input type="text" class="form-control" name="number" id="subject" placeholder="Enter Surname" required>
                </div>

                <div class="form-group col-md-6"style="margin-top: 15px;color: #ac0300">
                  <label for="name">Card Number</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter Card Number" required>
                </div>
              
             
              <div class="form-group col-md-3"style="margin-top: 15px;color: #ac0300">
                <label for="name" style="color: #ac0300 !important">CVV</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter CVV" required>
              </div>

              <div class="form-group col-md-3"style="margin-top: 15px;color: #ac0300">
                <label for="name">Exp Date</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Exp Date" required>
              </div>

              <div class="form-group col-md-12"style="margin-top: 15px;color: #ac0300">
                <label for="name" style="color: #ac0300">Billing Address</label>
                <textarea class="form-control" name="message" rows="3"  placeholder="Enter Billing Address" required></textarea>
              </div>

                <div class="form-group col-md-6" style="margin-top: 15px;color: #ac0300">
                     <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:left; width:100px;">Close</button>
                </div>
                <div class="form-group col-md-6" style="margin-top: 15px;color: #ac0300">
                     <button type="submit" class="btn btn-primary" style="float:right; width:100px;">Pay</button>
                </div>
              
            </form>


            
        </div>
       
      </div>
      
    </div>
  </div>
</div>

<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>


<?php include "footer.php"?>
