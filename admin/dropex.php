<?php 
include  'include/config.php'; 
$idt=$_GET['idt'];
$idi=$_GET['idi'];
$ids=$_GET['ids'];
$idst=$_GET['idst'];
if ($idt == true) {
    $sdt="SELECT * FROM `trainer` WHERE `id` = $idt";
    $sdt_data=mysqli_query($con,$sdt);
    $p=mysqli_fetch_assoc($sdt_data);
    echo $idt;
    $dt="DELETE FROM `trainer` WHERE `id` = $idt;";
$data=mysqli_query($con,$dt);
if ($data == true) {
    echo '<script>

    window.open("exercise.php?id='.$p['exercise_id'].'", "_self");
  
  
  </script>'  ;
}
}

if ($idi == true) {
    $sdt="SELECT * FROM `intensity` WHERE `id` = $idi";
    $sdt_data=mysqli_query($con,$sdt);
    $p=mysqli_fetch_assoc($sdt_data);
    echo $idt;
    $dt="DELETE FROM `intensity` WHERE `id` = $idi;";
$data=mysqli_query($con,$dt);
if ($data == true) {
    echo '<script>

    window.open("exercise.php?id='.$p['exercise_id'].'", "_self");
  
  
  </script>'  ;
}
}
if ($ids == true) {
    $sdt="SELECT * FROM `exercise_time` WHERE `id` = $ids";
    $sdt_data=mysqli_query($con,$sdt);
    $p=mysqli_fetch_assoc($sdt_data);
    echo $idt;
    $dt="DELETE FROM `exercise_time` WHERE `id` = $ids;";
$data=mysqli_query($con,$dt);
if ($data == true) {
    echo '<script>

    window.open("exercise.php?id='.$p['exercise_id'].'", "_self");
  
  
  </script>'  ;
}
}
if ($idst == true) {
  // $sdt="SELECT * FROM `exercise_time` WHERE `id` = $ids";
  // $sdt_data=mysqli_query($con,$sdt);
  // $p=mysqli_fetch_assoc($sdt_data);
  // echo $idt;
  $dt="DELETE FROM `member_pro` WHERE `id` = $idst;";
$data=mysqli_query($con,$dt);
if ($data == true) {
  echo '<script>

  window.open("addpromotion.php", "_self");


</script>'  ;
}
}
if ($idsm == true) {
  // $sdt="SELECT * FROM `exercise_time` WHERE `id` = $ids";
  // $sdt_data=mysqli_query($con,$sdt);
  // $p=mysqli_fetch_assoc($sdt_data);
  // echo $idt;
  $dt="DELETE FROM `member_pro` WHERE `id` = $idsm;";
$data=mysqli_query($con,$dt);
if ($data == true) {
  echo '<script>

  window.open("member.php", "_self");


</script>'  ;
}
}
?>