<?php
// session_start();
include('head.php');

include "db.php";

$id=$_GET['id'];

$run1= "SELECT * FROM `exercise` WHERE `id`= $id";
$data=mysqli_query($con,$run1);
$p=mysqli_fetch_assoc($data);


// $run3= "SELECT * FROM `trainer` WHERE `exercise_id`= $id";
// $data3=mysqli_query($con,$run3);
// $q=mysqli_fetch_assoc($data3);

// $run4= "SELECT * FROM `intensity` WHERE `exercise_id`= $id";
// $data4=mysqli_query($con,$run4);
// $r=mysqli_fetch_assoc($data4);

// $run2= "SELECT * FROM `exercise_time` WHERE `exercise_id`= $id";
// $data2=mysqli_query($con,$run2);
// $s=mysqli_fetch_assoc($data2);



               
                    



?>
 <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
<style>

.title-1 {
    padding-top: 3%;
   
    
    /*font-family: Math;*/
    text-align: center;
    font-size: 50px;
    font-weight: 800;
}


.btn-2{background-color: rgb(255, 0, 0);
    /* margin-top: 30px; */
    color: white;
    border-radius: 0;
width: 200px;
    /*font-family: math;*/
    font-size: 20px;
    font-weight: 600;
    outline: none;
    border-radius: 5px;
    padding:5px 0px;
  margin-bottom:2.5%;
  margin-top:2%;
  }

  a:hover{color:white;}



.custom
{
    background-color: #5a0604;
    color: white;
    width: 20%;
    margin: 5% auto; 
}

.custom:hover
{
    background-color:#450706;
    color: white;
    font-weight: bold;
}


</style>

 
  </head>
  <body>
  
    <div class="container-fluid" style="max-width:90%;"> 
  

        <center> 
            <h2 class="title-1 mb-5 mt-5"><?php echo $p['name']?></h2>
            <img src="admin/<?php echo $p['img']?>" class="img-fluid" alt=""style="margin-top:20px; margin-bottom:20px; width:50%; height:365px;" >
            <div class="row">

            <div class="col-md-12 py-5" style="margin-top:10px;">
            <h3 style="text-align:justify;  font-size:35px; font-weight:bold;">Description:</h3>
            <div style="text-align:justify; font-size:25px; "><?php echo  $p['text']?></div>
            </div>
           
                <?php
                $run3= "SELECT * FROM `trainer` WHERE `exercise_id`=$id";
                $data3=mysqli_query($con,$run3);
                $run31= "SELECT * FROM `intensity` WHERE `exercise_id`=$id";
                $data31=mysqli_query($con,$run31);
                $run311= "SELECT * FROM `exercise_time` WHERE `exercise_id`=$id";
                $data311=mysqli_query($con,$run311);
                
                ?>

        <div class="col-md-12 py-5" style="margin-top:10px;">
                 <h3 style="text-align:justify; font-size:35px; font-weight:Bold;">Trainers:</h3>
                        
                                <form action="">
                                <!-- <p style="text-align:Justify; font-family:math; Font-size:25px; text-indent:9%; ">Please Select an Intensity;</p> -->
                                <div class="row">
                                        <?php foreach ($data3 as $k) {
                                               
                                        ?>
                                        <div class="col-md-4">
                                                <!-- <input type="radio" id="html" name="fav_language" value="HTML"  > -->
                                             <label for="html" style="text-align:justify; font-size:25px;"><?php echo$k['name'];?></label></div>
                                     <?php }?> 
                                </div>
                                 
                                
                                 

                                </form>
                        
            </div>

                       
            
          
            
            <div class="col-md-12 py-5" style="margin-top:10px;">
                 <h3 style="text-align:justify; font-size:35px; font-weight:bold;">Intensity:</h3>
                        
                                <form method="post">
                                <p style="text-align:justify; font-size:25px;  ">Please Select an Intensity;</p>
                                <div class="row">
                                        <?php foreach ($data31 as $k) {
                                               
                                        ?>
                                        <div class="col-md-4">
                                                <input type="radio" id="html1" name="ten" value="<?php echo$k['added'];?>"  >
                                              <label for="html1" style="text-align:justify; font-size:25px;"><?php echo$k['added'];?></label></div>
                                     <?php }?> 
                                </div>
                                
                               
                                

                              
                        
            </div>

            <div class="col-md-12 py-5" >
                 <h3 style="text-align:justify; font-size:35px; font-weight:Bold;">Time:</h3>
                        
                                
                                <p style="text-align:justify; font-size:25px; text-indent:100px; ">Please Select a Time Schedule;</p>
                                <div class="row">
                                <?php foreach ($data311 as $k) {
                                               
                                               ?>
                                        <div class="col-md-4">
                                                <input  type="radio" id="html" name="time" value="<?php echo $k['dtime']?>"  >
                                               <label for="html" style="text-align:justify; font-size:25px;"><?php echo $k['dtime']?></label></div>
                                       
                                <?php }?>         
                        </div>
                              
                        <?php if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true) { ?>
                         
                          <a href=""><button type="submit" name="text" class="btn custom" >Done</button></a>
                         
                          <?php } else{ ?> 
                         
                            <a target="_blank" href="signin"  type="submit" name="text" class="btn custom">Done</a>
                         
                            <?php }?>
                         
                          </form>
                                
                                <?php
                                $idd= $_SESSION['id'];
                                if (isset($_POST['text'])) {
                                  $yoga=$p['name'];
                                  $ten=$_POST['ten'];
                                  $time=$_POST['time'];
                                 $gal= "UPDATE `usignup` SET `fitness`='$yoga',`time`='$time',`intensity`='$ten' WHERE `id` = $idd";
                                $daa=mysqli_query($con,$gal);
                                if ($daa ==true) {
                                  echo'<script>

  alert("Your Excercise & Activity has been Updated !");

</script>';
echo '<script>

  window.open("membership?id='.$idd.'", "_self");


</script>';
                                }
                                }?>
                        
            </div>
        </center>
             
                

            
          
        
  
    
    </div>


  
    </body>
  </html>
    

<?php

include('footer.php');

?>