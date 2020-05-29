   <div class="row-fluid">
   <a href="add_deanery.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Add Deanery</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit Deanery</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysqli_query($mysqli,"select * from deanery where deanery_id = '$get_id'")or die(mysqli_error($mysqli));
								$row = mysqli_fetch_array($query);
								$diocese_id=$row['diocese_id'];
								$reg=$row['reg_id'];
								?>
								<form method="post" id="update_deanery_form">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['deanery_id']; ?>" name="deanery_id" id="focusedInput" type="hidden" required>
                                            <input class="input focused" value="<?php echo $row['deanery_name']; ?>" name="deanery_name" id="focusedInput" type="text" placeholder = "Class Name" required>
                                          </div>
                                        </div>
                                       <!--<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['diocese_id']; ?>" name="diocese_id" id="focusedInput" type="text" placeholder = "Class Name" required readonly>
                                          </div>

											<div class="controls">
                                            <input class="input focused" value="<?php echo $row['reg_id']; ?>" name="reg_id" id="focusedInput" type="text" placeholder = "Class Name" required readonly>
                                          </div>

                                        </div>-->
										
										<!--<div class="control-group">
                                          <div class="controls">
                                            <select name="reg_id">
												<?php 
											$result = mysqli_query($mysqli,"select * from region ")or die(mysqli_error($mysqli));
											while($row1 = mysqli_fetch_array($result)){
											$reg_id = $row1['reg_id'];			
									?>
								<option value="<?php echo $reg;?>"> <?php echo $reg_id;?> </option>
									<?php }?>
												
											</select>
                                          </div>
                                        </div>-->
										
										
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i> Update</button>

                                          </div>
                                        </div>
                                </form>
								
													<script>
			jQuery(document).ready(function($){
				$("#update_deanery_form").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "update_deanery.php",
						data: formData,
						success: function(html){
							$.jGrowl("Class Successfully  Updated", { header: 'Class Updated' });
							window.location = 'add_deanery.php';  
						}
					});
				});
			});
			</script>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
		
					
		