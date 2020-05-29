<?php
include 'Dbcon.php';

$regdd=$_GET['regdd'];

if($regdd!=""){
$sql=("select * from deanery where diocese_id='$regdd'");
   $result=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
echo "<select>";
echo"<select><option selected='' disabled=''>select</option></select>";
while($row=mysqli_fetch_array($result))
{
echo "<option value='$row[deanery_id]'>";  echo $row['deanery_name'];  echo "</option>";
}

echo "</select>";
}
//for the change parish



?>