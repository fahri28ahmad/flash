<?php $this->extend('AdminTemplateView\master\master_admin_final') ?>

<?= $this->section('main_modal') ?>

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