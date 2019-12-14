<?php
error_reporting(0);
include_once("config.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM Reservation WHERE ReservationNo ='$id'";
    mysqli_query($mysqli, $sql);
    header("Location:list_reservation.php");
?>