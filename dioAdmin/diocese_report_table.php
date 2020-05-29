<?php include('DbCon.php'); ?>

	
	<form action="" method="post">
	<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
		<script type="text/javascript">
			
		</script>
		<div class="pull-right">
	 
	
	</div>
	
	
		<thead>
			<tr>
		<td>DIOCESE</td>
		<td>ACCOUNT DETAILS</td>
		
	</tr>
		</thead>
		<tbody>
		   <?php
$sql="SELECT *, diocese.diocese_name,deanery.deanery_name,deanery.deanery_id,diocese.diocese_id,parish.parish_name,parish.parish_id,unit.unit_name,unit.unit_id FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where id='$session_id'";
        $resultSet=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
        $fetch=mysqli_fetch_array($resultSet);
        $deanery=$fetch['deanery_name'];
        $diocese=$fetch['diocese_name'];
        $parish=$fetch['parish_name'];
        $unit=$fetch['unit_name'];
        $diocese_id=$fetch['diocese_id'];
        $unit_id=$fetch['unit_id'];
        $parish_id=$fetch['parish_id'];
         $deanery_id=$fetch['deanery_id'];
		

		   $query=mysqli_query($mysqli,"SELECT DISTINCT(diocese.diocese_name),diocese.*,annual_registration_paymenttbl.status from diocese left JOIN annual_registration_paymenttbl  on annual_registration_paymenttbl.diocese_id=diocese.diocese_id where annual_registration_paymenttbl.status=1 and diocese.diocese_id='$diocese_id' ") or die(mysqli_error($mysqli));
 while($row=mysqli_fetch_array($query)){

	$diocese=$row['diocese_name'];
	$diocese_id=$row["diocese_id"];
	?>
	<tr>
    <td><?php echo $diocese;?></td>
    <td>
   <a data-placement="left" title="Click to Pay for a crusader" id="edit<?php echo $diocese_id; ?>" href="view_diocese_account.php<?php echo '?id='.$diocese_id; ?>" class="btn btn-info">view Acco. </a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#edit<?php echo $id; ?>').tooltip('show');
				$('#edit<?php echo $id; ?>').tooltip('hide');
			});
			</script>
     </tr>

  
	<?php
 }

	?>
		</tbody>
	</table>
	
	</form>
	<script >
		
	</script>