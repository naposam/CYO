<?php include('header.php'); ?>
<?php include('../session.php'); ?>
    <body style="background-image: url('../images/34.jpg')">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('report_sidebar_kg.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
							$query_nursery = mysqli_query($mysqli," select * from students, Class where students.class = class.class_name AND class.category ='Nursery'")or die(mysqli_error($mysqli));
                                $count_nursery = mysqli_num_rows($query_nursery);
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Students List</div>
                                <div class="muted pull-right">
									Number of Students: <span class="badge badge-info"><?php  echo $count_nursery;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<h2 id="noch">Students List</h2>
									<?php include('kg_table_report.php'); ?>
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