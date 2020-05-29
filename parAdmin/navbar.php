 
 
    <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
                    </a>
                    <span class="brand" href="#">NATIONAL REGISTRATION SYSTEM</span>
                    <div id="coll" class="nav-collapse collapse">
                        <ul class="nav pull-right" >
						<?php 
						$query= mysqli_query($mysqli,"select crusaders.* ,Login_tb.* from crusaders,Login_tb where Login_tb.user_id ='$session_id'")or die(mysqli_error($mysqli));
						$row = mysqli_fetch_array($query);
                        $crusaders_id=$row['crusader_id'];
						
						?>
                            <li class="dropdown">
                                <a href="#" id="name123" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-small"></i><?php echo $row['fname']." ".$row['lname'];  ?></a>
                                </li>
                                
									<!--  <li><a class="jkl" tabindex="-1" href="#">Profile</a></li> -->
									<li>
                                        <a tabindex="-1" href="change_password.php" class="jkl"><i class="icon-lock icon-small" style="color:#fff;"></i><span style="color:#fff;">Change Password</span></a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a  class="jkl" tabindex="-1" href="logout.php"><i class="icon-signout icon-small" style="color:#fff;"></i>&nbsp;<span style="color: #fff;">Logout</span></a></li>
                                
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
    </div>