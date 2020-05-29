<?php include('includes/banner.php'); ?>
<?php include('session.php'); ?>

    <body >
		<?php include('navbar.php') ?>
        <div class="container-fluid" id="">
            <div class="row-fluid">
					<?php include('sidebar_backup.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">SYSTEM BACKUP AND RESTORE</div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
						
										
								
                                <div class="span3">
                                   <a href="export.php" class="btn btn-warning btn-xs">Backup</a>
                                </div>
								
                                <div class="span3">
                                    <a href="Import.php" class="btn btn-danger btn-xs">Import</a>
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