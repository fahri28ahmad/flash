<?php $this->extend('FrontEndTemplateView\master\master_user') ?>

<?= $this->section('main') ?>
    <div class="page-wrapper">
        <?= $this->include('FrontEndTemplateFolder\Views\layout\user\header') ?>
        <?= $this->include('FrontEndTemplateFolder\Views\layout\user\aside_menu') ?>
        <?= $this->renderSection('content_s') ?>
        <?= $this->include('FrontEndTemplateFolder\Views\layout\user\footer') ?>
    </div>
<?= $this->endSection() ?>