 <?php
 include('DbCon.php');
 include('session.php');
 $new_password  = $_POST['new_password'];
 mysqli_query($mysqli,"update login_tb set password = '$new_password' where user_id = '$session_id'")or die(mysqli_error($mysqli));
 ?>