<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="overlay">

    <div class="form-box">
        <h2>Add Book</h2>

        <form action="save_student.php" method="POST">

         <label>Book Name</label>
            <input type="text" name="Book_Name" required>

                     <label>Author</label>
            <input type="text" name="Author" required>

                     <label>Publishing House</label>
            <input type="text" name="publishing_house" required>

         <label>ISBN</label>
            <input type="text" name="ISBN" required>

                     <label>Edition Number</label>
            <input type="text" name="edition_number" required>



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

            <div class="form-buttons">
                <button type="submit" class="save-btn">Save</button>    
            </div>

        </form>
    </div>

</div>

</body>
</html>
