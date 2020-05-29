<?php include('includes/banner.php'); ?>
<?php include('session.php'); ?>
<style type="text/css">
    body{
      background-image: url(../images/colorful.jpg) !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;

    }
</style>
<body >
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_deanery_report.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
                                   
                            //this is the only code used use
                           // $sql=mysqli_query($mysqli,"SELECT distinct(deanery_id) FROM annual_registration_paymenttbl ")or die(mysqli_error($mysqli));
                        $sql="SELECT *, diocese.diocese_name,deanery.deanery_name,deanery.deanery_id,diocese.diocese_id,parish.parish_name,parish.parish_id,unit.unit_name,unit.unit_id FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where id='$session_id'";
                            $resultSet=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
                            $fetch=mysqli_fetch_array($resultSet);
                            $deanery=$fetch['deanery_name'];
                            $diocese=$fetch['diocese_name'];
                            $parish=$fetch['parish_name'];
                            $unit=$fetch['unit_name'];
                            $diocese_id=$fetch['diocese_id'];
                            $unit_id=$fetch['unit_id'];
                            $parish_id=$fetch['parish_id'];
                             $deanery_id=$fetch['deanery_id'];

           $query=mysqli_query($mysqli,"SELECT DISTINCT(deanery.deanery_name),deanery.*,annual_registration_paymenttbl.status,diocese.diocese_id from deanery left JOIN annual_registration_paymenttbl  on annual_registration_paymenttbl.deanery_id=deanery.deanery_id LEFT JOIN diocese on annual_registration_paymenttbl.diocese_id=diocese.diocese_id where annual_registration_paymenttbl.status=1 and diocese.diocese_id='$diocese_id' ") or die(mysqli_error($mysqli));
                           $num_rows=mysqli_num_rows($query);
						 	
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color:green;"><i class="icon-reorder icon-large" ></i><strong>DEANERY LIST</strong> </div>
                                <div class="muted pull-right" style="color:green"><strong>NUMBER OF DEANERIES:</strong> <span class="badge badge-info"><?php  echo  $num_rows;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								
									<?php include('deanery_report_table.php'); ?>
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