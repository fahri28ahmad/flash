<?php $this->extend('Master\Views\master\master') ?>

<?= $this->section('body') ?>
	<?= $this->include('AuthTemplateFolder\Views\layout\header') ?>
	<?= $this->renderSection('main') ?>
	<?= $this->include('AuthTemplateFolder\Views\layout\footer') ?>
<?= $this->endSection() ?>