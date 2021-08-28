<?php $this->extend('FrontEndTemplateView\master\master_admin') ?>

<?= $this->section('main') ?>
    <div class="page-wrapper">
        <?= $this->include('FrontEndTemplateFolder\Views\layout\admin\header') ?>
        <?= $this->include('FrontEndTemplateFolder\Views\layout\admin\aside_menu') ?>
        <?= $this->renderSection('content_s') ?>
        <?= $this->include('FrontEndTemplateFolder\Views\layout\admin\footer') ?>
    </div>
<?= $this->endSection() ?>