<?php include('includes/banner.php'); ?>
<?php include('session.php'); ?>
<style type="text/css">
    body{
      background-image: url(images/colorful.jpg) !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;

    }
</style>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_add_amount.php'); ?>
				<div class="span3" id="">
				   			
				</div>
                <div class="span8" id="" style="margin-left: 5%;">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
							
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i>EDIT</div>
                                <div class="muted pull-right">
									<span class="badge badge-info"><!--<?php// echo $count; ?>--></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_class1.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
									<!-- <a data-placement="right" title="Click to Delete check item" data-toggle="modal" href="#class_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i> Delete</a> -->
														<script type="text/javascript">
														$(document).ready(function(){
															$('#delete').tooltip('show');
															$('#delete').tooltip('hide');
														});
														</script>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th hidden="">Amount ID</th>
												<th>AMOUNT</th>
												<th>SECTION</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query1 = mysqli_query($mysqli,"select * from amount")or die(mysqli_error($mysqli));
													while($row = mysqli_fetch_array($user_query1)){
													$id = $row['amount_id'];
													?>
												<tr>
												<!--<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php //echo $id; ?>">
												</td>-->
												<td hidden=""><?php echo $row['amount_id']; ?> </td>
												<td><?php echo 'GHS '. $row['amount']; ?></td>
												<td><?php echo $row['section']; ?></td>
												
												<td width="80">
												<a data-placement="left" id="edit<?php echo $id; ?>" title="Click to Edit" href="edit_amount.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i> Edit</a>
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