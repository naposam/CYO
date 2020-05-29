   <div class="row-fluid">
   <a href="add_units.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Add Unit</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit Unit</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysqli_query($mysqli,"select * from unit where unit_id = '$get_id'")or die(mysqli_error($mysqli));
								$row = mysqli_fetch_array($query);
								$parish_id=$row['parish_id'];
								$deanery_id=$row['deanery_id'];
								$diocese_id=$row['diocese_id'];
								$reg=$row['reg_id'];
								?>
								<form method="post" id="update_units_form">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['unit_id']; ?>" name="unit_id" id="focusedInput" type="hidden" required>
                                            <input class="input focused" value="<?php echo $row['unit_name']; ?>" name="unit_name" id="focusedInput" type="text" placeholder = "Class Name" required>
                                          </div>
                                        </div>

										
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i> Update</button>

                                          </div>
                                        </div>
                                </form>
								
													<script>
			jQuery(document).ready(function($){
				$("#update_units_form").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "update_unit.php",
						data: formData,
						success: function(html){
							$.jGrowl("Class Successfully  Updated", { header: 'Class Updated' });
							window.location = 'add_units.php';  
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
					
		
					
		