<?php include('includes/banner.php'); ?>
<?php include('session.php'); ?>
<style type="text/css">
    body{
      background-image: url(../images/colorful.jpg) !important;
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
                        <?php
                            $sql="SELECT *, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where id='$session_id'";
        $resultSet=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
        $fetch=mysqli_fetch_array($resultSet);
        $deanery=$fetch['deanery_name'];
        $diocese=$fetch['diocese_name'];
        $parish=$fetch['parish_name'];
        $unit=$fetch['unit_name'];

        $query=mysqli_query($mysqli,"SELECT *,year(curDate())-year(DOB) as age, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where deanery.deanery_name='$deanery'") or die(mysqli_error($mysqli));
                ?>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color:green;"><strong>CRUSADERS STATISTICS: <span style="color: black; font-weight: bolder; font-family: sans-serif;"><?php echo $fetch['deanery_name'].' '.'DEANERY';?></span></strong></div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
						
									<?php 
								// $query_west = mysqli_query($mysqli,"select * from crusaders where region=1 ")or die(mysqli_error($mysqli));
                                $sql="SELECT *, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where id='$session_id'";
        $resultSet=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
        $fetch=mysqli_fetch_array($resultSet);
        $deanery=$fetch['deanery_name'];
        $diocese=$fetch['diocese_name'];
        $parish=$fetch['parish_name'];
        $unit=$fetch['unit_name'];

        $query=mysqli_query($mysqli,"SELECT *,year(curDate())-year(DOB) as age, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where deanery.deanery_name='$deanery'") or die(mysqli_error($mysqli));
								$count_west = mysqli_num_rows($query);
								?>
								
                                <div class="span3">
                                    <div class="chart"  data-percent="<?php echo $count_west; ?>"><?php echo $count_west ; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL</strong>

                                    </div>
                                </div>
								
								<?php 
								// $query_westnorth = mysqli_query($mysqli,"select * from crusaders where region=2 ")or die(mysqli_error($mysqli));
                                $sql="SELECT *, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where id='$session_id'";
        $resultSet=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
        $fetch=mysqli_fetch_array($resultSet);
        $deanery=$fetch['deanery_name'];
        $diocese=$fetch['diocese_name'];
        $parish=$fetch['parish_name'];
        $unit=$fetch['unit_name'];

        $queryF=mysqli_query($mysqli,"SELECT *,year(curDate())-year(DOB) as age, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where deanery.deanery_name='$deanery' AND crusaders.gender='Female'") or die(mysqli_error($mysqli));
								$count_western = mysqli_num_rows($queryF);
								?>
								
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_western; ?>"><?php echo $count_western; ?></div>
                                    <div class="chart-bottom-heading"><strong>FEMALE</strong>

                                    </div>
                                </div>

								<?php 
																
								// $query_central = mysqli_query($mysqli," select * from crusaders where region=4 ")or die(mysqli_error($mysqli));
                                $sql="SELECT *, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where id='$session_id'";
        $resultSet=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
        $fetch=mysqli_fetch_array($resultSet);
        $deanery=$fetch['deanery_name'];
        $diocese=$fetch['diocese_name'];
        $parish=$fetch['parish_name'];
        $unit=$fetch['unit_name'];

        $queryM=mysqli_query($mysqli,"SELECT *,year(curDate())-year(DOB) as age, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where deanery.deanery_name='$deanery' AND crusaders.gender='Male'") or die(mysqli_error($mysqli));
								
								$count_central = mysqli_num_rows($queryM);
								
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_central; ?>"><?php echo $count_central; ?></div>
                                    <div class="chart-bottom-heading"><strong>MALE</strong>

                                    </div>
                                </div>
								
								<?php 
								$query_greater = mysqli_query($mysqli," select * from crusaders where region=3 ")or die(mysqli_error($mysqli));
								$count_greater = mysqli_num_rows($query_greater);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_greater; ?>"><?php echo $count_greater; ?></div>
                                    <div class="chart-bottom-heading"><strong>INFANT JESUS</strong>

                                    </div>
                                </div>
								
								
										<?php 
								$query_EASTERN = mysqli_query($mysqli," select * from crusaders where region=5 ")or die(mysqli_error($mysqli));
								$count_eastern = mysqli_num_rows($query_EASTERN);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_eastern ?>"><?php echo $count_eastern ?></div>
                                    <div class="chart-bottom-heading"><strong>YOUNG APOSTLES</strong>

                                    </div>
                                </div>
                                	<?php 
								$query_volta = mysqli_query($mysqli," select * from crusaders where region=10 ")or die(mysqli_error($mysqli));
								$count_volta = mysqli_num_rows($query_volta);
								?>
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_volta ?>"><?php echo $count_volta ?></div>
                                    <div class="chart-bottom-heading"><strong>CHRISTIAN SOLDIERS</strong>

                                    </div>
                                </div>
                                	<?php 
								$query_ahafo = mysqli_query($mysqli," select * from crusaders where region=6 ")or die(mysqli_error($mysqli));
								$count_ahafo = mysqli_num_rows($query_ahafo);
								?>
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_ahafo ?>"><?php echo $count_ahafo ?></div>
                                    <div class="chart-bottom-heading"><strong>OFFICERS</strong>

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