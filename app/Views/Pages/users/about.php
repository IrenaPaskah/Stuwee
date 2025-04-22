<!DOCTYPE html>
<html lang="en">

<?= $this->include('Pages/users/component/head') ?>

<body class="about-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="">
        <h1 class="sitename">Stuwee</h1><span>.</span>
      </a>

      <?= $this->include('Pages/users/component/navbar') ?>

      <div class="header-social-links">
        <a href="https://www.instagram.com/i.rena_" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/irena-paskah-margareth-a093b1247/" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title accent-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img src="assets/img/about.jpg"></div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h2 class="inner-title">Selamat datang di Stuwee</h2>
            <div class="our-story">
              <h4>Sejak 2025</h4>
              <h3>Hello!</h3>
              <p> Selamat datang di Stuwee, platform blog berbasis komunitas untuk berbagi wawasan, pengalaman, dan inovasi di dunia Teknologi Informasi! 🚀

                Di sini, siapa saja bisa menulis dan membagikan artikel tentang pemrograman, pengembangan web, keamanan siber, AI, gadget terbaru, dan berbagai topik IT lainnya. Bergabunglah dengan komunitas teknologi, bagikan ilmu, temukan insight baru, dan diskusikan tren terbaru bersama para penggiat IT lainnya.

                Mulai berbagi pengetahuanmu hari ini dan jadilah bagian dari ekosistem IT yang dinamis dan kolaboratif! 💡✨</p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Artikel seputar IT</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Terhubung dengan komunitas teknologi</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Ekosistem kolaboratif</span></li>
              </ul>
              <p>Selamat belajar</p>

              <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox stretched-link">Watch Video</a>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->


    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Team</h2>
        <p>Pretty patootie team</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Irena Paskah Margareth Simanjuntak</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Olivia Rodrigo</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Madison Bear</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jennie Kim</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

  </main>

  <?= $this->include('Pages/users/component/footer') ?>

</body>

</html>