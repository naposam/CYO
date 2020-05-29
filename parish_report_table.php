<?php include('DbCon.php'); ?>

	
	<form action="" method="post">
	<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
		<script type="text/javascript">
			
		</script>
		<div class="pull-right">
	 
	
	</div>
	
	
		<thead>
			<tr>
		<td>PARISH</td>
		<td>PARISH DETAILS</td>
		
	</tr>
		</thead>
		<tbody>
		   <?php

		

		   $query=mysqli_query($mysqli,"SELECT DISTINCT(parish.parish_name),parish.*,annual_registration_paymenttbl.status from parish left JOIN annual_registration_paymenttbl  on annual_registration_paymenttbl.parish_id=parish.parish_id where annual_registration_paymenttbl.status=1 ") or die(mysqli_error($mysqli));
 while($row=mysqli_fetch_array($query)){

	$parish=$row['parish_name'];
	$parish_id=$row["parish_id"];
	?>
	<tr>
    <td><?php echo $parish;?></td>
    <td>
   <a data-placement="left" title="Click to Pay for a crusader" id="edit<?php echo $parish_id; ?>" href="view_parish_account.php<?php echo '?id='.$parish_id; ?>" class="btn btn-info">view Acco. </a>
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