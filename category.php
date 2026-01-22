<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Category</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="overlay">

    <div class="form-box">
        <h2>Add Category</h2>

        <form action="save_category.php" method="POST">

            <label>Category Name</label>
            <input type="text" name="category_name" required>

            <label>Number of Books</label>
            <input type="text" name="number_of_books" required>


            <div class="form-buttons">
                <button type="submit" class="save-btn">Save</button>
                <button type="button" class="back-btn"
                        onclick="window.location.href='home.php'">
                    Back
                </button>
            </div>

        </form>
    </div>

</div>

</body>
</html>
