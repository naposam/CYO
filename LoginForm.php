
<?php include('includes/banner.php');

 ?>

  <body id="login" style="background-image: url('images/colorful.jpg')">
    <div class="container">
  <?php include('includes/header.php'); ?>
  
    <form id="login_form" class="form-signin" method="post" autocomplete="off">
        <h3 class="form-signin-heading"><i class="icon-lock"></i> Please Login</h3>
        <input type="text" class="input-block-level" id="username" name="username" placeholder="Crusader ID" required autofocus>
        <input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
        <button data-placement="top" title="Click to Login" id="login1" name="login" class="btn btn-success" type="submit"><i class="icon-signin icon-large"></i> Sign in</button> <a href="forgot_password.php" style="color: white;">FORGOT PASSWORD</a>
        
                    <script type="text/javascript">
                    $(document).ready(function(){
                      $('#login1').tooltip('show');
                      $('#login1').tooltip('hide');
                    });
                  </script>
  </form>
  <center><p><span class="kvt">ULT</span><span class="ti"><strong>DEV</strong></span> &copy; <?php echo date("Y"); ?> All Rights Reserved </p></center>
                 
                  <script>
                        jQuery(document).ready(function(){
                        jQuery("#login_form").submit(function(e){
                            e.preventDefault();
                            var formData = jQuery(this).serialize();
                            $.ajax({
                              type: "POST",
                              url: "login.php",
                              data: formData,
                              success: function(html){
                               if (html == 'true_admin'){
                                $.jGrowl("Loading Please Wait......", { sticky: true });
                                $.jGrowl("National Registration System", { header: 'Access Granted' });
                              var delay = 1000;
                                setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
                              }else
                              if (html == 'true_dioAd'){
                                $.jGrowl("Loading Please Wait......", { sticky: true });
                                $.jGrowl("National Registration System", { header: 'Access Granted' });
                              var delay = 1000;
                                setTimeout(function(){ window.location = 'dioAdmin/dashboard.php'  }, delay);
                              }else
                              if (html == 'true_deaAd'){
                                $.jGrowl("Loading Please Wait......", { sticky: true });
                                $.jGrowl("National Registration System", { header: 'Access Granted' });
                              var delay = 1000;
                                setTimeout(function(){ window.location = 'deaAdmin/dashboard.php'  }, delay);
                              }else
                              if (html == 'true_parAd'){
                                $.jGrowl("Loading Please Wait......", { sticky: true });
                                $.jGrowl("National Registration System", { header: 'Access Granted' });
                              var delay = 1000;
                                setTimeout(function(){ window.location = 'parAdmin/dashboard.php'  }, delay);
                              }else
                              if (html == 'true_uniAd'){
                                $.jGrowl("Loading Please Wait......", { sticky: true });
                                $.jGrowl("National Registration System", { header: 'Access Granted' });
                              var delay = 1000;
                                setTimeout(function(){ window.location = 'uniAdmin/dashboard.php'  }, delay);
                              }else
                              if (html == 'true_user'){
                                $.jGrowl("Loading Please Wait......", { sticky: true });
                                $.jGrowl("National Registration System", { header: 'Access Granted' });
                              var delay = 1000;
                                setTimeout(function(){ window.location = 'normal/view_stud.php'  }, delay);  
                              }else
                              {
                              $.jGrowl("Please Check your Crusader ID and Password", { header: 'Login Failed' });
                              }
                              }
                            });
                            return false;
                          });
                  });
                  </script>

    </div> <!-- /container -->
   
<?php include('script.php'); ?>
  </body>
  <style type="text/css">
    .kvt{
      font-kerning: 30px;
      font-weight: bold;
      font-family: 'NEOLTH Regular';
      color:darkblue;
      text-shadow: 2px 2px 4px 4px;
    }
    .ti{
       color:lightblue;
       font-weight: 50vh;
       font-family: 'Vermin Vibes V Regular';
    }
  </style>
</html>

