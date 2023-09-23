<?php session_start();
error_reporting(0);
include  'include/config.php'; 
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
    $id=$_GET['id'];

$run1= "SELECT * FROM `exercise` WHERE `id`= $id";
$data=mysqli_query($con,$run1);
$p=mysqli_fetch_assoc($data);

$run2= "SELECT * FROM `exercise_time` WHERE `exercise_id`= $id";
$data2=mysqli_query($con,$run2);
$s=mysqli_fetch_assoc($data2);

$run3= "SELECT * FROM `trainer` WHERE `exercise_id`= $id";
$data3=mysqli_query($con,$run3);
$m=mysqli_fetch_assoc($data3);

$run4= "SELECT * FROM `intensity` WHERE `exercise_id`= $id";
$data4=mysqli_query($con,$run4);
$n=mysqli_fetch_assoc($data4);

$count="1";
$count2="1";
$count3="1";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a">
   <title>Admin | Update Exercise</title>
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
.tox-tinymce{height: 280px!important; text-align:justify;}
.form-control:focus{box-shadow:none!important;}
</style>

    <div class="row">
        
        <div class="col-md-12">
          <div class="tile">
             <!---Success Message--->  
          
          <!---Error Message--->
                      <center><h3 class="tile-title">Exercise & Fitness Activity</h3></center>
            <div class="tile-body">
              <form class="row" method="post"  enctype="multipart/form-data">
              
                  <!-- </div> <div class="form-group col-md-6">
                  <label class="control-label">Trainer Name</label>
                  <input class="form-control" type="text" name="trainer" id="fdate" placeholder="Enter Trainer Name" value="<?php echo $m['name']?>">
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">Intensity</label>
                  <input class="form-control" type="text" name="intensity" id="fdate" placeholder="Enter Intensity" value="<?php echo $n['added']?>">
                </div> <div class="form-group col-md-6">
                  <label class="control-label">Time Shedule</label>
                  <input class="form-control" type="text" name="time" id="fdate" placeholder="Enter Time Shedule" value=" <?php echo $s['dtime'];?>">
                </div> -->
                <div class="form-group col-md-6">
                  <label class="control-label">Exercise Name</label>
                  <input class="form-control" type="text" name="excname" id="fdate" placeholder="Enter Excercise" readonly value="<?php echo $p['name']?>">
                </div> 
                
                <div class="form-group col-md-6">
                    
                  <label class="control-label">Exercise Image</label>
                 
                  <input class="form-control" type="file" name="img" id="fdate" placeholder="Enter Time Shedule" readonly value=" <?php echo $p['img'];?>">
                </div>
              

              




                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="https://cdn.tiny.cloud/1/tq0hr7verxsogwmiin273odsbrqihg80o6aew6iygm2f7hr2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        
       <script>
    tinymce.init({
      selector: '#editor',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
    });
  </script>
           
              
                <div class="form-group col-md-6">
                  <label class="control-label">Exercise Description</label>
                    <textarea name="desc" id="editor" readonly> <?php echo $p['text']?></textarea>
                </div>
                <div class="col-md-6" style="display: flex;justify-content: center;align-items: center;">
                <img src="<?php echo $p['img'];?>" alt="" style="width:60%; height:240px;">
                </div>
                <!-- <div class="form-group col-md-6 align-self-end">
                  <input type="Submit" name="update" id="Submit" class="btn btn-primary" style="float:left;" value="Update">
                </div>
                <div class="form-group col-md-6 align-self-end">
                    <a href="drop.php?idexe=<?php echo $p['id']?>" type="Submit" name="back" id="Submit" class="btn btn-danger"  style="float:right;" >Delete</a>
                </div> -->
                
                </div>


                
                </div>

  <div class="row">
      
  <div class="col-md-4">
                    <div class="tile">
                      <!-- <h3 class="tile-title" style="font-size:18px;">Update Trainer </h3>  -->
                        <table class="table">
                            <thead>
                              <tr>
                                    <center> <h3 style="font-size:18px; margin-bottom:20px;">Update Trainer</h3></center>
                               
                                
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($data3 as $k){ ?>
                              <tr>
                                
                                <td style="text-align:justify;"><input class="form-control" type="text" name="trainer" id="fdate" placeholder="Enter Trainer Name" readonly value="<?php echo $k['name']?>"></td>
                                 
                              
                              </tr>
                              
                                <?php };?>
                                  
                            </tbody>
                            
                          </table>
                          
                          <!-- <div class="row">
                              <div class="col-md-6">
                                  <button class="btn btn-primary" type="submit" name="updatetr" style="font-size:12px;">Update</button>
                              </div>
                              <div class="col-md-6"><a href="drop.php?ides1=<?php echo $k['id']?>"  style="float:right;" ><i class="fa fa-trash" style="font-size:18px; color:red!important;"></i></a></div>
                          </div>         -->

                    </div> 
           </div>

           <div class="col-md-4">
                    <div class="tile">
                      <!-- <h3 class="tile-title" style="font-size:18px;">Update Trainer </h3>  -->
                        <table class="table">
                            <thead>
                              <tr>
                                    <center> <h3 style="font-size:18px; margin-bottom:20px;">Update Intensity</h3></center>
                               
                                
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($data4 as $n){ ?>
                              <tr>
                              <td style="text-align:justify;"><input class="form-control" type="text" name="intensity" id="fdate" placeholder="Enter Intensity" readonly value="<?php echo $n['added']?>"></td>
                                 
                              
                              </tr>
                              
                                <?php };?>
                                  
                            </tbody>
                            
                          </table>
                                  
                          <!-- <div class="row">
                              <div class="col-md-6">
                                  <button class="btn btn-primary" type="submit" name="updatint" style="font-size:12px;">Update</button>
                              </div>
                              <div class="col-md-6"><a href="drop.php?ides2=<?php echo $n['id']?>"  style="float:right;" ><i class="fa fa-trash" style="font-size:18px; color:red!important;"></i></a></div>
                          </div>   -->
                            
                    </div> 
           </div>

           <div class="col-md-4">
                    <div class="tile">
                      <!-- <h3 class="tile-title" style="font-size:18px;">Update Trainer </h3>  -->
                        <table class="table">
                            <thead>
                              <tr>
                                    <center> <h3 style="font-size:18px; margin-bottom:20px;">Update Time</h3></center>
                               
                                
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($data2 as $m){ ?>
                              <tr>
                              <td style="text-align:justify;"><input class="form-control" type="text" name="time" id="fdate" placeholder="Enter Time" readonly value="<?php echo $m['dtime']?>"></td>
                                 
                              
                              </tr>
                              
                                <?php };?>
                                  
                            </tbody>
                            
                          </table>

                          <!-- <div class="row">
                              <div class="col-md-6">
                                    <button class="btn btn-primary" type="submit" name="updatetime" style="font-size:12px;">Update</button>
                              </div>
                              <div class="col-md-6"><a href="drop.php?ides3=<?php echo $m['id']?>"  style="float:right;" ><i class="fa fa-trash" style="font-size:18px; color:red!important;"></i></a></div>
                          </div>  -->
                         
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
        $excname=$_POST['excname'];
        $desc=$_POST['desc'];

        $tdate= str_replace("'","\'",$tdate);

        $img = $_FILES['img'];
        $imgname = $_FILES['img']['name'];
        $src = $_FILES['img']['tmp_name'];
        $des = "eximg/" . $imgname;
        move_uploaded_file($src, $des);

        $run="UPDATE `exercise` SET `name`='$excname',`text`='$desc',`img`='$des' Where id = $id";
        $data= mysqli_query($con,$run);
        
        if ($data= true) 
        {
          echo
            '<script>
                        alert("Data Has Been Updated !");
            </script>';

          echo 
            '<script>

                window.open("exclist.php", "_self");
            </script>';
        }
  }
?>

<?php 
     if(Isset($_POST['updatetr']))
    {
        $trainer=$_POST['trainer'];
       

        $run="UPDATE `trainer` SET `name`='$trainer' Where `exercise_id` = $id";
        $datatrain= mysqli_query($con,$run);
        
        if ($datatrain= true) 
        {
          echo
            '<script>
                        alert("Trainer Name Has Been Updated !");
            </script>';

          echo 
            '<script>

                window.open("exclist.php", "_self");
            </script>';
        }
  }
?>

<?php 
     if(Isset($_POST['updatint']))
    {
        $intensity=$_POST['intensity'];
       

        $run="UPDATE `intensity` SET `added`='$intensity' Where `exercise_id` = $id";
        $datatrain= mysqli_query($con,$run);
        
        if ($datatrain= true) 
        {
          echo
            '<script>
                        alert("Intensity Has Been Updated !");
            </script>';

          echo 
            '<script>

                window.open("exclist.php", "_self");
            </script>';
        }
  }
?>

<?php 
     if(Isset($_POST['updatetime']))
    {
        $time=$_POST['time'];
       

        $run="UPDATE `exercise_time` SET `dtime`='$time' Where `exercise_id` = $id";
        $datatrain= mysqli_query($con,$run);
        
        if ($datatrain= true) 
        {
          echo
            '<script>
                        alert("Time Has Been Updated !");
            </script>';

          echo 
            '<script>

                window.open("exclist.php", "_self");
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
  </body>
</html>
<?php } ?>