<?php session_start();
error_reporting(0);
include  'include/config.php'; 
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } 
  
else{

  $id=$_GET['id'];
  $dropmemb=$_GET['dropmemb'];
  $idpro=$_GET['idpro'];
  $idexe=$_GET['idexe'];
  $ides1=$_GET['ides1'];
  $ides2=$_GET['ides2'];
  $ides3=$_GET['ides3'];
  $dropus=$_GET['dropus'];


  if($id == true)
      {
        $drop="DELETE FROM `usignup` WHERE `id` =$id ";
        mysqli_query($con,$drop);
        header('location:users.php');
      }

  elseif($dropmemb == true)
      {
        $drop2nd="DELETE FROM `member_pro` WHERE `id` ='$dropmemb' ";
        mysqli_query($con,$drop2nd);  
        header('location:member.php'); 
      }
  
  elseif($idpro == true)
      {
        $drop3rd="DELETE FROM `member_pro` WHERE `id` ='$idpro' ";
        mysqli_query($con,$drop3rd);  
        header('location:addpromotion.php'); 
      }

  elseif($idexe == true)
      {
        $drops="DELETE FROM `exercise` WHERE `id` ='$idexe' ";
        mysqli_query($con,$drops);  
        header('location:exclist.php'); 
      }
  elseif($ides1 == true)
      {
        $droptrain="DELETE FROM `trainer` WHERE `id` ='$ides1' ";
        mysqli_query($con,$droptrain);  
        header('location:exclist.php'); 
      }
  elseif($ides2 == true)
      {
        $dropint="DELETE FROM `intensity` WHERE `id` ='$ides2' ";
        mysqli_query($con,$dropint);  
        header('location:exclist.php'); 
      }
  elseif($ides3 == true)
      {
        $droptime="DELETE FROM `exercise_time` WHERE `id` ='$ides3' ";
        mysqli_query($con,$droptime);  
        header('location:exclist.php'); 
      }
      
  elseif($dropus == true)
      {
        $dropuss="DELETE FROM `contact` WHERE `id` ='$dropus' ";
        mysqli_query($con,$dropuss);  
        header('location:uqueries.php'); 
      }

   else{header('location:index');}

 } 
 ?>