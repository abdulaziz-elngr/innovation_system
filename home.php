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
  <title>Innovation University - Home</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="home-screen">
  <aside class="sidebar">
    <div class="sidebar-header">
      <p>Select</p>
      <p>Current page</p>
    </div>
    <ul class="nav-list">
      <li class="active">HOME</li>
      <li>BOOK</li>
      <li>CATEGORY</li>
      <li>BORROWING</li>
      <li>STUDENT ENTRY</li>
    </ul>
  </aside>

  <main class="main-area">
    <header class="top-header">
      <img src="images/logo.png" alt="Logo">
      <h1>Innovation University</h1>
    </header>

    <section class="action-buttons">
      <button>Student Entry</button>
      <button>Create Borrowing</button>
      <button>Add Category</button>
      <button>Add Book</button>
    </section>
  </main>

  <script src="script.js"></script>
</body>
</html>
