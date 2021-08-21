<?php $this->extend('Master\Views\master\master') ?>

<?= $this->section('body') ?>
	<?= $this->include('HomeTemplateFolder\Views\layout\header') ?>
	<?= $this->renderSection('main') ?>
	<?= $this->include('HomeTemplateFolder\Views\layout\footer') ?>
<?= $this->endSection() ?>