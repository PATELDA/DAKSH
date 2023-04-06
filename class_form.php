<?php 
  session_start();
  include "../dbcon/dbcon.php";
 if(isset($_POST["class_name"]) && isset($_POST["class_capacity"])){
    $class_name=$_POST["class_name"];
    $class_capacity=$_POST["class_capacity"];
    $annual_fee=$_POST["annual_fee"];
    $qry=mysqli_query($dbcon,"INSERT INTO classes(class_name,class_capacity,annual_fee) VALUES('$class_name','$class_capacity','$annual_fee')");
    if($qry){
        header("location:../class_list.php");
    }else{
        header("location:../add_classes.php?message=Something went wrong..");
    }
 }
?>