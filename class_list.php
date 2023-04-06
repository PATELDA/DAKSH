<?php
 include "dbcon/dbcon.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Class List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div class="mt-40">
	    <div style="text-align:right" class="mt-40">
	        <div style="display:flex;justify-content:end">
	            <a href="dashboard.php" style="text-decoration:none;margin-right:10px;">Dashboard</a>
	            <a href="logout.php" style="text-decoration:none;">Logout</a>  
	        </div>
	    </div>
		<a href="add_classes.php" class="m-10" style="text-decoration:none">+ Add New</a><br><br><br>
		<table style="width:100%;" border="1">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>class_capacity</th>
					<th>annual_fee</th>		
				</tr>
			</thead>
			<tbody>
				<?php
                 $qry=mysqli_query($dbcon,"SELECT * FROM classes");
                 if($qry){
                 	$sno=1;
                 	$rows=mysqli_num_rows($qry);
                 	if($rows > 0){
                 		while($arr=mysqli_fetch_assoc($qry)){
                ?>
                    <tr>
                    	<td><?= $sno;?></td>
                    	<td><?= $arr['class_name'] ?></td>
                    	<td><?= $arr['class_capacity'];?></td>
                    	<td><?= $arr['annual_fee'];?></td>  
                    </tr>

                <?php
                    $sno++;
                 		}
                 	?>
                     
                 	<?php
                 	}
                 }
				?>
			</tbody>

		</table>
	</div>

</body>
</html>