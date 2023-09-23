<?php  session_start();
error_reporting(0);
include  'include/config.php'; 
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
?>


<style>
.widget-small.info.coloured-icon .icon {
    background-color: #aa100b!important;
    color: white!important;
}
.page-item.active .page-link {
    z-index: 1;
    color: #FFF!important;
    background-color: #fd3b35 !important;
    border-color: #f93e38 !important;
}


</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Admin | Dashboard</title>
    <link href="XtremeFitnessLogo.png" rel="icon">
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
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#" style="color: #aa100b!important">Dashboard</a></li>
        </ul>
      </div>

<?php 
 $abid="SELECT * FROM `usignup`";
 $asif=mysqli_query($con, $abid);
 $enemy=mysqli_num_rows($asif);

 $hasnain="SELECT * FROM `contact`";
 $fahad=mysqli_query($con, $hasnain);
 $friend=mysqli_num_rows($fahad);
 

?>

      <div class="row">
          
        <div class="col-md-6 col-lg-6 col-md-12 col-sm-12">
          
        <a href="users.php">  
          <div class="widget-small info coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h3 style="float:left;">Total Users</h3>
              <h3 style="float:right; color:#ca0600;"><?php echo $enemy?></h3>
            </div>
          </div>
        </a>
            
        </div>

        <div class="col-md-6 col-lg-6 col-md-12 col-sm-12">
          
          <a href="uqueries.php">  
            <div class="widget-small info coloured-icon"><i class="icon fa fa-id-card-o fa-3x"></i>
              <div class="info">
                <h3 style="float:left;">Users Queries</h3>
                <h3 style="float:right; color:#ca0600;"><?php echo $friend?></h3>
              </div>
            </div>
          </a>
            
        </div>
</div>
<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <center><h3>New Users</h3><hr></center>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th class="text-center">Sr.No</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Phone No</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">View</th>
                    <th class="text-center">Delete</th>
                    
                  </tr>
                </thead>
                  <?php
                  $sql="SELECT * FROM `usignup` ORDER BY id DESC Limit 8";
                  $result= mysqli_query($con,$sql);
                  //   $query= $dbh->prepare($sql);
                //   $query-> execute();
                //   $results = $query -> fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                //   if($query -> rowCount() > 0)
                //   {
                 
                   
                  ?>

                <tbody>
                  <?php  foreach ($result as $s ) {?>
                  <tr>
                    <td class="text-center"><?php echo $cnt++;?></td>
                    <td><?php echo $s['name'] ;?> </td>
                    <td class="text-center"><?php echo $s['phone'] ;?> </td>
                    <td><?php echo $s['email'] ;?> </td>
                    <td class="text-center"><?php echo $s['gender'] ;?> </td>
                    

                    <td class="text-center"><a href="uprofile?id=<?php echo $s['id'] ;?>"><i class="fa fa-eye" style="color:black; font-size:17px;" aria-hidden="true"></i></a> </td>
                    <td class="text-center"><a href="drop.php?id=<?php echo $s['id'] ;?>"><i class="fa fa-trash" style="color:red; font-size:17px;" aria-hidden="true"></i></a> </td>
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
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    
  </body>
</html>
<?php } ?>