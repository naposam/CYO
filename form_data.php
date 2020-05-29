<?php error_reporting(0) ; ?>
<?php session_start();?>
<?php include('includes/banner.php'); ?>
<?php include('includes/head.php');?>

<?php
include('DbCon.php');

?>
<style type="text/css">
	.pass_show{position: relative} 

.pass_show .ptxt { 

top: 50%; 

right: 10px; 

z-index: 1; 

color: #f3f3f3f3; 

margin-top: -10px; 

cursor: pointer; 

transition: .3s ease all; 

} 
</style>
<div class="container" style="color: whitesmoke;">

<div class="jumbotron" style="background-color: rgba(0,0,0,0.15); align-content: center !important; align-items: center !important; border-radius: 5%; width: 80%; margin-left: 10%;">
	<h3 style="margin-left: 37%;margin-right: 38%;padding:0;margin-top: auto; margin-bottom: auto; font-weight: bolder; color: black;">CONFIRM DETAILS</h3><hr style="margin: 0; padding: 0;">
		<div style="width: 55% ;margin:auto;">
			<?php 

	const br = '<br/>';
	if($_POST){
	$_SESSION['region']=$_POST['region'];
	$_SESSION['diocese']=$_POST['diocese'];
	$_SESSION['deanery']=$_POST['deanery'];
	$_SESSION['parish']=$_POST['parish'];
	$_SESSION['unit']=$_POST['unit'];
    $_SESSION['officetitle']=$_POST['officetitle'];
    $_SESSION['officelevel']=$_POST['officelevel'];
	$_SESSION['password']=$_POST['password'];

	$region=('select * from region where reg_id='.$_SESSION['region'].'');
	$result=mysqli_query($mysqli,$region);
	$row=mysqli_fetch_array($result);
	$reg_name=$row['name'];

	$diocese=('select * from diocese where diocese_id='.$_SESSION['diocese'].'');
	$result1=mysqli_query($mysqli,$diocese);
	$row1=mysqli_fetch_array($result1);
	$diocese_name=$row1['diocese_name'];

	$deanery=('select * from deanery where deanery_id='.$_SESSION['deanery'].'');
	$result2=mysqli_query($mysqli,$deanery);
	$row2=mysqli_fetch_array($result2);
	$deanery_name=$row2['deanery_name'];

	$parish=('select * from parish where parish_id='.$_SESSION['parish'].'');
	$result3=mysqli_query($mysqli,$parish);
	$row3=mysqli_fetch_array($result3);
	$parish_name=$row3['parish_name'];	

	$unit=('select * from unit where unit_id='.$_SESSION['unit'].'');
	$result4=mysqli_query($mysqli,$unit);
	$row4=mysqli_fetch_array($result4);
	$unit_name=$row4['unit_name'];

	}
	
	echo "<span style='color:black; font-weight:bold; font-size: 16px;'> FIRST NAME:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;'>".strtoupper($_SESSION['fname'])."</span>".br;
	echo "<span style='color:black; font-weight:bold; font-size: 16px;'>MIDDLE NAME:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;'>".strtoupper($_SESSION['mname'])."</span>".br;
	echo "<span style='color:black; font-weight:bold; font-size: 16px;'>LAST NAME:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;'>".strtoupper($_SESSION['lname'])."</span>".br;
	echo "<span style='color:black; font-weight:bold; font-size: 16px;'>GENDER:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;'>".strtoupper($_SESSION['gender'])."</span>".br;
	echo "<span style='color:black; font-weight:bold; font-size: 16px;'>DATE OF BIRTH:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;'>".strtoupper($_SESSION['datejoi'])."</span>".br;
	echo "<span style='color:black; font-weight:bold; font-size: 16px;'>DATE INITIATED:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;'>".strtoupper($_SESSION['dateini'])."</span>".br;
	echo "<span style='color:black; font-weight:bold; font-size: 16px;'>DATE OF BIRTH:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;'>".strtoupper($_SESSION['dob'])."</span>".br;
	echo "<span style='color:black; font-weight:bold; font-size: 16px;'>RESIDENTIAL ADDRESS:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;'>".strtoupper($_SESSION['ResAddress'])."</span>".br;
	echo "<span style='color:black; font-weight:bold; font-size: 16px;'>EMAIL ADDRESS:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;'>".$_SESSION['EmailAddress']."</span>".br;


	echo "<span style='color:black; font-weight:bold; font-size: 16px;'>REGION:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;'>".$reg_name."</span>".br;
	echo "<span style='color:black; font-weight:bold; font-size: 16px;'>DIOCESE:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;'>".$diocese_name."</span>".br;
	echo "<span style='color:black; font-weight:bold; font-size: 16px;'>DEANERY:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;'>".$deanery_name."</span>".br;
	echo "<span style='color:black; font-weight:bold; font-size: 16px;'>PARISH:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;'>".$parish_name."</span>".br;
	echo "<span style='color:black; font-weight:bold; font-size: 16px;'>UNIT:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;'>".$unit_name."</span>".br;
    echo "<span style='color:black; font-weight:bold; font-size: 16px;'>OFFICE TITLE:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;'>".$_SESSION['officetitle']."</span>".br;
    echo "<span style='color:black; font-weight:bold; font-size: 16px;'>OFFICE LEVEL:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;'>".$_SESSION['officelevel']."</span>".br;
	// echo "<span style='color:black; font-weight:bold; font-size: 16px;' >PASSWORD:&nbsp;&nbsp; </span>"."<span style='font-size:18px; font-weight:bolder;' >".$_SESSION['password']."&nbsp;&nbsp;</span>".br;
	
			?>
		<div class="form-group pass_show"> 
	<span style="padding: 0;margin:0;color:black;font-size: 16px;font-weight: bold;">PASSWORD:&nbsp;&nbsp;</span> <input type="password" name="" value="<?php echo $_SESSION['password'];?>" style="background:none;border:none; font-size:18px;color:white; padding: 0; margin:0; " >
	</div>		
	
		<form method="post" enctype='multipart/form-data' style="margin-top: 20px;" action="user_picture_upload.php">
			
			<a href="add_crusader_page2.php" class="btn btn-primary" style="margin-left: 10%;"><strong>Previous</strong></a>
			<button type="submit" class="btn btn-danger" style="margin-left: 20%;" ><strong>Confirm</strong></button>
<script type="text/javascript">
	
	$(document).ready(function(){
$('.pass_show').append('<span class="ptxt">Show</span>');  
});
  

$(document).on('click','.pass_show .ptxt', function(){ 

$(this).text($(this).text() == "Show" ? "Hide" : "Show"); 

$(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 

});  
</script>
		</form>
	</div>

</div>

</div>
<?php include ('footer.php'); ?>