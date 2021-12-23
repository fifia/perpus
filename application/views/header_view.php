<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html data-theme="emerald">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title_web; ?> | Sistem Informasi Perpustakaan SDN 4 Gabus </title>
  <!-- Tell the browser to be responsive to screen width -->


  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/css/tailwind.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/css/daisyui.full.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/bower_components/Ionicons/css/ionicons.min.css'); ?>">


  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/select2/dist/css/select2.min.css">

  <link href="<?php echo base_url(); ?>assets_style/assets/plugins/summernote/summernote-lite.css" rel="stylesheet">

  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/plugins/pace/pace.min.css">
  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>assets_style/assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- offline -->
  <script type="text/javascript">
    $(document).ajaxStart(function() {
      Pace.restart();
    });
  </script>
</head>

<body>
  <div class="wrapper">
    <div class="navbar mb-2 shadow-lg bg-primary text-neutral-content">
      <div class="flex-none px-auto mx-auto">
        <span class="text-lg font-bold">
          Perpus SDN 4 Gabus
        </span>
      </div>
      <div class="navbar-start">
        <div class="hidden px-2 mx-2 navbar-center lg:flex">
          <div class="flex items-stretch">
            <a class="btn btn-ghost btn-sm rounded-btn">
              Home
            </a>
            <a class="btn btn-ghost btn-sm rounded-btn">
              Portfolio
            </a>
            <a class="btn btn-ghost btn-sm rounded-btn">
              About
            </a>
            <a class="btn btn-ghost btn-sm rounded-btn">
              Contact
            </a>
          </div>
        </div>
      </div>
      <div class="navbar-end">
        <?php
        $d = $this->db->query("SELECT * FROM tbl_login WHERE id_login = '$idbo'")->row();
        ?><i>Hi, <?php echo $d->nama;
                      //echo ' | ( ' . $d->level . ' )'; ?></i>
        <div class="flex-none">
          <div class="avatar">

            <div class="rounded-full w-10 h-10 m-1">
              <?php
              $d = $this->db->query("SELECT * FROM tbl_login WHERE id_login='$idbo'")->row();
              if (isset($d->foto)) {
              ?>
                <img src="<?php echo base_url(); ?>assets_style/image/<?php echo $d->foto; ?>">
              <?php } else { ?>
                <!--<img src="" alt="#" class="user-image" style="border:2px solid #fff;"/>-->
                <i class="fa fa-user fa-4x" style="color:#fff;"></i>
              <?php } ?>
          </div>
        </div>
      </div>
      <a href="<?php echo base_url(); ?>login/logout">Sign out</a>
              </div>
              </div>
    <!-- Header Navbar: style can be found in header.less -->

    </header>
    <!--loading-->
    <!-- Left side column. contains the logo and sidebar -->