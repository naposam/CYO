<?php
include 'Dbcon.php';
$output='';
$output1='';
if(isset($_POST['reg_id'])){
	if($_POST['reg_id'] != ''){
	$sql="select * from diocese where reg_id='".$_POST["reg_id"]."'";
	

}else{
	$sql="select * from diocese";
	
}
$result=mysqli_query($mysqli,$sql);

while($row=mysqli_fetch_array($result)){
$output.='<option>'.$row['diocese_name'].'</option>';
}

echo $output;


}





?>