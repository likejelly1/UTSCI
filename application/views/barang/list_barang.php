<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Stok Barang</title>
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
				<br><br>
				<h1 class="d-flex justify-content-center">Data Stok Barang</h1>
				<br><br>
				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a class="btn btn-primary" href="<?php echo site_url('BarangController/add') ?>"><i class="icon ion-md-add"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama Barang</th>
										<th>Stok</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($barang as $product): ?>
									<tr>
										<td width="150">
											<?php echo $product->nama_barang ?>
										</td>
										<td>
											<?php echo $product->stok ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('BarangController/edit/'.$product->id_barang) ?>"
											 class="btn btn-warning"><i class="icon ion-md-create"></i> Edit</a>
											<a href="<?php echo site_url('BarangController/delete/'.$product->id_barang) ?>"class="btn btn-danger"><i class="icon ion-md-trash"></i> Delete</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>


<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.bundle.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>

</html>