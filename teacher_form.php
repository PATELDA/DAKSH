<?php 
  session_start();
  include "../dbcon/dbcon.php";

  if(!empty($_POST["teacher_name"]) && !empty($_POST["teacher_phone"]) && !empty($_POST["teacher_salary"]) && !empty($_POST["document_verification"]))
  {
  	$teacher_name=$_POST["teacher_name"];
  	$teacher_phone=$_POST["teacher_phone"];
  	$teacher_salary=$_POST["teacher_salary"];
  	$document_verification=$_POST["document_verification"];
    $teacher_image=$_FILES['file']['name'];
    $teacher_address=$_POST["teacher_address"];
    // reference from w3school file uploads
    $uploadOk=1;
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
		$uploadOk = 0;
	    header("location:../add_teacher.php?message=Invalid image type");  
	}
	if($uploadOk == 1){
		move_uploaded_file($_FILES["file"]["tmp_name"],$target_file);
		$qry=mysqli_query($dbcon,"INSERT INTO teacher(t_name,t_address,t_phone,t_salary,t_image,t_doc) VALUES('$teacher_name','$teacher_address','$teacher_phone','$teacher_salary','$teacher_image','$document_verification')");
		if($qry){
           header("location:../teacher_list.php");
		}else{
           header("location:../add_teacher.php?message='Oops Something went wrong..!!'");
		}
	}
  }

 ?>