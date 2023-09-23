<?php session_start();
error_reporting(0);
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
   <title>Admin | Membership List</title>
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
            <center><h3>Membership List</h3><hr></center>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <!-- <th class="text-center" style="vertical-align:middle;">Sr.No</th> -->
                    <th class="text-center" style="vertical-align:middle;">Name</th>
                    <th class="text-center">Email Address</th>
                    <th class="text-center" style="vertical-align:middle;">Card Number</th>
                    <th class="text-center" style="vertical-align:middle;">CVV	</th>
                    <th class="text-center" style="vertical-align:middle;">Exp Date </th>
                   
                    <th class="text-center" style="vertical-align:middle;">Membership</th>
                    <th class="text-center" style="vertical-align:middle;">Price</th>
                    <th class="text-center" style="vertical-align:middle;">Payment</th>
                    <!-- <th class="text-center" style="vertical-align:middle;">Payment</th> -->
                    <th class="text-center" style="vertical-align:middle;">Action</th>
                    
                  </tr>
                </thead>
                  <?php
                  $sql="SELECT * FROM usignup ORDER BY id DESC";
                  $result= mysqli_query($con,$sql);
                  //   $query= $dbh->prepare($sql);
                //   $query-> execute();
                //   $results = $query -> fetchAll(PDO::FETCH_OBJ);
                // $cnt=1;
                //   if($query -> rowCount() > 0)
                //   {
                 
                   
                  ?>

                <tbody>
                  <?php  foreach ($result as $s ) {?>
                  <tr>
                    
            
                    <td class="text-center" style="vertical-align:middle;"><?php echo $s['name'] ;?> </td>
                    <td class="text-center" style="vertical-align:middle;"><?php echo $s['email'] ;?> </td>
                    <td class="text-center" style="vertical-align:middle;"><?php echo $s['card'] ;?> </td>
                    <td class="text-center" style="vertical-align:middle;"><?php echo $s['cvv'] ;?> </td>
                    <td class="text-center" style="vertical-align:middle;"><?php echo $s['exp'] ;?> </td>
                    
                    <td class="text-center" style="vertical-align:middle;"><?php echo $s['member'] ;?> </td>
                    <td class="text-center" style="vertical-align:middle;"> <?php echo $s['memberpay']?></td>

                    <td class="text-center" style="vertical-align:middle;"><?php echo $s['memberpaid'] ;?> </td>
                    <td class="text-center" style="vertical-align:middle;"><a href="memberdiet?id=<?php echo $s['id'] ;?>"><i class="fa fa-edit" style="color:red; font-size:17px;" aria-hidden="true"></i></a> </td>
                    
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
<?php } ?>
