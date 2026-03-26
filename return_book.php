<?php
include "db.php";

if(isset($_POST['return'])){
    $book_id = $_POST['book_id']; // Book ID field

    mysqli_query($conn,"UPDATE issue_books 
    SET return_date = NOW() 
    WHERE book_id='$book_id' AND return_date IS NULL");

    echo "Book Returned Successfully";
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
<form method="post">
<h2>Return Book</h2>

<!-- Book ID Field -->
<input type="text" name="book_id" placeholder="Book ID" required>

<button name="return">Return</button>
</form>
</div>