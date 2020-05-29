<?php include('includes/banner.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body style="background: url(images/colorful.jpg) repeat scroll 0 0 rgba(0, 0, 0, 0) !important; background-repeat: no-repeat !important; background-size: cover !important;">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_add_parish.php'); ?>
				<div class="span3" id="">
				<?php include('edit_parish_form.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                             		<?php 
							$user_query = mysqli_query($mysqli,"select * from parish")or die(mysqli_error($mysqli));
							$count = mysqli_num_rows($user_query);
							?>
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Prish List</div>
                                <div class="muted pull-right">
									Number of Parishes: <span class="badge badge-info"><?php echo $count; ?></span>
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
												<th>PARISH NAME</th>
												<th>DEANERY</th>
												<th>DIOCESE</th>
												<th>REGION</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query1= mysqli_query($mysqli,"select * from parish,deanery,diocese,region where parish.deanery_id=deanery.deanery_id and deanery.diocese_id=diocese.diocese_id and diocese.reg_id=region.reg_id")or die(mysqli_error($mysqli));
													while($row = mysqli_fetch_array($user_query1)){
													$id = $row['parish_id'];
													?>
												<tr>
												<!-- <td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td> -->
												<td><?php echo $row['parish_name']; ?> </td>
												<td><?php echo $row['deanery_name']; ?> </td>
												<td><?php echo $row['diocese_name']; ?> </td>
												<td><?php echo $row['name']; ?></td>
												
												<td width="80">
												<a data-placement="left" id="edit<?php echo $id; ?>" title="Click to Edit" href="edit_parish.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i> Edit</a>
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