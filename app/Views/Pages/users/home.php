<!DOCTYPE html>
<html lang="en">

<?= $this->include('Pages/users/component/head') ?>

<body class="index-page">

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

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <div class="carousel-item active">
                    <img src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
                    <div class="container">
                        <h2>Informasi menarik</h2>
                        <p>Web kami menyediakan berbagai rangkuman materi dan pengetahuan yang sangat informatif bagi yang ingin mempelajari mengenai kreatifitas Teknologi.</p>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
                    <div class="container">
                        <h2>Write and Post!</h2>
                        <p>Kamu juga bisa sharing pengetahuan teknologi kamu disini loh!</p>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
                    <div class="container">
                        <h2>Diskusi</h2>
                        <p>Kamu juga bisa saling berdiskusi loh</p>
                    </div>
                </div><!-- End Carousel Item -->

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>

            </div>

        </section><!-- /Hero Section -->

        <!-- Portfolio Section -->
        <section id="Dokumentasi" class="dokumentasi section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Their Impression!</h2>
                <p>Apa kata mereka tentang Stuwee :3</p>
            </div><!-- End Section Title -->

            <div class="container">


                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Airena Paskah</h4>
                            <p>SMA Strada Bhakti Wiyata Bekasi</p>
                            <p>Kalau aku ada tugas mata pelajaran informatika yang bikin pusing banget, aku langsung ke web Stuwee soalnya ini web keren deh, banyak banget informasi mengenai teknologi nya</p>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Elizabeth Ellyna Napitupulu</h4>
                            <p>SMA Yos Sudarso Batam</p>
                            <p>Asli! web Stuwee ini luar biasa keren dan lengkap buat gue yang gaptek kayak nenek nenek ini, buka web ini langsung di tutorin deh apapun mengenai teknologi. LOVE YOU STUWEE</p>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Kasih Pilia Sinaga</h4>
                            <p>SMAN 20 Batam</p>
                            <p>Bigggg applause buat developer Irena yang bisa buat web keren ini. Gue sebagai anak yang suka banget nyari tau tentang teknologi merasa terbantu banget dengan adanya web Stuwee ini. Jaya terus deveolper Irena yang keren abisssss</p>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Harry Styles</h4>
                            <p>WAH!! Gua sebagai anak Teknologi Informasi semester 4 di ITB yang top 3 PTN itu ngerasa web ini luar biasa lengkap dan informasi yang di posting mudah dipahami, apalagi coding susah banget, tapi jadi mudah karena developer Irena, I love you Irena</p>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Justin Bieber</h4>
                            <p>Gua kalo mumet sama Hailey Bieber istri gua. Gua baca-baca blog di web Stuwee deh, bantu stress relief. soalnya tampilan web nya enak dilihat. bikin nyaman, apalagi gue suka banget baca-baca tentang teknologi di dunia musik</p>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Baskara</h4>
                            <p>Selain musik. Gua suka teknologi juga. Stuwee buat pengetahuan dan rasa penasaran gua tentang teknologi jadi nambah berkali lipat</p>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Suhardi</h4>
                            <p>Saya bapak 3 anak, kerja di bidang teknologi. kalau atasan ngasih saya kerjaan yang kurang saya pahami. saya buka Stuwee deh. ga cuma buat pelajar tapi berguna buat saya yang sudah bekerja</p>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Sri Wahyu</h4>
                            <p>Sebagai independent women yang kerja di perusahaan top teknologi. saya kagum dengan web Stuwee. web ini luar biasa bagus dari segi apapun. approved by me</p>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>John Siregar</h4>
                            <p>Asli bos ku ribet banget, tapi sebagai fresh graduate yang udah kejra, web ini bantuin aku banget biar bos itu ga marahin aku, bantu kerjaan ku banget sebagai fresh graduate</p>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Sponsor</h2>
                <p>Big Thanks to this amazing company</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-0 clients-wrap">

                    <div class="col-xl-3 col-md-4 client-logo">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-3 col-md-4 client-logo">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-3 col-md-4 client-logo">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-3 col-md-4 client-logo">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-3 col-md-4 client-logo">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-3 col-md-4 client-logo">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-3 col-md-4 client-logo">
                        <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-3 col-md-4 client-logo">
                        <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                </div>

            </div>

        </section><!-- /Clients Section -->

    </main>

    <?= $this->include('Pages/users/component/footer') ?>
</body>

</html>