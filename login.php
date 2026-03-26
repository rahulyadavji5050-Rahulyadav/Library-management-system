<?php
session_start();
include "db.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Wrong Username or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<form method="post" action="">
    <h2 style="text-align:center;">Login</h2>

    <input type="text" name="username" placeholder="Enter Username" required>
    <input type="password" name="password" placeholder="Enter Password" required>

    <button type="submit" name="login" class="btn">Login</button>
</form>

</body>
</html>


















