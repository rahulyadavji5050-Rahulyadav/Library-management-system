<?php
include "db.php";

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $author = $_POST['author'];
    $qty = $_POST['qty'];

    mysqli_query($conn,"INSERT INTO books(name,author,quantity)
    VALUES('$name','$author','$qty')");
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
<form method="post">
<h2>Add Book</h2>
<input type="text" name="name" placeholder="Book Name">
<input type="text" name="author" placeholder="Author">
<input type="number" name="qty" placeholder="Quantity">
<button name="add">Add</button>
</form>
</div>