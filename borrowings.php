<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Entry</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="overlay">

    <div class="form-box">
        <h2>Create Borrowing</h2>

        <form action="save_student.php" method="POST">

            <label>Student Name</label>
            <input type="text" name="student_name" required>

            <label>Student ID</label>
            <input type="text" name="student_id" required>

            <label>Phone Number</label>
            <input type="text" name="phone_number" required>


            <label>College</label>
            <select name="college" required>
                <option value="">Select College</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Engineering">Engineering</option>
            </select>

            <label>Time</label>
            <input type="time" name="time" required>

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
