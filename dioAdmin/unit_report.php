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
				<?php include('sidebar_unit_report.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
                                  
							
                            //this is the only code used use
                           // $sql=mysqli_query($mysqli,"SELECT distinct(unit_id) FROM annual_registration_paymenttbl")or die(mysqli_error($mysqli));
                        $sql="SELECT *, diocese.diocese_name,deanery.deanery_name,diocese.diocese_id,parish.parish_name,unit.unit_name,unit.unit_id FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where id='$session_id'";
                            $resultSet=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
                            $fetch=mysqli_fetch_array($resultSet);
                            $deanery=$fetch['deanery_name'];
                            $diocese=$fetch['diocese_name'];
                            $parish=$fetch['parish_name'];
                            $unit=$fetch['unit_name'];
                            $diocese_id=$fetch['diocese_id'];
                            $unit_id=$fetch['unit_id'];

           $query=mysqli_query($mysqli,"SELECT DISTINCT(unit.unit_name),unit.*,annual_registration_paymenttbl.status ,diocese.diocese_id from unit left JOIN annual_registration_paymenttbl  on annual_registration_paymenttbl.unit_id=unit.unit_id LEFT JOIN diocese on annual_registration_paymenttbl.diocese_id=diocese.diocese_id  where annual_registration_paymenttbl.status=1 and diocese.diocese_id='$diocese_id' ") or die(mysqli_error($mysqli));
                           $num_rows=mysqli_num_rows($query);
						 	
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color:green;"><i class="icon-reorder icon-large" ></i><strong>UNIT LIST</strong> </div>
                                <div class="muted pull-right" style="color:green"><strong>NUMBER OF UNIT:</strong> <span class="badge badge-info"><?php  echo $num_rows;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<h2 id="noch">NATIONAL REGISTRATIONS
                    <p style="margin:0;padding:0;">Republic of the Ghana</p>
                    <p style="margin:0;padding:0;font-weight:bold;">Sam Napoleon MEMORIAL STATE COLLEGE</p>
                    <p style="margin:0;padding:0;">Takoradi City, Naps</p>
                                </h2>
									<?php include('unit_report_table.php'); ?>
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