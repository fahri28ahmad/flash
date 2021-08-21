<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
    <meta name="theme-color" content="#009FE3">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/assets/img/favicon.png')?>">
	<?php foreach($css_top as $ct){?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($ct);?>">
	<?php }?>
	<?php if(isset($js_top)){
	    foreach($js_top as $c){?>
	    <script src="<?php echo base_url($c); ?>" rel="stylesheet" type="text/javascript"></script>
	    <?php }?>
	<?php } ?>
	<?php if(isset($js_top)){
	    foreach($js_top as $c){?>
	    <script src="<?php echo base_url($c); ?>" rel="stylesheet" type="text/javascript"></script>
	    <?php }?>
	<?php } ?>
	<?= $this->renderSection('master.header_helper') ?>
</head>
<body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">
	<?= $this->renderSection('body') ?>
	<?php if(isset($js_bottom)){
	    foreach($js_bottom as $r){?>
	    <script src="<?php echo base_url($r); ?>" rel="stylesheet" type="text/javascript"></script>
	    <?php }?>
	<?php } ?>
</body>
</html>