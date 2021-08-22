<?php $this->extend('HomeTemplateView\master\master_home') ?>

<?= $this->section('main') ?>
<section id="hero">
    <div class="hero-container" data-aos="fade-in">
      <h1>Welcome to FlashLab</h1>
      <h2>FlashLab, Apps &amp; more...</h2>
      <img src="assets/assets/img/hero-img1.png" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
      <a href="<?php echo route_to('user.register.view'); ?>" class="btn-get-started scrollto">Daftar Sekarang</a>
      <div class="btns">
        <a href="#"><i class="fa fa-play fa-3x"></i> whatsapp</a>
      </div>
    </div>
  </section>

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>simple systeme fordiscount </h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>

        </div>
      </div>

      <div class="container">
        <div class="row">

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-block">

              <img src="assets/assets/img/svg/cloud.svg" alt="img">
              <h4>introducing whatsapp</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <a href="#">read more</a>

            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="feature-block">

              <img src="assets/assets/img/svg/planet.svg" alt="img">
              <h4>user friendly interface</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <a href="#">read more</a>

            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-block">

              <img src="assets/assets/img/svg/asteroid.svg" alt="img">
              <h4>build the app everyone love</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <a href="#">read more</a>

            </div>
          </div>

        </div>
      </div>

    </section><!-- End Get Started Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us padd-section">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">

          <div class="col-md-5 col-lg-3">
            <img src="assets/assets/img/about-img.png" alt="About" data-aos="zoom-in" data-aos-delay="100">
          </div>

          <div class="col-md-7 col-lg-5">
            <div class="about-content" data-aos="fade-left" data-aos-delay="100">

              <h2><span>FlashLab</span> Web </h2>
              <p>Kami akan melayani anda dengan kecepatan dan kenyamanan Terbaik
              </p>

              <ul class="list-unstyled">
                <li><i class="vi bi-chevron-right"></i>Swab Antigen Home Care</li>
                <li><i class="vi bi-chevron-right"></i>Swab Antigen Drive Thru</li>
                <li><i class="vi bi-chevron-right"></i>Home Care Vit Booster</li>
              </ul>

            </div>
          </div>

        </div>
      </div>
    </section><!-- End About Us Section -->




    <!-- ======= Newsletter Section ======= -->
    <section id="newsletter" class="newsletter text-center">
      <div class="overlay padd-section">
        <div class="container" data-aos="zoom-in">

          <div class="row justify-content-center">
            <div class="col-md-9 col-lg-6">
              <form class="d-flex" method="POST" action="#">
                <input type="email" class="form-control " placeholder="Email Adress" name="email">
                <button type="submit" class="btn btn-default"><i class="bi bi-location-arrow"></i>Subscribe</button>
              </form>
            </div>
          </div>

          <ul class="list-unstyled">
            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
            <li><a href="#"><i class="bi bi-twitter"></i></a></li>
            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
            <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
          </ul>

        </div>
      </div>
    </section><!-- End Newsletter Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="padd-section">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Contact</h2>
          <p class="separator">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>Jl RA. Kartini - Kompleks SPBU<br>Palu, Sulawesi tengah</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <p>Admin@Falash.info</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>0811 4521 177</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<?= $this->endsection('main') ?>