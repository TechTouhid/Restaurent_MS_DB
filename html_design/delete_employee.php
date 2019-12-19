<?php
error_reporting(0);
include_once("config.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM Employee WHERE EmployeeNo ='$id'";
    mysqli_query($mysqli, $sql);
    // header("Location:view_employee_list.php");

    if ($mysqli->query($sql) === TRUE) {
        // Successful popup message, redirected back to view contacts
    	echo "<script type='text/javascript'>alert('Successfully Deleted!'); window.location.href = 'view_employee_list.php';</script>";
    } else {
        // Unsuccessful popup message, redirected back to view contacts
    	echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'view_employee_list.php';</script>";
    }

    $mysqli->close();
?>