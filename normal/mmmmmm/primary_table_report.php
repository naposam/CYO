	<?php include('DbCon.php'); ?>
	<form action="delete_stud.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<div class="pull-right">
	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
	
	</div>
	<br><br>
		<thead>
		<tr>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Last Name</th>
					<th>Class </th>
					<th>Gender</th>
					<th>Marks Entry</th>
					<th>Report Card</th>
		</tr>
		</thead>
		<tbody>
		<?php
		//$query = mysqli_query($mysqli,"select * from students where Class=''")or die(mysqli_error($mysqli));

	 $query_primary = mysqli_query($mysqli," select * from students, Class where students.class = class.class_name AND class.category ='Primary'")or die(mysqli_error($mysqli));

		while($row = mysqli_fetch_array($query_primary)){
			
		$myclass=$row['Class'];	
		$id = $row['Student_id'];
		
         


		/*
		$query2=mysql_query("select * from class where class_name='$myclass' ")or die(mysql_error());
		while($row2 = mysql_fetch_array($query2)){
		$class_fee =$row2['fee'];
		}
		*/	
		?>
		<tr>
		<td><?php echo $row['Firstname'];?></td> 
		<td><?php echo $row['Middlename']; ?></td>
		<td><?php echo $row['Lastname']; ?></td>
		<td><?php echo $row['Class']; ?></td> 
		<td><?php echo $row['Gender']; ?></td> 
		<td><a href="" class="btn btn-success"><i class="icon-pencil icon-large"></i> Enter Marks</a></td> 
		<td><a href="" class="btn btn-success"><i class="icon-pencil icon-large"> Report</a></td>
		
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>