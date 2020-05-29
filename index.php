<?php include 'includes/header.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Natonal Registration System</title>
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
		}
		.load{
			animation: slide 2s;

		}
		.slider{
			background-repeat: no-repeat;
			background-size: cover;
			background-position: cover;
			width: 100%;
			height: 100vh;
			animation: slide 40s infinite;


		}
		.content{
			columns: #fff;
			width: 100%;
			height: 100vh;
			background-color: rgba(0,0,0,0.5);
		}
		.principal{
			left: 50%;
			top:50%;
			transform: translate(-50%,-50%);
			position: absolute;
			text-align: center;
			letter-spacing: 5px;
			
		}
		.principal h1{
			font-size: 40px;
			margin-bottom: 20px: 
			
		}
		h1{
			color:#ffffff !important;
			text-shadow: 2px 2px 2px darkorange;
		}
		p{
			color:green;
		
		}
		.principal p{
			font-size: 20px;
		}
		@keyframes slide{
          0%{
background-image: url('img/banner/sam.jpg');
          }
          20%{
background-image: url('img/banner/kb.jpg');
          }
           20.01%{
background-image: url('img/banner/dims.jpg');
          }
          40%{
background-image: url('img/banner/gh.jpg');
          }
           40.01%{
background-image: url('img/banner/home_right.jpg');
          }
          60%{
background-image: url('img/banner/kb.jpg');
          }
           60.01%{
background-image: url('img/banner/sams.jpg');
          }
          80%{
background-image: url('img/banner/vb.jpg');
          }
           80.01%{
background-image: url('img/banner/bg.jpg');
          }
          100%{
background-image: url('img/banner/dpsschool.jpg');
          }
          100.01%{
background-image: url('img/banner/priest.jpg');
          }
          120%{
background-image: url('img/banner/aba.jpg');
          }
          120.01%{
background-image: url('img/banner/bish.jpg');
          }
          140%{
background-image: url('img/banner/alb.jpg');
          }

		}
		
	</style>
</head>
<body>
	
  <div class="slider">
  	<div class="load"></div>
  	<div class="content">
  		
  	
  	<div class="principal">
  		<h1>NATIONAL REGISTRATION</h1>
  		<p><h2 style="color: white;">SYSTEM</h2></p>
  		</div>
  	</div>
  </div>
  <?php include 'animation.php';?>
</body>
</html>