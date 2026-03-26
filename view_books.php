<?php
session_start();
include "db.php";

// Security: agar login nahi hai to redirect
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Books</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Dashboard Background */
        body {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                        url('images/rahul2.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
        }

        /* Navbar */
        .navbar {
            background: #2c3e50;
            color: white;
            padding: 15px;
            font-size: 22px;
            text-align: center;
            position: relative;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            position: absolute;
            right: 20px;
            top: 15px;
        }

        /* Container */
        .container {
            width: 90%;
            margin: 40px auto;
            overflow-x: auto; /* Mobile scroll */
        }

        h2 {
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }

        /* Table Styling */
        .view-books-table {
            width: 100%;
            border-collapse: collapse;
            background: rgba(255,255,255,0.9);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .view-books-table th, .view-books-table td {
            padding: 12px;
            text-align: center;
        }

        .view-books-table th {
            background-color: #3498db;
            color: white;
        }

        .view-books-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .view-books-table tr:hover {
            background-color: #d1ecf1;
            transition: 0.3s;
        }
    </style>
</head>
<body class="dashboard-bg">


    
    <div class="container">
        <h2>All Books</h2>

        <table class="view-books-table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Author</th>
                <th>Quantity</th>
            </tr>

            <?php
            $res = mysqli_query($conn, "SELECT * FROM books ORDER BY id DESC");
            if(mysqli_num_rows($res) > 0){
                while($row = mysqli_fetch_array($res)){
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['author']}</td>
                        <td>{$row['quantity']}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No books available</td></tr>";
            }
            ?>
        </table>
    </div>

</body>
</html>