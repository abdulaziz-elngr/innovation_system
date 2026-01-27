<?php
include('db.php');

// Delete Logic
if(isset($_POST['delete_borrowing']) && !empty($_POST['selected_borrowing'])){
    foreach($_POST['selected_borrowing'] as $id){
        $id = mysqli_real_escape_string($conn, $id);
        mysqli_query($conn, "DELETE FROM borrowing_archive WHERE id = $id");
    }
}

// Fetch Borrowing Data
$query = "SELECT id, Student_Name, Student_ID, College, Phone_Number, Book_Name, Borrowing_Day, Number_of_Days, Return_Day FROM borrowing_archive ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Borrowing Archive - Innovation Library</title>
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
            margin: 100px 30px 40px 30px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 25px;
            overflow-y: auto;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        /* Table Styling */
        table { width: 100%; border-collapse: collapse; color: white; font-size: 14px; }
        th { background: rgba(111, 66, 193, 0.8); padding: 12px; text-transform: uppercase; letter-spacing: 1px; }
        td { padding: 12px; border-bottom: 1px solid rgba(255, 255, 255, 0.1); text-align: center; background: rgba(255, 255, 255, 0.05); }
        tr:hover td { background: rgba(255, 255, 255, 0.15); }

        /* Highlighted Info */
        .book-title { color: #ffc107; font-weight: bold; }
        .days-badge { background: rgba(255, 255, 255, 0.2); padding: 3px 8px; border-radius: 5px; font-size: 12px; }
        .return-date { color: #00e676; font-weight: bold; }

        /* Buttons */
        .action-bar { display: flex; gap: 15px; margin-top: 25px; justify-content: center; }
        .btn { 
            padding: 12px 25px; border: none; border-radius: 10px; color: white; 
            font-weight: bold; cursor: pointer; display: flex; align-items: center; gap: 8px; transition: 0.3s;
        }
        .btn-delete { background: #d9534f; }
        .btn:hover { opacity: 0.9; transform: translateY(-2px); }

        /* Scrollbar */
        .main-container::-webkit-scrollbar { width: 8px; }
        .main-container::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.3); border-radius: 10px; }
    </style>
</head>
<body>

    <a href="home.php" class="back-home"><i class="fa-solid fa-circle-arrow-left"></i></a>
    <div class="top-bar">Borrowing Archive</div>

    <div class="main-container">
        <form method="POST">
            <table>
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Student ID</th>
                        <th>College</th>
                        <th>Phone</th>
                        <th>Book Name</th>
                        <th>Borrowing Day</th>
                        <th>Number_of_Days</th>
                        <th>Return Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($result) > 0): ?>
                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><input type="checkbox" name="selected_borrowing[]" value="<?php echo $row['id']; ?>"></td>
                            <td><?php echo $row['Student_Name']; ?></td>
                            <td><?php echo $row['Student_ID']; ?></td>
                            <td><?php echo $row['College']; ?></td>
                            <td><?php echo $row['Phone_Number']; ?></td>
                            <td class="book-title"><?php echo $row['Book_Name']; ?></td>
                            <td><?php echo $row['Borrowing_Day']; ?></td>
                            <td><span class="days-badge"><?php echo $row['Number_of_Days']; ?> Days</span></td>
                            <td class="return-date"><?php echo $row['Return_Day']; ?></td>
                        </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr><td colspan="9">No active borrowings found.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>

            <div class="action-bar">
                <button type="submit" name="delete_borrowing" class="btn btn-delete" onclick="return confirm('Remove selected records?')">
                    <i class="fa-solid fa-calendar-xmark"></i> Clear Records
                </button>
            </div>
        </form>
    </div>

</body>
</html>