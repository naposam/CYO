<?php include('includes/banner.php'); ?>
<?php include('session.php'); ?>
<!-- <?php $get_id //= $_GET['id']; ?> -->
    <body style="background: url(../images/colorful.jpg) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
 background-repeat: no-repeat;
 background-size: cover;">
		<?php include('navbar.php'); ?>
		<?php $get_id = $crusaders_id; ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('norm_sidebar_viewaccount_details.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-right">
									<a href="norm_payreg.php"><i class="icon-arrow-left icon-large"></i> Back</a>&nbsp;&nbsp;
									<a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a>
								</div>
                            </div>
                                      <?php
                            $set="SELECT crusaders.*,annual_registration_paymenttbl.* from crusaders LEFT JOIN annual_registration_paymenttbl on annual_registration_paymenttbl.crusader_id=crusaders.crusader_id where crusaders.crusader_id='$get_id' ";
                            $top=mysqli_query($mysqli,$set);
                            $row6=mysqli_fetch_array($top);


                                      ?>
                            <div class="block-content collapse in">
                      <div class="span12"> 
             <h2 id="noch"><center><img src="../images/favi.jpeg" class="img-responsive"  style="margin:0;padding:0;height: 60px;width: 60px;"></center>
                            		<center>CATHOLIC YOUTH ORGANIZATION</center>
                            		
                    <center><p style="margin:0;padding:0;">(C. Y. O)</p></center>
                    <p style="margin:0;padding:0;font-weight:bold; font-size: 20px;text-align: center;">REPORT ON NATIONAL REGISTRATION FOR CR. &nbsp;<?php echo strtoupper($row6['fname']." ". strtoupper($row6['lname']));?> &nbsp;</p>
                    <small style="margin:0;padding:0; font-style: italic;">printed on: &nbsp;<?php echo date('d-m-Y')?></small>
                                </h2>     	
           <table cellpadding="1" cellspacing="1" border="1" class="table" id="">
            <div class="alert alert-success">APPROVED</div>
           
		<thead>
			 <br>
		<tr>
					<th>AMOUNT</th>
					<th>DATEPAID</th>
					<th>TIMEPAID</th>
					<th>PAYMENT-TYPE</th>
					<th>PERIOD</th>
					<th>TRANSACTION ID</th>
		</tr>
		</thead>
												<?php
				$sql="SELECT * FROM  annual_registration_paymenttbl WHERE status=1 and crusader_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                 while($row=mysqli_fetch_array($result)){

                $datepaid=date('Y-m-d', strtotime($row['datepaid']));
                $time=date('H:i A',strtotime($row['datepaid']));
                 
						?>
						
						
						<tr>
		               <td><?php echo 'GHS '. $row['amount']; ?></td> 
		               <td><?php echo $datepaid ?></td>
		               <td><?php echo $time; ?></td>  
		               <td><?php echo $row['payment_type']; ?></td> 
		               <td><?php echo $row['period']; ?></td> 
		               <td><?php echo $row['trans_id']; ?></td> 
		               </tr>
   
	               <?php } ?> 
		                </tbody>
	                     </table>
						</div>
                      
						<br><br><br><br>
						<div class="span11">
						 <div class="block-content collapse in">
                            	
                      <table cellpadding="1" cellspacing="1" border="1" class="table" id="">
                      	<div class="alert alert-success">PENDING</div>
                      	

		<thead>
			<br>
		<tr>
					<th>TRANSACTION</th>
					<th>DATEPAID</th>
					<th>TIMEPAID</th>
					<th>PAYMENT-TYPE</th>
					<th>PERIOD</th>
					<th>TRANSACTION ID</th>
		</tr>
		</thead>
												<?php
				$sql="SELECT * FROM  annual_registration_paymenttbl WHERE status=0 and crusader_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                 while($row=mysqli_fetch_array($result)){

          $datepaid=date('Y-m-d', strtotime($row['datepaid']));
                $time=date('H:i A',strtotime($row['datepaid']));
                 
						?>
						<tr>
		               <td><?php echo 'GHS '. $row['amount']; ?></td> 
		               <td><?php echo  $datepaid; ?></td> 
		                <td><?php echo  $time; ?></td> 
		               <td><?php echo $row['payment_type']; ?></td> 
		               <td><?php echo $row['period']; ?></td> 
		               <td><?php echo $row['trans_id']; ?></td> 
		               </tr>
   
	               <?php } ?> 
		                </tbody>
	                     </table>
						</div>
<div class="span11">
	<hr>
						
	<table cellpadding="1" cellspacing="1" border="1" class="table" id="">
		<div class="alert alert-success">TOTAL PENDING AND APPROVED</div>
		<br>
		<thead>
		<tr>
					<th>TOTAL APPROVED</th>
					<th>TOTAL PENDING</th>
					<th>TOTAL AMOUNT</th>
					<th>ACTUAL AMOUNT</th>
		</tr>
		</thead>
		<?php
		$sql="SELECT sum(amount) as unapproved_amount FROM  annual_registration_paymenttbl WHERE status=0 and crusader_id='$get_id'";
                $result=mysqli_query($mysqli,$sql);
              $row=mysqli_fetch_array($result);

           $sql1="SELECT sum(amount) as approved_amount FROM  annual_registration_paymenttbl WHERE status=1 and crusader_id='$get_id'";
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
            <br><br><br><br>
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