   <div class="row-fluid">
   <a href="add_diocese.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Add Diocese</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit Diocese</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysqli_query($mysqli,"select * from diocese where diocese_id = '$get_id'")or die(mysqli_error($mysqli));
								$row = mysqli_fetch_array($query);
								$reg=$row['reg_id'];
								?>
								<form method="post" id="update_diocese_form">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['diocese_id']; ?>" name="diocese_id" id="focusedInput" type="hidden"  required>
                                            <input class="input focused " value="<?php echo $row['diocese_name']; ?>" name="diocese_name" id="focusedInput" type="text" placeholder = "Class Name" required>
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
				$("#update_diocese_form").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "update_diocese.php",
						data: formData,
						success: function(html){
							$.jGrowl("Class Successfully  Updated", { header: 'Class Updated' });
							window.location = 'add_diocese.php';  
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
					
		
					
		