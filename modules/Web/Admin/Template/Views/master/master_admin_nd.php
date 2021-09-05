<?php $this->extend('AdminTemplateView\master\master_admin') ?>

<?= $this->section('main') ?>
    <div class="page-wrapper">
        <?= $this->include('AdminTemplateFolder\Views\layout\header') ?>
        <?= $this->include('AdminTemplateFolder\Views\layout\aside_menu') ?>
        <?= $this->renderSection('content_s') ?>
        <?= $this->include('AdminTemplateFolder\Views\layout\footer') ?>
    </div>
<?= $this->endSection() ?>