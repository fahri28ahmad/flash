<?php $this->extend('FrontEndTemplateView\master\master_user_nd') ?>

<?= $this->section('content') ?>

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="assets/images/icon/logo1.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="#"> <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-sign-out-alt"></i>Logout</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda yakin Ingin Keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-primary">Yakin</button>
            </div>
        </div>
    </div>
</div>
<!-- modal daftar -->
<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i> Perbaharui data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i> Daftar Baru</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade " id="panel7" role="tabpanel">
                        <!--Body-->
                        <div class="modal-body mb-1">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="au-input au-input--full" type="text" name="nama" placeholder="Nama Lengkap" />
                                </div>
                                <div class="form-group">
                                 <label>Pilih Paket</label><br>
                            <div class="container">
                              <div class="form-check-inline form-check">
                                <div class="row">
                                  <div class="col-sm-9">
                                    <label for="inline-radio1" class="form-check-label ">
                                      <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">
                                      <img src="assets/images/Flashlabdt.png" alt="CoolAdmin">
                                  </label>
                                  </div>
                                  <div class="col-sm-9">
                                    <label for="inline-radio2" class="form-check-label ">
                                    <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">
                                    <img src="assets/images/Flashlabhc.png" alt="CoolAdmin">
                                  </label>
                                  </div>
                                  <div class="col-sm-9">
                                    <label for="inline-radio3" class="form-check-label ">
                                      <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">
                                      <img src="assets/images/Flashlabvit.png" alt="CoolAdmin">
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Kirim Data</button>
                        </div>
                      </form>
                        <!--Footer-->
                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade in show active" id="panel8" role="tabpanel">
                        <!--Body-->
                        <div class="modal-body">
                            <div class="login-form">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label>No Ktp</label>
                                        <input class="au-input au-input--full" type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="ktp" placeholder="No KTP" />
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="au-input au-input--full" type="text" name="nama" placeholder="Nama Lengkap" />
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input class="au-input au-input--full" type="text" name="Alamat" placeholder="Alamat" />
                                    </div>
                                    <div class="form-group">
                                        <label>No Telpon</label>
                                        <input class="au-input au-input--full" type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="notlp" placeholder="Nomor Telpon" />
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input class="au-input au-input--full" type="date" name="ttl" placeholder="ttl" />
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label><br />
                                        <div class="form-check">
                                            <div class="radio">
                                                <label for="radio1" class="form-check-label"> <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input" />Laki-Laki </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio2" class="form-check-label"> <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input" />Perempuan </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih Paket</label>
                                        <div class="container">
                                            <div class="form-check-inline form-check">
                                                <div class="row">
                                                    <div class="col-sm-9">
                                                        <label for="inline-radio1" class="form-check-label">
                                                            <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input" />
                                                            <img src="assets/images/Flashlabdt.png" alt="CoolAdmin" />
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <label for="inline-radio2" class="form-check-label">
                                                            <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input" />
                                                            <img src="assets/images/Flashlabhc.png" alt="CoolAdmin" />
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <label for="inline-radio3" class="form-check-label">
                                                            <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input" />
                                                            <img src="assets/images/Flashlabvit.png" alt="CoolAdmin" />
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Kirim Data</button>
                                </form>
                            </div>
                        </div>
                        <!--Footer-->
                    </div>
                    <!--/.Panel 8-->
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- end modal  -->
<!-- PAGE CONTAINER-->
<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                    <form class="form-header" action="" method="POST">
                        <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                        <button class="au-btn--submit" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                    <div class="header-button">
                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">Nama</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">Nama</a>
                                            </h5>
                                            <span class="email">johndoe@example.com</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#"> <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#"> <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#"> <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a data-toggle="modal" data-target="#exampleModal"> <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER DESKTOP-->

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1"></h2>
                            <a haref="" data-toggle="modal" data-target="#modalLRForm">
                                <button class="au-btn au-btn-icon au-btn--blue"><i class="zmdi zmdi-plus"></i>Daftar</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-25">List</h2>
                        <div class="table-responsive-sm table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>date</th>
                                        <th>noID</th>
                                        <th>name</th>
                                        <th class="text-right">TTL</th>
                                        <th class="text-right">no tlp</th>
                                        <th class="text-right">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>001</td>
                                        <td>Fahri</td>
                                        <td class="text-right">Denpasar 28/11-1997</td>
                                        <td class="text-right">082189705433</td>
                                        <td class="text-right mx-auto">
                                            <a href="#" class="badge badge-success">Edit</a><br />
                                            <a href="#" class="badge badge-danger">Hapus</a><br />
                                            <a href="#" class="badge badge-secondary">Print</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>001</td>
                                        <td>Fahri</td>
                                        <td class="text-right">Denpasar 28/11-1997</td>
                                        <td class="text-right">082189705433</td>
                                        <td class="text-right">edit hapus</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>001</td>
                                        <td>Fahri</td>
                                        <td class="text-right">Denpasar 28/11-1997</td>
                                        <td class="text-right">082189705433</td>
                                        <td class="text-right">edit hapus</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>001</td>
                                        <td>Fahri</td>
                                        <td class="text-right">Denpasar 28/11-1997</td>
                                        <td class="text-right">082189705433</td>
                                        <td class="text-right">edit hapus</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>001</td>
                                        <td>Fahri</td>
                                        <td class="text-right">Denpasar 28/11-1997</td>
                                        <td class="text-right">082189705433</td>
                                        <td class="text-right">edit hapus</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>001</td>
                                        <td>Fahri</td>
                                        <td class="text-right">Denpasar 28/11-1997</td>
                                        <td class="text-right">082189705433</td>
                                        <td class="text-right">edit hapus</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2021 Tehcno_Celebes. All rights reserved. Template by <a href="https://techno-celebes.com/">Tehcno_Celebes</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->

    <!-- END PAGE CONTAINER-->
</div>
<?= $this->endsection('content') ?>