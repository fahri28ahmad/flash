<?php $this->extend('Master\Views\master\master') ?>

<?= $this->section('body') ?>
	<?= $this->include('FrontEndTemplateFolder\Views\layout\home\header') ?>
	<?= $this->renderSection('main') ?>
	<?= $this->include('FrontEndTemplateFolder\Views\layout\home\footer') ?>
<?= $this->endSection() ?>