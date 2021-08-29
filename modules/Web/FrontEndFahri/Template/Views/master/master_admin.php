<?php $this->extend('FrontEndTemplateView\master\master_user_nd') ?>

<?= $this->section('content_s') ?>
	<?= $this->renderSection('main_modal') ?>
    <div class="page-container">
        <?= $this->include('FrontEndTemplateFolder\Views\layout\admin\header_desktop') ?>
		<?= $this->renderSection('content') ?>
	</div>
<?= $this->endsection('content_s') ?>