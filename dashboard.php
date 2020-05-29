<?php include('includes/banner.php'); ?>
<?php include('session.php'); ?>
<style type="text/css">
    body{
      background-image: url(images/colorful.jpg) !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;

    }
</style>
    <body  >
		<?php include('navbar.php') ?>
        <div class="container-fluid" id="">
            <div class="row-fluid">
					<?php include('sidebar_dashboard.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color:green;"><strong>CRUSADERS STATISTICS PER REGION</strong></div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
						
									<?php 
								$query_west = mysqli_query($mysqli,"select * from crusaders where region=1 ")or die(mysqli_error($mysqli));
								$count_west = mysqli_num_rows($query_west);
								?>
								
                                <div class="span3">
                                    <div class="chart"  data-percent="<?php echo $count_west; ?>"><?php echo $count_west ; ?></div>
                                    <div class="chart-bottom-heading"><strong>WESTERN</strong>

                                    </div>
                                </div>
								
								<?php 
								$query_westnorth = mysqli_query($mysqli,"select * from crusaders where region=2 ")or die(mysqli_error($mysqli));
								$count_western = mysqli_num_rows($query_westnorth );
								?>
								
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_western; ?>"><?php echo $count_western; ?></div>
                                    <div class="chart-bottom-heading"><strong>WASTERN NORTH</strong>

                                    </div>
                                </div>

								<?php 
																
								$query_central = mysqli_query($mysqli," select * from crusaders where region=4 ")or die(mysqli_error($mysqli));
								
								$count_central = mysqli_num_rows($query_central);
								
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_central; ?>"><?php echo $count_central; ?></div>
                                    <div class="chart-bottom-heading"><strong>CENTRAL</strong>

                                    </div>
                                </div>
								
								<?php 
								$query_greater = mysqli_query($mysqli," select * from crusaders where region=3 ")or die(mysqli_error($mysqli));
								$count_greater = mysqli_num_rows($query_greater);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_greater; ?>"><?php echo $count_greater; ?></div>
                                    <div class="chart-bottom-heading"><strong>GREATER ACCRA</strong>

                                    </div>
                                </div>
								
								
										<?php 
								$query_EASTERN = mysqli_query($mysqli," select * from crusaders where region=5 ")or die(mysqli_error($mysqli));
								$count_eastern = mysqli_num_rows($query_EASTERN);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_eastern ?>"><?php echo $count_eastern ?></div>
                                    <div class="chart-bottom-heading"><strong>EASTERN</strong>

                                    </div>
                                </div>
                                	<?php 
								$query_volta = mysqli_query($mysqli," select * from crusaders where region=10 ")or die(mysqli_error($mysqli));
								$count_volta = mysqli_num_rows($query_volta);
								?>
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_volta ?>"><?php echo $count_volta ?></div>
                                    <div class="chart-bottom-heading"><strong>VOLTA</strong>

                                    </div>
                                </div>
                                	<?php 
								$query_ahafo = mysqli_query($mysqli," select * from crusaders where region=6 ")or die(mysqli_error($mysqli));
								$count_ahafo = mysqli_num_rows($query_ahafo);
								?>
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_ahafo ?>"><?php echo $count_ahafo ?></div>
                                    <div class="chart-bottom-heading"><strong>BRONG-AHAFO</strong>

                                    </div>
                                </div>
								
								<?php 
								$query_northern = mysqli_query($mysqli," select * from crusaders where region=7 ")or die(mysqli_error($mysqli));
								$count_northern = mysqli_num_rows($query_northern);
								?>
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_northern ?>"><?php echo $count_northern  ?></div>
                                    <div class="chart-bottom-heading"><strong>NORTTHERN</strong>

                                    </div>
                                </div>
                            </div>
                            <div class="span12">
                                <?php 
								$query_east = mysqli_query($mysqli," select * from crusaders where region=8 ")or die(mysqli_error($mysqli));
								$count_east = mysqli_num_rows($query_east);
								?>
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_east ?>"><?php echo $count_east  ?></div>
                                    <div class="chart-bottom-heading"><strong>UPPER EAST</strong>

                                    </div>
                                </div>
								<?php 
								$query_upper_west = mysqli_query($mysqli," select * from crusaders where region=9 ")or die(mysqli_error($mysqli));
								$count_upper_west = mysqli_num_rows($query_upper_west);
								?>
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_upper_west ?>"><?php echo $count_upper_west ?></div>
                                    <div class="chart-bottom-heading"><strong>UPPER WEST</strong>

                                    </div>
                                </div>
                                <?php 
								$query_ashanti = mysqli_query($mysqli," select * from crusaders where region=11 ")or die(mysqli_error($mysqli));
								$count_ashanti = mysqli_num_rows($query_ashanti);
								?>
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_ashanti ?>"><?php echo $count_ashanti  ?></div>
                                    <div class="chart-bottom-heading"><strong>ASHANTI</strong>

                                    </div>
                                </div>
								
								<?php 
								$query_oti = mysqli_query($mysqli," select * from crusaders where region=12 ")or die(mysqli_error($mysqli));
								$count_oti = mysqli_num_rows($query_oti);
								?>
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_oti ?>"><?php echo $count_oti  ?></div>
                                    <div class="chart-bottom-heading"><strong>OTI</strong>

                                    </div>
                                </div>
								<?php 
								$query_bono_east = mysqli_query($mysqli," select * from crusaders where region=14 ")or die(mysqli_error($mysqli));
								$count_bono_east = mysqli_num_rows($query_bono_east);
								?>
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_bono_east ?>"><?php echo $count_bono_east  ?></div>
                                    <div class="chart-bottom-heading"><strong>BONO EAST</strong>

                                    </div>
                                </div>
								<?php 
								$query_north_est = mysqli_query($mysqli," select * from crusaders where region=13 ")or die(mysqli_error($mysqli));
								$count_north_est = mysqli_num_rows($query_north_est);
								?>
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_north_est ?>"><?php echo $count_north_est  ?></div>
                                    <div class="chart-bottom-heading"><strong>NORTH EAST</strong>

                                    </div>
                                </div>
								<?php 
								$query_SAVANNA = mysqli_query($mysqli," select * from crusaders where region=16 ")or die(mysqli_error($mysqli));
								$count_SAVA = mysqli_num_rows($query_SAVANNA);
								?>
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_SAVA ?>"><?php echo $count_SAVA  ?></div>
                                    <div class="chart-bottom-heading"><strong>SAVANNAH</strong>

                                    </div>
                                </div>
								<?php 
								$query_ahafo = mysqli_query($mysqli," select * from crusaders where region=15 ")or die(mysqli_error($mysqli));
								$count_ahafo = mysqli_num_rows($query_ahafo);
								?>
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_ahafo ?>"><?php echo $count_ahafo  ?></div>
                                    <div class="chart-bottom-heading"><strong>AHAFO</strong>

                                    </div>
                                </div>
								
										<?php 
								$query_admin = mysqli_query($mysqli," select * from login_tb where status='administrator' ")or die(mysqli_error($mysqli));
								$count_admin = mysqli_num_rows($query_admin);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_admin ?>"><?php echo $count_admin ?></div>
                                    <div class="chart-bottom-heading"><strong>ADMIN USERS</strong>

                                    </div>
                                </div>
								
										<?php 
								$query_normal = mysqli_query($mysqli," select * from login_tb where status='Normal'")or die(mysqli_error($mysqli));
								$count_normal = mysqli_num_rows($query_normal);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_normal; ?>"><?php echo $count_normal; ?></div>
                                    <div class="chart-bottom-heading"><strong>NORMAL USERS</strong>

                                    </div>
                                </div>
								
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                
                </div>
            </div>
    
        
		<?php include ('footer.php'); ?>   
        </div>
	<?php include('script.php'); ?>
    </body>
</html>