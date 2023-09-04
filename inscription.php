<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
  <title>2CIT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Logo_CIT - Copie_095143.png" rel="icon">
  <link href="assets/img/Logo_CIT - Copie_095143.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <!--<h1 class="logo me-auto me-lg-0"><a href="index.html">2CIT<span>.</span></a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/Logo_CIT - Copie_095143.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about"></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!--<a href="#about" class="get-started-btn scrollto">M'inscrire</a>-->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>INSCRIPTION POUR LA FORMATION<span>.</span></h1>
          <h2></h2>
        </div>
      </div>

      

    </div>
  </section><!-- End Hero -->

  <main id="main">

   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>M'inscrire</h2>
          <p>Inscription</p>
        </div>

        

       
        <div class="container">
	<h2></h2>
	<form action="inscritbase.php" method="post">
		<div class="form-group">
			<label for="nom">Nom :</label>
			<input type="text" class="form-control form-control-lg" id="nom" name="nom" placeholder="Entrez votre nom" required>
		</div>
		<div class="form-group">
			<label for="prenom">Prénom :</label>
			<input type="text" class="form-control form-control-lg" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
		</div>
    
		<div class="form-group">
			<label for="email">Email :</label>
			<input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Entrez votre email" required>
		</div>
		<div class="form-group">
			<label for="numero">Numéro :</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text" style="background-color: #f2f2f2;">+228</span>
				</div>
				<input type="number" class="form-control form-control-lg" id="numero" name="numero" placeholder="Entrez votre numéro (8 chiffres)" min="0" max="99999999" required>
			</div>
		</div>
   
		<div class="form-group">
			<label for="payerpar">Payer par :</label>
			<select class="form-control form-control-lg" id="payerpar" name="payerpar" required>
				<option value="" selected disabled>-- Choisissez un mode de paiement --</option>
				<option value="tmoney">Tmoney</option>
				<option value="flooz">Flooz</option>
			</select>
		</div>
    <div class="form-group">
			<label for="montant">Montant :</label>
			<input type="text" class="form-control form-control-lg" id="montant" name="montant" placeholder="Entrez le montant" required>
		</div>
		<button type="submit" class="btn btn-primary btn-lg">M'inscrire et Payer</button>
	</form>
</div>


      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>2CIT<span>.</span></h3>
              <p>
                Bè-Kopta non loin de <br>
                la pharmacie Fidèlia<br><br>
                <strong>Phone:</strong> (00228)92 52 19 80<br>(00228)98 54 99 66 <br>
                <strong>Email:</strong> i.2citcenter@aol.com<br>
              </p>
              
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">MECANIQUE INDUSTRIELLE</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">ELECTRONIQUE</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">ELECTRICITE</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">BATIMENT</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">ARCHITECTURE ET DECORATION D'INTERIEUR</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2CIT</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>


	<style>
		.form-control-lg {
			padding: .5rem 1rem;
			font-size: 1.25rem;
			line-height: 1.5;
			border-radius: .3rem;
		}
		.form-control-sm {
			padding: .25rem .5rem;
			font-size: .875rem;
			line-height: 1.5;
			border-radius: .2rem;
		}
	</style>







