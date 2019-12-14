<?php
error_reporting(0);
include_once("config.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM Meal WHERE MealId ='$id'";
    mysqli_query($mysqli, $sql);
    header("Location:list_meal.php");
?>