<?php include "head.php";
include "db.php";

$about="SELECT * FROM `about_text`";
$databo=mysqli_query($con,$about); 

$abo=mysqli_fetch_assoc($databo);




?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

<style>




.btn-1 {
    background-color: rgb(255, 0, 0);
    margin-top: 30px;
    color: white;
    border-radius: 0;
    padding: 0.1rem 1rem;
    /*font-family: math;*/
    font-size: 2rem;
    font-weight: 700;
    outline: none;
    border-radius: 5px;
}
.content {
  padding-bottom: 0%;
    position: absolute;
    bottom: 0;
    /* background: rgb(0, 0, 0); */
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 126%;
    padding-right: 25%;
    left: 1px;
    top: 0px;
    
}

.carousel-caption h5 {
    /*font-family: math;*/
    font-size: 80px;
    font-weight: 700;
    margin-top: 14%;
}
.carousel-caption p {
    /*font-family: math;*/
    font-size: 22px;
   
}
.carousel-control-prev-icon, .carousel-control-next-icon {
    
    background-color: transparent!important;
    border: none!important;
    border-radius: none!important;
}
.title-1 {
    padding-top: 3%;
   
    /*font-family: Math;*/
    text-align: center;
    font-size: 50px;
    font-weight: 800;
}
.title-2 {
    padding-top:10px ;
    /*font-family: Math;*/
    text-align: center;
    font-size: 28px;
    font-weight: 500;
}

.btn-2{background-color: rgb(255, 0, 0);
    margin-top: 30px;
    color: white;
    border-radius: 0;
    padding: 6px 15px;
    /*font-family: math;*/
    font-size: 22px;
    font-weight: 700;
    outline: none;
    border-radius: 5px;}

.card img:hover{  transform:scale(1.03); transition:0.5s;  }
.card img{   transition:0.5s; }



.custom
{
    background-color: #5a0604;
    color: white;
}

.custom:hover
{
    background-color:#450706;
    color: white;
    font-weight: bold;
}

.mainBtn
{
    font-size: 130% !important;

}

.mainBtn:hover
{
    font-weight: bold;
}


</style>



</head>
<body>

<!-- Slider Start -->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="admin/<?php echo $uapp['img1']?>" class="d-block w-100 img-fluid" alt="..." style="width:100%; height:750px;"> 
      <div class="carousel-caption d-none d-md-block content">
        <h5>Welcome To Xtreme Fitness</h5>
      
      </div>
    </div>

    <div class="carousel-item">
      <img src="admin/<?php echo $uapp['img2']?>" class="d-block w-100 img-fluid" alt="..." style="width:100%; height:750px;"> 
      <div class="carousel-caption d-none d-md-block content">
        <h5>About Us</h5>
        <p>To know more please click this button below</p>
        <button class="btn btn-outline-light py-3 px-5 mainBtn" onclick="location.href='about' ">About Us</button>
      </div>
    </div>

    <div class="carousel-item">
      <img src="admin/<?php echo $uapp['img3']?>" class="d-block w-100 img-fluid" alt="..."  style="width:100%; height:750px;">
      <div class="carousel-caption d-none d-md-block content">
        <h5>Excercises & Activities</h5>
        <p>To know more please click this button below</p>
        <button class="btn btn-outline-light py-3 px-5 mainBtn"  onclick="location.href='excercises' ">Excercises & Activities</button>
      </div>
    </div>

    <div class="carousel-item">
      <img src="admin/<?php echo $uapp['img4']?>" class="d-block w-100 img-fluid" alt="..." style="width:100%; height:750px;">
      <div class="carousel-caption d-none d-md-block content">
        <h5>Membership</h5>
        <p>To know more please click this button below</p>
        <button class="btn btn-outline-light py-3 px-5 mainBtn"  onclick="location.href='membership' ">Membership</button>
      </div>
    </div>

    

    <div class="carousel-item">
      <img src="admin/<?php echo $uapp['img5']?>" class="d-block w-100 img-fluid" alt="..." style="width:100%; height:750px;">
      <div class="carousel-caption d-none d-md-block content">
        <h5>Promotion</h5>
        <p>To know more please click this button below</p>
        <button class="btn btn-outline-light py-3 px-5 mainBtn" onclick="location.href='promotion' ">Promotion</button>
      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Slider End-->

<!-- Main Start -->
<div class="container-fluid" style="max-width: 90%;">
    <center><h1 class="title-1">Do you want to Join Us?</h1>
        <h3 class="title-2">If yes please click the button below</h3>
        <button class="btn custom py-3 px-5" onclick="location.href='membership' ">Membership</button>
        <div class="row" style="margin-top:3%;">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 100%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $uapp['img6']?>" alt="Card image cap" style="height: 350px;">
                        
                        </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 100%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $uapp['img7']?>" alt="Card image cap" style="height: 350px;">
                        
                        </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 100%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $uapp['img8']?>" alt="Card image cap" style="height: 350px;">
                        
                        </div>
                </div>
        </div>

        <h1 class="title-1 mt-5">Excercises & Activity</h1>
        <h3 class="title-2">To explore more about the excercises and activities please click below.</h3>
        <button class="btn custom py-3 px-5" onclick="location.href='excercises' ">View More</button>
        <div class="row" style="margin-top:3%; margin-bottom:8%;">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $abo['img1']?>" alt="Card image cap" style="height: 280px;">
                        
                        </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $abo['img2']?>" alt="Card image cap" style="height: 280px;">
                        
                        </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $abo['img3']?> " alt="Card image cap" style="height: 280px;">
                        
                        </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $abo['img4']?>" alt="Card image cap" style="height: 280px;">
                        
                        </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" style="margin-top:20px;">
                        <div class="card" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $abo['img5']?>" alt="Card image cap"  style="height: 280px;">
                        
                        </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" style="margin-top:20px;">
                        <div class="card" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $abo['img6']?>" alt="Card image cap" style="height: 280px;">
                        
                        </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" style="margin-top:20px;">
                        <div class="card" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $abo['img7']?>" alt="Card image cap" style="height: 280px;">
                        
                        </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" style="margin-top:20px;">
                        <div class="card" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $abo['img8']?>" alt="Card image cap" style="height: 280px;">
                        
                        </div>
                </div>
        </div>

    </center>
</div>
<!-- Main End -->

</body>
</html>


<?php include "footer.php"?>
