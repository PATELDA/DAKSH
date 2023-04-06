<?php 
  session_start();
  include "../dbcon/dbcon.php";
 if(isset($_POST["userEmail"]) && isset($_POST["password"])){
    $email=$_POST["userEmail"];
    $password=$_POST["password"];
    $qry=mysqli_query($dbcon,"SELECT * FROM admin_login WHERE email='$email'");
    $arr=mysqli_fetch_assoc($qry);
    if($qry){
    	$rows=mysqli_num_rows($qry);
    	if($rows > 0){
           if($arr["password"] == $password){     
               $_SESSION["aid"] = $arr["id"];
               header("location:../dashboard.php");
           }else{
           	  header("location:../index.php?message=Invalid Password....");
           }
    	}else{
    		header("location:../index.php?message=Invalid Email ID....");
    	}
    }
 }
?>