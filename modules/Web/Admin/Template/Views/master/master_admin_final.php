<?php $this->extend('AdminTemplateView\master\master_admin_nd') ?>

<?= $this->section('content_s') ?>
	<?= $this->renderSection('main_modal') ?>
    <div class="page-container">
        <?= $this->include('AdminTemplateFolder\Views\layout\header_desktop') ?>
		<?= $this->renderSection('content') ?>
	</div>
<?= $this->endsection('content_s') ?>