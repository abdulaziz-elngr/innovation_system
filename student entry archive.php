<?php
// الاتصال بقاعدة البيانات
include('db.php');

// لو ضغطنا على زرار "Mark as Left"
if(isset($_POST['mark_left'])){
    if(!empty($_POST['selected_students'])){
        foreach($_POST['selected_students'] as $student_id){
            $update = "UPDATE student_entry_archive 
                       SET leave_time = NOW() 
                       WHERE id = $student_id";
            mysqli_query($conn, $update);
        }
    }
}

// لو ضغطنا على زرار "Delete Student"
if(isset($_POST['delete_student'])){
    if(!empty($_POST['selected_students'])){
        foreach($_POST['selected_students'] as $student_id){
            $delete = "DELETE FROM student_entry_archive WHERE id = $student_id";
            mysqli_query($conn, $delete);
        }
    }
}

// جملة SQL لجلب بيانات الطلاب
$query = "SELECT id, student_name, student_id, college, entry_time, leave_time 
          FROM student_entry_archive 
          ORDER BY entry_time DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Entry - Innovation Library</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('images/room.jpg') no-repeat center center fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      flex-direction: column;
    }

    h2 {
      text-align: center;
      color: #7c1cb7;
      margin: 30px 0 10px;
      font-size: 32px;
    }

    .container {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
      overflow-y: auto;
    }

    form {
      width: 100%;
      max-width: 1200px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 16px;
    }

    table th, table td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: center;
    }

    table th {
      background-color: #7c1cb7;
      color: white;
    }

    table tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    table tr:hover {
      background-color: #e0d7f7;
    }

    .btn {
      margin-top: 20px;
      margin-right: 10px;
      padding: 10px 20px;
      background-color: #7c1cb7;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    .btn:hover {
      background-color: #6a1b9a;
    }

    .btn-danger {
      background-color: #b71c1c;
    }

    .btn-danger:hover {
      background-color: #e53935;
    }

    .btn i {
      margin-right: 8px;
    }
  </style>
</head>
<body>
  <h2>Student Entry Archive</h2>
  <div class="container">
    <form method="POST" action="">
      <table>
        <tr>
          <th>Select</th>
          <th>ID</th>
          <th>Student Name</th>
          <th>Student ID</th>
          <th>College</th>
          <th>Entry Time</th>
          <th>Leave Time</th>
        </tr>
        <?php
        if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                    <td><input type='checkbox' name='selected_students[]' value='".$row['id']."'></td>
                    <td>".$row['id']."</td>
                    <td>".$row['student_name']."</td>
                    <td>".$row['student_id']."</td>
                    <td>".$row['college']."</td>
                    <td>".$row['entry_time']."</td>
                    <td>".$row['leave_time']."</td>
                  </tr>";
          }
        } else {
          echo "<tr><td colspan='7'>No records found</td></tr>";
        }
        ?>
      </table>
      <button type="submit" name="mark_left" class="btn">
        <i class="fa-solid fa-check" style="color:white;"></i> Leave
      </button>
      <button type="submit" name="delete_student" class="btn btn-danger">
        <i class="fa-solid fa-trash"></i> Delete Student
      </button>
    </form>
  </div>
</body>
</html>