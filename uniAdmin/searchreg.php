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
				<?php include('sidebar_searchreg.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
							// $query=mysqli_query($mysqli,"SELECT *, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id") or die(mysqli_error($mysqli));
                       $sql="SELECT *, unit.unit_name FROM crusaders LEFT JOIN unit on crusaders.unit=unit.unit_id where id='$session_id'";
        $resultSet=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
        $fetch=mysqli_fetch_array($resultSet);
        $unit=$fetch['unit_name'];

        $query=mysqli_query($mysqli,"SELECT *,year(curDate())-year(DOB) as age, unit.unit_name FROM crusaders LEFT JOIN unit on crusaders.unit=unit.unit_id where unit.unit_name='$unit'") or die(mysqli_error($mysqli));
							$count = mysqli_num_rows($query);
						 	
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color:green;"><i class="icon-reorder icon-large" ></i><strong>CRUSADERS LIST: <span style="color: black; font-weight: bolder; font-family: sans-serif;"><?php echo $fetch['unit_name'].' '.'UNIT';?></span></strong> </div>
                                <div class="muted pull-right" style="color:green"><strong>NUMBER OF CRUSADERS:</strong> 
                                    <span class="badge badge-info"><?php  echo $count;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<!-- <h2 id="noch">NATIONAL REGISTRATIONS</h2> -->
									<?php include('searchreg_table.php'); ?>
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