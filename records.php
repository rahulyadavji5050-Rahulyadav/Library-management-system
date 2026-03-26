<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Issue & Return Records</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Page background */
        body {
            background-color: #f7f7f7; /* Light grey background */
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Navbar */
        .navbar {
            background-color: #d7dbe0;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 22px;
        }

        /* Container */
        .container {
            width: 90%;
            margin: 30px auto;
            overflow-x: auto; /* Mobile scroll */
        }

        h2 {
            text-align: center;
            color: #f5f6f8;
            margin-bottom: 20px;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff; /* White table background */
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #d1ecf1;
            transition: 0.3s;
        }
    </style>
</head>
<body>

    <div class="navbar">Library Records</div>

    <div class="container">
        <h2>Issue & Return Records</h2>

        <table>
            <tr>
                <th>Book ID</th> <!-- New Column -->
                <th>Book Name</th>
                <th>Student Name</th>
                <th>Issue Date</th>
                <th>Return Date</th>
                <th>Status</th>
            </tr>

            <?php
            $res = mysqli_query($conn,"SELECT * FROM issue_books ORDER BY id DESC");
            if(mysqli_num_rows($res) > 0){
                while($row = mysqli_fetch_array($res)){
                    $status = ($row['return_date'] == NULL) ? "Issued" : "Returned";

                    echo "<tr>
                        
                        <td>{$row['book_id']}</td> <!-- Book ID -->
                        <td>{$row['book_name']}</td>
                        <td>{$row['student_name']}</td>
                        <td>{$row['issue_date']}</td>
                        <td>{$row['return_date']}</td>
                        <td>$status</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No records found</td></tr>";
            }
            ?>
        </table>
    </div>

</body>
</html>