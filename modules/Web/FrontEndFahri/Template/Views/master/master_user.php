<?php $this->extend('Master\Views\master\master') ?>

<?= $this->section('body') ?>

	<?= $this->include('FrontEndTemplateFolder\Views\layout\user\header') ?>
	<?= $this->renderSection('main') ?>
	<?= $this->include('FrontEndTemplateFolder\Views\layout\user\footer') ?>
<?= $this->endSection() ?>