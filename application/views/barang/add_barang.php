<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tambah Data Barang</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-reboot.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-grid.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-grid.min.css">
	<link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
</head>

<body id="page-top">
	<div id="wrapper">
		<div id="content-wrapper">
			<div class="container-fluid">
				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<br><br>
				<h1 class="d-flex justify-content-center">Tambah Data Barang</h1>
				<br><br>
				<div class="card mb-3">
					<div class="card-body">
						<form action="<?php base_url('BarangController/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="barang">Nama Barang : </label>
								<input class="form-control <?php echo form_error('nama_barang') ? 'is-invalid':'' ?>"
								 type="text" name="nama_barang" placeholder="" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Stok : </label>
								<input class="form-control <?php echo form_error('stok') ? 'is-invalid':'' ?>"
								 type="number" name="stok" min="0" placeholder="" />
								<div class="invalid-feedback">
									<?php echo form_error('stok') ?>
								</div>
							</div>

							<input class="btn btn-primary" type="submit" name="btn" value="Save" />
							<a class="btn btn-info" href="<?php echo site_url('BarangController/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
						</form>
					</div>
				</div>
			</div>
		</div>
</body>
</html>