<?php $this->extend('UserTemplateView\master\master_user_nd') ?>

<?= $this->section('content_s') ?>
	<?= $this->renderSection('main_modal') ?>
    <div class="page-container">
        <?= $this->include('UserTemplateFolder\Views\layout\header_desktop') ?>
		<?= $this->renderSection('content') ?>
	</div>
<?= $this->endsection('content_s') ?>