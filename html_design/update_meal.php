<?php 

include_once("config.php");

if(isset($_GET['submit']) && !empty($_GET['submit']))
{
    $Name = $_GET['Name'];
    $Description= $_GET['Desciption'];
    $Price = $_GET['Price'];
    $Size = $_GET['Size'];
    $id = $_GET['id'];
 

   $sql = "UPDATE Meal SET Name = '$Name', Description = '$Desciption', Price = '$Price', Size = '$Size' WHERE MealId='$id'";

     // $sql = "update student set std_id ='$id', name='$name', contact='$contact' WHERE id='$sid'";

    
  	mysqli_query($mysqli, $sql);
  	header("Location:update_meal.php?id=$id");
}
?>

<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM Meal WHERE MealId='$id'");
while($user_data = mysqli_fetch_assoc($result)){
		$Name = $user_data['Name'];
		$Description = $user_data['Desciption'];
		$Price = $user_data['Price'];
		$Size = $user_data['Size'];

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
<form action="update_meal.php" method="get">
		

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Information
					</span>

					<div class="wrap-input100 validate-input" data-validate="required">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="Name" placeholder="Name..." value=<?php echo $Name;?> >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="required">
						<span class="label-input100">Description</span>
						<input class="input100" type="text" name="Description" placeholder="Description..." value=<?php echo $Description;?>>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "required">
						<span class="label-input100">Price</span>
						<input class="input100" type="text" name="Price" placeholder="Price..." value=<?php echo $Price;?>>
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "required">
						<span class="label-input100">Size</span>
						<input class="input100" type="text" name="Size" placeholder="size..." value=<?php echo $Size;?>>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
							<input class="login100-form-btn" type="submit" name="submit">
							<!-- <button class="login100-form-btn" type="submit", name="submit">Done</button> -->
						</div>

						<a class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							<input type="reset">
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
