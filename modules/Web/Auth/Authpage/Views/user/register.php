<?php $this->extend('AuthTemplateView\master\master_auth') ?>

<?= $this->section('main') ?>
<main id="main">
    <section id="get-started" class="padd-section text-center">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="assets/images/icon/logo1.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="login-form">
                        <form action="<?php echo route_to('user.register.view'); ?>" method="post">
                            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="au-input au-input--full" type="text" name="user-name" placeholder="Username" />
                                <?php echo FHHelperShowFormError($validate_error,"user_name"); ?>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="au-input au-input--full" type="email" name="user-email" placeholder="Email" />
                                <?php echo FHHelperShowFormError($validate_error,"user_email"); ?>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" name="user-password" placeholder="Password" />
                                <?php echo FHHelperShowFormError($validate_error,"user_password"); ?>
                            </div>
                            <div class="form-group">
                                <label>Ulangi Password</label>
                                <input class="au-input au-input--full" type="password" name="user-password-conf" placeholder="Password Confirmation" />
                                <?php echo FHHelperShowFormError($validate_error,"user_password_conf"); ?>
                            </div>
                            <div class="login-checkbox">
                                <label> <input type="checkbox" name="aggree" value="1" />Agree the terms and policy </label>
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
