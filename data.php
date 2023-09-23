<?php

include('db.php');

if(isset($_POST['signup']))
{

	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$weight=$_POST['weight'];
	$height=$_POST['height'];
	$BMI=$weight/$height*2;
	$bloodgroup=$_POST['bloodgroup'];
	$food=$_POST['food'];
	$health=$_POST['health'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	
	$Uquery = "SELECT * FROM `usignup` WHERE `email` = '$email'";
	
	$Data = mysqli_query($con,$Uquery);
	$count = mysqli_num_rows($Data);
	
	if($count==1)
		{
			echo	
				"<script>
					alert('Sorry! This Email Address is Already Registered');
					window.location.href='index';
				</script>";
		}
	else
		{
			if($pass == $confpass)
				{
					$Uquery= "INSERT INTO `usignup`(`name`, `dob`, `age`, `gender`, `weight`, `height`, `BMI`, `bloodgroup`, `food`, `health`, `phone`, `email`, `password`, `address`)
					VALUES ('$name','$dob','$age','$gender','$weight','$height','$BMI','$bloodgroup','$food','$health','$phone','$email','$password','$address')";
					
					$Data = mysqli_query($con,$Uquery);	
					
					if ($Data == 'true' ) 
                    	{
							echo	
								"<script>	
									alert('Your account has been successfully registered');
									window.location.href='signin';
								</script>";
						}
					else
						{
							echo	
								"<script>	
									alert('Registraion Failed');
									window.location.href='signup';
								</script>";	
						}
        		}
		}
}

?>