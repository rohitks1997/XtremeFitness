<?php

 session_start();
error_reporting(0);
include  'include/config.php'; 
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
?>

<style>
.btn-primary {
    color: #aa100b!important;
    background: #FFF!important;
    border:1px solid  #a7150f !important;
    transition:0.5s!important;
}
.btn-primary:hover {
    color: #FFF!important;
    background-color: #aa100b!important;
    border-color:1px solid  #a7150f !important;
    transition:0.5s!important;
}

</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a">
   <title>Admin | Exercise View</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
   <?php include 'include/header.php'; ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include 'include/sidebar.php'; 

 $id=$_GET['id'];
$run1= "SELECT * FROM `exercise` WHERE `id`= $id";
$data=mysqli_query($con,$run1);
$p=mysqli_fetch_assoc($data);
$run2= "SELECT * FROM `exercise_time` WHERE `exercise_id`= $id";
$data2=mysqli_query($con,$run2);
$run3= "SELECT * FROM `trainer` WHERE `exercise_id`= $id";
$data3=mysqli_query($con,$run3);
$run4= "SELECT * FROM `intensity` WHERE `exercise_id`= $id";
$data4=mysqli_query($con,$run4);
$count="1";
$count2="1";
$count3="1";
// $p2=mysqli_fetch_assoc($data2);
    ?>
    <main class="app-content">
     

    <div class="row">
        
        <div class="col-md-12">
          <div class="tile">
          <center>  <h3 class="tile-title"><?php echo $p['name'];?></h3>
        <img src="<?php echo $p['img'];?>" alt="" style="width: 245px;"> </center>  
          <div class="tile-body" style="    margin-top: 20px;margin-bottom: 10px;font-size: 17px;">
            <b>Desciptions:</b><?php echo  $p['text'];?>
            </div>
          </div>
        </div>
<div class="col-md-4">
           
          <div class="tile"><h3 class="tile-title">  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Add Trainers</button></h3>
            <a href=""></a>
          
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Trainers Name
</th>
      <th scope="col"></th>
      <!-- <th scope="col">Handle</th> -->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data3 as $k){ ?>
      
   
    <tr>
      <th scope="row"><?php echo$count++;?></th>
      <td><?php echo $k['name']?></td>
      <td><a href="dropex.php?idt=<?php echo $k['id']?>"><i class="fa fa-trash" style="float:right; color:red; font-size:17px;"></i></a></td>
   
    </tr>
   <?php };?>
  </tbody>
</table>

<div class="tile-body">
       
          








          
          <div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content" style="top:50px;">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Trainer</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>



<!-- Modal body -->
<div class="modal-body">
            <form method="post">
         
              <input type="text" name="addt" class="form-control" placeholder="Trainer Name"><br>
          <div class=row>
            <div class="col-md-6">
              <button class="btn btn-primary" type="submit" name="red" style="float:left;">Add</button>
            </div>
            </form>
            <div class="col-md-6">
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right;">Close</button>
            </div>
          </div>
        </div>

        <!-- Modal footer -->
      
     
    </div>
  </div>
</div>

<?php 
if(Isset($_POST['red'])){?>
<?php
 $addt=$_POST['addt'];

 $run="INSERT INTO `trainer`(`name`, `exercise_id`) VALUES ('$addt','$id')";
$data= mysqli_query($con,$run);
 if ($data= true) {
    echo'<script>

    alert("Data inserted sucessfully !");
  
  </script>';
echo '<script>

  window.open("exercise.php?id='.$id.'", "_self");


</script>'  ;
 }}
?>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="tile">
          <h3 class="tile-title">          <button class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Add Intensity</button>
</h3> 
          <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"> Intensity
</th>
      <th scope="col"></th>
      <!-- <th scope="col">Handle</th> -->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data4 as $k){ ?>
      
   
    <tr>
      <th scope="row"><?php echo$count2++;?></th>
      <td><?php echo $k['added']?></td>
      <td><a href="dropex.php?idi=<?php echo $k['id']?>"><i class="fa fa-trash" style="float:right; color:red; font-size:17px;"></i></a>
        
   
    </tr>
   <?php };?>
  </tbody>
</table>
          

<div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content" style="top:50px;">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Intensity</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

<!-- Modal body -->
<div class="modal-body">
            <form method="post">
         
              <input type="text" name="addw" class="form-control" placeholder="Intensity"><br>
          <div class=row>
            <div class="col-md-6">
              <button class="btn btn-primary" type="submit" name="bbb" style="float:left;">Add</button>
            </div>
            </form>
            <div class="col-md-6">
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right;">Close</button>
            </div>
          </div>
        </div>

        <!-- Modal footer -->


           

    </div>
  </div>
</div>

<?php 
if(Isset($_POST['bbb'])){?>
<?php
 $addw=$_POST['addw'];

 $run="INSERT INTO `intensity`(`added`, `exercise_id`) VALUES ('$addw','$id')";
$data= mysqli_query($con,$run);
 if ($data= true) {
    echo'<script>

    alert("Data Inserted Successfully !");
  
  </script>';
echo '<script>

  window.open("exercise.php?id='.$id.'", "_self");


</script>'  ;
 }}
?>
          <div class="tile-body">
            
            </div>
          </div>
        </div>
         <div class="col-md-4">
          <div class="tile">
          <h3 class="tile-title">  
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Schedule</button>
          </h3>
            <div class="tile-body">
              <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content" style="top:50px;">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Time Schedule </h4>
          <button type="button" class="close" data-dismiss="modal" style="outline:none;">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form method="post">
         
              <input type="text" name="add" class="form-control" placeholder="Time Schedule"><br>
          <div class=row>
            <div class="col-md-6">
              <button class="btn btn-primary" type="submit" name="ad" style="float:left;">Add</button>
            </div>
            </form>
            <div class="col-md-6">
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right;">Close</button>
            </div>
          </div>
        </div>

        <!-- Modal footer -->
        
        
      </div>
    </div>
  </div>
  
</div>

              <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Time Schedule
</th>
      <th scope="col"></th>
      <!-- <th scope="col">Handle</th> -->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data2 as $k){ ?>
      
   
    <tr>
      <th scope="row"><?php echo$count3++;?></th>
      <td><?php echo $k['dtime']?></td>
      <td><a href="dropex.php?ids=<?php echo $k['id']?>"><i class="fa fa-trash" style="float:right; color:red; font-size:17px;"></i></a>
   
    </tr>
   <?php };?>
  </tbody>
</table>
            </div>
          </div>
        </div>

         <!-- <div class="col-md-6">
          <div class="tile">
          <h3 class="tile-title"><?php #echo $p['name'];?></h3>
            
            </div>
          </div> -->
        </div>
        
      </div>
      </div>
      <?php 
if(Isset($_POST['ad'])){?>
<?php
 $add=$_POST['add'];

 $run="INSERT INTO `exercise_time`( `dtime`, `exercise_id`) VALUES ('$add','$id')";
$data= mysqli_query($con,$run);
 if ($data= true) {
    echo'<script>

    alert("Data Inserted Successfully !");
  
  </script>';
echo '<script>

  window.open("exercise.php?id='.$id.'", "_self");


</script>'  ;
 }
?>
      <!--  <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                     <th>Sr.No</th>
        <th hidden>bookingid</th>
        <th>Name</th>
        <th>email</th>
        <th>bookingdate</th>
        <th hidden>title</th>
        <th>PackageDuratiobn</th>
        <th>price</th>
        <th hidden>Description</th>
        <th>category_name</th>
        <th>PackageName</th>
        
                    
                  </tr>
                </thead>
               

                <tbody>
                 
              
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> -->
      <?php }?>
    </main>
    <!-- Essential javascripts for application to work-->
     <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>
<?php } ?>