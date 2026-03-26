<?php
include "db.php";

if(isset($_POST['issue']))
    {
    $book_id = $_POST['book_id'];   
    $book = $_POST['book'];
    $student = $_POST['student'];

    mysqli_query($conn,"INSERT INTO issue_books(book_id, book_name, student_name, issue_date)
    VALUES('$book_id', '$book', '$student', NOW())");

    echo "Book Issued Successfully";
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
<form method="post">
<h2>Issue Book</h2>

<!-- Book ID Field Added -->
<input type="text" name="book_id" placeholder="Book ID" required>

<input type="text" name="book" placeholder="Book Name" required>
<input type="text" name="student" placeholder="Student Name" required>
<button name="issue">Issue</button>
</form>
</div>