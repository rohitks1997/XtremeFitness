<?php session_start();
// error_reporting(0);
include  'include/config.php'; 
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{

// if(isset($_POST['submit'])){
// $category = $_POST['category'];
// $sql="INSERT INTO tblcategory (category_name) Values(:category)";
// $query = $dbh -> prepare($sql);
// $query->bindParam(':category',$category,PDO::PARAM_STR);
// $query -> execute();
// $lastInsertId = $dbh->lastInsertId();
// if($lastInsertId>0)
// {
// $msg= "Category Add Successfully";
//  }
// else {

// $errormsg= "Data not insert successfully";
//  }
// }

//Delete Record Data

// if(isset($_REQUEST['del']))
// {
// $uid=intval($_GET['del']);
// $sql = "delete from tblcategory WHERE  id=:id";
// $query = $dbh->prepare($sql);
// $query-> bindParam(':id',$uid, PDO::PARAM_STR);
// $query -> execute();
// echo "<script>alert('Record Delete successfully');</script>";
// echo "<script>window.location.href='add-category.php'</script>";
// }
$run1= "SELECT * FROM `member_pro` WHERE `uploadin`= 'Membership'";
$data=mysqli_query($con,$run1);
$count="1";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a">
   <title>Admin | MemberShip</title>
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
    <?php include 'include/sidebar.php'; ?>
    <main class="app-content">
     <!-- <h3>MemberShip</h3> -->
     <hr />

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
        
        <!-- <div class="col-md-12">
          <div class="tile">
          <center>  <h3 class="tile-title">Promotion</h3>
        
          <div class="tile-body">
           
            </div>
          </div>
        </div> -->
        <div class="col-md-12">
           
          <div class="tile"><h3 class="tile-title">MemberShips	  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal1" style="float:right;">Add MemberShip</button></h3>
          <hr>
          <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th class="text-center">Sr. No</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Title</th>
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
                    <td class="text-center" style="vertical-align: middle;"><img  style="width: 80px;height: 90px;" src="<?php echo $k['img']?>" alt=""> </td>
                    <td style="vertical-align: middle;"><?php echo $k['title']?> </td>
                    <td class="text-center" style="vertical-align: middle;"><?php echo $k['price']?> </td>
                   
                    <td style="vertical-align: middle;"><?php echo $k['text']?> </td>
                    

                    <td class="text-center" style="vertical-align: middle;"><a href="updemship.php?id=<?php echo $k['id']?>" ><i class="fa fa-edit" style="color:black; font-size:17px;" aria-hidden="true"></i></a> </td>
                    <td class="text-center" style="vertical-align: middle;"><a href="drop?dropmemb=<?php echo $k['id']?>"><i class="fa fa-trash" style="color:red; font-size:17px;" aria-hidden="true"></i></a> </td>
                  </tr>
                  <?php }?>
              
                </tbody>
              </table>


            
            <div class="tile-body">
       
          







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
        <h4 class="modal-title">Add Membership</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6"><input type="text" name="titlesp" class="form-control fahad" placeholder="Enter Title"></div>
         
        <!-- <div class="col-md-6"><input type="text" name="Monthsp" class="form-control" placeholder="Enter Month"></div> -->
          <div class="col-md-6"><input type="text" name="pricesp" class="form-control fahad" placeholder="Enter Price"></div>
          <div class="col-md-6"><textarea name="textsp" id="" rows="1" class="form-control fahad" placeholder="Enter Description"></textarea></div> 
          <div class="col-md-6"><input type="file" name="imgsp" class="form-control fahad" style="padding: 5.5px 10px;" ></div>
          <div class="col-md-6">
            <button class="btn btn-primary" type="submit" name="red" style="float:left; margin-top:10px;">Add</button>
          </div>
      
     
      </form>
      <!-- Modal footer -->
      <div class="col-md-6">
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right; margin-top:10px;">Close</button>
      </div>

<?php 
if(Isset($_POST['red'])){?>
<?php
 $titlesp=$_POST['titlesp'];

//  $Monthsp=$_POST['Monthsp'];
 $pricesp=$_POST['pricesp'];
 $textsp=$_POST['textsp'];

 $imgsp = $_FILES['imgsp'];
 $imgname = $_FILES['imgsp']['name'];
 $src = $_FILES['imgsp']['tmp_name'];
       $desp = "special/" . $imgname;
       move_uploaded_file($src, $desp);

       $run="INSERT INTO `member_pro`( `title`, `img`,  `price`, `text`, `uploadin`) VALUES ('$titlesp','$desp','$pricesp','$textsp','Membership')";

$data= mysqli_query($con,$run);
 if ($data= true) {
    echo'<script>

    alert("Data Has Been Inserted !");
  
  </script>';
echo '<script>

  window.open("member.php", "_self");


</script>'  ;
 }}
?>

    </div>
  </div>
</div>


<!-- Update Membership -->
<div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content" style="top:220px!important;">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Membership</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6"><input type="text" name="titlesp" class="form-control fahad" placeholder="Enter Title"></div>
         
        <!-- <div class="col-md-6"><input type="text" name="Monthsp" class="form-control" placeholder="Enter Month"></div> -->
          <div class="col-md-6"><input type="text" name="pricesp" class="form-control fahad" placeholder="Enter Price"></div>
          <div class="col-md-6"><textarea name="textsp" id="" rows="1" class="form-control fahad" placeholder="Enter Description"></textarea></div> 
          <div class="col-md-6"><input type="file" name="imgsp" class="form-control fahad" style="padding: 5.5px 10px;" ></div>
          <div class="col-md-6">
            <button class="btn btn-primary" type="submit" name="red" style="float:left; margin-top:10px;">Update</button>
          </div>
      
     
      </form>
      <!-- Modal footer -->
      <div class="col-md-6">
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right; margin-top:10px;">Close</button>
      </div>



    </div>
  </div>
</div>

<!-- Update Membership end -->

            </div>
          </div>
        </div>
        </div>
      </div>
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
<?php }?>