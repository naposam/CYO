	<?php include('DbCon.php'); ?>
	<form action="delete_stud.php" method="post">
	<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
		<div class="pull-right">
	 <!-- <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> --> 
<!-- 	<a href="add_crusaderin.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Add Crusader</a>
 -->	</div>
	<!--<a data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i> Delete</a>-->
	<br><br>
	<!-- <?php include('modal_delete.php'); ?> -->
		<thead>
		<tr>
                    <th>Crusader Id</th>
                    <th>Image</th>
					<th>Full Name</th>
                    <th>Unit</th>
                    <th class="empty"></th>
					<td class="empty"></td>
					<td class="empty"></td>
					<td class="empty"></td>
		</tr>
		</thead>
		<tbody>
		<?php
     //selecting unconfirm crusaders from the tmptable
$sql="SELECT *, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where id='$session_id'";
        $resultSet=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
        $fetch=mysqli_fetch_array($resultSet);
        $deanery=$fetch['deanery_name'];
        $diocese=$fetch['diocese_name'];
        $parish=$fetch['parish_name'];
        $unit=$fetch['unit_name'];

		$query=mysqli_query($mysqli,"SELECT *, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM tempcrusaders LEFT JOIN diocese ON tempcrusaders.diocese = diocese.diocese_id LEFT JOIN deanery on tempcrusaders.deanery=deanery.deanery_id LEFT JOIN parish on tempcrusaders.parish=parish.parish_id LEFT JOIN unit on tempcrusaders.unit=unit.unit_id where unit.unit_name='$unit'") or die(mysqli_error($mysqli));


		
		while($row = mysqli_fetch_array($query)){
		$id = $row['crusader_id'];
		$pic= $row['picture'];
		?>
		<tr >
		<td><?php echo $row['crusader_id']; ?></td> 
		<td><img src="../uploads/<?php echo $pic;?>"  height="100px" width="70px" style='border-radius: 100px; margin: 0; padding: 0;'></td>
		<td><?php echo $row['fname'].' '.$row['mname'].' '.$row['lname'];?></td>
		<td><?php echo $row['unit_name']; ?></td> 


	
		
		
			<td>
		<a data-placement="top" title="Click to View all Details" id="view<?php echo $id; ?>" href="confirm_crusaders.php<?php echo '?id='.$id; ?>" class="btn btn-warning">CONFIRM REG</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#view<?php echo $id; ?>').tooltip('show');
				$('#view<?php echo $id; ?>').tooltip('hide');
			});
			</script>
		</td>
		<td>
		<td >
        
			<a href="delete_temp_crusader.php?del_id=<?php echo $row['crusader_id'];?>" onclick="return confirm('Are you sure you want to delete Crusader?');" class="btn btn-danger" id="delete<?php echo $row['id'];?>" title="Click to delete " data-toggle="modal">DELETE</a>
            <script type="text/javascript">
			$(document).ready(function(){
				$('#delete<?php echo $row['id']; ?>').tooltip('show');
				$('#delete<?php echo $row['id']; ?>').tooltip('hide');
			});
			</script>
			
		</td>
		
		<td></td>	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>