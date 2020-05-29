
<?php
//error_reporting(0);
include 'DbCon.php';

  if(isset($_POST["submit"])){

    $CRU_ID = $_POST["CRU_ID"];
    $fname = $_POST["txtfname"];
    $lname = $_POST["txtlname"];
    $user_password = $_POST["txtpassword"];
    $con_pass=$_POST['conpass'];
   

    if($lname!="" && $fname!="" && $lname!=""){

      //$security_key_check_command =mysqli_query($mysqli,"SELECT * FROM tbUser WHERE email = '$email'")or die(mysqli_error($mysqli));
     //while($row= mysqli_fetch_array($security_key_check_command)){
      	// $counter=$mysqli->query($security_key_check_command);
     // }
      //if($counter==0){
        if($user_password==$con_pass){
        $sql=mysqli_query($mysqli,"INSERT INTO login_tb(Crusader_id,fname,lname,Password) VALUES('$CRU_ID','$fname','$lname','$user_password')") or die (mysqli_error($mysqli));
         echo "<script>alert('Successfully Registered!!Login to continue!!');
            document.location='LoginForm.php'
        </script>";
    }else{
        echo "<script>alert('Sorry, Password don't match);
       document.location='sign_users.php'
       </script>";
    }
     // }elseif($counter>0){
       // echo "<script>alert('Sorry,Your email is already registered with different User');
       // document.location='sign_users.php'
       // </script>";
      //}
    }else{
    echo "<script>alert('Please Fill All Spaces Provided');
    document.location='sign_users.php'</script>
    </script>";
  
}
    
  }
 ?>