<?php
// لو عندك اتصال بقاعدة بيانات
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Innovation University</title>
  <link rel="stylesheet" href="style.css">
  <!-- مكتبة Font Awesome للأيقونات -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  <div class="container">
    <!-- القائمة الجانبية -->
    <div class="sidebar">
      <h3>Select</h3>
      <p>Current page</p>
      <ul>
        <li><a href="home.php"><i class="fas fa-home"></i> HOME</a></li>
        <li><a href="books.php"><i class="fas fa-book"></i> BOOK</a></li>
        <li><a href="category.php"><i class="fas fa-tags"></i> CATEGORY</a></li>
        <li><a href="borrowings.php"><i class="fas fa-arrow-right-arrow-left"></i> BORROWING</a></li>
        <li><a href="students.php"><i class="fas fa-user-graduate"></i> STUDENT ENTRY</a></li>
      </ul>
    </div>

    <!-- المحتوى الرئيسي -->
    <div class="main">
      <div class="header">
        <h2>Welcome to Innovation Library System 🤗</h2>
        <img src="images/logo.png" alt="Logo">
      </div>

      <!-- الأزرار البنفسجية -->
      <div class="buttons">
        <a href="students.php" class="btn"><i class="fas fa-user-graduate"></i> Student Entry</a>
        <a href="borrowings.php" class="btn"><i class="fas fa-arrow-right-arrow-left"></i> Create Borrowing</a>
        <a href="category.php" class="btn"><i class="fas fa-tags"></i> Add Category</a>
        <a href="books.php" class="btn"><i class="fas fa-book-medical"></i> Add Book</a>
      </div>
    </div>

  </div>

  <script src="script.js"></script>
</body>
</html>