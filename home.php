<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Innovation System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="page">

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="dashboard" onclick="toggleMenu()">
            ☰ Dashboard
        </div>

        <div class="menu" id="menu">

            <div class="select">Select</div>

            <div class="current">
                <span class="line"></span>
                <span>Current page</span>
            </div>

            <ul>
                <li class="active">🏠 HOME</li>
                <li>📚 BOOKS</li>
                <li>🗂 CATEGORY</li>
                <li>📁 BORROWING</li>
                <li>👤 STUDENT ENTRY</li>
            </ul>

        </div>
    </div>

    <!-- Logo -->
    <div class="top-logo">
        <img src="images/logo.png">
        <div class="logo-text">
            <strong>Innovation</strong>
            <span>University</span>
        </div>
    </div>

    <!-- Background -->
    <img src="images/room.jpg" class="bg">

    <!-- Buttons -->
    <div class="buttons">
        <button>Student Entry</button>
        <button>Create Borrowing</button>
        <button>Add Category</button>
        <button>Add Book</button>
    </div>

</div>

<script>
function toggleMenu() {
    document.getElementById("menu").classList.toggle("show");
}
</script>

</body>
</html>