<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html data-theme="emerald">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title_web; ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="" />
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/css/tailwind.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/css/daisyui.full.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/bower_components/Ionicons/css/ionicons.min.css'); ?>">
</head>

<body>
  <div class="hero min-h-screen bg-base-200">
    <div class="flex-col justify-center hero-content lg:flex-row">
      <div class="text-center lg:text-left">
        <h1 class="mb-5 text-6xl font-bold">
          Sistem Informasi Perpustakaan SDN 4 Gabus
        </h1>
      </div>
      <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
        <div class="card-body">
          <form action="<?= base_url('login/auth'); ?>" method="POST">
            <div class="form-control">
              <label class="label">
                <span class="label-text">Username</span>
              </label>
              <input type="text" placeholder="Username" class="input input-bordered" id="user" name="user" required="required" autocomplete="off">
            </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text">Password</span>
              </label>
              <input type="password" placeholder="Password" class="input input-bordered" id="pass" name="pass" required="required" autocomplete="off">
            </div>
            <div class="form-control mt-6">
              <button type="submit" value="Login" id="loding" class="btn btn-primary">Login&nbsp;<span class="fa fa-sign-in"></span></button>
            </div>
            <?php
            if ($this->session->flashdata('error') != ''); {
              echo '<div class="alert alert-danger" role="alert">';
              echo $this->session->flashdata('error');
              echo '</div>';
            }
            ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
