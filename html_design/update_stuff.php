<?php 

include_once("config.php");

if(isset($_POST['submit']) && !empty($_POST['submit']))
{
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $salary = $_POST['salary'];
    $jobtitle = $_POST['jobtitle'];

    $sql = "UPDATE Stuff SET FirstName = $f_name, LastName = l_name, Phone = $phone, City = $city, Gender = $gender, Salary = $salary, JobTitle = $jobtitle WHERE StuffNo=$id";
    mysqli_query($mysqli, $sql);
}
?>

<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM Stuff WHERE StuffNo='$id'");
while($user_data = mysqli_fetch_assoc($result)){
		$f_name = $user_data['FirstName'];
		$l_name = $user_data['LastName'];
		$city = $user_data['City'];
		$gender = $user_data['Gender'];
		$phone = $user_data['Phone'];
		$salary = $user_data['Salary'];
		$jobtitle = $user_data['JobTitle'];
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Restaruant</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;" >
<form action="" method="post">
		

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Information
					</span>

					<div class="wrap-input100 validate-input" data-validate="First Name is required">
						<span class="label-input100">First Name</span>
						<input class="input100" type="text" name="f_name" placeholder="First Name..." value=<?php echo $f_name;?> >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">last Name</span>
						<input class="input100" type="text" name="l_name" placeholder="last Name..." value=<?php echo $l_name;?>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid city is required: ex@abc.xyz">
						<span class="label-input100">city</span>
						<input class="input100" type="text" name="city" placeholder="city..." value=<?php echo $city;?>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid gender is required: ex@abc.xyz">
						<span class="label-input100" >Gender</span>
						<select name='gender'> 
       						<option value="male"<?php if ($gender == '1') echo 'selected = "selected"'; ?>>male</option> 
       						<option value="female"<?php if ($gender == '0') echo 'selected = "selected"'; ?>>female</option> 
						</select>
						
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">phone</span>
						<input class="input100" type="text" name="phone" placeholder="phone..." value=<?php echo $phone;?>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Salary</span>
						<input class="input100" type="text" name="salary" placeholder="Salary..." value=<?php echo $salary;?>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">job title</span>
						<input class="input100" type="text" name="jobtitle" placeholder="title..." value=<?php echo $jobtitle;?>
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input class="login100-form-btn" type="submit" name="submit">
							<!-- <button class="login100-form-btn" type="submit", name="submit">Done</button> -->
						</div>

						<a href="edit_stuff.html" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							reset
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</form>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
