<?php
include 'server.php';
$id = $_POST['id'];
$name = $_POST['regname'];
$birthday = date('Y-m-d', strtotime($_POST['regbirth']));
$username = $_POST['regusername'];
$favoritemusic = $_POST['regfavoritemusic'];
$email = $_POST['regemail'];
$password = $_POST['regpassword'];

mysqli_query($db, "UPDATE users SET name='$name', username='$username', email='$email',
    favoritemusic='$favoritemusic', dateofbirth='$birthday', password='$password' WHERE id='$id'"); 
$_SESSION['message'] = "Changes are saved";
header('location: user.php');
?>