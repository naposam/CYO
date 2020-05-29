<?php
include 'Dbcon.php';
$region=$_GET['reg'];
$output='';
$sql="select * from diocese where reg_id='$region'";
 $result=mysqli_query($mysqli,$sql);
  while($row = mysqli_fetch_array($result)){
 $output.='<option value="'.$row['diocese_id'].'">'.$row['diocese_name'].'</option>';
           }
     echo"<select><option selected='' disabled=''>select</option></select>";
      echo $output;

?>