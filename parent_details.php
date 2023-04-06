<?php
include "dbcon/dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div style="text-align:right" class="mt-40">
        <div style="display:flex;justify-content:end">
            <a href="parent_list.php" style="text-decoration:none;margin-right:10px;">Parent List</a>
            <a href="dashboard.php" style="text-decoration:none;margin-right:10px;">Dashboard</a>
            <a href="logout.php" style="text-decoration:none;">Logout</a>  
        </div>
    </div>
    <div class="form-wrapper">
        <h2>Parent Detail Form</h2>
        <form method="POST" action="form_action/p_details_insert.php">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="address">Address:</label>
            <textarea type="text" id="address" name="address" rows="5" required></textarea>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>