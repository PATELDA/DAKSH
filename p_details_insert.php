<?php
include "../dbcon/dbcon.php";
// Check if the form is submitted
if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];


    // Insert the form data into the database
    $sql = "INSERT INTO parentdetails (pa_firstname, pa_lastname, pa_email, pa_address, pa_phone) VALUES ('$fname', '$lname', '$email', '$address', '$phone')";
    if (mysqli_query($dbcon, $sql)) {
        header("location:../parent_details.php");
    } else {
        echo "Error: " . mysqli_error($dbcon);
    }
}
