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
                                <div class="muted pull-left">Backup Results</div>
                            </div>
                            <div class="block-content collapse in">
                      <div class="span12">
            
                    
                
                                
                
                                <div class="span3">

<?php

$tables = array();
$result = mysqli_query($mysqli,"SHOW TABLES");
while($row = mysqli_fetch_row($result)){
  $tables[] = $row[0];
}
$return = '';
foreach($tables as $table){
  $result = mysqli_query($mysqli,"SELECT * FROM ".$table);
  $num_fields = mysqli_num_fields($result);
  
  $return .= 'DROP TABLE '.$table.';';
  $row2 = mysqli_fetch_row(mysqli_query($mysqli,"SHOW CREATE TABLE ".$table));
  $return .= "\n\n".$row2[1].";\n\n";
  
  for($i=0;$i<$num_fields;$i++){
    while($row = mysqli_fetch_row($result)){
      $return .= "INSERT INTO ".$table." VALUES(";
      for($j=0;$j<$num_fields;$j++){
        $row[$j] = addslashes($row[$j]);
        if(isset($row[$j])){ $return .= '"'.$row[$j].'"';}
        else{ $return .= '""';}
        if($j<$num_fields-1){ $return .= ',';}
      }
      $return .= ");\n";
    }
  }
  $return .= "\n\n\n";
}
//save file
$handle = fopen("backup.sql","w+");
fwrite($handle,$return);
fclose($handle);
echo "Successfully backed up";
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