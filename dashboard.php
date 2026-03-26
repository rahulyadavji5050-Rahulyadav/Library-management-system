<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>
<link rel="stylesheet" href="style.css">

<div class="navbar">Library Management System</div>

<div class="container">

<div class="card">
<h3>Add Book</h3>
<a href="add_book.php" class="btn">Open</a>
</div>

<div class="card">
<h3>View Books</h3>
<a href="view_books.php" class="btn">Open</a>
</div>

<div class="card">
<h3>Issue Book</h3>
<a href="issue_book.php" class="btn">Open</a>
</div>

<div class="card">
<h3>Return Book</h3>
<a href="return_book.php" class="btn">Open</a>
</div>

<div class="card">
<h3>Records</h3>
<a href="records.php" class="btn">Open</a>
</div>
<div class="logout-box">
    <a href="logout.php">Logout</a>
    
</div>
</div>