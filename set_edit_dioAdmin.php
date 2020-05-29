<?php error_reporting(0);?>
<?php include('includes/banner.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body style="background: url(images/colorful.jpg) repeat scroll 0 0 rgba(0, 0, 0, 0) !important; background-repeat: no-repeat !important; background-size: cover !important;">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_edit_dioadmin.php'); ?>
				<div class="span3" id="">
				<?php include('set_edit_dioadmin_form.php'); ?>		   			
				</div>
                <div class="span6" crusader_id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                             		<?php 
							// $user_query = mysqli_query($mysqli,"select * from diocese")or die(mysqli_error($mysqli));
							// $count = mysqli_num_rows($user_query);
                             		$user_query1 = mysqli_query($mysqli,"SELECT login_tb.*, crusaders.*, diocese.diocese_name FROM crusaders LEFT JOIN login_tb ON crusaders.crusader_id=login_tb.crusader_id LEFT JOIN diocese on crusaders.diocese=diocese.diocese_id  where  office_level='DIOCESE' AND office_title='CHAIRMAN' OR office_title='ORGANIZING SECRETARY'")or die(mysqli_error($mysqli));
                             		$count = mysqli_num_rows($user_query1);
							?>
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Diocesan Officers List</div>
                                <div class="muted pull-right">
									Number of Diocesan Officers: <span class="badge badge-info"><?php echo $count; ?></span>
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
												<th>CRUSADER ID</th>												
												<th>FULL NAME</th>
												<th>OFFICE TITLE</th>									
												<th></th>
												<th hidden="hidden"></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query1 = mysqli_query($mysqli,"SELECT login_tb.*, crusaders.*, diocese.diocese_name FROM crusaders LEFT JOIN login_tb ON crusaders.crusader_id=login_tb.crusader_id LEFT JOIN diocese on crusaders.diocese=diocese.diocese_id  where  office_level='DIOCESE' AND office_title='CHAIRMAN' OR office_title='ORGANIZING SECRETARY'")or die(mysqli_error($mysqli));
													while($row = mysqli_fetch_array($user_query1)){
													$id = $row['crusader_id'];
													?>
												<tr>
												
												<td><?php echo $row['crusader_id']; ?> </td>
												<td><?php echo $row['fname'].' '.$row['lname']; ?> </td>
												<td ><?php echo $row['office_title']; ?></td>
												
												<td width="80">
												<a data-placement="left" id="edit<?php echo $id; ?>" title="Click to Edit" href="set_edit_dioAdmin.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i> Edit</a>
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