<?php
session_start();

// variable declaration
$id = "";
$name = "";
$username = "";
$email    = "";
$favoritemusic = "";
$birthday = "";
$password="";

$_SESSION['message'] = '';

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'registered');

// REGISTER USER
if (isset($_POST['register'])) {
    $name = $_POST['regname'];
    $birthday = date('Y-m-d', strtotime($_POST['regbirth']));
    $username = $_POST['regusername'];
    $favoritemusic = $_POST['regfavoritemusic'];
    $email = $_POST['regemail'];
    $password = $_POST['regpassword'];

    mysqli_query($db, "INSERT INTO users (name,username,email,favoritemusic,dateofbirth,password) VALUES ('$name','$username','$email','$favoritemusic','$birthday','$password')"); 
    $_SESSION['message'] = "Address saved"; 
    header('location: index.php');
  }
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $results = mysqli_query($db, "SELECT * FROM users");;
    while ($row = mysqli_fetch_array($results)){
        if ($username ==$row['username'] && $password ==$row['password']){
                $_SESSION['message'] = "Welcome!";
                header('location: user.php');
                
        }

    }
}
?>