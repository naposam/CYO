<?php include('DbCon.php'); ?>

	
	<form action="" method="post">
	<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
		<div class="pull-right">
	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
	
	</div>


	<?php include('../modal_delete.php'); ?>
		<thead>
		<tr>
                    <th>CRUSADER ID</th>
					<th>FULL NAME</th>
                    <th>UNIT</th>
                    <th>SECTION</th>
                    <th hidden="hidden">PERIOD</th>
					
					<td class="empty"></td>
					
		</tr>
		</thead>
		<tbody>
		<?php

    $sql="SELECT *, unit.unit_name FROM crusaders LEFT JOIN unit on crusaders.unit=unit.unit_id where id='$session_id'";
        $resultSet=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
        $fetch=mysqli_fetch_array($resultSet);
        $unit=$fetch['unit_name'];
        $unit_id=$fetch['unit_id'];

        $query=mysqli_query($mysqli,"SELECT *,crusaders.crusader_id as id, year(curDate())-year(DOB) as age, unit.unit_name,annual_registration_paymenttbl.diocese_id FROM crusaders LEFT JOIN unit on crusaders.unit=unit.unit_id LEFT JOIN annual_registration_paymenttbl on crusaders.crusader_id=annual_registration_paymenttbl.crusader_id where crusaders.crusader_id  NOT IN(select crusader_id from annual_registration_paymenttbl) and crusaders.unit='$unit_id'") or die(mysqli_error($mysqli));
             $num_rows=mysqli_num_rows($query);
    
    // select crusader_id from crusaders where crusader_id NOT IN(select crusader_id from annual_registration_paymenttbl
		while($row = mysqli_fetch_array($query)){
		$id = $row['id'];
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
		<td><?php echo $row['id']; ?></td> 
		<td><?php echo $row['fname'].' '.$row['mname'].' '.$row['lname'];?></td> 
		<td><?php echo $row['unit_name']; ?></td> 
		<td><?php echo $section; ?></td>
		<td hidden="hidden"><?php echo $row['period']; ?></td>

		
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
		
					
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>

	</form>
	<script >
		
	</script>