<?php

// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$sql = "SELECT Customer.CustomerId as CustomerCustomerId , Customer.Name as CustomerName, 
Reservation.Time as ReservationTime, Reservation.Date as ReservationDate, C_Order.Time as C_OrderTime , C_Order.Date as C_OrderDate FROM 
Customer JOIN Reservation on Customer.CustomerId = Reservation.CustomerId 
JOIN C_Order on Customer.CustomerId = C_Order.CustomerId;
";


$result = mysqli_query($mysqli, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V13</title>
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"
<style type="text/css">

</head>
<body style="background-color: #999999;">


	<table class="table">
	  <thead>
		<tr>
          <th scope="col"><a href='index.php'>Home</a></th>
		  <th scope="col">Customer Id</th>
		  <th scope="col">Name</th>
		  <th scope="col">Reservation Time</th>
		  <th scope="col">Date</th>
		  <th scope="col">Order Time,</th>
		  <th scope="col">Date</th>


		</tr>
	  </thead>

	    <?php
	    $i = 1;
			while($user_data = mysqli_fetch_array($result)) { ?>
		  	<tbody>
				<tr>

				  <th scope="row"><?php  echo $i; ?></th>
				  <?php
				  echo "<td>".$user_data['CustomerCustomerId']."</td>";
				  echo "<td>".$user_data['CustomerName']."</td>";
				  echo "<td>".$user_data['ReservationTime']."</td>";
				  echo "<td>".$user_data['ReservationDate']."</td>";
				  echo "<td>".$user_data['C_OrderTime']."</td>";
				  echo "<td>".$user_data['C_OrderDate']."</td>";
				  ?>
				</tr>
			  </tbody>
		   <?php
		   $i++;
			}
	   		?>
	</table>












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