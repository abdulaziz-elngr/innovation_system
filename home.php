<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home - Innovation University</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="home-screen">
  <div class="sidebar">
    <ul>
      <li>Select</li>
      <li>Current page</li>
      <li class="active">HOME</li>
      <li>BOOK</li>
      <li>CATEGORY</li>
      <li>BORROWING</li>
      <li>STUDENT ENTRY</li>
    </ul>
  </div>

  <div class="main-content">
    <div class="header">
      <img src="images/logo.png" alt="Logo">
      <h1>Innovation University</h1>
    </div>

    <div class="buttons">
      <button>Student Entry</button>
      <button>Create Borrowing</button>
      <button>Add Category</button>
      <button>Add Book</button>
    </div>
  </div>
</body>
</html>