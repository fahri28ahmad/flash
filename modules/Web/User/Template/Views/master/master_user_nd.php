<?php $this->extend('UserTemplateView\master\master_user') ?>

<?= $this->section('main') ?>
    <div class="page-wrapper">
        <?= $this->include('UserTemplateFolder\Views\layout\header') ?>
        <?= $this->include('UserTemplateFolder\Views\layout\aside_menu') ?>
        <?= $this->renderSection('content_s') ?>
        <?= $this->include('UserTemplateFolder\Views\layout\footer') ?>
    </div>
<?= $this->endSection() ?>