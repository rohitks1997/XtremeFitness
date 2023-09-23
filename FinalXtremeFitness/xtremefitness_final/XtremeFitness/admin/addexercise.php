<?php session_start();
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
   <title>Admin | Add Exercise</title>
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
.tox-notifications-container{display:none!important;}
</style>  

    <div class="row">
        
        <div class="col-md-12">
          <div class="tile">
             <!---Success Message--->  
          
          <!---Error Message--->
                   <center>   <h3 class="tile-title">Add Exercise</h3><hr></center>
            <div class="tile-body">
              <form class="row" method="post"  enctype="multipart/form-data">
               <div class="form-group col-md-6">
                  <label class="control-label">Exercise Name</label>
                  <input class="form-control" type="text" name="fdate" id="fdate" placeholder="Enter Excercise">
                </div> <div class="form-group col-md-6">
                  <label class="control-label">Exercise Image</label>
                  <input class="form-control" type="file" name="img" id="fdate" placeholder="Enter Excercise">
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
           
              
                <div class="form-group col-md-12">
                  <label class="control-label">Exercise Description</label>
<textarea name="todate" id="editor"  ></textarea>
                </div>
                <div class="form-group col-md-6 align-self-end">
                  <input type="Submit" name="Submit" id="Submit" class="btn btn-primary" style="float:left;" value="Add Exercise">
                </div>
                <div class="form-group col-md-6 align-self-end">
                    <a href="index"><input type="Submit" name="back" id="Submit" class="btn btn-danger"  style="float:right;"value="Back"></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
      <?php 
if(Isset($_POST['Submit'])){?>
<?php
 $fdate=$_POST['fdate'];
 $tdate=$_POST['todate'];
 $tdate= str_replace("'","\'",$tdate);

 $img = $_FILES['img'];
 $imgname = $_FILES['img']['name'];
 $src = $_FILES['img']['tmp_name'];
       $des = "eximg/" . $imgname;
       move_uploaded_file($src, $des);

 $run="INSERT INTO `exercise`(`name`, `text`,`img`) VALUES ('$fdate','$tdate','$des')";
$data= mysqli_query($con,$run);
 if ($data= true) {
    echo'<script>

    alert("Data Inserted Sucessfully !");
  
  </script>';
  echo '<script>

  window.open("index.php", "_self");


</script>';
 }
?>
       <div class="row">
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
      </div>
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