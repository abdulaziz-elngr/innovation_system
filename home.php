<?php
// home.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Innovation University | Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <!-- Sidebar -->
    <div class="sidebar">
        <h2 class="logo">
            <img src="images/logo.png" alt="Logo">
            Innovation University
        </h2>

        <p class="current">Current page</p>

        <ul>
            <li class="active">🏠 Home</li>
            <li><a href="books.php">📚 Books</a></li>
            <li><a href="category.php">📂 Category</a></li>
            <li><a href="borrowings.php">🔄 Borrowing</a></li>
            <li><a href="students.php">👩‍🎓 Student Entry</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main">

        <div class="image-box">
            <img src="images/room.jpg" alt="Library Room">
        </div>

        <div class="buttons">
            <a href="students.php" class="btn">Student Entry</a>
            <a href="borrowings.php" class="btn">Create Borrowing</a>
            <a href="category.php" class="btn">Add Category</a>
            <a href="books.php" class="btn">Add Book</a>
        </div>

    </div>

</div>

</body>
</html>