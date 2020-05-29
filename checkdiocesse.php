<?php
include 'Dbcon.php';
$output='';

if(isset($_POST['reg'])){
	if($_POST['reg'] != ''){
	$sql="select * from diocese where reg_id='".$_POST["reg"]."'";

}else{
	
	$sql="select * from diocese";
}

$result=mysqli_query($sql);
while($row=mysqli_fetch_array($result)){
$output.='<option>'.$row['diocese_name'].'</option>';
}
echo $output;
}

?>