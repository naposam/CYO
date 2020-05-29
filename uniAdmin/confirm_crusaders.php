<?php include('DbCon.php'); ?>

<?php $get_id = $_GET['id']; ?>
<?php
mysqli_query($mysqli,"INSERT INTO crusaders(id,crusader_id,fname,mname,lname,DOB,unit,parish,deanery,diocese,contact,email_address,residential_address,region,office_title,office_level,gender,date_joined,date_initiated,picture,date_registered) select id,crusader_id,fname,mname,lname,DOB,unit,parish,deanery,diocese,contact,email_address,residential_address,region,office_title,office_level,gender,date_joined,date_initiated,picture,date_registered from tempcrusaders where crusader_id='$get_id'") or die(mysqli_error($mysqli));


mysqli_query($mysqli,"INSERT INTO login_tb(user_id,crusader_id,fname,lname,password)  select id,crusader_id,fname,lname,password from tempcrusaders where crusader_id='$get_id'")or die(mysqli_error($mysqli));

mysqli_query($mysqli,"DELETE FROM tempcrusaders where crusader_id='$get_id'")or die(mysqli_error($mysqli));
// (mysqli_error($mysqli))
header("location: unconfirm_registration.php");


// insert into sample(user_id,crusader_id,fname,lname) select id,crusader_id,fname,lname from crusaders
// INSERT INTO sample SELECT * FROM login_tb

?>