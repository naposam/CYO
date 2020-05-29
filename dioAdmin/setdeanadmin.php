<?php include('includes/banner.php'); ?>
<?php include('session.php'); ?>
    <body style="background: url(../images/colorful.jpg) repeat scroll 0 0 rgba(0, 0, 0, 0) !important; background-repeat: no-repeat !important; background-size: cover !important;">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_setDeanAdmin.php'); ?>
				<div class="span3" id="">
					   			
				</div>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
							<?php 
							$user_query = mysqli_query($mysqli,"SELECT login_tb.*, crusaders.*, deanery.deanery_name FROM crusaders LEFT JOIN login_tb ON crusaders.crusader_id=login_tb.crusader_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id  where  office_level='DEANERY' AND office_title='CHAIRMAN' OR office_title='ORGANIZING SECRETARY'")or die(mysqli_error($mysqli));
							$count = mysqli_num_rows($user_query);
							?>
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Deanery Officers List</div>
                                <div class="muted pull-right">
									Number of Deanery Officers: <span class="badge badge-info"><?php echo $count; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_class1.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
									<!-- <a data-placement="right" title="Click to Delete check item" data-toggle="modal" href="#class_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i> Delete</a>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#delete').tooltip('show');
															$('#delete').tooltip('hide');
														});
														</script> -->
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<!-- <th></th> -->
												<th>CRUSADER ID</th>												
												<th>FULL NAME</th>
												<th>OFFICE TITLE</th>									
												<th>EDIT</th>
												<th></th>
												</tr>
										</thead>
										<tbody>
													<?php
													$user_query1 = mysqli_query($mysqli,"SELECT login_tb.*, crusaders.*, deanery.deanery_name FROM crusaders LEFT JOIN login_tb ON crusaders.crusader_id=login_tb.crusader_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id  where  office_level='DEANERY' AND office_title='CHAIRMAN' OR office_title='ORGANIZING SECRETARY'")or die(mysqli_error($mysqli));

													while($row = mysqli_fetch_array($user_query1)){
													$id = $row['crusader_id'];
													$status=$row['status'];
                                                    // if($status=='diocAd'){
                                                    // 	$notaproved="<div class='btn btn-warning'>Pending..</div>";
                                                    // }elseif($status=='Normal'){
                                                    // 	$notaproved="<div class='btn btn-success'>Approved</div>";
                                                    // }
													?>
												<tr>
												<!-- <td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td> -->
												
												<td><?php echo $row['crusader_id']; ?> </td>
												<td><?php echo $row['fname'].' '.$row['lname']; ?> </td>
												<td ><?php echo $row['office_title']; ?></td>

												
												<td width="80">
													<?php if($status!='deanAd'):?>
												<a data-placement="left" id="edit<?php echo $id; ?>" title="Click to Edit" href="set_edit_deanAdmin.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i>SET</a>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#edit<?php echo $id; ?>').tooltip('show');
															$('#edit<?php echo $id; ?>').tooltip('hide');													
														});
														</script>
												</td>
												<?php endif;?>
                                    
												<td >
        <?php if($status=='deanAd'):?>
			<a href="unset_dean_admin.php?unset_id=<?php echo $row['crusader_id'];?>" onclick="return confirm('Are you sure you want to remove administrative right from this user ?');" class="btn btn-danger" id="delete<?php echo $row['deanery_id'];?>" title="Click to delete " data-toggle="modal">UNSET</a>
            <script type="text/javascript">
			$(document).ready(function(){
				$('#delete<?php echo $row['diocese_id']; ?>').tooltip('show');
				$('#delete<?php echo $row['diocese_id']; ?>').tooltip('hide');
			});
			</script>
			<?php endif;?>
			
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