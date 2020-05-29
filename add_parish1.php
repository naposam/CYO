    <?php include_once ('LoaduserForm.php');?>
    <?php include('validation.php');?>
   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Parish</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" id="add_parish">
										<div class="control-group">
                                          <div class="controls">
										  <label style="color: white; font-weight: bolder;">Parish</label>
										  <input class="input focused"  name="parish_name" id="focusedInput" type="text" placeholder = "Parish Name" required onkeyup="letteronly(this)">
                                            
                                          </div>
                                        </div>
                                    <div class="control-group">
                                          <div class="controls">
										  <label style="color: white; font-weight: bolder;">Region</label>
                                           <select name="region" id="region"class="form-controls" onchange="region_change()" required>
                                           	<option selected="" disabled="">Select Region</option>
                                            <?php echo fill_region($mysqli);?>
										<!-- <?php 
											$result = mysqli_query($mysqli,"select * from region ")or die(mysqli_error($mysqli));
											while($row = mysqli_fetch_array($result)){
											$reg_id = $row['reg_id'];
											$name=$row['name'];		
									?>
								<option value="<?php echo $reg_id;?>"> <?php echo $reg_id;?><?php echo" ";?><?php echo $name;?> </option>
									<?php }?> -->
												
											</select>
                                          </div>
                                        </div>						
											
								 <div class="control-group">
                                          <div class="controls">
										  <label style="color: white; font-weight: bolder;">Diocese</label>
                                           <select name="diocese" id ="diocese" class="form-controls" onchange="diocese_change()" required="">
                                           		<option selected="" disabled="">Select Diocese</option>
											<?php echo fill_diocese($mysqli);?>
										<!-- start of comment<?php 
											$result = mysqli_query($mysqli,"select * from diocese ")or die(mysqli_error($mysqli));
											while($row = mysqli_fetch_array($result)){
											$diocese_id = $row['diocese_id'];
											$name=$row['diocese_name'];		
									?>
								<option value="<?php echo $diocese_id;?>"> <?php echo $diocese_id;?><?php echo" ";?><?php echo $name;?> </option>
									<?php }?> end of comment-->
												
											</select>
                                          </div>
                                        </div>		
                                    <div class="control-group">
                                          <div class="controls">
										  <label style="color: white; font-weight: bolder;">Deanery</label>
                                           <select name="deanery" class="form-controls" id="deanery" onchange="deanery_change()" required="">
                                           	<option selected="" disabled="">Select Deanery</option>
											<?php echo fill_deanery($mysqli);?>
										<!-- start of comment<?php 
											$result = mysqli_query($mysqli,"select * from deanery ")or die(mysqli_error($mysqli));
											while($row = mysqli_fetch_array($result)){
											$deanery_id = $row['deanery_id'];
											$name=$row['deanery_name'];		
									?>
								<option value="<?php echo $deanery_id;?>"> <?php echo $deanery_id;?><?php echo" ";?><?php echo $name;?> </option>
									<?php }?>
												end of comment -->
											</select>
                                          </div>
                                        </div>

										
											<div class="control-group">
                                          <div class="controls">
												<button  data-placement="right" title="Click to Save" id="save" name="save" class="btn btn-inverse"><i class="icon-save icon-large"></i> Save</button>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#save').tooltip('show');
															$('#save').tooltip('hide');
														});
														</script>
                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                             <?php include ('Form_reg_main_ajax.php');?>
                        </div>
                        <!-- /block -->
                    </div>
		<script>
			jQuery(document).ready(function($){
				$("#add_parish").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_parish.php",
						data: formData,
						success: function(html){
							$.jGrowl("Class Successfully  Added", { header: 'Class Added' });
							window.location = 'add_parish.php';  
						}
					});
				});
			});
			</script>
					