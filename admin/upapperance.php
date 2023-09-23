<?php session_start();
error_reporting(0);
include  'include/config.php'; 

if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{

  if(Isset($_POST['upapper']))
    {

      $email=$_POST['email'];
      $contact=$_POST['contact'];
      $aboutus=$_POST['aboutus'];
      $aboutus= str_replace("'","\'",$aboutus);

      $address=$_POST['address'];
      $address= str_replace("'","\'",$address);

          $img=$_POST['img'];
          $img = $_FILES['img'];
          $imgname = $_FILES['img']['name'];
          $src = $_FILES['img']['tmp_name'];
          $des = "eximg/" . $imgname;
          move_uploaded_file($src, $des);

      $dar="UPDATE `upapper` SET `email`='$email',`contact`='$contact',`aboutus`='$aboutus',`address`='$address',`img`='$des' WHERE `id`=1";
      $data= mysqli_query($con,$dar);
      if ($data= true) {
          echo'<script>

          alert("Data Updated Sucessfully !");
        
        </script>';
        echo '<script>

        window.open("upapperance.php", "_self");


      </script>';

  }}?>

  <?php
        if(Isset($_POST['upd1img1']))
        {
          $img1=$_POST['img1'];
          $img1 = $_FILES['img1'];
          $imgname = $_FILES['img1']['name'];
          $src = $_FILES['img1']['tmp_name'];
          $des = "eximg/" . $imgname;
          move_uploaded_file($src, $des);
    
          $dar="UPDATE `upapper` SET `img1`='$des' where `id`=1";
          $data= mysqli_query($con,$dar);
          if ($data= true)
          {
              echo'<script>
    
              alert("Image Updated Sucessfully !");
            
            </script>';
            echo '<script>
    
            window.open("upapperance.php", "_self");
    
    
          </script>';
      }
     
      }
      
      elseif(Isset($_POST['upd1img2']))
      {
        $img2=$_POST['img2'];
        $img2 = $_FILES['img2'];
        $imgname = $_FILES['img2']['name'];
        $src = $_FILES['img2']['tmp_name'];
        $des2 = "eximg/" . $imgname;
        move_uploaded_file($src, $des2);
  
        $dar="UPDATE `upapper` SET `img2`='$des2' where `id`=1";
        $data= mysqli_query($con,$dar);
        if ($data= true)
        {
            echo'<script>
  
            alert("Image Updated Sucessfully !");
          
          </script>';
          echo '<script>
  
          window.open("upapperance.php", "_self");
  
  
        </script>';
    }
    }

    elseif(Isset($_POST['upd1img3']))
      {
        $img3=$_POST['img3'];
        $img3 = $_FILES['img3'];
        $imgname = $_FILES['img3']['name'];
        $src = $_FILES['img3']['tmp_name'];
        $des3 = "eximg/" . $imgname;
        move_uploaded_file($src, $des3);
  
        $dar="UPDATE `upapper` SET `img3`='$des3' where `id`=1";
        $data= mysqli_query($con,$dar);
        if ($data= true)
        {
            echo'<script>
  
            alert("Image Updated Sucessfully !");
          
          </script>';
          echo '<script>
  
          window.open("upapperance.php", "_self");
  
  
        </script>';
    }
    }

    elseif(Isset($_POST['upd1img4']))
    {
      $img4=$_POST['img4'];
      $img4 = $_FILES['img4'];
      $imgname = $_FILES['img4']['name'];
      $src = $_FILES['img4']['tmp_name'];
      $des4 = "eximg/" . $imgname;
      move_uploaded_file($src, $des4);

      $dar="UPDATE `upapper` SET `img4`='$des4' where `id`=1";
      $data= mysqli_query($con,$dar);
      if ($data= true)
      {
          echo'<script>

          alert("Image Updated Sucessfully !");
        
        </script>';
        echo '<script>

        window.open("upapperance.php", "_self");


      </script>';
  }
  }
 
  elseif(Isset($_POST['upd1img5']))
    {
      $img5=$_POST['img5'];
      $img5 = $_FILES['img5'];
      $imgname = $_FILES['img5']['name'];
      $src = $_FILES['img5']['tmp_name'];
      $des5 = "eximg/" . $imgname;
      move_uploaded_file($src, $des5);

      $dar="UPDATE `upapper` SET `img5`='$des5' where `id`=1";
      $data= mysqli_query($con,$dar);
      if ($data= true)
      {
          echo'<script>

          alert("Image Updated Sucessfully !");
        
        </script>';
        echo '<script>

        window.open("upapperance.php", "_self");


      </script>';
  }
  }

  elseif(Isset($_POST['upd1img6']))
    {
      $img6=$_POST['img6'];
      $img6 = $_FILES['img6'];
      $imgname = $_FILES['img6']['name'];
      $src = $_FILES['img6']['tmp_name'];
      $des6 = "eximg/" . $imgname;
      move_uploaded_file($src, $des6);

      $dar="UPDATE `upapper` SET `img6`='$des6' where `id`=1";
      $data= mysqli_query($con,$dar);
      if ($data= true)
      {
          echo'<script>

          alert("Image Updated Sucessfully !");
        
        </script>';
        echo '<script>

        window.open("upapperance.php", "_self");


      </script>';
  }
  }

  elseif(Isset($_POST['upd1img7']))
  {
    $img7=$_POST['img7'];
      $img7 = $_FILES['img7'];
      $imgname = $_FILES['img7']['name'];
      $src = $_FILES['img7']['tmp_name'];
      $des7 = "eximg/" . $imgname;
      move_uploaded_file($src, $des7);

    $dar="UPDATE `upapper` SET `img7`='$des7' where `id`=1";
    $data= mysqli_query($con,$dar);
    if ($data= true)
    {
        echo'<script>

        alert("Image Updated Sucessfully !");
      
      </script>';
      echo '<script>

      window.open("upapperance.php", "_self");


    </script>';
}
}

elseif(Isset($_POST['upd1img8']))
  {
      $img8=$_POST['img8'];
      $img8 = $_FILES['img8'];
      $imgname = $_FILES['img8']['name'];
      $src = $_FILES['img8']['tmp_name'];
      $des8 = "eximg/" . $imgname;
      move_uploaded_file($src, $des8);

    $dar="UPDATE `upapper` SET `img8`='$des8' where `id`=1";
    $data= mysqli_query($con,$dar);
    if ($data= true)
    {
        echo'<script>

        alert("Image Updated Sucessfully !");
      
      </script>';
      echo '<script>

      window.open("upapperance.php", "_self");


    </script>';
}
}
        
      
      
      ?>
  

<?php 
    $dashapp="SELECT * FROM `upapper` WHERE `id` =	1 ;";
    $dataappe=mysqli_query($con,$dashapp);
    $ss=mysqli_fetch_assoc($dataappe);
    

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a">
   <title>Admin | About Us</title>
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
     <!-- <h3>Categories</h3>
     <hr /> -->
     <div class="row">
        
        <div class="col-md-12">
          <div class="tile">
             <!---Success Message--->  
          
          <!---Error Message--->
                   <center>   <h3 class="tile-title">Update Apperance</h3><hr></center>
            <div class="tile-body">
              <form class="row" method="post"  enctype="multipart/form-data">
                 
                  <center><img src="<?php echo $ss['img']?>" alt="" style="width:150px; height:150px; margin-bottom:15px;"></center>

              <div class="form-group col-md-4">
                          <input type="email" class="form-control" placeholder="Enter Email Address" name="email" value="<?php echo $ss['email']?>">
              </div>  
              <div class="form-group col-md-4">
                          <input type="file" class="form-control" name="img">
              </div> 
              <div class="form-group col-md-4">
                          <input type="text" class="form-control" name="contact" placeholder="Enter Phone Number" value="<?php echo $ss['contact']?>">
              </div> 
              <div class="form-group col-md-6">
              <textarea rows="5"  class="form-control" type="text" name="address"  placeholder="Enter Address"  style="text-align:justify;"><?php echo $ss['address']?></textarea>
              </div>   
                <div class="form-group col-md-6">
             
                  <textarea rows="5"  class="form-control" type="text" name="aboutus" placeholder="Enter About Us" style="text-align:justify;"><?php echo $ss['aboutus']?></textarea>
                </div> 
              
               
                
                <div class="form-group col-md-6 align-self-end">
                  <input type="Submit" name="upapper" id="Submit" class="btn btn-primary" style="float:left;" value="Update">
                </div>
                <div class="form-group col-md-6 align-self-end">
                    <a href="index" class="btn btn-danger"  style="float:right;">Back</a>
                </div>
               
              
            </div>
          </div>
        </div>
      </div>
      </div>
  
      <div class="row">
        
        <div class="col-md-12">
          <div class="tile">    
                  <div class="row">  <center><label class="control-label" style="padding:10px 0px;"><h3>Photo Gallery</h3></label></center>
                      <div class="col-md-3 asifali"style="margin-bottom:20px;"><center><img src="<?php echo $ss['img1']?>" alt="" style="margin-bottom:15px; width:150px; height:150px;"></center><input type="file" class="form-control" name="img1" ><button name="upd1img1"class="btn btn-outline-primary" style="width:100%; margin-top:15px;">Update</button></div>
                      <div class="col-md-3 asifali"style="margin-bottom:20px;"><center><img src="<?php echo $ss['img2']?>" alt="" style="margin-bottom:15px; width:150px; height:150px;"></center><input type="file" class="form-control" name="img2" ><button name="upd1img2"class="btn btn-outline-primary" style="width:100%; margin-top:15px;">Update</button></div>
                      <div class="col-md-3 asifali"style="margin-bottom:20px;"><center><img src="<?php echo $ss['img3']?>" alt="" style="margin-bottom:15px; width:150px; height:150px;"></center><input type="file" class="form-control" name="img3" ><button name="upd1img3"class="btn btn-outline-primary" style="width:100%; margin-top:15px;">Update</button></div>
                      <div class="col-md-3 asifali"style="margin-bottom:20px;"><center><img src="<?php echo $ss['img4']?>" alt="" style="margin-bottom:15px; width:150px; height:150px;"></center><input type="file" class="form-control" name="img4" ><button name="upd1img4"class="btn btn-outline-primary" style="width:100%; margin-top:15px;">Update</button></div>
                      <div class="col-md-3 asifali"style="margin-bottom:20px;"><center><img src="<?php echo $ss['img5']?>" alt="" style="margin-bottom:15px; width:150px;height:150px;"></center><input type="file" class="form-control" name="img5" ><button  name="upd1img5"class="btn btn-outline-primary" style="width:100%; margin-top:15px;">Update</button></div>
                      <div class="col-md-3 asifali"style="margin-bottom:20px;"><center><img src="<?php echo $ss['img6']?>" alt="" style="margin-bottom:15px; width:150px;height:150px;"></center><input type="file" class="form-control" name="img6" ><button  name="upd1img6"class="btn btn-outline-primary" style="width:100%; margin-top:15px;">Update</button></div>
                      <div class="col-md-3 asifali"style="margin-bottom:20px;"><center><img src="<?php echo $ss['img7']?>" alt="" style="margin-bottom:15px; width:150px; height:150px;"></center><input type="file" class="form-control" name="img7" ><button name="upd1img7"class="btn btn-outline-primary" style="width:100%; margin-top:15px;">Update</button></div>
                      <div class="col-md-3 asifali"style="margin-bottom:20px;"><center><img src="<?php echo $ss['img8']?>" alt="" style="margin-bottom:15px; width:150px; height:150px;"></center><input type="file" class="form-control" name="img8" ><button name="upd1img8"class="btn btn-outline-primary" style="width:100%; margin-top:15px;">Update</button></div>
                  </div>
              </div>
            </div>
        </div>    
                
              </form>

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

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
  </script> -->

    <style>
          .tox-tinymce{height:560px!important;}
          .form-control:focus{box-shadow:none!important;}
          
     </style>
  </body>
</html>
<?php } ?>