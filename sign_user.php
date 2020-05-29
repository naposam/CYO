<?php include 'includes/header.php';?>
<!--<?php include 'sign.inc.php';?>-->
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	

input{
	margin: 5px !important;
}
select{
	margin: 5px !important;
}

</style>
</head>
<body style="background-image: url('images/colorful.jpg');">      
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="images/icon.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Fill the forms  by entering the correct details of Student, contact your head if you have any problem getting the right student details!</p>
                        
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
             <!-- <img src="assets/img/logo2.png" alt=""/> -->
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="reg_user.php" enctype="multipart/form-data">
                            <fieldset>
                                <div class="file">
                                    <label>
                                        <input type="file" name="pic" required="required">Upload Picture
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="First Name" name="fname" type="text"   autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Middle Name" name="mname" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last Name" name="lname" type="text"  required="required" autofocus>
                                </div>
                                <div class="form-group">
                                	<label>DOB</label>
                                    <input class="form-control" placeholder="DOB" name="dob" type="date" required="required" >
                                </div>
                                
                                <div class="form-group">
                                    <label>Gender:
                                    <select name="gender">
                                  <option ">Male</option>
                                  <option >Female</option>
                                   </select>
                                   </label>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="name of last School Attended" name="nlastsch" type="text"  required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" >
                                </div>

                                <div class="form-group">
                                    <label>CLASS:
                                    <select name="course">
                                  <option>Class One</option>
                                  <option>Class Two</option>
                                  <option >Class Three</option>
                                  <option >Class Four</option>
                                  <option >Class Five</option>
                                  <option >Class Six</option>
                                  <option >JHS One</option>
                                  <option >JHS Two</option>
                                  <option >JHS Three</option>
                                   </select>
                                   </label>
                                </div>
                                
                                   <div class="form-group">
                                   	<label>Other Details</label>
                                    <input class="form-control" placeholder="Guardian Name" name="gname" type="text" required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Guardian Telephone" name="gtel" type="number" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Relationship:
                                    <select name="rel_ship">
                                      <option>Select....</option>
                                  <option value="Mother">Mother</option>
                                  <option value="Sister">Sister</option>
                                  <option value="Brother">Brother</option>
                                  <option value="uncle">Uncle</option>
                                  <option value="Auntie">Auntie</option>
                                  <option value="Coursin">Coursin</option>
                                  <option value="Grandfather">Grandfather</option>
                                  <option value="Father">Father</option>
                                  <option value="Grandmother">Grandmother</option>
                                   </select>
                                   </label>
                               </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Hometown" name="hometown" type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Address" name="address" type="text" >
                                </div>
                                </div>
                                
                                <input type="submit" name="submit" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
                         </div>

            </div>
        </div>
       
</body>
</html>