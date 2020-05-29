<?php include('DbCon.php'); ?>

	
	<form action="" method="post">
	<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
		<script type="text/javascript">
			
		</script>
		<div class="pull-right">
	 
	
	</div>
	
	
		<thead>
			<tr>
		<td>DEANERY</td>
		<td>ACCOUNT DETAILS</td>
		
	</tr>
		</thead>
		<tbody>
		   <?php

		

		   $query=mysqli_query($mysqli,"SELECT DISTINCT(deanery.deanery_name),deanery.*,annual_registration_paymenttbl.status from deanery left JOIN annual_registration_paymenttbl  on annual_registration_paymenttbl.deanery_id=deanery.deanery_id where annual_registration_paymenttbl.status=1 ") or die(mysqli_error($mysqli));
 while($row=mysqli_fetch_array($query)){

	$deanery=$row['deanery_name'];
	$deanery_id=$row["deanery_id"];
	?>
	<tr>
    <td><?php echo $deanery;?></td>
    <td>
   <a data-placement="left" title="Click to Pay for a crusader" id="edit<?php echo $deanery_id; ?>" href="view_deanery_account.php<?php echo '?id='.$deanery_id; ?>" class="btn btn-info">view Acco. </a>
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