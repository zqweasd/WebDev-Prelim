<?php
include 'server.php';
$id = $_GET['id'];

$del = mysqli_query($db, "DELETE FROM `users` WHERE id ='$id'");
header("location: user.php");
?>