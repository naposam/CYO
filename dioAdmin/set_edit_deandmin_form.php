   <div class="row-fluid">
   <!-- <a href="add_diocese.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Add Diocese</a> -->
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i>Set Deanery Admin</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysqli_query($mysqli,"select * from crusaders where crusader_id = '$get_id'")or die(mysqli_error($mysqli));
								$row = mysqli_fetch_array($query);
								$reg=$row['crusader_id'];
								?>
								<form method="post" id="update_deanery_form">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['crusader_id']; ?>" name="crusader_id" id="focusedInput" type="hidden"  required>
                                            <input class="input focused " value="<?php echo $row['fname'].' '. $row['lname']; ?>" name="deanery_name" id="focusedInput" type="text" placeholder = "Class Name" required readonly>
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
				$("#update_deanery_form").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "update_deanAdmin.php",
						data: formData,
						success: function(html){
							$.jGrowl("Class Successfully  Updated", { header: 'Class Updated' });
							window.location = 'setdeanadmin.php';  
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
					
		
					
		