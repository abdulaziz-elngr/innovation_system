<?php
include('db.php');

// Delete Logic
if(isset($_POST['delete_books']) && !empty($_POST['selected_books'])){
    foreach($_POST['selected_books'] as $book_id){
        $book_id = mysqli_real_escape_string($conn, $book_id);
        mysqli_query($conn, "DELETE FROM books WHERE id = $book_id");
    }
}

// Fetch Books
$query = "SELECT id, Book_Name, Author, Publishing_House, ISBN, Edition_Number, College FROM books ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Archive - Innovation Library</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            height: 100vh;
            background: url("images/library.jpg") no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        /* Top Bar */
        .top-bar { position: fixed; top: 0; width: 100%; height: 70px; background: rgba(0, 0, 0, 0.4); display: flex; align-items: center; justify-content: center; color: white; font-size: 26px; font-weight: bold; z-index: 10; }
        
        .back-home { position: fixed; top: 15px; left: 20px; color: white; text-decoration: none; font-size: 24px; z-index: 11; transition: 0.3s; }
        .back-home:hover { transform: scale(1.1); color: #6f42c1; }

        /* Main Glass Container */
        .main-container {
            flex: 1;
            margin: 100px 40px 40px 40px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 30px;
            overflow-y: auto;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        /* Table Styling */
        table { width: 100%; border-collapse: collapse; color: white; margin-top: 10px; }
        th { background: rgba(111, 66, 193, 0.8); padding: 15px; text-transform: uppercase; font-size: 13px; letter-spacing: 1px; }
        td { padding: 12px; border-bottom: 1px solid rgba(255, 255, 255, 0.1); text-align: center; background: rgba(255, 255, 255, 0.05); }
        tr:hover td { background: rgba(255, 255, 255, 0.15); }

        /* Checkbox styling */
        input[type="checkbox"] { transform: scale(1.2); cursor: pointer; }

        /* Buttons */
        .action-bar { display: flex; gap: 15px; margin-top: 25px; justify-content: flex-end; }
        .btn { 
            padding: 12px 25px; border: none; border-radius: 10px; color: white; 
            font-weight: bold; cursor: pointer; display: flex; align-items: center; gap: 8px; transition: 0.3s;
        }
        .btn-delete { background: #d9534f; box-shadow: 0 4px 15px rgba(217, 83, 79, 0.3); }
        .btn-delete:hover { background: #c9302c; transform: translateY(-2px); }

        /* Scrollbar */
        .main-container::-webkit-scrollbar { width: 8px; }
        .main-container::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.3); border-radius: 10px; }
    </style>
</head>
<body>

    <a href="home.php" class="back-home"><i class="fa-solid fa-circle-arrow-left"></i></a>
    <div class="top-bar">Library Book Collection</div>

    <div class="main-container">
        <form method="POST">
            <table>
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>ID</th>
                        <th>Book Name</th>
                        <th>Author</th>
                        <th>Publishing_House</th>
                        <th>ISBN</th>
                        <th>Edition</th>
                        <th>College</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($result) > 0): ?>
                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><input type="checkbox" name="selected_books[]" value="<?php echo $row['id']; ?>"></td>
                            <td><strong><?php echo $row['id']; ?></strong></td>
                            <td><?php echo $row['Book_Name']; ?></td>
                            <td><?php echo $row['Author']; ?></td>
                            <td><?php echo $row['Publishing_House']; ?></td>
                            <td><code><?php echo $row['ISBN']; ?></code></td>
                            <td><?php echo $row['Edition_Number']; ?></td>
                            <td><span style="background: rgba(111, 66, 193, 0.4); padding: 4px 10px; border-radius: 5px; font-size: 12px;"><?php echo $row['College']; ?></span></td>
                        </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr><td colspan="8">No books found in the database.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>

            <div class="action-bar">
                <button type="submit" name="delete_books" class="btn btn-delete" onclick="return confirm('This will permanently remove the selected books. Continue?')">
                    <i class="fa-solid fa-trash-can"></i> Remove Selected Books
                </button>
            </div>
        </form> 
    </div>

</body>
</html>
