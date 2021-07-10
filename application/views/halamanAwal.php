<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lembang Perindingan</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="<?= base_url(); ?>assets/templatemo/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/templatemo/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/templatemo/css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
  <link href="<?= base_url(); ?>assets/templatemo/css/flexslider.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/templatemo/css/templatemo-style.css" rel="stylesheet">
</head>
<body class="tm-gray-bg" >
  <!-- Header -->
  <div class="tm-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
          <!-- <a href="#" class="tm-site-name">Holiday</a>	 -->
        </div>
        <div class="col-lg-6 col-md-8 col-sm-9">
          <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
          <nav class="tm-nav">
          <ul>
            <li><a href="<?= base_url(); ?>" class="active">Home</a></li>
            <li><a href="<?= base_url(); ?>visi_misi.html">Visi Misi</a></li>
            <li><a href="<?= base_url(); ?>berita_desa.html">Informasi Desa</a></li>
            <li><a href="<?= base_url(); ?>login">Login</a></li>
          </ul>
        </nav>		
        </div>				
      </div>
    </div>	  	
  </div>
	
  <!-- Banner -->
  <section class="tm-banner">
    <!-- Flexslider -->
    <div class="flexslider flexslider-banner" >
      <ul class="slides">
        <li>
          <div class="tm-banner-inner" style="background-color: #000000; opacity:0.5;">
          </div>
          <div class="tm-banner-inner">
            <h3 class="tm-banner-title">Selamat Datang di Website Resmi</h3>
            <p class="tm-banner-subtitle">DATA PENDUDUK LEMBANG PERINDINGAN</p>
          </div>
          <img src="<?= base_url(); ?>assets/lembang_perindingan.jpeg" alt="Image" />
        </li>
        <li>
          <div class="tm-banner-inner" style="background-color: #000000; opacity:0.5;">
          </div>
          <div class="tm-banner-inner">
            <h3 class="tm-banner-title">Selamat Datang di Website Resmi</h3>
            <p class="tm-banner-subtitle">DATA PENDUDUK LEMBANG PERINDINGAN</p>
          </div>
          <img src="<?= base_url(); ?>assets/lembang_perindingan.jpeg" alt="Image" />
        </li>
        <li>
          <div class="tm-banner-inner" style="background-color: #000000; opacity:0.5;">
          </div>
          <div class="tm-banner-inner">
            <h3 class="tm-banner-title">Selamat Datang di Website Resmi</h3>
            <p class="tm-banner-subtitle">DATA PENDUDUK LEMBANG PERINDINGAN</p>
          </div>
          <img src="<?= base_url(); ?>assets/lembang_perindingan.jpeg" alt="Image" />
        </li>
      </ul>
    </div>	
  </section>

	<?php $this->load->view($konten); ?>
	

	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
        <h1 class="tm-copyright-text">Website Data Penduduk Lembang Perindingan</h1>
        <H2 class="tm-copyright-text">Jl. Poros Sillanan - Pa'buaran</H2>
				<p class="tm-copyright-text">Copyright &copy; 2021 Lembang Perindingan</p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="<?= base_url(); ?>assets/templatemo/js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
  <script type="text/javascript" src="<?= base_url(); ?>assets/templatemo/js/moment.js"></script>							<!-- moment.js -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/templatemo/js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/templatemo/js/bootstrap-datetimepicker.min.js"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/templatemo/js/jquery.flexslider-min.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>assets/templatemo/js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
	<script>
		// HTML document is loaded. DOM is ready.
		$(function() {
			$('#hotelCarTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
			})
      $('.date').datetimepicker({
        format: 'MM/DD/YYYY'});
        $('.date-time').datetimepicker();
			// https://css-tricks.com/snippets/jquery/smooth-scrolling/
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
		});
		
		// Load Flexslider when everything is loaded.
		$(window).load(function() {	
      $('.flexslider').flexslider({
        controlNav: false
      });
    });
	</script>
</body>
</html>