<?php
$conn = mysqli_connect("localhost", "root", "", "innovation_system");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>