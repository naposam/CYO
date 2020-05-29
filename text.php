
<?php

require 'Dbcon.php';
$sql=mysqli_query($mysqli,"select * from section")or die(mysqli_error($mysqli));
		while($row1=mysqli_fetch_array($sql)){
          $amount=$row1['section_name'];
          echo "<br>".  $amount;
	
		}
	?>					
	

 

