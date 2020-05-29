<?php require 'Dbcon.php';?>
<?php
if(isset($_POST['save'])){
   $a=rand(000001,999999);
   $fname = substr(($_POST['fname']), 0,1);
   $lname =substr($_POST['lname'], 0,1);
   $unit=$_POST['unit'];
   $deaner=$_POST['deanery'];
   


$select="SELECT *  from deanery where deanery_name='$deaner'";
$result=mysqli_query($mysqli,$select) or die(mysqli_error($mysqli));
$row=mysqli_fetch_array($result);
 $id=$row['deanery_id'];

 $select1="SELECT *  from unit where unit_name='$unit'";
$result1=mysqli_query($mysqli,$select1) or die(mysqli_error($mysqli));
$row1=mysqli_fetch_array($result1);
 $id1=$row1['unit_id'];
 $code=$fname.$id1.$a.$id.$lname;
 echo $code;
 }
?>
<form method="post" >
<input type="text" name="fname">
<input type="text" name="lname">
<select name="unit">
	<option>SEKONDI</option>
	<option>ESSIKADO</option>
	<option>ADIEMBRA</option>
	<option>ABOADZI</option>
	<option>NEW TAKORADI</option>
</select>
<select name="deanery">
	<option>SEKONDI</option>
	<option>TAKORADI</option>
	<option>APOWA</option>
	<option>TARKWA</option>
</select>
<input type="submit" name="save">
</form>


	


