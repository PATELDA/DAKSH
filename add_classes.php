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
	        	  <a href="class_list.php" style="text-decoration:none;margin-right:10px;">Class List</a> 
	            <a href="dashboard.php" style="text-decoration:none;margin-right:10px;">Dashboard</a>
	            <a href="logout.php" style="text-decoration:none;">Logout</a>  
	        </div>
	    </div>
		<form action="form_action/class_form.php" method="post" enctype="multipart/form-data">
			  <h2>Add Teacher Form</h2>
			  	<?php
		           if($message != ''){
		              echo "<div class='text-center bg-red p-10 m-10'>".$message."</div>";
		           }
				?>
			  <label for="class_name"><b>Class Name:</b></label>
			  <input type="text" id="class_name" name="class_name" required>

			  <label for="class_capacity"><b>Class Capacity:</b></label>
			  <input type="text" id="class_capacity" name="class_capacity" required>

			  <label for="annual_fee"><b>Annual Fee:</b></label>
			  <input type="text" id="annual_fee" name="annual_fee" required>

			  <input type="submit" value="Add Class">
		</form>
	</div>
</body>
</html>