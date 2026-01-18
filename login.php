<?php
include 'db.php';

$username = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
  session_start();
  $_SESSION['username'] = $username;
  header("Location: home.php");
} else {
  echo "بيانات الدخول غير صحيحة.";
}
?>