<?php

include 'Dbcon.php';
$unty=$_GET['unty'];
$output='';
$sql="select * from unit where parish_id='$unty'";
 $result=mysqli_query($mysqli,$sql);
  while($row = mysqli_fetch_array($result)){

 $output.='<option value="'.$row['unit_id'].'">'.$row['unit_name'].'</option>';
           }
      echo"<select><option selected='' disabled=''>select</option></select>";
      echo $output;




?>