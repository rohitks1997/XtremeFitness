<?php session_start();
error_reporting(0);
include  'include/config.php'; 
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
    $id=$_GET['id'];

    $run1= "SELECT * FROM `member_pro` WHERE `id`= $id";
    $data=mysqli_query($con,$run1);
$meme=mysqli_fetch_assoc($data);





?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a">
   <title>Admin | Update Membership</title>
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
     
<style>
  .tile .tile-title {
    margin-top: 5px;
    margin-bottom: 25px;
    font-size: 30px;
}
.tox-tinymce{height: 240px!important;}
.form-control:focus{box-shadow:none!important;}
</style>

    <div class="row">
        
        <div class="col-md-12">
          <div class="tile">
             <!---Success Message--->  
          
          <!---Error Message--->
                      <center><h3 class="tile-title">Update Membership</h3></center>
            <div class="tile-body">
              <form class="row" method="post"  enctype="multipart/form-data">
              

              <div class="form-group col-md-6">
                  <label class="control-label">Membership Title</label>
                  <input class="form-control" type="text" name="title" id="fdate" placeholder="Enter Excercise" value="<?php echo $meme['title']?>">
              </div> 

              <div class="form-group col-md-6">
                    
                    <label class="control-label">Membership Image</label>
                   
                    <input class="form-control" type="file" name="imgsp" id="fdate" placeholder="Enter Time Shedule" value=" <?php echo $meme['img'];?>">
              </div>
              
              <div class="col-md-12" style="display: flex;justify-content: center;align-items: center;">
                <img src="<?php echo $meme['img'];?>" alt="" style="width:250px;">
                </div>
            

              <div class="form-group col-md-6">
                  <label class="control-label">Membership Price</label>
                  <input class="form-control" type="text" name="price" id="fdate" placeholder="Enter Excercise" value="<?php echo $meme['price']?>">
              </div>   

              <div class="form-group col-md-6">
                  <label class="control-label">Membership Description</label>
                  <input class="form-control" type="text" name="desc" id="fdate" placeholder="Enter Excercise" value="<?php echo $meme['text']?>">
              </div>  
                
            
                <div class="form-group col-md-6 align-self-end">
                  <input type="Submit" name="update" id="Submit" class="btn btn-primary" style="float:left;" value="Update">
                </div>
                <div class="form-group col-md-6 align-self-end">
                    <a href="member.php"  name="back" id="Submit" class="btn btn-danger"  style="float:right;">Back</a>
                </div>
                
                </div>


                
                </div>

         
              </form>



              
            </div>
          </div>
        
        
        </div>
      
      
      
      </div>


      
      </div>

      
<?php 
     if(Isset($_POST['update']))
    {
        $title=$_POST['title'];
        $price=$_POST['price'];
        $desc=$_POST['desc'];

        // $tdate= str_replace("'","\'",$tdate);

        $imgsp = $_FILES['imgsp'];
        $imgname = $_FILES['imgsp']['name'];
        $src = $_FILES['imgsp']['tmp_name'];
        $desp = "special/" . $imgname;
        move_uploaded_file($src, $desp);

        $run="UPDATE `member_pro` SET `title`='$title',`img`='$desp' , `price`='$price',`text`='$desc' Where id = $id";
        $datas= mysqli_query($con,$run);
        
        if ($datas= true) 
        {
          echo
            '<script>
                        alert("Data Has Been Updated !");
            </script>';

          echo 
            '<script>

                window.open("member.php", "_self");
            </script>';
        }
  }
?>



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


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



  </body>
</html>
<?php } ?>