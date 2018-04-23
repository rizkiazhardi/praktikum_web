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
    	background-image: url('img/Whats_Up-2_1360_1360.jpg');
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

    #section_caption {
    	padding-top: 20px;
		padding-bottom: 50px;
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
		                <h1 class="whatscaption">What's New</h1>
		            </div>
		        </div>
		    </div>
		</div>

		<div class="container">
			<div class="row">
				<div id="section_caption" class="col-md-12 title text-center">
					<center><h2>LATEST NEWS &amp; PROMOTIONS</h2></center>
					<p>In the confectionary world KUEQ continues to set the pace and innovation in this booming and constantly innovative industry. Sophisticated pastry lovers have learned to recognize and expect outstanding quality. As the pastry-lover's palette searches for an ever more sensuous pastry experience, KUEQ will continue to satisfy the most discerning pastry connoisseurs. The Company's founders share a mutual passion for exceptional cakes and pastries.</p>
				</div>
	      	</div>

	      	<div class="row">
	      		<div id="its"></div>
	      	</div>

	      	<div class="row">
	      		<div id="itsbutton"></div>
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

    var whatsnew = [{ id: '0', title: 'Promo Spesial Kartini', text: 'Merayakan hari Kartini tahun ini KUEQ memberikan spesial diskon untuk seluruh Wanita Indonesia, berupa potongan 21% setiap pembelian Cake jenis apa saja ukuran 10x20 cm, 20x20 cm dan 20x40 cm.'}, { id: '1', title: 'KUEQ Jemursari Pindah lokasi', text: 'Pada Juni 2018 nanti secara resmi, Dapur Cokelat menginformasikan bahwa outlet di Jemursari akan pindah ke lokasi baru di Jl. Panjang Jiwo, Surabaya.' }, { id: '2', title: 'Potongan Spesial di KUEQ Sidoarjo', text: 'Gunakan Mandiri Fiesta Point kamu untuk mendapatkan potongan khusus produk KUEQ. Hanya berlaku di KUEQ Sidoarjo.'}, { id: '3', title: 'Koleksi Produk Spesial Paskah', text: 'Di Bulan ini Dapur Cokelat akan hadir dengan berbagai produk koleksi spesial Bulan Maret. Penasaran? Cek produk Selengkapnya disini'}, { id: '4', title: '15% Diskon OFF Only at Gading Serpong', text: 'Menyambut hari Kasih Sayang dapatkan potongan spesial 15% untuk seluruh produk Dapur Cokelat kecuali produk spesial Event Valentine dan Imlek hanya di cabang Gading Serpong'}, { id: '5', title: 'Valentine & Imlek Catalogue', text: 'Dapur Cokelat kembali membawa kebahagiaan melalui produk-produk spesial Valentine dan Imlek. Temukan produk favoritmu disini Chocolaters.'}];
    
    for($i = 0; $i < whatsnew.length; $i++)
    {
        $('#its').append('<a href="#"><div class="col-md-4"><h2>'+whatsnew[$i].title+'</h2><p>'+whatsnew[$i].text+'</p></div></a>');
    }
    if ($i == whatsnew.length)
    {
    	$('#itsbutton').append('<div class="text-center" style="padding-top:40px;"><a href="#" class="btn btn-lg btn-warning">Show More</a></div>');
    }
	</script>

</body>
</html>