   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Add Deanery</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" id="add_deanery">
										<div class="control-group">
                                          <div class="controls">
										  <label style="color: white; font-weight: bolder;">Deanery</label>
										  <input class="input focused"  name="deanery_name" id="focusedInput" type="text" placeholder = "Deanery Name" required>
                                            
                                          </div>
                                        </div>
                                    
                                      <div class="control-group">
                                          <div class="controls">
										  <label style="color: white; font-weight: bolder;">Region</label>
                                           <select name="regid">
										<?php 
											$result = mysqli_query($mysqli,"select * from region ")or die(mysqli_error($mysqli));
											while($row = mysqli_fetch_array($result)){
											$reg_id = $row['reg_id'];
											$name=$row['name'];		
									?>
								<option value="<?php echo $reg_id;?>"> <?php echo $reg_id;?><?php echo" ";?><?php echo $name;?> </option>
									<?php }?>
												
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
                        </div>
                        <!-- /block -->
                    </div>
		<script>
			jQuery(document).ready(function($){
				$("#add_diocese").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_diocese.php",
						data: formData,
						success: function(html){
							$.jGrowl("Class Successfully  Added", { header: 'Class Added' });
							window.location = 'add_diocese.php';  
						}
					});
				});
			});
			</script>
					