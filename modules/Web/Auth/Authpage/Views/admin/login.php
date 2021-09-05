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
                                <img src="assets/images/icon/logo1.png" alt="CoolAdmin"><br>
                                <label>Admin</label>
                            </a>
                        </div>
                        <div class="login-form">
                        <form action="<?php echo route_to('admin.login.view'); ?>" method="post">
                            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                                <div class="form-group">
                                <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="admin-email" placeholder="Email">
                                    <?php echo FHHelperShowFormError($validate_error,"admin_email"); ?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="admin-password" placeholder="Password">
                                    <?php echo FHHelperShowFormError($validate_error,"admin_password"); ?>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Masuk</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </section><!-- End Get Started Section -->
  </main><!-- End #main -->
<?= $this->endsection('main') ?>