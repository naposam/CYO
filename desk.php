<?php
//An example date of birth.
if (isset($_POST['save'])) {

$userDob = $_POST['dob'];
 
//Create a DateTime object using the user's date of birth.
$dob = new DateTime($userDob);
 
//We need to compare the user's date of birth with today's date.
$now = new DateTime();
 
//Calculate the time difference between the two dates.
$difference = $now->diff($dob);
 
//Get the difference in years, as we are looking for the user's age.
$age = $difference->y;
 //check age
if($age>=6){
	$section='INFANT JESUS';
}elseif ($age>=12) {
	$section='YOUNG APOSTLES';
}elseif ($age>=17) {
   $section='CHRISTIAN SOLDIER';

}else{
	echo "crusader must be at leat 6 years to register.".'Your is '.$age.'<br>';
}
//Print it out.
echo $age.'<br>';

echo $section;
}


?>

<form method="POST" action="desk.php">
	<input type="date" name='dob'>
	<input type="submit" value="Save" name="save"></input>
</form>