<?php include('header.php'); ?>
<?php include('../session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body style="background-image: url('../images/34.jpg')">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-right">
										<a href="students.php"><i class="icon-arrow-left icon-large"></i> Back</a>
								</div>
                            </div>
                            <div class="block-content collapse in">
												<?php
						$query = mysqli_query($mysqli,"select * from students where Student_id = '$get_id'")or die(mysqli_error($mysqli));
						$row = mysqli_fetch_array($query);
						$cl = $row['Class'];
						$photo=$row['picture'];
						?>
						<div class="alert alert-success">STUDENT DETAILS</div>
						<div class="span6">
						PHOTO: <strong><img src="../uploads/<?php echo $photo;?>"  height="120px" width="120px"></strong><hr>
						Name: <strong><?php echo $row['Firstname']." ".$row['Middlename']." ".$row['Lastname']; ?></strong><hr>
						Gender: <strong><?php echo $row['Gender']; ?></strong><hr>
						Date Of Birth: <strong><?php echo $row['Dob']; ?></strong><hr>
						Address: <strong><?php echo $row['Address']; ?></strong><hr>
					     
						</div>
						<div class="span5">
						Class: <strong><?php echo $row['Class']; ?></strong><hr>
						Date Of Admission: <strong><?php echo $row['DOA']; ?></strong><hr>
						<?php 
						$query2 = mysqli_query($mysqli,"select * from class where class_name = '$cl'")or die(mysqli_error($mysqli));
						while ($row1=mysqli_fetch_array($query2)){
						$category = $row1['category'];
						
						}?>
						Class Category: <strong><?php echo $category; ?></strong><hr>
					
						</div>
<div class="span12">
	<hr>
						<div class="alert alert-success">GUARDIAN DETAILS</div>
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
		<thead>
		<tr>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Last Name</th>
					<th>Relationship to Member</th>
					<th>Telephone No</th>
					<th class="empty"></th>
		</tr>
		</thead>
		<tbody>

		<tr>
		<td><?php echo $row['Gfirstname']; ?></td> 
		<td><?php echo $row['Gmiddlename']; ?></td> 
		<td><?php echo $row['Glastname']; ?></td> 
		<td><?php echo $row['Rship']; ?></td> 
		<td><?php echo $row['Tel']; ?></td> 
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