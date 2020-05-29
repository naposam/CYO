	<?php include('DbCon.php'); ?>
	<form action="delete_stud.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<div class="pull-right">
	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
	
	</div>
	<br><br>
		<thead>
		<tr>
		            <th>Crusader ID</th>
					<th>First Name</th>
					<th>Last Name</th>
                    <th>Diocese</th>
                    <th>Deanery</th>
                    <th>Parish</th>
                    <th>Unit</th>
					<th>Section </th>
					<!--<th>View Record</th>
					<th>Update Records</th>-->
					<th class="empty"></th>
					<th class="empty"></th>
					<th class="empty"></th>
		</tr>
		</thead>
		<tbody>
		<?php
		//$query = mysqli_query($mysqli,"select * from students where Class=''")or die(mysqli_error($mysqli));

	 $query_central = mysqli_query($mysqli," select * from  crusaders where region='CENTRAL'")or die(mysqli_error($mysqli));

		while($row = mysqli_fetch_array($query_central)){
				
		$id = $row['id'];
		
         


		/*
		$query2=mysql_query("select * from class where class_name='$myclass' ")or die(mysql_error());
		while($row2 = mysql_fetch_array($query2)){
		$class_fee =$row2['fee'];
		}
		*/	
		?>
		<tr>
		<td><?php echo $row['crusader_id'];?></td> 
		<td><?php echo $row['fname'];?></td> 
		<td><?php echo $row['lname']; ?></td>
		<td><?php echo $row['diocese']; ?></td> 
		<td><?php echo $row['deanery'];?></td> 
		<td><?php echo $row['parish'];?></td> 
		<td><?php echo $row['unit']; ?></td>
		<td><?php echo $row['section']; ?></td>
		<td><a href="" class="btn btn-success btn-sm">view </a></td> 
		<td><a href="" class="btn btn-success btn-sm">update </a></td>
		<td class="empty"></td>
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>