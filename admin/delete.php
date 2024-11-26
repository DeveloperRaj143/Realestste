<?php
include 'db_connection.php';
$id = $_GET['id'];
$q = "DELETE FROM `banner` WHERE id = $id ";
mysqli_query($conn,$q);
header('location:view_banner.php');
?>