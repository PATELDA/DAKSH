<?php
 include "dbcon/dbcon.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pupil List</title>
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
		<a href="pupil.php" class="m-10" style="text-decoration:none">+ Add New</a><br><br><br>
		<table style="width:100%;" border="1">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>DOB</th>
					<th>Class</th>
					<th>Address</th>
					<th>Parent1</th>
					<th>Parent2</th>
					<th>Teacher Name</th>		
				</tr>
			</thead>
			<tbody>
				<?php
                 $qry=mysqli_query($dbcon,"SELECT pu.*,p1.pa_firstname AS g11,p1.pa_lastname AS g12,p2.pa_firstname AS g21,p2.pa_lastname AS g22,c.class_name,t.t_name FROM pupil pu LEFT JOIN parentdetails p1 ON p1.parent_id=pu.p_parent1 LEFT JOIN parentdetails p2 ON p2.parent_id = pu.p_parent2 INNER JOIN classes c ON c.class_id=pu.class_id INNER JOIN teacher t ON t.t_id=pu.teacher_id GROUP BY pu.pupil_id");
                 if($qry){
                 	$sno=1;
                 	$rows=mysqli_num_rows($qry);
                 	if($rows > 0){
                 		while($arr=mysqli_fetch_assoc($qry)){

                ?>
                    <tr>
                    	<td><?= $sno;?></td>
                    	<td><?= $arr['p_firstname'].' '.$arr['p_lastname'];?></td>
                    	<td><?= $arr['p_dob'];?></td>
                    	<td><?= $arr['class_name'];?></td>
                    	<td><?= $arr['p_address'];?></td>
                    	<td><?= $arr['g11'].' '.$arr['g12'];?></td>
                    	<td><?= $arr['g21'].' '.$arr['g22'];?></td>
                    	<td><?= $arr['t_name'];?></td>
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