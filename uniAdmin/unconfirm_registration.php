<?php include('includes/banner.php'); ?>
<?php include('session.php');

$userid=$_SESSION['id'];
 ?>
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
				<?php include('sidebar_unconfirm_reg.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
               //counting unconfirm crusaders from the tmptable
            $sql="SELECT *, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where id='$session_id'";
        $resultSet=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
        $fetch=mysqli_fetch_array($resultSet);
        $deanery=$fetch['deanery_name'];
        $diocese=$fetch['diocese_name'];
        $parish=$fetch['parish_name'];
        $unit=$fetch['unit_name'];

    $query=mysqli_query($mysqli,"SELECT *, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM tempcrusaders LEFT JOIN diocese ON tempcrusaders.diocese = diocese.diocese_id LEFT JOIN deanery on tempcrusaders.deanery=deanery.deanery_id LEFT JOIN parish on tempcrusaders.parish=parish.parish_id LEFT JOIN unit on tempcrusaders.unit=unit.unit_id where unit.unit_name='$unit'") or die(mysqli_error($mysqli));

        $fetch=mysqli_fetch_array($query);
        $unit=$fetch['unit_name'];
							$count = mysqli_num_rows($query);
						 	
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color:green;"><i class="icon-reorder icon-large" ></i><strong>UNCONFIRMED CRUSADERS LIST: <span style="color: black; font-weight: bolder; font-family: sans-serif;"><?php echo $fetch['unit_name'].' '.'UNIT';?></span></strong> </div>
                                <div class="muted pull-right" style="color:green"><strong>NUMBER OF UNCONFIRMED CRUSADERS:</strong> <span class="badge badge-info"><?php  echo $count;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<h2 id="noch">NATIONAL LIST OF CRUSADERS</h2>
									<?php include('unconfirm_crusaders_table.php'); ?>
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