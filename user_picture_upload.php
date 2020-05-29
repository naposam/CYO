<?php include('includes/banner.php'); ?>
<?php include('includes/head.php');?>
<?php include('DbCon.php');?>
<?php include ('save_crusader2.php')?>
<head>
<style type="text/css">
	body{
      background-image: url(images/colorful.jpg) !important;
    }
    @media{
    	.form-signin{
    		margin-left: 0;
    	}
    }
</style>

</head>
    <body>
 <div class="jumbotron" >
        <div class="container-fluid">
            <div class="row-fluid">
				
               
                        <!-- block -->
                      					
						<form id="add_crusader" class="d-flex justify-content-center align-items-center container" method="post" enctype='multipart/form-data' action="" >
						<!-- span 4 --><center>
										
										
											
											<img src="uploads/avatar-2.png" id="pic" style="width:200px; height: 200px; margin:0;padding: 0;">
											
											<input type="file" id="file" class="input-block-level"  name="image" placeholder="First Name" accept="image/*" onChange='readURL(this);' required>
											
											
											<button class="btn btn-primary " name="upload" ><i class="icon-upload icon-large"></i>Upload </button>		
										
										</center>
						</form>	
						<script type="text/javascript">
							
							function readURL(input){
								if(input.files && input.files[0]){
									var reader = new FileReader();

									reader.onload = function(e){
										$('#pic')
										.attr('src',e.target.result);
									};

									reader.readAsDataURL(input.files[0]);
								}
							}

						</script>
					
</div>
                            </div>
                        </div>

                    
                   
             
           
		<?php include ('footer.php'); ?>	
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>