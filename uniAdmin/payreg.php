<?php include('includes/banner.php'); ?>
<?php include('session.php'); ?>
<style type="text/css">
    body{
      background-image: url(../images/colorful.jpg) !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;

    }
</style>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_payreg.php'); ?>
				<div class="span3" id="">
				<!--<?php  //include('add_diocese1.php');  ?>-->	   			
				</div>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
							<?php 
							$sql="SELECT *, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where id='$session_id'";
        												$resultSet=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
        												$fetch=mysqli_fetch_array($resultSet);
        												$deanery=$fetch['deanery_name'];
        												$diocese=$fetch['diocese_name'];
        												$parish=$fetch['parish_name'];
        												$unit=$fetch['unit_id'];
							// $query = mysqli_query($mysqli,"select * from annual_registration_paymenttbl where status=0 and unit_id='$unit'")or die(mysqli_error($mysqli));
        				$sql=mysqli_query($mysqli,"SELECT crusaders.*, annual_registration_paymenttbl.* FROM crusaders LEFT JOIN annual_registration_paymenttbl ON crusaders.crusader_id= annual_registration_paymenttbl.crusader_id WHERE annual_registration_paymenttbl.unit_id='$unit' and annual_registration_paymenttbl.status=0  ");
							$count = mysqli_num_rows($sql);
							?>
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i>Transaction List</div>
                                <div class="muted pull-right">
									Number of Pending Transaction: <span class="badge badge-info"><?php echo $count; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_class1.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
									
										<thead>
										  <tr>
												
											
												<th>CRUSADER ID</th>
												<th>NAME</th>
												<th>PAYMENT STATUS</th>
												<th>APPROVE</th>
												<th>DISAPPROVE</th>
												
												<th>DELETE</th>
												<th class="empty"></th>
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
        												$unit=$fetch['unit_id'];
													$sql=mysqli_query($mysqli,"SELECT crusaders.*, annual_registration_paymenttbl.* FROM crusaders LEFT JOIN annual_registration_paymenttbl ON crusaders.crusader_id= annual_registration_paymenttbl.crusader_id WHERE annual_registration_paymenttbl.unit_id='$unit' ");
													while($row = mysqli_fetch_array($sql)){
													$crusader_id=$row['crusader_id'];
													$trans_id=$row['trans_id'];
                                                    $fullName=$row['fname']." ".$row['mname']." ".$row['lname'];
                                                    $status=$row['status'];
                                                    if($status==0){
                                                    	$notaproved="<div class='btn btn-warning'>Pending..</div>";
                                                    }elseif($status==1){
                                                    	$notaproved="<div class='btn btn-default'>Approved</div>";
                                                    }
													?>
												<tr>
												<td><?php echo $crusader_id; ?> </td>
												<td><?php echo $fullName; ?></td>
												<td><?php echo $notaproved;?></td>
												<td class="hidden"><?php echo $row['trans_id']; ?> </td>
												<td width="80">
													 	<?php if($status==0):?>
												<a data-placement="left" onclick="return confirm('Are you sure you want to Approve?');" id="edit<?php echo $crusader_id; ?>" title="Click to Approve" href="approve.php<?php echo '?id='.$crusader_id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon- icon-small"></i>Approve</a>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#edit<?php echo $id; ?>').tooltip('show');
															$('#edit<?php echo $id; ?>').tooltip('hide');
														});
														</script>
														<?php endif;?>
												</td>
												
		                                       <td width="20">
		                                       	<?php if($status==1):?>
												<a data-placement="left" onclick="return confirm('Are you sure you want to Disapprove?');" id="edit<?php echo $crusader_id; ?>" title="Click to Disaprove" href="disapproved_trans.php<?php echo '?id='.$crusader_id; ?>"  data-toggle="modal" class="btn btn-info" ><i class="icon- icon-small"></i>Disaprove</a>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#edit<?php echo $id; ?>').tooltip('show');
															$('#edit<?php echo $id; ?>').tooltip('hide');
														});
														</script>
														<?php endif?>
												</td>

											<td>
													<?php if($status==0):?>
												<a data-placement="left" onclick="return confirm('Are you sure you want to delete?');" id="edit<?php echo $crusader_id; ?>" title="Click to Delete" href="reject_trans.php<?php echo '?id='.$crusader_id; ?>"  data-toggle="modal" class="btn btn-danger">DELETE</a>
												<?php endif?>
											</td>
												
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		
        </div>
		<?php include('script.php'); ?>
    </body>

</html>