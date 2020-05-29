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
                                <div class="muted pull-left">Import Results</div>
                            </div>
                            <div class="block-content collapse in">
                      <div class="span12">
            
                    
                
                                
                
                                <div class="span3">
<?php

$filename = 'backup.sql';
$handle = fopen($filename,"r+");
$contents = fread($handle,filesize($filename));
$sql = explode(';',$contents);
foreach($sql as $query){
  $result = mysqli_query($mysqli,$query);
  if($result){
      echo '<tr><td><br></td></tr>';
      echo '<tr><td>'.$query.' <b>SUCCESS</b></td></tr>';
      echo '<tr><td><br></td></tr>';
  }
}
fclose($handle);
echo 'Successfully imported';
?>
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