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
				<?php include('sidebar_repreport.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
                                   ///this has been use
							$query=mysqli_query($mysqli,"SELECT *, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where id='$session_id'") or die(mysqli_error($mysqli));
							$count = mysqli_num_rows($query);
                            $fetch = mysqli_fetch_array($query);

                            //this is the only code used use
                           $sql=mysqli_query($mysqli,"SELECT distinct crusader_id FROM annual_registration_paymenttbl WHERE status=1")or die(mysqli_error($mysqli));
                           $num_rows=mysqli_num_rows($sql);
						 	
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color:green;"><i class="icon-reorder icon-large" ></i><strong>PAID CRUSADERS LIST: <span style="color: black; font-weight: bolder; font-family: sans-serif;"><?php echo $fetch['diocese_name'].' '.'DIOCESE';?></span></strong> </div>
                                <div class="muted pull-right" style="color:green"><strong>NUMBER OF PAID CRUSADERS:</strong> <span class="badge badge-info"><?php  echo $num_rows;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<h2 id="noch"><center><img src="../images/favi.jpeg" class="img-responsive"  style="margin:0;padding:0;height: 60px;width: 60px;"></center>
                                    <center>CATHOLIC YOUTH ORGANIZATION</center>
                                    
                    <center><p style="margin:0;padding:0;">(C. Y. O)</p></center> <br>
                    <p style="margin:0;padding:0;font-weight:bold; font-size: 20px;text-align: center;">PAID NATIONAL REGISTRATION LIST: <span style="color: black; font-weight: bolder; font-family: sans-serif;"><?php echo $fetch['diocese_name'].' '.'DIOCESE';?></span></p>
                    <small style="margin:0;padding:0; font-style: italic;">printed on: &nbsp;<?php echo date('d-m-Y')?></small>
                                </h2>
                                    <?php include('regreport_paid_table.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <br><br> <br><br>
            <h2 id="noch">
            <?php 

        echo "<p> _________________________</p>"; 
        echo "<p> Signature </p>"; 


        ?>
    </h2>
		<?php include ('footer.php'); ?>  
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>