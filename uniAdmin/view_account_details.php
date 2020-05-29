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
					<?php include('sidebar_searchreg.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-right">
									<a href="searchreg.php"><i class="icon-arrow-left icon-large"></i> Back</a>
								</div>
                            </div>

                            <div class="block-content collapse in">
                      <div class="span12">      	
           <table cellpadding="0" cellspacing="0" border="1" class="table" id="">
            <div class="alert alert-success">APPROVED</div>
		<thead>
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
                            	
                      <table cellpadding="0" cellspacing="0" border="1" class="table" id="">
                      	<div class="alert alert-success">PENDING</div>

		<thead>
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
						
	<table cellpadding="0" cellspacing="0" border="1" class="table" id="">
		<div class="alert alert-success">TOTAL PENDING AND APPROVED</div>
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
		<?php include ('footer.php'); ?>	
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>