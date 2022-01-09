<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<nav class="hk-breadcrumb" aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-light bg-transparent">
		<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Data</a></li>
		<li class="breadcrumb-item active" aria-current="page">Kategori</li>
	</ol>
</nav>
<div class="container">
	<div class="hk-pg-header">
		<h4 class="hk-pg-title"><span class="pg-title-icon"><i class="fa fa-tags"></i></span>Kategori</h4>
	</div>
	<div class="row">
		<div class="col-xl-12">
			<section class="hk-sec-wrapper">
				<div class="row">
					<div class="col-sm">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="card mb-20">
									<div class="card-body">
										<h5 class="card-title">
							<?php if(!empty($this->input->get('id'))){?>
							<h4> Edit Kategori</h4>
							<?php }else{?>
							<h4> Tambah Kategori</h4>
							<?php }?>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<?php if(!empty($this->input->get('id'))){?>
							<form method="post" action="<?= base_url('data/katproses');?>">
								<div class="form-group">
								<label for="">Nama Kategori</label>
								<input type="text" name="kategori"  value="<?=$kat->nama_kategori;?>" id="kategori" class="form-control"  placeholder="Contoh : Pemrograman Web" >
								
								</div>
								<br/>
								<input type="hidden" name="edit" value="<?=$kat->id_kategori;?>">
								<button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Kategori</button>
							</form>
							<?php }else{?>

							<form method="post" action="<?= base_url('data/katproses');?>">
								<div class="form-group">
								<label for="">Nama Kategori</label>
								<input type="text" name="kategori" id="kategori" class="form-control" placeholder="Contoh : Pemrograman Web" >
								
								</div>
								<br/>
								<input type="hidden" name="tambah" value="tambah">
								<button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Kategori</button>
							</form>
							<?php }?>
						</div>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="box box-primary">
						<div class="box-header with-border">
						</div>
						<!-- /.box-header -->
						<div class="box-body">
						<div class="table-responsive">
							<table id="example1" class="table table-bordered table-striped table" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Kategori</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
								<?php $no=1;foreach($kategori->result_array() as $isi){?>
									<tr>
										<td><?= $no;?></td>
										<td><?= $isi['nama_kategori'];?></td>
										<td style="width:20%;">
											<a href="<?= base_url('data/kategori?id='.$isi['id_kategori']);?>"><button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
											<a href="<?= base_url('data/katproses?kat_id='.$isi['id_kategori']);?>" onclick="return confirm('Anda yakin Kategori ini akan dihapus ?');">
											<button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
										</td>
									</tr>
								<?php $no++;}?>
								</tbody>
							</table>
						</div>
						</div>
					</div>
				</div>
			</div>
    	</div>
    </div>
</section>
</div>
