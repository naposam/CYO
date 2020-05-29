   <div class="row-fluid">
   	 <?php include('validation.php');?>
   <a href="add_amount.php" class="btn btn-inverse"><i class="icon-chevron-left icon-large"></i> BACK</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i>EDIT AMOUNT</div>
                            </div>
						

                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysqli_query($mysqli,"select * from amount where amount_id = '$get_id'")or die(mysqli_error($mysqli));
								$row = mysqli_fetch_array($query);
								//$reg=$row['reg_id'];
								?>
								<form method="post" id="update_class1_form">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused hidden" value="<?php echo $row['amount_id']; ?>" name="amount_id" id="focusedInput" type="hidden"  required>
                                            <input class="input focused " value="<?php echo $row['section']; ?>" name="section" id="focusedInput" type="text"  required readonly>
                                            <input class="input focused" value="<?php echo $row['amount']; ?>" name="amount" id="focusedInput" type="text" placeholder = "Amount" required onkeyup="numberonly(this)">
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
				$("#update_class1_form").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "update_amount.php",
						data: formData,
						success: function(html){
							$.jGrowl("Class Successfully  Updated", { header: 'Class Updated' });
							window.location = 'edit_amount.php';  
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
					
		
					
		