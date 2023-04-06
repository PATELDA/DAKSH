<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Teacher</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
  $message=(!isset($_GET["message"]) || $_GET["message"] == '') ? "" : $_GET["message"];
?>
	<div class="mt-40">
	    <div style="text-align:right" class="mt-40">
	        <div style="display:flex;justify-content:end">
	        	  <a href="teacher_list.php" style="text-decoration:none;margin-right:10px;">Teacher List</a> 
	            <a href="dashboard.php" style="text-decoration:none;margin-right:10px;">Dashboard</a>
	            <a href="logout.php" style="text-decoration:none;">Logout</a>  
	        </div>
	    </div>
		<form action="form_action/teacher_form.php" method="post" enctype="multipart/form-data">
			  <h2>Add Teacher Form</h2>
			  	<?php
		           if($message != ''){
		              echo "<div class='text-center bg-red p-10 m-10'>".$message."</div>";
		           }
				?>
			  <label for="teacher_name"><b>Name:</b></label>
			  <input type="text" id="teacher_name" name="teacher_name" required>
			  <label for="teacher_phone"><b>Phone:</b></label>
			  <input type="text" id="teacher_phone" name="teacher_phone" required>
			  <label for="teacher_salary"><b>salary:</b></label>
			  <input type="text" id="teacher_salary" name="teacher_salary" required>
			  <label for="teacher_image"><b>Image:</b></label>
			  <input type="file" id="teacher_image" name="file" required>
        <label for="teacher_doc"><b>Document:</b></label>
        <select name="document_verification">
        	<option value="verified">Verified</option>
        	<option value="unverified">Not Verified</option>
        </select>
        <label>Address:</label>
        <textarea name="teacher_address" rows="5"></textarea>
			  <input type="submit" value="Add Teacher">
		</form>
	</div>
</body>
</html>