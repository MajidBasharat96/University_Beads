<?php 

include_once('connection.php');

$info = false;
$insert = false;
$error = false;

if (isset($_POST['signup_submit'])) {
	
	if ( (($_POST["passwd"]) == ($_POST["cpasswd"])) && ( ($_POST["interMarks"]) > 0) && ( ($_POST["interMarks"]) < 100) )
	{
		$info = "INSERT INTO student_data (`First_name`, `Last_name`, `phone_number`, `interMarks`, `Gender`, `City`, `Email`, `password`, `cpassword`) VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["phone"]."','".$_POST["interMarks"]."','".$_POST["gender"]."','".$_POST["city"]."','".$_POST["email"]."','".$_POST["passwd"]."','".$_POST["cpasswd"]."')";
		
		$insert = mysqli_query($conn,$info);
	}
	else
	{
		echo '<script>alert("Passwords are not matching. Or Incorrect percentage. Please try again!");</script>';
		echo '<a href="signup.php">Sign Up Again</a>';
		$error = true;
	}


	if ($insert == true) {
		echo '<script>alert("Success!");</script>';
	}else{
		echo '<script>alert("An error occured. Please try again!");</script>';
		$error = true;
	}

	if ($error == true)
	{
		echo '<a href="signup.php">Sign Up Again</a>';
	}

	//header("location:index.php?success=inserted");
	echo '<a href="login.php">Proceed to Login</a>';
}

?>