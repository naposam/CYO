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
				<?php include('sidebar_unpaid_crusaders.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
       //                             ///this has been used here
							// $query=mysqli_query($mysqli,"SELECT *, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id") or die(mysqli_error($mysqli));
							// $count = mysqli_num_rows($query);

       //                      //this is the only code used use
       //                     $sql=mysqli_query($mysqli,"SELECT distinct crusader_id FROM annual_registration_paymenttbl WHERE status=0")or die(mysqli_error($mysqli));
       //                     $num_rows=mysqli_num_rows($sql);

       //                     $query=mysqli_query($mysqli,"SELECT distinct(crusaders.crusader_id),crusaders.*,year(curDate())-year(DOB) as age, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name,annual_registration_paymenttbl.status FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id LEFT JOIN annual_registration_paymenttbl on crusaders.crusader_id=annual_registration_paymenttbl.crusader_id where annual_registration_paymenttbl.status=0 ") or die(mysqli_error($mysqli));
                        $sql="SELECT *, deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where id='$session_id'";
        $resultSet=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
        $fetch=mysqli_fetch_array($resultSet);
        $deanery=$fetch['deanery_name'];
        $parish=$fetch['parish_name'];
        $unit=$fetch['unit_name'];
        $deanery_id=$fetch['deanery_id'];

        $query=mysqli_query($mysqli,"SELECT *,crusaders.crusader_id as id, year(curDate())-year(DOB) as age, deanery.deanery_name,parish.parish_name,unit.unit_name,annual_registration_paymenttbl.deanery_id FROM crusaders LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id LEFT JOIN annual_registration_paymenttbl on crusaders.crusader_id=annual_registration_paymenttbl.crusader_id where crusaders.crusader_id  NOT IN(select crusader_id from annual_registration_paymenttbl) and crusaders.deanery='$deanery_id'") or die(mysqli_error($mysqli));
             $num_rows=mysqli_num_rows($query);
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color:green;"><i class="icon-reorder icon-large" ></i><strong>UNPAID CRUSADERS LIST: <span style="color: black; font-weight: bolder; font-family: sans-serif;"><?php echo $fetch['deanery_name'].' '.'DEANERY';?></span></strong> </div>
                                <div class="muted pull-right" style="color:green"><strong>NUMBER OF UNPAID CRUSADERS:</strong> <span class="badge badge-info"><?php  echo $num_rows;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<h2 id="noch"><center><img src="../images/favi.jpeg" class="img-responsive"  style="margin:0;padding:0;height: 60px;width: 60px;"></center>
                                    <center>CATHOLIC YOUTH ORGANIZATION</center>
                                    
                    <center><p style="margin:0;padding:0;">(C. Y. O)</p></center> <br>
                    <p style="margin:0;padding:0;font-weight:bold; font-size: 20px;text-align: center;">UNPAID NATIONAL REGISTRATION LIST: <span style="color: black; font-weight: bolder; font-family: sans-serif;"><?php echo $fetch['deanery_name'].' '.'DEANERY';?></span></p>
                    <small style="margin:0;padding:0; font-style: italic;">printed on: &nbsp;<?php echo date('d-m-Y')?></small>
                                </h2>
                                    <?php include('unpaid_crusaders_table.php'); ?>
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