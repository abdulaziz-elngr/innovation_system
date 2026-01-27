<?php
$conn = mysqli_connect("localhost", "root", "", "innovation_system");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $form_type = $_POST['form_type'];

switch ($form_type) {
    case 'student':
        $name = mysqli_real_escape_string($conn, $_POST['s_name']);
        $s_id = mysqli_real_escape_string($conn, $_POST['s_id']);
        $college = mysqli_real_escape_string($conn, $_POST['s_college']);
        $entry_time = !empty($_POST['s_entry']) ? $_POST['s_entry'] : date("H:i:s");
        $leave_time = !empty($_POST['s_leave']) ? $_POST['s_leave'] : null;

        $sql = "INSERT INTO student_entry_archive (Student_Name, Student_ID, College, Entry_Time, Leave_Time)
                VALUES ('$name', '$s_id', '$college', '$entry_time', '$leave_time')";
        break;

    case 'book':
        $name = mysqli_real_escape_string($conn, $_POST['bk_name']);
        $author = mysqli_real_escape_string($conn, $_POST['bk_author']);
        $pub_house = mysqli_real_escape_string($conn, $_POST['bk_publisher']);
        $isbn = mysqli_real_escape_string($conn, $_POST['bk_isbn']);
        $edition = mysqli_real_escape_string($conn, $_POST['bk_edition']);
        $college = mysqli_real_escape_string($conn, $_POST['bk_college']);

        $sql = "INSERT INTO books (Book_Name, Author, Publishing_House, ISBN, Edition_Number, College)
                VALUES ('$name', '$author', '$pub_house', '$isbn', '$edition', '$college')";
        break;

    case 'category':
        $name = mysqli_real_escape_string($conn, $_POST['cat_name']);
        $total = mysqli_real_escape_string($conn, $_POST['cat_total']);

        $sql = "INSERT INTO category (Category_Name, Total_Books)
                VALUES ('$name', '$total')";
        break;

    case 'borrow':
        $s_name = mysqli_real_escape_string($conn, $_POST['student_name']);
        $s_id = mysqli_real_escape_string($conn, $_POST['student_id']);
        $college = mysqli_real_escape_string($conn, $_POST['college']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone_number']);
        $b_name = mysqli_real_escape_string($conn, $_POST['book_name']);
        $b_day = mysqli_real_escape_string($conn, $_POST['borrowing_day']);
        $n_day = mysqli_real_escape_string($conn, $_POST['number_of_days']);

        $return_date = date("Y-m-d", strtotime($b_day . " + $n_day days"));

        $sql = "INSERT INTO borrowing_archive (Student_Name, Student_ID, College, Phone_Number, Book_Name, Borrowing_Day, Number_of_Days, Return_Day)
                VALUES ('$s_name', '$s_id', '$college', '$phone', '$b_name', '$b_day', '$n_day', '$return_date')";
        break;
}
    if (mysqli_query($conn, $sql)) {
        // Redirect back to home with a success message
        header("Location: home.php?status=success");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>