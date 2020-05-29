	<?php include('DbCon.php'); ?>
	<form action="delete_stud.php" method="post">
	<table cellpadding="0" cellspacing="0" border="//1" class="table" id="example">
		<div class="pull-right">
	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
<!-- 	<a href="add_crusaderin.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Add Crusader</a>
 -->	</div>
	<!--<a data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i> Delete</a>-->
	<br><br>
	<!-- <?php include('modal_delete.php'); ?> -->
		<thead>
		<tr>
                    <th>CRUSADER ID</th>
					<th>FULL NAME</th>
                    <th>DIOCESE</th>
                    <th>DEANERY</th>
                    <th>PARISH</th>
                    <th>UNIT</th>
				
					<td class="empty"></td>
					<td class="empty"></td>
					<td class="empty"></td>
					
		</tr>
		</thead>
		<tbody>
		<?php
     $sql="SELECT *, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where id='$session_id'";
        $resultSet=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
        $fetch=mysqli_fetch_array($resultSet);
        $deanery=$fetch['deanery_name'];
        $diocese=$fetch['diocese_name'];
        $parish=$fetch['parish_name'];
        $unit=$fetch['unit_name'];

		$query=mysqli_query($mysqli,"SELECT *, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where unit.unit_name='$unit'") or die(mysqli_error($mysqli));

		//$query = mysqli_query($mysqli,"select * from crusaders ")or die(mysqli_error($mysqli));
		while($row = mysqli_fetch_array($query)){
		$id = $row['crusader_id'];
		?>
		<tr>
		<td><?php echo $row['crusader_id']; ?></td> 
		<td><?php echo $row['fname'].' '.$row['mname'].' '.$row['lname'];?></td> 
		
		<td><?php echo $row['diocese_name']; ?></td> 
		<td><?php echo $row['deanery_name']; ?></td> 
		<td><?php echo $row['parish_name']; ?></td> 
		<td><?php echo $row['unit_name']; ?></td> 
	
		
		<!--<td  width="20"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php// echo $id; ?>"></td>-->
		<!-- <td >
		<a data-placement="left" title="Click to Edit" id="edit<?php// echo $id; ?>" href="edit_stud.php<?php //echo '?id='.$id; ?>" class="btn btn-success"> Edit</a></td>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#edit<?php //echo $id; ?>').tooltip('show');
				$('#edit<?php //echo $id; ?>').tooltip('hide');
			});
			</script> -->
			<td>
		<a data-placement="top" title="Click to View all Details" id="view<?php echo $id; ?>" href="view_stud.php<?php echo '?id='.$id; ?>" class="btn btn-warning"> View</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#view<?php echo $id; ?>').tooltip('show');
				$('#view<?php echo $id; ?>').tooltip('hide');
			});
			</script>
		</td>
		<td>
		<td >
        
			<a href="delete_crusader.php?del_id=<?php echo $row['crusader_id'];?>" onclick="return confirm('Are you sure you want to delete Crusader?');" class="btn btn-danger" id="delete<?php echo $row['id'];?>" title="Click to delete " data-toggle="modal">Delete</a>
            <script type="text/javascript">
			$(document).ready(function(){
				$('#delete<?php echo $row['id']; ?>').tooltip('show');
				$('#delete<?php echo $row['id']; ?>').tooltip('hide');
			});
			</script>
			
		</td>
		
		<!-- <td></td>	 -->
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>