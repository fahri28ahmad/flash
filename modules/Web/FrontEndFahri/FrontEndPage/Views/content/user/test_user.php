<?php $this->extend('UserTemplateView\master\master_user_final') ?>

<?= $this->section('main_modal') ?>
<div class="modal fade bd-example-modal-lg" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form class="modal-body mb-1" action="" method="post">
            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
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
                <label>Pilih Paket</label><br />
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
                                                <a href="#" class="badge  badge-success">Edit</a><br />
                                                <a href="#" class="badge  badge-danger">Hapus</a><br />
                                                <a href="<?php echo route_to('frontenduser.frontenduser.print');?>" class="badge  badge-secondary">Print</a>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pagination-wrapper">
                                <nav class="Page navigation class-list-pagination pager-custom">
                                    <a class="page_item" href="#" meta-page="6">Previous</a><a class="page_item" href="#" meta-page="1">1</a><span class="ellipsis"> . . . </span>
                                    <a class="page_item" href="#" meta-page="4">4</a><a class="page_item" href="#" meta-page="5">5</a>
                                    <a class="page_item" href="#" meta-page="6">6</a><a>7</a><a class="page_item" href="#" meta-page="8">8</a>
                                    <a class="page_item" href="#" meta-page="9">9</a><a class="page_item" href="#" meta-page="10">10</a><span class="ellipsis"> . . . </span>
                                    <a class="page_item" href="#" meta-page="13">13</a><a class="page_item" href="#" meta-page="8">Next</a>
                                </nav>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
=======

>>>>>>> daee17716a77fd83310cbc5f9660faabe28fd7d2
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