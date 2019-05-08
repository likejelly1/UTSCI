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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-body">
						<form action="<?php base_url('barang/update') ?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $product->id_barang?>" />
							<div class="form-group">
								<label for="name">Nama Barang : </label>
								<input class="form-control <?php echo form_error('nama_barang') ? 'is-invalid':'' ?>"
								 type="text" name="nama_barang" placeholder="" value="<?php echo $product->nama_barang ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="stok">Stok : </label>
								<input class="form-control <?php echo form_error('stok') ? 'is-invalid':'' ?>"
								 type="number" name="stok" min="0" placeholder="" value="<?php echo $product->stok ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

							<input class="btn btn-warning" type="submit" name="btn" value="Save" />
							<a class="btn btn-info" href="<?php echo site_url('BarangController/') ?>"> Back</a>
						</form>

					</div>
				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->
</body>

</html>