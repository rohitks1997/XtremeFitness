<?php

 session_start();
error_reporting(0);
include  'include/config.php'; 
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a">
   <title>Admin | Promotion</title>
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

//  $id=$_GET['id'];
$run1= "SELECT * FROM `member_pro` WHERE `uploadin`= 'Special'";
$data=mysqli_query($con,$run1);
// $p=mysqli_fetch_assoc($data);
// $run2= "SELECT * FROM `exercise_time` WHERE `exercise_id`= $id";
// $data2=mysqli_query($con,$run2);
$run3= "SELECT * FROM `member_pro` WHERE `uploadin`= 'Senior'";
$data3=mysqli_query($con,$run3);
$run4= "SELECT * FROM `member_pro` WHERE `uploadin`= 'Student'";
$data4=mysqli_query($con,$run4);
$count="1";
$count2="1";
$count3="1";
// $p2=mysqli_fetch_assoc($data2);
    ?>
    <main class="app-content">
     
    <style>

.btn-primary {
    color: #aa100b;
    background-color: #FFF;
    border:1px solid #a7150f;
    transition:0.5s;
}
.btn-primary:hover {
  color: #FFF;
    background-color: #aa100b;
    border:1px solid #a7150f;
    transition:0.5s;
}
.page-item.active .page-link {
    z-index: 1;
    color: #FFF;
    background-color: #dd211b;
    border-color: #dd211b;
}



</style>


    <div class="row">
        
      <div class="col-md-12">
          <div class="tile">
             <center>  <h3 class="" style="padding-top: 5px;color: #e80700;">Promotions</h3>
         </div>
      </div>
      <div class="col-md-12">
        <div class="tile"><h3 class="tile-title">Special Promotions	  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal1" style="float:right;">Add Promotion</button></h3>
        <hr>
          <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th class="text-center">Sr.#</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Month</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Description</th>
                    
                    <th class="text-center">Update</th>
                    <th class="text-center">Delete</th>
                    
                  </tr>
                </thead>
                  <?php
                  $sql="SELECT * FROM usignup ORDER BY id DESC";
                  $result= mysqli_query($con,$sql);
                  //   $query= $dbh->prepare($sql);
                //   $query-> execute();
                //   $results = $query -> fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                //   if($query -> rowCount() > 0)
                //   {
                  foreach ($data as $k ) {
                   
                  ?>

                <tbody>
                  <tr>
                    <td class="text-center" style="vertical-align: middle;"><?php echo $count++;?></td>
                    <td class="text-center" style="vertical-align: middle;"><img  style="width: 100px; height:100px;" src="<?php echo $k['img']?>" alt=""> </td>
                    <td style="vertical-align: middle;"><?php echo $k['title']?> </td>
                    <td style="vertical-align: middle;"><?php echo $k['month']?> </td>
                    <td class="text-center" style="vertical-align: middle;"><?php echo $k['price']?> </td>
                   
                    <td style="vertical-align: middle;"><?php echo $k['text']?> </td>
                    

                    <td class="text-center" style="vertical-align: middle;"><a href="updprom.php?id=<?php echo $k['id']?>" ><i class="fa fa-edit" style="color:black; font-size:17px;" aria-hidden="true"></i></a> </td>
                    <td class="text-center" style="vertical-align: middle;"><a href="drop?idpro=<?php echo $k['id']?>"><i class="fa fa-trash" style="color:red; font-size:17px;" aria-hidden="true"></i></a> </td>
                  </tr>
                  <?php }?>
              
                </tbody>
            </table>
              
        </div>
    </div>

<style>
  .fahad {
    display: block;
    width: 100%;
    padding: 8px 10px;
    margin: 10px 0px;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #495057;
    background-color: #FFF;
    background-clip: padding-box;
    border: 2px solid #ced4da;
    border-radius: 4px;
    -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
.close:not(:disabled):not(.disabled) {
    cursor: pointer;
    outline: none;
}
</style>
 
<div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content" style="top:220px!important;">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Special Promotion</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data">
        <div class="row">
        
        <div class="col-md-6"><input type="text" name="titlesp" class="form-control fahad" placeholder="Enter Title"></div>
        
        <div class="col-md-6"><input type="text" name="Monthsp" class="form-control fahad" placeholder="Enter Month"></div>
        <div class="col-md-6"><input type="text" name="pricesp" class="form-control fahad" placeholder="Enter Price"></div>
        <div class="col-md-6"><input type="file" name="imgsp" class="form-control fahad" ></div>
        <div class="col-md-12"><textarea name="textsp" id="" class="form-control fahad"></textarea></div> 
      <div class="col-md-6">
        <button class="btn btn-primary" type="submit" name="red" style="float:left; margin-top:10px;">Add</button></div>
      </form>
      
      <div class="col-md-6">
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right; margin-top:10px;">Close</button>
      </div>
  </div>
  </div>
      <?php 
if(Isset($_POST['red'])){?>
<?php
 $titlesp=$_POST['titlesp'];

 $Monthsp=$_POST['Monthsp'];
 $pricesp=$_POST['pricesp'];
 $textsp=$_POST['textsp'];

 $imgsp = $_FILES['imgsp'];
 $imgname = $_FILES['imgsp']['name'];
 $src = $_FILES['imgsp']['tmp_name'];
       $desp = "special/" . $imgname;
       move_uploaded_file($src, $desp);

       $run="INSERT INTO `member_pro`( `title`, `img`, `month`, `price`, `text`, `uploadin`) VALUES ('$titlesp','$desp','$Monthsp','$pricesp','$textsp','Special')";

$data= mysqli_query($con,$run);
 if ($data= true) {
    echo'<script>

    alert("Data has been inserted!");
  
  </script>';
echo '<script>

  window.open("addpromotion.php", "_self");


</script>'  ;
 }}
?>

      <!-- Modal footer -->
      

    <!-- </div> -->
  <!-- </div> -->


            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="tile">
          <h3 class="tile-title"> Student Promotion          <button style="float:right;" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Add Promotion</button>
</h3>  <hr>
<table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th class="text-center">Sr.#</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Month</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Description</th>
                    
                    <th class="text-center">Update</th>
                    <th class="text-center">Delete</th>
                    
                  </tr>
                </thead>
                  <?php
                  $sql="SELECT * FROM usignup ORDER BY id DESC";
                  $result= mysqli_query($con,$sql);
                  //   $query= $dbh->prepare($sql);
                //   $query-> execute();
                //   $results = $query -> fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                //   if($query -> rowCount() > 0)
                //   {
                  foreach ($data4 as $k ) {
                   
                  ?>

                <tbody>
                  <tr>
                    <td class="text-center" style="vertical-align: middle;"><?php echo $cnt++;?></td>
                    <td class="text-center" style="vertical-align: middle;"><img  style="width: 100px; height:100px;" src="<?php echo $k['img']?>" alt=""> </td>
                    <td style="vertical-align: middle;"><?php echo $k['title']?> </td>
                    <td style="vertical-align: middle;"><?php echo $k['month']?> </td>
                    <td class="text-center" style="vertical-align: middle;"><?php echo $k['price']?> </td>
                   
                    <td style="vertical-align: middle;"><?php echo $k['text']?> </td>
                    <td class="text-center" style="vertical-align: middle;"><a  href="updprom.php?id=<?php echo $k['id']?>"><i class="fa fa-edit" style="color:black; font-size:17px;" aria-hidden="true"></i></a> </td>
                     </td>
                    <td class="text-center" style="vertical-align: middle;"><a href="drop.php?idpro=<?php echo $k['id']?>"><i class="fa fa-trash" style="color:red; font-size:17px;" aria-hidden="true"></i></a> </td>
                  </tr>
                  <?php }?>
              
                </tbody>
            </table>
  </tbody>
</table>
          

<div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content" style="top:220px!important;">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Student Promotion</h4>
        <button  type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data">
        <div class="row">
        
          <div class="col-md-6"><input type="text" name="titlestp" class="form-control fahad" placeholder="Enter Title"></div>
          <div class="col-md-6"><input type="text" name="Monthstp" class="form-control fahad" placeholder="Enter Month"></div>
          <div class="col-md-6"><input type="text" name="pricestp" class="form-control fahad" placeholder="Enter Price"></div>
          <div class="col-md-6"><input type="file" name="imgstp" class="form-control fahad" ></div>

          <div class="col-md-12"><textarea name="textstp" id="" class="form-control fahad"></textarea></div> 
      <div class="col-md-6">
        <button class="btn btn-primary" style="float:left; margin-top:10px;" type="submit" name="pink">Add</button></div>
      


      <!-- Modal footer -->
      <div class="col-md-6">
        <button type="button" class="btn btn-danger" style="float:right; margin-top:10px;" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div></div></div>
          <div class="tile-body">
            
            </div>
          </div>
        </div>

        </form>
      <?php 
if(Isset($_POST['pink'])){?>
<?php
 $titlestp=$_POST['titlestp'];

 $Monthstp=$_POST['Monthstp'];
 $pricestp=$_POST['pricestp'];
 $textstp=$_POST['textstp'];

 $imgstp = $_FILES['imgstp'];
 $imgname = $_FILES['imgstp']['name'];
 $src = $_FILES['imgstp']['tmp_name'];
       $destp = "special/" . $imgname;
       move_uploaded_file($src, $destp);

       $run="INSERT INTO `member_pro`( `title`, `img`, `month`, `price`, `text`, `uploadin`) VALUES ('$titlestp','$destp','$Monthstp','$pricestp','$textstp','Student')";

$data= mysqli_query($con,$run);
 if ($data= true) {
    echo'<script>

    alert("Data has been inserted !");
  
  </script>';
echo '<script>

  window.open("addpromotion.php", "_self");


</script>'  ;
 }}
?>
         <div class="col-md-12">
          <div class="tile">
          <h3 class="tile-title">   Seniors Promotion       <button style="float:right;" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Promotion</button>
</h3><hr>
            <div class="tile-body">
              <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content" style="top:250px;">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Senior Promotion
             </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
        <div class="row">
        
          <div class="col-md-6"><input type="text" name="titlest" class="form-control fahad" placeholder="Enter Title"></div>
       
        <div class="col-md-6"><input type="text" name="Monthst" class="form-control fahad" placeholder="Enter Month"></div>
        <div class="col-md-6"><input type="text" name="pricest" class="form-control fahad" placeholder="Enter Price"></div>
        <div class="col-md-6"><input type="file" name="imgst" class="form-control fahad" ></div>
      <div class="col-md-12"><textarea name="textst" id="" class="form-control fahad"></textarea></div> 
      <div class="col-md-6">
       <button class="btn btn-primary" type="submit" name="blue" style="float:left; margin-top:10px;">Add</button></div>
      </form>
      <div class="col-md-6">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right; margin-top:10px;">Close</button>
        </div>
        </div>

        <!-- Modal footer -->
        
        <?php 
if(Isset($_POST['blue'])){?>
<?php
 $titlest=$_POST['titlest'];

 $Monthst=$_POST['Monthst'];
 $pricest=$_POST['pricest'];
 $textst=$_POST['textst'];

 $imgst = $_FILES['imgst'];
 $imgname = $_FILES['imgst']['name'];
 $src = $_FILES['imgst']['tmp_name'];
       $dest = "special/" . $imgname;
       move_uploaded_file($src, $dest);

       $run="INSERT INTO `member_pro`( `title`, `img`, `month`, `price`, `text`, `uploadin`) VALUES ('$titlest','$dest','$Monthst','$pricest','$textst','Senior')";

$data= mysqli_query($con,$run);
 if ($data= true) {
    echo'<script>

    alert("Data has been inserted !");
  
  </script>';
echo '<script>

  window.open("addpromotion.php", "_self");


</script>'  ;
 }}
?>
      </div>
    </div>
  </div>
  
</div>

<table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th class="text-center">Sr.#</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Month</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Description</th>
                    
                    <th class="text-center">Update</th>
                    <th class="text-center">Delete</th>
                    
                  </tr>
                </thead>
                  <?php
                  $sql="SELECT * FROM usignup ORDER BY id DESC";
                  $result= mysqli_query($con,$sql);
                  //   $query= $dbh->prepare($sql);
                //   $query-> execute();
                //   $results = $query -> fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                //   if($query -> rowCount() > 0)
                //   {
                  foreach ($data3 as $k ) {
                   
                  ?>

                <tbody>
                  <tr>
                    <td class="text-center" style="vertical-align: middle;"><?php echo $cnt++;?></td>
                    <td class="text-center" style="vertical-align: middle;"><img  style="width: 100px; height:100px;" src="<?php echo $k['img']?>" alt=""> </td>
                    <td style="vertical-align: middle;"><?php echo $k['title']?> </td>
                    <td style="vertical-align: middle;"><?php echo $k['month']?> </td>
                    <td class="text-center" style="vertical-align: middle;"><?php echo $k['price']?> </td>
                   
                    <td style="vertical-align: middle;"><?php echo $k['text']?> </td>
                    <td class="text-center" style="vertical-align: middle;"><a  href="updprom.php?id=<?php echo $k['id']?>"><i class="fa fa-edit" style="color:black; font-size:17px;" aria-hidden="true"></i></a> </td>
                     </td>
                    <td class="text-center" style="vertical-align: middle;"><a href="drop.php?idpro=<?php echo $k['id']?>"><i class="fa fa-trash" style="color:red; font-size:17px;" aria-hidden="true"></i></a> </td>
                  </tr>
                  <?php }?>
              
                </tbody>
            </table>
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

    alert("Insert !");
  
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