<?php include('header.php'); ?>
<?php include('../session.php'); ?>
    <body style="background-image: url('../images/34.jpg')">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_primary_report.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
							$query_primary = mysqli_query($mysqli," select * from students, Class where students.class = class.class_name AND class.category ='Primary'")or die(mysqli_error($mysqli));
                                $count_primary = mysqli_num_rows($query_primary);
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Students List</div>
                                <div class="muted pull-right">
									Number of Students: <span class="badge badge-info"><?php  echo $count_primary;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<h2 id="noch">Students List</h2>
									<?php include('primary_table_report.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>