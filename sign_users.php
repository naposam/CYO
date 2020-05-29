<?php error_reporting(0);?>
<?php include 'sign_user_inc.php';?>
<?php
//auto generate id
//$a=rand(001,99999);
$a=mt_rand(1,100000000).date();

//$b=rand(65,90);
//$c=rand(11,99);
//$d=rand(11,99);
//$e=rand(65,90);

$code=$a;

$id="CYO";

?>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Login_css/style.css">
  <style type="text/css">
    body{
      background-image: url(images/colorful.jpg) !important;

    }
    a{
      color:white;
    }
  </style>
</head>
<body>
  <form class='login-form' method="post" action="sign_user_inc.php">
  <div class="flex-row">
    <input id="fname" class='lf--input' placeholder='CRUSADER ID' type='text' name="CRU_ID" readonly value="<?php if(isset($code)){

      echo $id.$code;
    }?>">
  </div>
  <div class="flex-row">
    <input id="lname" class='lf--input' placeholder='Enter First Name' type='text' name="txtfname">
  </div>
  <div class="flex-row">
    <input id="lname" class='lf--input' placeholder='Enter Last Name' type='text' name="txtlname">
  </div>

  
  <div class="flex-row">
    <input id="password" class='lf--input' placeholder='Password' type='password' name="txtpassword">
  </div>
  <div class="flex-row">
    <input id="password" class='lf--input' placeholder='Confirm Password' type='password' name="conpass">
  </div>
  <input class='lf--submit lf--submit-adjusted' type='submit' value='Sign Up' name="submit" id="btnSubmit">

  <p style="font-size:.5em;color:#2dc6bf;text-align:center;cursor:hand;"><u><a href="index.php"><strong>BACK</strong></a></u></p>

</form>

</body>
