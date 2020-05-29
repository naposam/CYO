<?php

include 'Dbcon.php';
$paris=$_GET['paris'];
$output='';
$sql="select * from parish where deanery_id='$paris'";
 $result=mysqli_query($mysqli,$sql);
  while($row = mysqli_fetch_array($result)){
 $output.='<option value="'.$row['parish_id'].'">'.$row['parish_name'].'</option>';
           }
        echo"<select><option selected='' disabled=''>select</option></select>";
      echo $output;




?>