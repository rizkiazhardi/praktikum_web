<!DOCTYPE html>
<html>
<head>
	<title>KUEQ</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/kueq.css">
	
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    #section_header {
    	background-image: url('img/Cover_Page2_1360_1360.jpg');
        background-position: center;
        background-repeat: no-repeat;
        min-height: 400px;
        margin-top: -20px;
        padding-top: 100px;
    }

    .whatscaption {
    	font-size: 80px;
    	font-family: 'Pacifico', cursive;
    }
    </style>
</head>
<body>

	<?php include('navbar.php'); ?>

	<div class="content">

		<div id="section_header">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12 text-white">
		                <h1 class="whatscaption" align="right">About Us</h1>
		            </div>
		        </div>
		    </div>
		</div>

		<div id="story" class="container">
			<div class="row" style="padding-top: 40px;padding-bottom: 60px;">
				<div class="col-md-10 col-md-offset-1 text-center">
					<p class="lead">In the confectionary world KUEQ continues to set the pace and innovation in this booming and constantly innovative industry. Sophisticated pastry lovers have learned to recognize and expect outstanding quality. As the pastry-lover's palette searches for an ever more sensuous pastry experience, KUEQ will continue to satisfy the most discerning pastry connoisseurs. The Company's founders share a mutual passion for exceptional cakes and pastries.</p>
				</div>
			</div>
			<div class="row" style="padding-top: 40px;padding-bottom: 60px;">
				<div class="col-md-4">
					<img class="img-responsive" src="img/about-4.png" />
				</div>
				<div class="col-md-8">
					<p class="lead">KUEQ's humble beginnings began with a vision and passion to create exceptional cakes and pastries. The business began as a part-time home-based-enterprise. Over the ensuing years the co-owners successfully transformed their home-based business into a company that today has more than twenty retail sales outlets in several major cities in Indonesia. The corporate offices are located in Surabaya, Jawa Timur.<br/><br/>KUEQ's philosophy is founded on the belief that an innovative product line of superior chocolates and cakes can be successfully marketed to an increasingly discriminating clientele ,while still affordable for all to enjoy.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<p class="lead">These superior quality chocolates and cakes keep KUEQ on the leading edge of the fine pastry market. in Indonesia. We will continue to set the standard for the finest pastries anywhere!<br/><br/>As KUEQ grow, our dreams remain the same. The concept for our store designs remains unchanged as well. We want you, our faithful to customers to feel as comfortable in our stores as you are at home.<br/><br/>We look forward to welcoming you in your friendly neighborhood KUEQ stores!</p>
				</div>
				<div class="col-md-4">
					<img class="img-responsive" src="img/heritage.jpg" />
				</div>
			</div>
		</div>

	</div>

	<footer class="footer">
	  	<div class="container">
	  		<div class="col-md-8">
	  			<h5>Contact Me</h5>
	            <p><a class="text-white" href="#"><i class="fas fa-envelope"></i></a> &nbsp; mgdgsd.mgmt@gmail.com</p>
	  		</div>
	  	<div class="col-md-4">
	  		<ul class="list-unstyled fontawe">
	              <li><a class="text-white" href="#"><i class="fab fa-twitter"></i></a> &nbsp; <a class="text-white" href="#"><i class="fab fa-instagram"></i></a> &nbsp; <a class="text-white" href="#"><i class="fab fa-github"></i></a></li>
	          </ul>
	          <p>Ardy x Mgdgsd &copy; 2018</p>
	  	</div>    
	  	</div>
	</footer>

	<script type="text/javascript">
	var auth = 'nosign';
    if(auth == 'nosign')
    {
    	$('#auth').html('<li><a href="user"><i class="fas fa-user"></i> Erwin Santoso</a></li>');
    }
    else
    {
    	$('#auth').html('<li><a href="signup">Sign Up</a></li><li><a href="login">Log In</a></li>');
    }
	</script>

</body>
</html>