<?php
include('db.php');

// Mark as Left Logic
if(isset($_POST['mark_left']) && !empty($_POST['selected_students'])){
    foreach($_POST['selected_students'] as $student_id){
        $student_id = mysqli_real_escape_string($conn, $student_id);
        // This updates the NULL value to the actual current time
        mysqli_query($conn, "UPDATE student_entry_archive SET leave_time = NOW() WHERE id = $student_id");
    }
}

// Delete Logic
if(isset($_POST['delete_student']) && !empty($_POST['selected_students'])){
    foreach($_POST['selected_students'] as $student_id){
        $student_id = mysqli_real_escape_string($conn, $student_id);
        mysqli_query($conn, "DELETE FROM student_entry_archive WHERE id = $student_id");
    }
}

$query = "SELECT id, student_name, student_id, college, entry_time, leave_time FROM student_entry_archive ORDER BY entry_time DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Data - Innovation Library</title>
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

        .top-bar { position: fixed; top: 0; width: 100%; height: 70px; background: rgba(0, 0, 0, 0.4); display: flex; align-items: center; justify-content: center; color: white; font-size: 26px; font-weight: bold; z-index: 10; }
        .back-home { position: fixed; top: 15px; left: 20px; color: white; text-decoration: none; font-size: 24px; z-index: 11; }

        .main-container {
            flex: 1;
            margin: 100px 40px 100px 40px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 20px;
            overflow-y: auto;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        table { width: 100%; border-collapse: collapse; color: white; }
        th { background: rgba(111, 66, 193, 0.8); padding: 15px; text-transform: uppercase; font-size: 14px; }
        td { padding: 12px; border-bottom: 1px solid rgba(255, 255, 255, 0.1); text-align: center; background: rgba(255, 255, 255, 0.05); }
        tr:hover td { background: rgba(255, 255, 255, 0.2); }

        .action-bar { display: flex; gap: 15px; margin-top: 20px; justify-content: center; }
        .btn { padding: 12px 25px; border: none; border-radius: 10px; color: white; font-weight: bold; cursor: pointer; display: flex; align-items: center; gap: 8px; transition: 0.3s; }
        .btn-leave { background: #6f42c1; }
        .btn-delete { background: #d9534f; }
    </style>
</head>
<body>

    <a href="home.php" class="back-home"><i class="fa-solid fa-circle-arrow-left"></i></a>
    <div class="top-bar">Student Entry Archive</div>

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
                        <th>Entry Time</th>
                        <th>Leave Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($result) > 0): ?>
                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><input type="checkbox" name="selected_students[]" value="<?php echo $row['id']; ?>"></td>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['student_name']; ?></td>
                            <td><?php echo $row['student_id']; ?></td>
                            <td><?php echo $row['college']; ?></td>
                            <td><?php echo date('h:i A', strtotime($row['entry_time'])); ?></td>
                            <td>
                                <?php 
                                    // FIXED LOGIC: Only show time if leave_time is not empty and not "00:00:00"
                                    if (!empty($row['leave_time']) && $row['leave_time'] != '00:00:00') {
                                        echo date('h:i A', strtotime($row['leave_time']));
                                    } else {
                                        echo "<span style='color:#6f42c1'>Still Inside</span>";
                                    }
                                ?>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr><td colspan="7">No records found.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>

            <div class="action-bar">
                <button type="submit" name="mark_left" class="btn btn-leave">
                    <i class="fa-solid fa-person-walking-arrow-right"></i> Mark as Left
                </button>
                <button type="submit" name="delete_student" class="btn btn-delete" onclick="return confirm('Are you sure?')">
                    <i class="fa-solid fa-trash-can"></i> Delete Selected
                </button>
            </div>
        </form> 
    </div>

</body>
</html> 