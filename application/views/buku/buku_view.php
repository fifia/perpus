<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Buku</li>
    </ol>
</nav>
<div class="container">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><i class="fa fa-book"></i></span>Data Buku</h4>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <?php if ($this->session->userdata('level') == 'Petugas') { ?>
                    <a href="data/bukutambah" class="btn btn-success btn-wth-icon btn-rounded text-white icon-left mb-30"><span class="btn-text">Tambah Buku</span> <span class="icon-label"><span class="feather-icon"><i data-feather="plus"></i></span></span></a>
                <?php } ?>
                <div class="row">
                    <div class="col-lg">
                        <div class="table-wrap">
                            <table id="datable_1" class="table pb-30 ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ISBN</th>
                                        <th>Title</th>
                                        <th>Penerbit</th>
                                        <th>Tahun Buku</th>
                                        <th>Stok Buku</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($buku->result_array() as $isi) { ?>
                                        <tr>
                                            <td><?= $no; ?>.</td>
                                            <td><?= $isi['isbn']; ?></td>
                                            <td><?= $isi['title']; ?></td>
                                            <td><?= $isi['penerbit']; ?></td>
                                            <td><?= $isi['thn_buku']; ?></td>
                                            <td><?= $isi['jml']; ?></td>
                                            <td><?= $isi['tgl_masuk']; ?></td>
                                            <td <?php if ($this->session->userdata('level') == 'Petugas') { ?>style="width:17%;" <?php } ?>>
                                                <?php if ($this->session->userdata('level') == 'Petugas') { ?>
                                                    <a href="<?= base_url('data/bukuedit/' . $isi['id_buku']); ?>"><button class="btn btn-icon btn-icon-circle btn-success btn-icon-style-2"><span class="btn-icon-wrap"><i class="fa fa-pencil"></i></span></button></a>
                                                    <a href="<?= base_url('data/bukudetail/' . $isi['id_buku']); ?>">
                                                        <button class="btn btn-icon btn-icon-circle btn-warning btn-icon-style-2"><span class="btn-icon-wrap"><i class="fa fa-info"></i></span></button>
                                                        <a href="<?= base_url('data/prosesbuku?buku_id=' . $isi['id_buku']); ?>" onclick="return confirm('Hapus buku <?= $isi['title']; ?>?');">
                                                            <button class="btn btn-icon btn-icon-circle btn-danger btn-icon-style-2"><span class="btn-icon-wrap"><i class="icon-trash"></i></span></button></a>
                                                    <?php } else { ?>
                                                        <a href="<?= base_url('data/bukudetail/' . $isi['id_buku']); ?>">
                                                            <button class="btn btn-success btn-wth-icon btn-md btn-rounded icon-right"> <span class="icon-label"><span class="feather-icon"><i data-feather="arrow-right-circle"></i></span> </span><span class="btn-text">Lihat</span></button></a>
                                                    <?php } ?>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>