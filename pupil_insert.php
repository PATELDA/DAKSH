<?php
include "../dbcon/dbcon.php";
// Check if the form is submitted
if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $parent1 = $_POST['parent1'];
    $parent2 = $_POST['parent2'];
    $class_id = $_POST['class_id'];
    $teacher_id = $_POST['teacher_id'];
    $register_at = date('Y-m-d');

    // Insert the form data into the database
    $sql = "INSERT INTO pupil (p_firstname, p_lastname, p_address, p_dob, p_parent1, p_parent2, class_id, teacher_id, registered_at) VALUES ('$fname', '$lname', '$address', '$dob', '$parent1', '$parent2', '$class_id', '$teacher_id', '$register_at')";
    if (mysqli_query($dbcon, $sql)) {
        header("location:../pupil_list.php");
    } else {
        echo "Error: " . mysqli_error($dbcon);
    }

    // Close the database connection
    mysqli_close($dbcon);
}
