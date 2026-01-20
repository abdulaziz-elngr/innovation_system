<?php
// لو عندك اتصال بقاعدة بيانات
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Innovation Library System</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container">
    <!-- القائمة الجانبية -->
    <div class="sidebar">
      <h3>Select</h3>
      <p>Current page</p>
      <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="books.php">BOOK</a></li>
        <li><a href="category.php">CATEGORY</a></li>
        <li><a href="borrowings.php">BORROWING</a></li>
        <li><a href="students.php">STUDENT ENTRY</a></li>
      </ul>
    </div>

    <!-- المحتوى الرئيسي -->
    <div class="main">
      <div class="header">
        <h2>Innovation Library System</h2>
        <img src="images/logo.png" alt="Logo">
      </div>

      <!-- الأزرار البنفسجية -->
      <div class="buttons">
        <a href="students.php" class="btn">Student Entry</a>
        <a href="borrowings.php" class="btn">Create Borrowing</a>
        <a href="category.php" class="btn">Add Category</a>
        <a href="books.php" class="btn">Add Book</a>
      </div>
    </div>

  </div>

  <script src="script.js"></script>
</body>
</html>