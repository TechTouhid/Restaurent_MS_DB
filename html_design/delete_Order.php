<?php
error_reporting(0);
include_once("config.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM C_Order WHERE OrderId ='$id'";
    mysqli_query($mysqli, $sql);
    header("Location:Ordered_list.php");
?>