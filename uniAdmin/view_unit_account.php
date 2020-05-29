<?php include('includes/banner.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
<style type="text/css">
    body{
      background-image: url(../images/colorful.jpg) !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;

    }
</style>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('sidebar_unit_report.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                            	<?php  $sql="SELECT count(office_title) as total_off ,annual_registration_paymenttbl.status,unit.unit_id,unit.unit_name FROM crusaders LEFT JOIN annual_registration_paymenttbl on crusaders.crusader_id=annual_registration_paymenttbl.crusader_id LEFT JOIN unit on unit.unit_id=annual_registration_paymenttbl.unit_id WHERE annual_registration_paymenttbl.status=1 and unit.unit_id='$get_id'";
                                   $result=mysqli_query($mysqli,$sql);
                                   $row3=mysqli_fetch_array($result);

                                   ?>
                                <div class="muted pull-right">
									<a href="unit_report.php"><i class="icon-arrow-left icon-large"></i> Back</a>&nbsp;&nbsp;
									<a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
								</div>
								<!-- <div class="pull-right">
	                
	
	                          </div> -->
								 <div class="muted pull-left">
									<a href="#"><i class="icon-reorder icon-large"></i>&nbsp;DETAILS OF <?php echo strtoupper($row3['unit_name']);?> &nbsp;UNIT</a>
								</div>
                            </div>

                    <div class="block-content collapse in">
         
												<?php
												
                  $sql="SELECT count(section) as total_IJ FROM  annual_registration_paymenttbl WHERE status=1 and section='INFANT JESUS' and unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $row=mysqli_fetch_array($result);
               $sql="SELECT count(section) as total_YA FROM  annual_registration_paymenttbl WHERE status=1 and section='YOUNG APOSTLES' and unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $row1=mysqli_fetch_array($result);
              $sql="SELECT count(section) as total_CA FROM  annual_registration_paymenttbl WHERE status=1 and section='CHRISTIAN SOLDIERS' and unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $row2=mysqli_fetch_array($result);

                 $sql="SELECT count(office_title) as total_off ,annual_registration_paymenttbl.status,unit.unit_id FROM crusaders LEFT JOIN annual_registration_paymenttbl on crusaders.crusader_id=annual_registration_paymenttbl.crusader_id LEFT JOIN unit on unit.unit_id=annual_registration_paymenttbl.unit_id WHERE annual_registration_paymenttbl.status=1 and unit.unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $row3=mysqli_fetch_array($result);



                 $sql="SELECT count(gender) as total_male ,annual_registration_paymenttbl.status,unit.unit_id FROM crusaders LEFT JOIN annual_registration_paymenttbl on crusaders.crusader_id=annual_registration_paymenttbl.crusader_id LEFT JOIN unit on unit.unit_id=annual_registration_paymenttbl.unit_id WHERE annual_registration_paymenttbl.status=1 and crusaders.gender='MALE' and unit.unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $row4=mysqli_fetch_array($result);

                     //used for unit name  on report.
                $sql="SELECT count(gender) as total_female ,annual_registration_paymenttbl.status,unit.unit_id,unit.unit_name FROM crusaders LEFT JOIN annual_registration_paymenttbl on crusaders.crusader_id=annual_registration_paymenttbl.crusader_id LEFT JOIN unit on unit.unit_id=annual_registration_paymenttbl.unit_id WHERE annual_registration_paymenttbl.status=1 and crusaders.gender='FEMALE' and unit.unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $row6=mysqli_fetch_array($result);



                 
						?>
						
                      
					
						<div class="span12">
						 <div class="block-content collapse in">
						 									<?php
				$sql="SELECT count(section) as total_IJ FROM  annual_registration_paymenttbl WHERE status=1 and section='INFANT JESUS' and unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $row=mysqli_fetch_array($result);
               $sql="SELECT count(section) as total_YA FROM  annual_registration_paymenttbl WHERE status=1 and section='YOUNG APOSTLES' and unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $row1=mysqli_fetch_array($result);
              $sql="SELECT count(section) as total_CA FROM  annual_registration_paymenttbl WHERE status=1 and section='CHRISTIAN SOLDIERS' and unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $row2=mysqli_fetch_array($result);

                

                 $sql="SELECT count(gender) as total_male ,annual_registration_paymenttbl.status,unit.unit_id FROM crusaders LEFT JOIN annual_registration_paymenttbl on crusaders.crusader_id=annual_registration_paymenttbl.crusader_id LEFT JOIN unit on unit.unit_id=annual_registration_paymenttbl.unit_id WHERE annual_registration_paymenttbl.status=1 and crusaders.gender='MALE' and unit.unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $row4=mysqli_fetch_array($result);

                $sql="SELECT count(gender) as total_female ,annual_registration_paymenttbl.status,unit.unit_id,unit.unit_name FROM crusaders LEFT JOIN annual_registration_paymenttbl on crusaders.crusader_id=annual_registration_paymenttbl.crusader_id LEFT JOIN unit on unit.unit_id=annual_registration_paymenttbl.unit_id WHERE annual_registration_paymenttbl.status=1 and crusaders.gender='FEMALE' and unit.unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $row5=mysqli_fetch_array($result);
                $unit_name=$row5['unit_name'];
                 
                 $totalnum=$row['total_IJ']+$row1['total_YA']+$row2['total_CA']+$row3['total_off'];
						?>

                            	<h2 id="noch"><center><img src="../images/favi.jpeg" class="img-responsive"  style="margin:0;padding:0;height: 60px;width: 60px;"></center>
                            		<center>CATHOLIC YOUTH ORGANIZATION</center>
                            		
                    <center><p style="margin:0;padding:0;">(C. Y. O)</p></center>
                    <p style="margin:0;padding:0;font-weight:bold; font-size: 20px;text-align: center;">SUMMARY REPORT ON NATIONAL REGISTRATION FOR <span style="color: black; font-weight: bolder; font-family: sans-serif;"><?php echo $row5['unit_name'].' '.'UNIT';?></span></p>
                    <small style="margin:0;padding:0; font-style: italic;">printed on: &nbsp;<?php echo date('d-m-Y')?></small>
                                </h2>	
                      <table cellpadding="2" cellspacing="0" border="1" class="table" id="">
                      	<div class="alert alert-success">TOTAL CRUSADERS PAID IN &nbsp;<?php echo strtoupper($row6['unit_name']);?> &nbsp;UNIT &nbsp; <strong>=<?php echo $totalnum;?></strong></div>
                      	<br/>

		<thead>
		<tr>
					<th>INFANT JEUS</th>
					<th>YOUNG APOSTLES</th>
					<th>CHRISTIAN SOLDIERS</th>
					<th>OFFICERS</th>
					<th>MALE</th>
					<th>FEMALE</th>
					
		</tr>
		</thead>
		<tbody>
				
						<tr>
		               <td><?php echo $row['total_IJ']; ?></td> 
		               <td><?php echo $row1['total_YA']; ?></td> 
		                <td><?php echo $row2['total_CA']; ?></td> 
		                <td><?php echo $row3['total_off']; ?></td> 
		                <td><?php echo $row4['total_male']; ?></td> 
		                <td><?php echo $row5['total_female']; ?></td> 
		               
		               </tr>
   
	              
		                </tbody>
	                     </table>
						</div>
					</div>

	<hr/>
<div class="span11">
				<div class="block-content collapse in">
					<?php
					$sql="SELECT sum(amount) as total_IJ_amount FROM  annual_registration_paymenttbl WHERE status=1 and section='INFANT JESUS' and unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $row10=mysqli_fetch_array($result);
               $sql="SELECT sum(amount) as total_YA_amount FROM  annual_registration_paymenttbl WHERE status=1 and section='YOUNG APOSTLES' and unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $row11=mysqli_fetch_array($result);

              $sql="SELECT sum(amount) as total_CA_amount FROM  annual_registration_paymenttbl WHERE status=1 and section='CHRISTIAN SOLDIERS' and unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $row12=mysqli_fetch_array($result);	



                $sql="SELECT sum(amount) as total_off_amount ,annual_registration_paymenttbl.status,unit.unit_id,unit.unit_name FROM crusaders LEFT JOIN annual_registration_paymenttbl on crusaders.crusader_id=annual_registration_paymenttbl.crusader_id LEFT JOIN unit on unit.unit_id=annual_registration_paymenttbl.unit_id WHERE annual_registration_paymenttbl.status=1 and unit.unit_id='$get_id'";
                                   $result=mysqli_query($mysqli,$sql);
                                          $row13=mysqli_fetch_array($result);


                $sql="SELECT sum(amount) as total_male_amount ,annual_registration_paymenttbl.status,unit.unit_id FROM crusaders LEFT JOIN annual_registration_paymenttbl on crusaders.crusader_id=annual_registration_paymenttbl.crusader_id LEFT JOIN unit on unit.unit_id=annual_registration_paymenttbl.unit_id WHERE annual_registration_paymenttbl.status=1 and crusaders.gender='MALE' and unit.unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $row14=mysqli_fetch_array($result);

                $sql="SELECT sum(amount) as total_female_amount ,annual_registration_paymenttbl.status,unit.unit_id FROM crusaders LEFT JOIN annual_registration_paymenttbl on crusaders.crusader_id=annual_registration_paymenttbl.crusader_id LEFT JOIN unit on unit.unit_id=annual_registration_paymenttbl.unit_id WHERE annual_registration_paymenttbl.status=1 and crusaders.gender='FEMALE' and unit.unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $row15=mysqli_fetch_array($result);	
                $total=	$row10['total_IJ_amount']+	$row11['total_YA_amount']+$row13['total_off_amount']+$row12['total_CA_amount'];	
                ?>
                            	
                      <table cellpadding="2" cellspacing="0" border="1" class="table" id="" >
                      	<div class="alert alert-success" >TOTAL AMOUNT PAID FOR ABOVE DIVISION &nbsp;<strong><?php echo " = GHS ". $total." .00" ;?></strong></div>
                      	<br/>

		<thead >
		<tr >
					<th>INFANT JEUS</th>
					<th>YOUNG APOSTLES</th>
					<th>CHRISTIAN SOLDIERS</th>
					<th>OFFICERS</th>
					<th>MALE</th>
					<th>FEMALE</th>
		</tr>
		</thead>
		<tbody>
				
						<tr>
		               <td><?php echo 'GHS '. $row10['total_IJ_amount']; ?></td> 
		               <td><?php echo 'GHS '. $row11['total_YA_amount']; ?></td> 
		                <td><?php echo 'GHS '. $row12['total_CA_amount']; ?></td> 
		                <td><?php echo 'GHS '. $row13['total_off_amount']; ?></td>
		                <td><?php echo 'GHS '. $row14['total_male_amount']; ?></td> 
		                <td><?php echo 'GHS '. $row15['total_female_amount']; ?></td>  
		               </tr>
   
	               
		                </tbody>
	                     </table>
						</div>
					</div>
			<hr/>
			<div class="span12">	
			<div class="block-content collapse in">		
	<table cellpadding="2" cellspacing="0" border="1" class="table" id="">
		<div class="alert alert-success">TOTAL PENDING AND APPROVED FOR  &nbsp;<?php echo strtoupper($row6['unit_name']);?> &nbsp;UNIT</div>
		<br/>
		<thead>
		<tr>
					<th>TOTAL APPROVED</th>
					<th>TOTAL PENDING</th>
					<th>TOTAL AMOUNT</th>
					<th>ACTUAL AMOUNT</th>
					
					<!-- <th class="empty"></th> -->
		</tr>
		</thead>
		<?php
		$sql="SELECT sum(amount) as unapproved_amount FROM  annual_registration_paymenttbl WHERE status=0 and unit_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
              $row=mysqli_fetch_array($result);

           $sql1="SELECT sum(amount) as approved_amount FROM  annual_registration_paymenttbl WHERE status=1 and unit_id='$get_id'";
                $result1=mysqli_query($mysqli,$sql1);
              $row1=mysqli_fetch_array($result1);
             $total= $row1['approved_amount'] + $row['unapproved_amount'].'.00';
                ?>
		<tbody>

		<tr>
		<td><?php echo 'GHS '. $row1['approved_amount']; ?></td> 
		<td><?php echo 'GHS '. $row['unapproved_amount']; ?></td> 
		<td><?php echo  'GHS '. $total ; ?></td> 
		<td><?php echo 'GHS '. $row1['approved_amount']; ?></td> 
		 
		</tr>
   
	
		</tbody>
	</table>

</div>
							

                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div> 
       </div>
</div>
            <br><br><br><br>
            <h2 id="noch">
            <?php 

		echo "<p> _________________________</p>"; 
		echo "<p> Signature </p>"; 


		?>
		</h2>
		<?php include ('footer.php'); ?>	
        
		<?php include('script.php'); ?>
    </body>	
</html>