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
  <style>
    /* تكبير حجم الأزرار البنفسجية */
    .buttons .btn {
      font-size: 18px;
      padding: 15px 30px;
      margin: 12px;
      display: inline-block;
      background-color: #6a0dad;
      color: white;
      border-radius: 8px;
      text-decoration: none;
      transition: transform 0.2s ease;
      white-space: nowrap; /* يخلي الكلام كله في سطر واحد */
    }

    .buttons .btn:hover {
      transform: scale(1.08);
    }

    /* زر فتح/غلق القائمة */
    .toggle-btn {
      position: absolute;
      top: 20px;
      left: 20px;
      background-color: #6a0dad;
      color: white;
      border: none;
      padding: 10px 15px;
      font-size: 20px;
      border-radius: 5px;
      cursor: pointer;
      z-index: 1000;
    }

    .sidebar {
      width: 250px;
      transition: transform 0.3s ease;
    }

    .sidebar.hidden {
      transform: translateX(-250px); /* إخفاء القائمة */
    }

    .container {
      display: flex;
    }

    .main {
      flex: 1;
      padding: 20px;
      position: relative;
    }
  </style>
</head>
<body>

  <div class="container">
    <!-- القائمة الجانبية -->
    <div class="sidebar" id="sidebar">
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
      <!-- زر فتح/غلق القائمة -->
      <button id="toggleSidebar" class="toggle-btn">
        <i class="fas fa-bars"></i>
      </button>

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

  <script>
    document.getElementById('toggleSidebar').addEventListener('click', function () {
      const sidebar = document.getElementById('sidebar');
      sidebar.classList.toggle('hidden');
    });
  </script>
</body>
</html> 