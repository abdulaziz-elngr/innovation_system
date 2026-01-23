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

            
         <label>Book Name</label>
            <input type="text" name="Book_Name" required>

              <label>College</label>
            <select name="college" required>
             <option value="">Select College</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Engineering">Engineering</option>
                <option value="Business">Business</option>
                <option value="Applied Arts">Applied Arts</option>
                <option value="Nursing">Nursing</option>
             <option value="Physical Therapy">Physical Therapy</option>
            </select>

             <label>Days</label>
            <select name="Days" required>
                <option value="">Select Day</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
            </select>


            <label>Number of Days</label>
            <select name="Days" required>
                <option value="">Select Number of Days</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>


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
