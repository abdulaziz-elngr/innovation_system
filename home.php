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
      <button onclick="navigate('student')">Student Entry</button>
      <button onclick="navigate('borrow')">Create Borrowing</button>
      <button onclick="navigate('category')">Add Category</button>
      <button onclick="navigate('book')">Add Book</button>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
