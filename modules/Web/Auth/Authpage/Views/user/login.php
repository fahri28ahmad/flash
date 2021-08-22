<?php $this->extend('AuthTemplateView\master\master_auth') ?>

<?= $this->section('main') ?>
  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="padd-section text-center">

            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="assets/images/icon/logo1.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Masuk</button>
                                
                            </form>
                            <div class="register-link">
                                <p>
                                    Belum Mempunyai akun?
                                    <a href="<?php echo route_to('user.register.view')?>">Daftar</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section><!-- End Get Started Section -->
  </main><!-- End #main -->
<?= $this->endsection('main') ?>