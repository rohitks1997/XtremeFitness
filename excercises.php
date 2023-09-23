<?php include "head.php";

include "db.php";

$exerc="SELECT * FROM `exercise`";

$data=mysqli_query($con,$exerc);




?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercises and Activity</title>

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
    position: absolute;
    bottom: 0;
    /* background: rgb(0, 0, 0); */
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 126%;
    padding-right: 25%;
    padding-top: 15%;
    left: 1px;
    
}

.carousel-caption h5 {
    /*font-family: math;*/
    font-size: 80px;
    font-weight: 700;
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

.btn-2{background-color: white;
    
    color: rgb(169 10 4);
    border-radius: 0;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
    width: 95%;
    /*font-family: math;*/
    font-size: 20px;
    font-weight: 600;
    /* outline: none; */
    border-radius: 5px;
    border:1px solid  #450706;
    padding: 5px 0px;
    margin-bottom: 20px;
    margin-top: 5px;
    transition: 0.5s;
  }

  .btn-2:hover
  {
    color: white!important;
    background-color: #5a0604;
    transition: 0.5s;
  }
  .btn-2:focus
  {
    color: white;
    background-color: #450706;
    transition: 0.5s;
  }



 .card:hover {
    border: 1px solid #dfdfdf;
    padding: 0px;
    /*box-shadow: 5px 10px #dfdfdf;*/
}
.card img{transform: scale(0.97);
    transition: 0.5s;}
.card img:hover{transform: scale(1.01);
    transition: 0.5s;}

</style>


</head>
<body>

<center>
<div class="container-fluid " style="max-width:90%;">
        <h1 class="title-1 ">Excercises & Activity</h1>
        <h1 class="title-2">Please Select any Exercise</h1>
  
        <div class="row" style="margin-top:3%; margin-bottom:3%;">

        <?php foreach ($data as $al ) {?>
           
        
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="card mb-5" style="width: 90%;">
                        <img class="card-img-top img-fluid" src="admin/<?php echo $al['img']?>" alt="Card image cap" style="height: 350px;">
                        <h1 style=" font-size:30px; font-weight:bold; margin-top:10px;"><?php echo $al['name']?></h1>
                        <center>
                            <a href="activity?id=<?php echo $al['id']?>" class="btn btn-primary btn-2" >View More</a>    
                        </center>
                        
                        </div>
                </div>
            
            <?php }?>
                <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 100%;">
                        <img class="card-img-top img-fluid" src="img/squatting.jpg" alt="Card image cap" style="height: 350px;">
                        <h1 style="font-family:math; font-size:30px; font-weight:bold; margin-top:10px;">Zumba Danace</h1>
                        <center><button class="btn-2" onclick="location.href='activity' ">View More</button></center>
                        </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 100%;">
                        <img class="card-img-top img-fluid" src="img/Gym Photo 2.jpg" alt="Card image cap" style="height: 350px;">
                        <h1 style="font-family:math; font-size:30px; font-weight:bold; margin-top:10px;">Weight Traning</h1>
                        <center><button class="btn-2" onclick="location.href='activity' ">View More</button></center>
                        </div>
                </div>
                <div class="col-xl-2 col-lg-2" style="margin-top:2%;">
                       
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" style="margin-top:2%;">
                        <div class="card" style="width: 100%;">
                        <img class="card-img-top img-fluid" src="img/skipping.jpg" alt="Card image cap" style="height: 350px;">
                        <h1 style="font-family:math; font-size:30px; font-weight:bold; margin-top:10px;">Calisthenics</h1>
                        <center><button class="btn-2" onclick="location.href='activity' ">View More</button></center>
                        </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" style="margin-top:2%;">
                        <div class="card" style="width: 100%;">
                        <img class="card-img-top img-fluid" src="img/treadmill.jpg" alt="Card image cap"  style="height: 350px;">
                        <h1 style="font-family:math; font-size:30px; font-weight:bold; margin-top:10px;">Crossfit</h1>
                        <center><button class="btn-2" onclick="location.href='activity' ">View More</button></center>
                        </div>
                </div> -->
                <div class="col-xl-2 col-lg-2" style="margin-top:2%;">
                       
                </div>
                
                
        </div>
  </div>
    </center>

<!-- Main End -->

</body>
</html>


<?php include "footer.php"?>
