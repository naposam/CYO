<?php
error_reporting(0);
include 'DbCon.php';
if(isset($_POST['search'])){
	$region=$_POST['region'];
	$diocese=$_POST['diocese'];
	$deanery=$_POST['deanery'];
	if(!empty($region) && !empty($diocese) && !empty($deanery)){

	$check="SELECT distinct crusader_id FROM annual_registration_paymenttbl WHERE status=1";
	   $result=mysqli_query($mysqli,$check);
	   $rowa=mysqli_fetch_array($result);
	   $crus_id=$rowa['crusader_id'];
    
		$query=mysqli_query($mysqli,"SELECT *,year(curDate())-year(DOB) as age, region.name,diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN region on crusaders.region=region.reg_id LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where crusaders.crusader_id in('$crus_id') and crusaders.region='$region' and crusaders.diocese='$diocese' or crusaders.deanery='$deanery'")or die(mysqli_error($mysqli));
		echo "<table cellpadding='0' cellspacing='0' border='0' class='table' id='example'>";
		echo "<tr>";
        echo" <th>Crusader Id</th>";
		echo "<th>Full Name</th>";			
        echo "<th>Unit</th>" ;          
         echo "<th>Section</th>";           
		echo "<td class='empty'></td>";			
		echo "</tr>";
		while($row = mysqli_fetch_array($query)){
       $id = $row['crusader_id'];
		$age = $row ['age'];
							if($age>=6){
	      							 $section='INFANT JESUS';
       							}if ($age>=12) {
	      							 $section='YOUNG APOSTLES';
      							 }if ($age>=17){
          							$section='CHRISTIAN SOLDIER';
          						}
          echo "<tr>";
       echo "<td>".$row['crusader_id']."</td>"; 
		echo "<td>". $row['fname'].' '.$row['mname'].' '.$row['lname']."</td>"; 
		  
		echo "<td>". $row['unit_name']."</td>"; 
		 echo "<td>". $section ."</td>";

          echo "</tr>";
		}
		echo "</table>";
		//header("location : regreport.php");
}
}



?>