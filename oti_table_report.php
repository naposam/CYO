	<?php include('DbCon.php'); ?>
	<form action="delete_stud.php" method="post">
	<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
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
	
$query=mysqli_query($mysqli,"SELECT *,year(curDate())-year(DOB) as age, region.name, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN region on crusaders.region=region.reg_id LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where region.name='OTI'") or die(mysqli_error($mysqli));

		//$query = mysqli_query($mysqli,"select * from crusaders ")or die(mysqli_error($mysqli));
		while($row = mysqli_fetch_array($query)){
		$id = $row['crusader_id'];
		$age = $row ['age'];
							if($age>=6){
	      							 $section='INFANT JESUS';
       							}if ($age>=12) {
	      							 $section='YOUNG APOSTLES';
      							 }if ($age>=17){
          							$section='CHRISTIAN SOLDIER';
          						}
	 
		
         


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
		<td><?php echo $row['diocese_name']; ?></td> 
		<td><?php echo $row['deanery_name'];?></td> 
		<td><?php echo $row['parish_name'];?></td> 
		<td><?php echo $row['unit_name']; ?></td>
		<td><?php echo $section; ?></td>
		<td >
		<a data-placement="left" title="Click to Edit" id="edit<?php echo $id; ?>" href="edit_stud.php<?php echo '?id='.$id; ?>" class="btn btn-success"> Edit</a></td>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#edit<?php echo $id; ?>').tooltip('show');
				$('#edit<?php echo $id; ?>').tooltip('hide');
			});
			</script>
			<td>
		<a data-placement="top" title="Click to View all Details" id="view<?php echo $id; ?>" href="view_stud.php<?php echo '?id='.$id; ?>" class="btn btn-warning"> View</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#view<?php echo $id; ?>').tooltip('show');
				$('#view<?php echo $id; ?>').tooltip('hide');
			});
			</script>
		</td>
		<td class="empty"></td>
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>