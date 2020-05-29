<?php include('DbCon.php'); ?>

	<!--<?php  //include('pending_transaction.php');?>-->
	<form action="" method="post">
	<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
		<div class="pull-right">
	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
	<!-- <a href="add_crusaderin.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Add Crusader</a> -->
	</div>

	<!--<a data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i> Delete</a>-->
	<br><br><br><br>
	<?php include('../modal_delete.php'); ?>
		<thead>
		<tr>
                    <th>CRUSADER ID</th>
					<th>FULL NAME</th>
                    <th>UNIT</th>
                    <th>SECTION</th>
                    <th hidden="hidden"></th>
					<th hidden="hidden"></th>
					<td class="empty"></td>
					
		</tr>
		</thead>
		<tbody>
		<?php

    $sql="SELECT *, diocese.diocese_name,deanery.deanery_name,diocese.diocese_id,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where id='$session_id'";
        $resultSet=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
        $fetch=mysqli_fetch_array($resultSet);
        $deanery=$fetch['deanery_name'];
        $diocese=$fetch['diocese_name'];
        $parish=$fetch['parish_name'];
        $unit=$fetch['unit_name'];
        $diocese_id=$fetch['diocese_id'];

		$query=mysqli_query($mysqli,"SELECT distinct(crusaders.crusader_id), crusaders.*,year(curDate())-year(DOB) as age, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name,annual_registration_paymenttbl.status FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id LEFT JOIN annual_registration_paymenttbl on crusaders.crusader_id=annual_registration_paymenttbl.crusader_id where annual_registration_paymenttbl.status=0 and annual_registration_paymenttbl.diocese_id='$diocese_id'") or die(mysqli_error($mysqli));
    
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
          		

		?>
		<tr>
		<td><?php echo $row['crusader_id']; ?></td> 
		<td><?php echo $row['fname'].' '.$row['mname'].' '.$row['lname'];?></td> 
		<td><?php echo $row['unit_name']; ?></td> 
		<td><?php echo $section; ?></td>
		<td hidden="hidden"><?php echo $row['deanery_name']; ?></td>
		<td hidden="hidden"><?php echo $row['parish_name']; ?></td>

		
		<!--<td  width="20"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>-->
		<td >
		<a data-placement="left" title="Click to Pay for a crusader" id="edit<?php echo $id; ?>" href="view_account_details.php<?php echo '?id='.$id; ?>" class="btn btn-info">view Acco. </a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#edit<?php echo $id; ?>').tooltip('show');
				$('#edit<?php echo $id; ?>').tooltip('hide');
			});
			</script>
			 </td>
			<!--<td>
		<a data-placement="top" title="Click to View all Details" id="view<?php echo $id; ?>" href="payreg_table.php<?php echo '?id='.$id; ?>" class="btn btn-warning"> pay </a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#view<?php echo $id; ?>').tooltip('show');
				$('#view<?php echo $id; ?>').tooltip('hide');
			});
			</script>
		</td>-->
	
	
			<!-- this delete button is not needed here-->
		<!--<td >
        
			<a data-placement="top" onclick="return confirm('Are you sure you want to delete Crusader?');" title="Click to View all Pending Transactions" id="view<?php echo $id; ?>" href="delete_crusader.php?del_id=<?php echo $row['id'];?>" class="btn btn-danger"> Delete </a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#delete<?php echo $row['id']; ?>').tooltip('show');
				$('#delete<?php echo $row['id']; ?>').tooltip('hide');
			});
			</script>
			
		</td>-->
		
			
					
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>

	</form>
	<script >
		
	</script>