<?php
error_reporting(0);
include_once("config.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM Reservation WHERE ReservationNo ='$id'";
    mysqli_query($mysqli, $sql);

    if ($mysqli->query($sql) === TRUE) {
        // Successful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Successfully Deleted!'); window.location.href = 'list_reservation.php';</script>";
    } else {
        // Unsuccessful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'list_reservation.php';</script>";
    }
?>