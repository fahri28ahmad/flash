<?php $this->extend('AuthTemplateView\master\master_auth') ?>

<?= $this->section('main') ?>
  <main id="main">
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
                              <label>Nama</label>
                              <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                          </div>
                          <div class="form-group">
                              <label>Email Address</label>
                              <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                          </div>
                          <div class="form-group">
                              <label>Password</label>
                              <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                          </div>
                          <div class="form-group">
                              <label>Ulangi Password</label>
                              <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                          </div>
                          <div class="login-checkbox">
                              <label>
                                  <input type="checkbox" name="aggree">Agree the terms and policy
                              </label>
                          </div>
                          <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Daftar</button>
                      </form>
                      <div class="register-link">
                          <p>
                              Sudah mempunyai akun?
                              <a href="<?php echo route_to('user.login.view')?>">Masuk</a>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
  </main>
<?= $this->endsection('main') ?>