<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html data-theme="cupcake">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title_web;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="shortcut icon" href="" />
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/css/tailwind.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/css/daisyui.full.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/bower_components/Ionicons/css/ionicons.min.css');?>">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/dist/css/AdminLTE.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/dist/css/responsivelogin.css');?>"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"><style type="text/css">
        .navbar-inverse{
        background-color:#333;
         }
         .navbar-color{
        color:#fff;
         }
          blink, .blink {
                animation: blinker 3s linear infinite;
            }

           @keyframes blinker {
                50% { opacity: 0; }
           }
    </style> -->
  </head>
<body>
<div class="hero min-h-screen bg-base-200">
  <div class="flex-col justify-center hero-content lg:flex-row">
    <div class="text-center lg:text-left">
      <h1 class="mb-5 text-6xl font-bold">
            Sistem Informasi Perpustakaan SDN 4 Gabus
          </h1> 
      <!-- <p class="mb-5">
            Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.
          </p> -->
    </div> 
    <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
      <div class="card-body">
      <form action="<?= base_url('login/auth');?>" method="POST">
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
          <input type="text" placeholder="Password" class="input input-bordered" id="pass" name="pass" required="required" autocomplete="off"> 
          <label class="label">
          <div data-tip="Silahkan datang ke Perpustakaan dan tanyakan kepada petugas" class="tooltip">
            <span class="label-text-alt">Lupa Password?</span>
            </div>
          </label>
        </div> 
        <div class="form-control mt-6">
          <button type="submit" value="Login" id="loding" class="btn btn-primary">Login</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
