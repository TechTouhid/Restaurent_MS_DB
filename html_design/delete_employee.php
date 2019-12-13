<?php
error_reporting(0);
include_once("config.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM Employee WHERE EmployeeNo ='$id'";
    mysqli_query($mysqli, $sql);
    header("Location:view_employee_list.php");
?>