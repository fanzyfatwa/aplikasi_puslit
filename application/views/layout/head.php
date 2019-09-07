<?php
// Proteksi halaman
$this->simple_login->cek_login();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title ?></title>
<link href="<?php echo base_url() ?>assets/images/uin.png" rel="shortcut icon">
<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<script src="<?= $this->config->base_url(); ?>includes/js/jquery.js"></script>
<script src="<?= $this->config->base_url(); ?>includes/js/bootstrap.min.js"></script>
<script src="<?= $this->config->base_url(); ?>includes/js/bootstrap.js"></script>
</head>

<body style="background-color:#D3D3D3">
<section class="container">