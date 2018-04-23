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
    #slider {
		margin-top: -20px;
	}

	.carousel {
	  	height: 500px;
	  	margin-bottom: 60px;
	}

	.carousel-caption {
		z-index: 10;
	}

	.carousel .item {
	  	height: 500px;
	  	background-color: #777;
	}
	.carousel-inner > .item > img {
	  	position: absolute;
	  	top: 0;
	  	left: 0;
	  	min-width: 100%;
	  	min-height: 500px;
	}

	#section_caption {
		padding-top: 10px;
		padding-bottom: 50px;
	}

	#whatsnew {
		text-decoration: none;
	}

	.bestitle {
		font-family: 'Pacifico', cursive;    
	}
    </style>
</head>
<body>

	<?php include('navbar.php'); ?>

	<div class="content">

		<div id="slider" class="carousel slide" data-ride="carousel">
	  		<ol class="carousel-indicators">
			    <li data-target="#slider" data-slide-to="0" class="active"></li>
			    <li data-target="#slider" data-slide-to="1"></li>
		  	</ol>

	  		<div class="carousel-inner">
			    <div class="item active">
		      		<img src="img/baked-beautiful-birthday-302552.jpg" alt="Chania">
		      		<div class="carousel-caption bestitle">
		      			<h1 style="font-size: 120px;padding-bottom: 40px;">Kueq</h1>
		      		</div>
			    </div>
			    <div class="item">
			    	<img src="blur-cafe-cake-907142.jpg" alt="Chicago">
			    </div>
	  		</div>

		  	<a class="left carousel-control" href="#slider" data-slide="prev">
	    		<span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
		  	</a>
		  	<a class="right carousel-control" href="#slider" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
		  	</a>
		</div>

		<div id="whatsnew" class="container">
			<div class="row">
				<div id="section_caption" class="col-md-12">
					<center><h2>WHAT'S NEW</h2></center>
				</div>
				<a href="whatsnew.php"><div id="its"></div></a>
	      	</div><br/><br/><br/><br/>

			<div class="row">
		    	<div class="col-md-6">
		      		<h2>OUR HERITAGE</h2>
			      	<p class="lead">KUEQ's philosophy is founded on the belief that an innovative product line of superior chocolates and cakes can be successfully marketed to an increasingly discriminating clientele ,while still affordable for all to enjoy. These superior quality chocolates and cakes keep KUEQ on the leading edge of the fine pastry market. in Indonesia. We will continue to set the standard for the finest pastries anywhere!</p><br/>
			      	<a href="about.php" class="btn btn-lg btn-warning">Learn More</a>
			    </div>
			    <div class="col-md-6">
			      	<img class="img-responsive" src="img/heritage2.png" />
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
    
    var whatsnew = [{ id: '0', title: 'Promo Spesial Kartini', text: 'Merayakan hari Kartini tahun ini KUEQ memberikan spesial diskon untuk seluruh Wanita Indonesia, berupa potongan 21% setiap pembelian Cake jenis apa saja ukuran 10x20 cm, 20x20 cm dan 20x40 cm. Serta dapatkan Voucher Rp 100.000 bagi customer yang berulang tahun di tanggal 21 April 2018.'}, { id: '1', title: 'KUEQ Jemursari Pindah lokasi', text: 'Pada Juni 2018 nanti secara resmi, Dapur Cokelat menginformasikan bahwa outlet di Jemursari akan pindah ke lokasi baru di Jl. Panjang Jiwo, Surabaya.' }, { id: '2', title: 'Potongan Spesial di KUEQ Sidoarjo', text: 'Gunakan Mandiri Fiesta Point kamu untuk mendapatkan potongan khusus produk KUEQ. Hanya berlaku di KUEQ Sidoarjo.'}];
    for($i = 0; $i < whatsnew.length; $i++)
    {
        $('#its').append('<div class="col-md-4"><h2>'+whatsnew[$i].title+'</h2><p>'+whatsnew[$i].text+'</p></div>');
    }
	</script>

</body>
</html>