<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Pengguna</li>
    </ol>
</nav>
<div class="container">

    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="users"></i></span></span>Data Pengguna</h4>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
            <a href="user/tambah"><button class="btn btn-primary mb-10"><i class="fa fa-plus"> </i> Tambah Pengguna</button></a>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                        </div>
                        
                        <section class="content">
                            <?php if (!empty($this->session->flashdata())) {
                                echo $this->session->flashdata('pesan');
                            } ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box box-primary">
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <br />
                                                <table id="example1" class="table table-bordered table-striped table" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>ID</th>
                                                            <th>Foto</th>
                                                            <th>Nama</th>
                                                            <th>User</th>
                                                            <th>Jenkel</th>
                                                            <th>Telepon</th>
                                                            <th>Level</th>
                                                            <th>Alamat</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1;
                                                        foreach ($user as $isi) { ?>
                                                            <tr>
                                                                <td><?= $no; ?></td>
                                                                <td><?= $isi['anggota_id']; ?></td>
                                                                <td>
                                                                    <center>
                                                                        <?php if (!empty($isi['foto'] !== "-")) { ?>
                                                                            <img src="<?php echo base_url(); ?>assets_style/image/<?php echo $isi['foto']; ?>" alt="#" class="img-responsive" style="height:auto;width:100px;" />
                                                                        <?php } else { ?>
                                                                            <!--<img src="" alt="#" class="user-image" style="border:2px solid #fff;"/>-->
                                                                            <i class="fa fa-user fa-3x" style="color:#333;"></i>
                                                                        <?php } ?>
                                                                    </center>
                                                                </td>
                                                                <td><?= $isi['nama']; ?></td>
                                                                <td><?= $isi['user']; ?></td>
                                                                <td><?= $isi['jenkel']; ?></td>
                                                                <td><?= $isi['telepon']; ?></td>
                                                                <td><?= $isi['level']; ?></td>
                                                                <td><?= $isi['alamat']; ?></td>
                                                                <td style="width:20%;">
                                                                    <a href="<?= base_url('user/edit/' . $isi['id_login']); ?>"><button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
                                                                    <a href="<?= base_url('user/del/' . $isi['id_login']); ?>" onclick="return confirm('Anda yakin user akan dihapus ?');">
                                                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                                                    <a href="<?= base_url('user/detail/' . $isi['id_login']); ?>" target="_blank"><button class="btn btn-primary">
                                                                            <i class="fa fa-print"></i> Cetak Kartu</button></a>
                                                                </td>
                                                            </tr>
                                                        <?php $no++;
                                                        } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>