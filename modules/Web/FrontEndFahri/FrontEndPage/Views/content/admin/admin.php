<?php $this->extend('FrontEndTemplateView\master\master_admin_final') ?>

<?= $this->section('main_modal') ?>
<!-- tambah data  -->
<div class="modal fade bd-example-modal-lg" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form class="modal-body mb-1" action="<?php echo route_to('user_panel.swab.swab.register');?>" method="post">
            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
            <div class="form-group">
                <label>No Ktp</label>
                <input class="au-input au-input--full" type="text" name="no-ktp" placeholder="No KTP"/>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input class="au-input au-input--full" type="text" name="complete-name" placeholder="Nama Lengkap" />
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input class="au-input au-input--full" type="text" name="address" placeholder="Alamat" />
            </div>
            <div class="form-group">
                <label>No Telpon</label>
                <input class="au-input au-input--full" type="text" name="phone-number" placeholder="Nomor Telpon" />
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input class="au-input au-input--full" type="date" name="birth-date" placeholder="ttl" />
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label><br />
                <div class="form-check">
                    <div class="radio">
                        <label for="radio1" class="form-check-label"> <input type="radio" id="radio1" name="gender" value="1" class="form-check-input" />Laki-Laki </label>
                    </div>
                    <div class="radio">
                        <label for="radio2" class="form-check-label"> <input type="radio" id="radio2" name="gender" value="2" class="form-check-input" />Perempuan </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Pilih Paket</label><br />
                <div class="container">
                    <div class="form-check-inline form-check">
                        <div class="row">
                            <div class="col-sm-9">
                                <label for="inline-radio1" class="form-check-label">
                                    <input type="radio" id="inline-radio1" name="package" value="1" class="form-check-input"/>
                                    <img src="assets/images/Flashlabdt.png" alt="CoolAdmin" />
                                </label>
                            </div>
                            <div class="col-sm-9">
                                <label for="inline-radio2" class="form-check-label">
                                    <input type="radio" id="inline-radio2" name="package" value="2" class="form-check-input" />
                                    <img src="assets/images/Flashlabhc.png" alt="CoolAdmin" />
                                </label>
                            </div>
                            <div class="col-sm-9">
                                <label for="inline-radio3" class="form-check-label">
                                    <input type="radio" id="inline-radio3" name="package" value="3" class="form-check-input" />
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
</div>
<!-- verifikasi modal -->
<div class="modal fade bd-example-modal-lg" id="modalverifikasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form class="modal-body mb-1" action="" method="post">
            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
            <div class="form-group">
                <label>No Ktp</label><h4>72192003182398213</h4>
            </div>
            <div class="form-group">
                <label>Nama</label><h4>namanya</h4>
            </div>
            <div class="form-group">
                <label>Alamat</label><h4>jl beringain no 12 palu</h4>
            </div>
            <div class="form-group">
                <label>No Telpon</label><h4>082188192892</h4>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label><h4>tanggallahirnya</h4>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label><h4>jenis kelaminnya</h4>
            </div>
            <div class="form-group">
                <label>Hasil swab</label><br />
                <div class="form-check">
                    <div class="radio">
                        <label for="radio1" class="form-check-label"> <input type="radio" id="radio1" name="verifikasi" value="1" class="form-check-input" />Positif</label>
                    </div>
                    <div class="radio">
                        <label for="radio2" class="form-check-label"> <input type="radio" id="radio2" name="verifikasi" value="2" class="form-check-input" />Negatif</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Paket</label><h4>paketnya</h4>
            </div>
            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Kirim Data</button>
        </form>
    </div>
  </div>
</div>
<!-- modal hapus data -->
<div class="modal fade" id="Modalhapus" tabindex="-1" role="dialog" aria-labelledby="ModalhapusLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalhapusLabel">Apakah Anda yakin Ingin Menghapusnya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <a href="#"><button type="button" class="btn btn-primary">Yakin</button></a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Modalprint" tabindex="-1" role="dialog" aria-labelledby="ModalprintLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalprintLabel">Pilih Cetakan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <a href="<?php echo route_to('frontenduser.frontenduser.invoice');?>"><button type="button" class="btn btn-primary">Invoice</button></a>
                <a href="<?php echo route_to('frontenduser.frontenduser.print');?>"><button type="button" class="btn btn-primary">Hasil Swab</button></a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>
<!-- modal edit data -->
<div class="modal fade bd-example-modal-lg" id="modaleditdata" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form class="modal-body mb-1" action="<?php echo route_to('user_panel.swab.swab.register');?>" method="post">
            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
            <div class="form-group">
                <label>No Ktp</label>
                <input class="au-input au-input--full" type="text" name="no-ktp" placeholder="No KTP"/>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input class="au-input au-input--full" type="text" name="complete-name" placeholder="Nama Lengkap" />
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input class="au-input au-input--full" type="text" name="address" placeholder="Alamat" />
            </div>
            <div class="form-group">
                <label>No Telpon</label>
                <input class="au-input au-input--full" type="text" name="phone-number" placeholder="Nomor Telpon" />
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input class="au-input au-input--full" type="date" name="birth-date" placeholder="ttl" />
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label><br />
                <div class="form-check">
                    <div class="radio">
                        <label for="radio1" class="form-check-label"> <input type="radio" id="radio1" name="gender" value="1" class="form-check-input" />Laki-Laki </label>
                    </div>
                    <div class="radio">
                        <label for="radio2" class="form-check-label"> <input type="radio" id="radio2" name="gender" value="2" class="form-check-input" />Perempuan </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Pilih Paket</label><br />
                <div class="container">
                    <div class="form-check-inline form-check">
                        <div class="row">
                            <div class="col-sm-9">
                                <label for="inline-radio1" class="form-check-label">
                                    <input type="radio" id="inline-radio1" name="package" value="1" class="form-check-input"/>
                                    <img src="assets/images/Flashlabdt.png" alt="CoolAdmin" />
                                </label>
                            </div>
                            <div class="col-sm-9">
                                <label for="inline-radio2" class="form-check-label">
                                    <input type="radio" id="inline-radio2" name="package" value="2" class="form-check-input" />
                                    <img src="assets/images/Flashlabhc.png" alt="CoolAdmin" />
                                </label>
                            </div>
                            <div class="col-sm-9">
                                <label for="inline-radio3" class="form-check-label">
                                    <input type="radio" id="inline-radio3" name="package" value="3" class="form-check-input" />
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
</div>
<?= $this->endsection('main_modal') ?>

<?= $this->section('content') ?>
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
                            <h2 class="title-1 m-b-25">Earnings By Items</h2>
                            <input class="form-control mb-4" id="tableSearch" type="text" placeholder="Cari">
                            <div class="table-responsive table--no-card m-b-40">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead> 
                                        <tr>
                                            <th class="text-center">aksi</th>
                                            <th class="text-center">name</th>
                                            <th class="text-center">date</th>
                                            <th class="text-center">noID</th>
                                            <th class="text-center">TTL</th>
                                            <th class="text-center">no tlp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center mx-auto"> 
                                                <a href="#" class="badge  badge-primary" data-toggle="modal" data-target="#modalverifikasi">Verifikasi</a><br />
                                                <a href="#" class="badge  badge-success " data-toggle="modal" data-target="#modaleditdata"  >Edit</a><br />
                                                <a href="#" class="badge  badge-danger" data-toggle="modal" data-target="#Modalhapus">Hapus</a><br />
                                                <a href="#" class="badge  badge-secondary" data-toggle="modal" data-target="#Modalprint">Print</a>
                                            </td>
                                            <td>Fahri</td>
                                            <td>2018-09-29 05:57</td>
                                            <td>001</td>
                                            <td class="text-center">Denpasar 28/11-1997</td>
                                            <td class="text-left ">082189705433</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pagination-wrapper">
                                <nav class="Page navigation class-list-pagination pager-custom">
                                        <?php
                                        if(isset($pager)){
                                            $pager->renderPager(); 
                                        }
                                        ?>
                                </nav>
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
<?= $this->endsection('content') ?>