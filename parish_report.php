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
				<?php include('sidebar_parish_report.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
                                   
                            //this is the only code used use
                           $sql=mysqli_query($mysqli,"SELECT distinct(parish_id) FROM annual_registration_paymenttbl ")or die(mysqli_error($mysqli));
                           $num_rows=mysqli_num_rows($sql);
						 	
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color:green;"><i class="icon-reorder icon-large" ></i><strong>PARISH LIST</strong> </div>
                                <div class="muted pull-right" style="color:green"><strong>NUMBER OF  PARISHES:</strong> <span class="badge badge-info"><?php  echo  $num_rows;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<h2 id="noch">NATIONAL REGISTRATIONS
                    <p style="margin:0;padding:0;">Republic of the Ghana</p>
                    <p style="margin:0;padding:0;font-weight:bold;">Sam Napoleon MEMORIAL STATE COLLEGE</p>
                    <p style="margin:0;padding:0;">Takoradi City, Naps</p>
                                </h2>
									<?php include('parish_report_table.php'); ?>
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