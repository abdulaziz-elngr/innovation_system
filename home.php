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
        <h2>Innovation University</h2>
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Innovation University</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  <div class="container">
    <!-- Sidebar -->
    <div class="sidebar">
      <h3>Select</h3>
      <p>Current page</p>
      <ul>
        <li><a href="#"><i class="fas fa-home"></i> HOME</a></li>
        <li><a href="#"><i class="fas fa-book"></i> BOOK</a></li>
        <li><a href="#"><i class="fas fa-tags"></i> CATEGORY</a></li>
        <li><a href="#"><i class="fas fa-arrow-right-arrow-left"></i> BORROWING</a></li>
        <li><a href="#" onclick="toggleForm()"><i class="fas fa-user-graduate"></i> STUDENT ENTRY</a></li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="main">
      <div class="header">
        <h2>Innovation University</h2>
        <img src="images/logo.png" alt="Logo">
      </div>

      <!-- Bottom Buttons -->
      <div class="buttons">
        <a href="#" class="btn" onclick="toggleForm()"><i class="fas fa-user-graduate"></i> Student Entry</a>
        <a href="#" class="btn"><i class="fas fa-arrow-right-arrow-left"></i> Create Borrowing</a>
        <a href="#" class="btn"><i class="fas fa-tags"></i> Add Category</a>
        <a href="#" class="btn"><i class="fas fa-book-medical"></i> Add Book</a>
      </div>

      <!-- Hidden Student Entry Form -->
      <div id="studentForm" class="form-container" style="display: none;">
        <h3>Student Entry</h3>
        <form action="save_student.php" method="post">
          <label>Student Name:</label>
          <input type="text" name="student_name" required>

          <label>ID:</label>
          <input type="text" name="student_id" required>

          <label>College:</label>
          <input type="text" name="college" required>

          <label>Time:</label>
          <input type="time" name="entry_time" required>

          <button type="submit" class="btn"><i class="fas fa-paper-plane"></i> Submit</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    function toggleForm() {
      var form = document.getElementById("studentForm");
      form.style.display = form.style.display === "none" ? "block" : "none";
    }
  </script>
</body>
</html>