<?php include('includes/banner.php'); ?>
<?php include('session.php'); ?>
<style type="text/css">
    body{
      background-image: url(images/colorful.jpg) !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;

    }
</style>
<body >
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_diocese_report.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
                                   
                            //this is the only code used use
                           $sql=mysqli_query($mysqli,"SELECT distinct(diocese_id) FROM annual_registration_paymenttbl ")or die(mysqli_error($mysqli));
                           $num_rows=mysqli_num_rows($sql);
						 	
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color:green;"><i class="icon-reorder icon-large" ></i><strong>DIOCESE LIST</strong> </div>
                                <div class="muted pull-right" style="color:green"><strong>NUMBER OF DIOCESE:</strong> <span class="badge badge-info"><?php  echo  $num_rows;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								
									<?php include('diocese_report_table.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include ('footer.php'); ?>  
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>