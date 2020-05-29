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
				<?php include('sidebar_crusaders.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-right">
										<a href="crusader.php"><i class="icon-arrow-left icon-large"></i> Back</a>
								</div>
                            </div>
                            <div class="block-content collapse in">
												<?php
						//$query = mysqli_query($mysqli,"select *, year(curDate()) -year(DOB) as age from crusaders where id = '$get_id'")or die(mysqli_error($mysqli));
						$query=mysqli_query($mysqli,"SELECT *,year(curDate())-year(DOB) as age,region.name, diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT join region on crusaders.region=region.reg_id LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where crusaders.crusader_id = '$get_id'") or die(mysqli_error($mysqli));
						$row = mysqli_fetch_array($query);
						$cl = $row['crusader_id'];
						$photo=$row['picture'];
						$region=$row['name'];
                      
						$age = $row ['age'];

							if($age>=6){
	      							 $section='INFANT JESUS';
       							}if ($age>=12) {
	      							 $section='YOUNG APOSTLES';
      							 }if ($age>=17){
          							$section='CHRISTIAN SOLDIER';
          						}
						?>
						<div class="alert alert-success">CRUSADER DETAILS</div>
						<div class="span6">
						PHOTO: <strong><img src="../uploads/<?php echo $photo;?>"  height="120px" width="120px"></strong><hr>
						Name: <strong><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></strong><hr>
						Gender: <strong><?php echo $row['gender']; ?></strong><hr>
						Date Of Birth: <strong><?php echo $row['DOB']; ?></strong><hr>
						Age: <strong><?php echo $row['age']; ?></strong><hr>
						Contact: <strong><?php echo $row['contact']; ?></strong><hr>
					     ID: <strong><?php echo $row['crusader_id']; ?></strong><hr>
						</div>
						<br><br><br><br>
						<div class="span5">
						
						Email Address: <strong><?php echo $row['email_address']; ?></strong><hr>
						
						Residential Address: <strong><?php echo $row['residential_address']; ?></strong><hr>
					     Region: <strong><?php echo $region; ?></strong><hr>
					     Office title: <strong><?php echo $row['office_title']; ?></strong><hr>
					     Office Level: <strong><?php echo $row['office_level']; ?></strong><hr>
					     Date Join: <strong><?php echo $row['date_joined']; ?></strong><hr>
					     Date Initiated: <strong><?php echo $row['date_initiated']; ?></strong><hr>
						</div>
<div class="span12">
	<hr>
						<div class="alert alert-success">OTHER DETAILS</div>
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
		<thead>
		<tr>
					<th>DIOCESE</th>
					<th>DEANERY</th>
					<th>PARISH</th>
					<th>UNIT</th>
					<th>SECTION</th>
					<th class="empty"></th>
		</tr>
		</thead>
		<tbody>

		<tr>
		<td><?php echo $row['diocese_name']; ?></td> 
		<td><?php echo $row['deanery_name']; ?></td> 
		<td><?php echo $row['parish_name']; ?></td> 
		<td><?php echo $row['unit_name']; ?></td> 
		<td><?php echo $section; ?></td> 
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