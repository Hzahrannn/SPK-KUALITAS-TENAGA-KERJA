<!DOCTYPE html>
<html lang="en">
<?php
include "db.php";
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pendataan Minat dan Bakat Mahasiswa">
    <meta name="author" content="Ansonika">
    <title>Pendataan Minat Dan Bakat Mahasiswa</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/logopbm.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
	
	<!-- MODERNIZR MENU -->
	<script src="js/modernizr.js"></script>

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->
	
	
	<!-- /menu -->
	
	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left">
				<div class="content-left-wrapper">
					<a href="index.php" id="logo"><img src="img/himsiunsri.png" alt="" width="120" height="45"></a>
					
					<!-- /social -->
					<div>
						<figure><img src="img/logopbm.png" alt="" class="img-fluid" ></figure>
						<h2>Pendataan Minat Dan Bakat</h2>
						<p></p>
						<a href="#start" class="btn_1 rounded mobile_btn">Mulai!</a>
					</div>
					
				</div>
				<!-- /content-left-wrapper -->
			</div>
			<!-- /content-left -->

			<div class="col-lg-6 content-right" id="start">
				<div id="wizard_container">
					<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form id="wrapped" method="post" action="executeinsert.php">
						<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							
							<div id="middle-wizard">
								<div class="step">
									<h3 class="main_question"><strong>1/4</strong>Silahkan Isi Data Yang Telah Tersedia</h3>
									<div class="form-group">
										<input type="text" name="nama" class="form-control required" placeholder="Nama">
									</div>
									<div class="form-group">
										<input type="text" name="nim" class="form-control required" placeholder="NIM">
									</div>
									<div class="form-group">
										<input type="text" name="angkatan" class="form-control required" placeholder="Angkatan">
									</div>
									<div class="form-group">
										<input type="text" name="kontak" class="form-control required" placeholder="Kontak (Line/WA/Instagram)">
									</div>
									<div class="form-group">
	
									</div>
									<div class="row">
										<div class="col-3">
											<div class="form-group">
												
											</div>
										</div>
										<div class="col-9">
											<div class="form-group radio_input">
												
												</label>
											</div>
										</div>
									</div>
									<!-- /row -->
									<div class="form-group terms">
										
											
										</label>
									</div>
								</div>
								<!-- /step-->
								<div class="step">
									<h3 class="main_question"><strong>2/4</strong>Bagaimana Minat Anda Dalam Seni?</h3>
									<div class="form-group">
										<label class="container_check version_2">Menyanyi Dangdut
											<input type="checkbox" name="seni[]" value="Menyanyi Dangdut">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Menyanyi Seriosa
											<input type="checkbox" name="seni[]" value="Menyanyi Seriosa">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Menyanyi POP
											<input type="checkbox" name="seni[]" value="Menyanyi POP">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Menyanyi Jazz
											<input type="checkbox" name="seni[]" value="Menyanyi Jazz">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Menyanyi Keroncong
											<input type="checkbox" name="seni[]" value="Menyanyi Keroncong">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Tari Tradisional
											<input type="checkbox" name="seni[]" value="Tari Tradisional">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Dance
											<input type="checkbox" name="seni[]" value="Dance">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Melukis
											<input type="checkbox" name="seni[]" value="Melukis">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Menulis Sastra
											<input type="checkbox" name="seni[]" value="Menulis Sastra">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<input type="text" name="alat_musik" class="form-control " placeholder="Bermain Alat Musik">
									</div>
									<div class="form-group">
										<input type="text" name="seni[]" class="form-control " placeholder="Lainnya (ex. kaligrafi, beatbox)">
									</div>
								</div>
								<!-- /step-->
								<div class="step">
									<h3 class="main_question"><strong>3/4</strong>Bagaimana Minat Anda Dalam Olahraga?</h3>
									<div class="form-group">
										<label class="container_check version_2">Basket
											<input type="checkbox" name="olahraga[]" value="Basket"">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Voli
											<input type="checkbox" name="olahraga[]" value="Voli">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Futsal/Football
											<input type="checkbox" name="olahraga[]" value="Futsal/Football">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Renang
											<input type="checkbox" name="olahraga[]" value="Renang">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Catur
											<input type="checkbox" name="olahraga[]" value="Catur">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sepak Takraw
											<input type="checkbox" name="olahraga[]" value="Sepak Takraw">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Bulu Tangkis
											<input type="checkbox" name="olahraga[]" value="Bulu Tangkis">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Karate
											<input type="checkbox" name="olahraga[]" value="Karate">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Pencak Silat
											<input type="checkbox" name="olahraga[]" value="Pencak Silat">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Taekwondo
											<input type="checkbox" name="olahraga[]" value="Taekwondo">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<input type="text" name="olahraga[]" class="form-control " placeholder="Lainnya (ex. judo, bola tangan)">
									</div>
								</div>
								<!-- /step-->
							
								<div class="submit step">
									<h3 class="main_question"><strong>4/4</strong></h3>
									<div>
										<ul>
											<li>
												<h5>Terima Kasih Telah Mengisi Kusioner.<br>Silahkan Klik Submit Untuk Mengirim Data.</h5>
												
											</li>
										</ul>
									</div>
								</div>
								<!-- /step-->
							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Prev</button>
								<button type="button" name="forward" class="forward">Next</button>
								<button type="submit" name="process" class="submit">Submit</button>
							</div>
							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
			</div>
			<!-- /content-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

<!--	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a> -->
	<!-- /menu button -->
	
	
	
	
	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common_scripts.min.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/functions.js"></script>

	<!-- Wizard script -->
	<script src="js/survey_func.js"></script>

</body>