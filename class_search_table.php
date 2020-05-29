	<?php include('DbCon.php'); ?>
	<form action="" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<div class="pull-right">
	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
	 
	</div>
<br><br>
		<thead>
		<tr>
					<th>Student Name</th>
					<th>Class</th>
					<th>Date Of Admission</th>
					<th>Gender</th>
					<th>Guardian Number</th>
					<th >Address</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$query2 = mysqli_query($mysqli,"select * from students  ")or die(mysqli_error($mysqli));
		while($row2= mysqli_fetch_array($query2)){
		$student_name = $row2['Firstname'].' '.$row2['Middlename'].' '.$row2['Lastname'];
		$Address =$row2['Address'];
		$gender =$row2['Gender']; 
		$myclass =$row2['Class'];
		$date_add=$row2['DOA'];
		$tel=$row2['Tel'];
		
		?>
		<tr>
		<td><?php echo $student_name; ?></td> 
		<td><?php echo $myclass ; ?></td> 
		<td><?php echo $date_add; ?></td> 
		<td><?php echo $gender; ?></td> 
		<td><?php echo $tel; ?></td> 
	    <td><?php echo $Address; ?></td>
		</tr>
	  <?php }?>  
	
		</tbody>
	</table>
	</form>