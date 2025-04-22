<!DOCTYPE html>
<html lang="en">

<?= $this->include('Pages/users/component/head') ?>

<body class="starter-page-page">

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
        <h1 class="mb-2 mb-lg-0">Starter Page</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Starter Page</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Starter Section</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <p>Use this page as a starter for your own custom pages.</p>
      </div>

    </section><!-- /Starter Section Section -->

  </main>

  <?= $this->include('Pages/users/component/footer') ?>


</body>

</html>