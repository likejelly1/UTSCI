<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambah Data Barang</title>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- CSS Files -->
	<link href="<?php echo base_url()?>assets/css/material-dashboard.css" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url()?>assets/demo/demo.css" rel="stylesheet" />
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

				<h2>Edit Barang</h2>
				<hr>
				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-body">
						<form action="<?php base_url('barang/update') ?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $product[0]->id_barang?>" />
							<div class="form-group">
								<label for="name">Nama Barang : </label>
								<input class="form-control <?php echo form_error('nama_barang') ? 'is-invalid':'' ?>"
								 type="text" name="nama_barang" placeholder="" value="<?php echo $product[0]->nama_barang ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="stok">Stok : </label>
								<input class="form-control <?php echo form_error('stok') ? 'is-invalid':'' ?>"
								 type="number" name="stok" min="0" placeholder="" value="<?php echo $product[0]->stok ?>" />
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