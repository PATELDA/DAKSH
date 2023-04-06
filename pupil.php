<?php
include "dbcon/dbcon.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pupil Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div>
        <div style="text-align:right" class="mt-40">
            <div style="display:flex;justify-content:end">
                  <a href="pupil_list.php" style="text-decoration:none;margin-right:10px;">Pupil List</a> 
                <a href="dashboard.php" style="text-decoration:none;margin-right:10px;">Dashboard</a>
                <a href="logout.php" style="text-decoration:none;">Logout</a>  
            </div>
        </div>
    </div>
    <div class="form-wrapper">
        <h2>Add Pupil Form</h2>
        <form method="POST" action="form_action/pupil_insert.php">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="dob">DOB:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="parent1">Parent Name 1:</label>
            <select id="parent1" name="parent1" required>
                <option value="">--Select--</option>
                <?php
                // Fetch Class ID from the database and show in dropdown

                $result = mysqli_query($dbcon, "SELECT * FROM parentdetails");
                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value='" . $row['parent_id'] . "'>" . $row['pa_firstname'] . "</option>";
                }
                ?>
            </select>


            <label for="parent2">Parent Name 2:</label>
            <select id="parent2" name="parent2">
                <option value="">--Select--</option>
                <?php
                // Fetch Class ID from the database and show in dropdown

                $result = mysqli_query($dbcon, "SELECT * FROM parentdetails");
                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value='" . $row['parent_id'] . "'>" . $row['pa_firstname'] . "</option>";
                }
                ?>
            </select>

            <label for="class_id">Class ID:</label>
            <select id="class_id" name="class_id">
                <option value="">--Select--</option>
                <?php
                // Fetch Class ID from the database and show in dropdown

                $result = mysqli_query($dbcon, "SELECT * FROM classes");
                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value='" . $row['class_id'] . "'>" . $row['class_name'] . "</option>";
                }
                ?>
            </select>


            <label for="teacher_id">Teacher ID:</label>
            <select id="teacher_id" name="teacher_id">
                <option value="">--Select--</option>
                <?php
                $result = mysqli_query($dbcon, "SELECT * FROM teacher");
                while ($teacher_row = mysqli_fetch_array($result)) {
                    echo "<option value='" . $teacher_row['t_id'] . "'>" . $teacher_row['t_name'] . "</option>";
                }
                ?>
            </select>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>

</html>