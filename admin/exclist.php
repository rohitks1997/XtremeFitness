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
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a">
   <title>Admin | Excercies List</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <style>
      .page-item.active .page-link {
            z-index: 1;
            color: #FFF!important;
            background-color: #fd3b35 !important;
            border-color: #f93e38 !important;
        }
    </style>
  
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
   <?php include 'include/header.php'; ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include 'include/sidebar.php'; ?>
    <main class="app-content">
    
     
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <center><h3>Exercise & Fitness Activity</h3></center><hr>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                  
                    <th class="text-center" style="vertical-align: middle;">Image</th>
                    <th class="text-center" style="vertical-align: middle;">Name</th>
                    <th class="text-center" style="vertical-align: middle;">Description</th>
                    <!-- <th class="text-center">Trainer Name</th> -->
                    <!-- <th class="text-center">Intensity</th> -->
                    
                    <!-- <th class="text-center">Catagorey</th> -->
                    <!-- <th class="text-center">Time</th> -->
                    <th class="text-center" style="vertical-align: middle;">View</th>
                    <th class="text-center" style="vertical-align: middle;">Update</th>
                    <!-- <th class="text-center">Delete</th> -->
                    
                  </tr>
                </thead>
                  <?php
                  $run1= "SELECT * FROM `exercise`";
                  $data=mysqli_query($con,$run1);
                  $p=mysqli_fetch_assoc($data);
                  // $run2= "SELECT * FROM `exercise_time`";
                  // $data2=mysqli_query($con,$run2);
                  // $mn=mysqli_fetch_assoc($data2);
                  // $run3= "SELECT * FROM `trainer`";
                  // $data3=mysqli_query($con,$run3);
                  // $gp=mysqli_fetch_assoc($data3);
                  // $run4= "SELECT * FROM `intensity`";
                  // $data4=mysqli_query($con,$run4);
                  // $sps=mysqli_fetch_assoc($data4);
                 
           
                //   {
                  
                   
                  ?>


                
              <tr>
                <?php foreach ($data as $p ) {?>
                <td class="text-center" >
                    <img src="<?php echo $p['img'] ;?>" style="width:100px; height:100px;" alt="">
                </td>
             
               
                <td class="text-center" style="vertical-align: middle;">
                    <?php echo $p['name'] ;?>
                </td>
             

                <td style="text-align:justify;vertical-align: middle;padding-bottom: 0px;">
                      <?php echo $p['text'] ;?>
                </td>

                <td class="text-center" style="vertical-align: middle;">
                 
                        <a href="exerciseview?id=<?php echo $p['id'] ;?>"><i class="fa fa-eye" style="color:black; font-size:17px;" aria-hidden="true"></i></a> 
                 
                    
                 

                <td class="text-center" style="vertical-align: middle;">
                  
                        <a href="updexc?id=<?php echo $p['id'] ;?>"><i class="fa fa-edit" style="color:blue; font-size:17px;" aria-hidden="true"></i></a> 
                 
                    
                
                   
                  </tr>
                <?php }?>
              
                </tbody>
              </table>
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
