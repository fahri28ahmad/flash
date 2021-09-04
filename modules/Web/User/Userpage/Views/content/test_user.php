<?php $this->extend('UserTemplateView\master\master_user_final') ?>

<?= $this->section('main_modal') ?>
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
<div class="modal fade" id="Modalhapus" tabindex="-1" role="dialog" aria-labelledby="ModalhapusLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="modal-content" action="<?php echo route_to('user_panel.swab.swab.delete_swab');?>" method="post">
            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
            <input type="hidden" class="patient-package-id" name="patient-package-id" value="">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalhapusLabel">Apakah Anda yakin Ingin Menghapusnya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-danger">Yakin</button>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="Modalprint" tabindex="-1" role="dialog" aria-labelledby="ModalprintLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalprintLabel">Pilih Cetakan</h5><br>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <a class="invoice-btn" href="#"><button type="button" class="btn btn-primary">Invoice</button></a>
                <a class="swab-btn" href="#"><button type="button" class="btn btn-primary">Hasil Swab</button></a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            </div>
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
                            <h2 class="title-1 m-b-25">List</h2>
                            <div class="table-responsive table--no-card m-b-40">
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
                                        <?php foreach($patient_package as $m){ ?>
                                        <tr>
                                            <td>2018-09-29 05:57</td>
                                            <td>swab-<?php echo $m->patient_package_id; ?></td>
                                            <td><?php echo $m->get_patient_detail()[0]->complete_name; ?></td>
                                            <td class="text-right"><?php echo $m->get_date_inserted(); ?></td>
                                            <td class="text-right">082189705433</td>
                                            <td class="text-right mx-auto">
                                                <a href="#" class="badge  badge-success" >Edit</a><br />
                                                <a href="#" class="badge  badge-danger delete-swab" data-toggle="modal" data-target="#Modalhapus" data-id="<?php echo $m->patient_package_id;?>">Hapus</a><br />
                                                <a href="#" class="badge print-swab badge-secondary" data-toggle="modal" data-target="#Modalprint" data-id="<?php echo $m->patient_package_id;?>">Print</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
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