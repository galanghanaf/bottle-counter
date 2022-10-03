<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo $title ?> HOD</title>

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url() ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>/assets/css/horizontal-scroll.css" rel="stylesheet">
	<!-- DataTables -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/datatables/jquery.dataTables.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/datatables/dataTables.dateTime.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/datatables/daterangepicker.css" />


</head>

<body id="page-top">


	<div id="">


		<div id="wrapper content-wrapper" class="">


			<div id="content">


				<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title h4 font-weight-bold" id="exampleModalLabel">Apakah anda sudah menginputkan nama?</h5>
								<button class="close" type="button" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body h5">Silahkan pilih Input Data Botol, apabila anda sudah pernah melakukan input nama.</div>
							<div class="modal-footer">
								<a class="btn font-weight-bold btn-lg btn-secondary" href="<?php echo base_url('Welcome/addDataNama') ?>">Input Nama</a>
								<a class="btn font-weight-bold btn-lg btn-success" href="<?php echo base_url('Welcome/addDataBotol') ?>">Input Data Botol</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Begin Page Content -->
				<div class="container-fluid">
					<center>
						<!-- Page Heading -->
						<br>
						<div class="d-inline">
							<a href="<?php echo base_url('welcome') ?>" style="float:left" class="previous btn button3 btn-primary"><i class="fas fa-arrow-left"></i></a>
							<a href="<?php echo base_url('welcome') ?>" class="btn btn-primary font-weight-bold mb-3 btn-md">Refresh Data Botol</a>
							<a href="#" style="float:right" class="previous btn button3 btn-primary"><i class="fas fa-arrow-right"></i></a>

						</div>

						</form>

						<br>
						<br>
						<h1 class="h1 mb-0 text-gray-800 font-weight-bold text-center"><?php echo $title ?> <b class="text-primary"><?php echo $title2 ?></b></h1>
						<br>

						<a class="btn btn-success font-weight-bold btn-lg" style="border-radius: 7px;" href="<?php echo base_url('welcome/addData') ?>" data-toggle="modal" data-target="#inputModal">Input Data Botol</a>
					</center>


					<br>
					<br>

					<?php echo $this->session->flashdata('pesan') ?>


					<div class="d-inline">
						<a class="mb-2 btn btn-primary float-left font-weight-bold" href="<?php echo base_url('welcome/exportdatabotol') ?>">
							<i class="fas fa-download"></i> Export Data Botol</a>
					</div>


					<table class=" table-hover table table-bordered w-100" id="dataTablesBotol">

						<thead>
							<tr>
								<th class="align-middle text-center bg-primary text-white">No</th>
								<th class="no-sort align-middle text-center bg-primary text-white">Tanggal</th>
								<th class="no-sort align-middle text-center bg-primary text-white">Nama</th>
								<th class="no-sort align-middle text-center bg-primary text-white">Shift</th>
								<th class="align-middle text-center bg-primary text-white">Botol Kotor Dari Checker</th>
								<th class="align-middle text-center bg-primary text-white">Botol Kosong Dari Visual Kosong</th>
								<th class="align-middle text-center bg-primary text-white">Botol Yang Masuk Treatment</th>
								<th class="align-middle text-center bg-primary text-white">Botol Yang Bisa Di Treatment</th>
								<th class="align-middle text-center bg-primary text-white">Botol Yang Tidak Bisa Di Treatment (AFKIR)</th>
								<th class="align-middle text-center bg-primary text-white">Total Botol</th>
								<th class="no-sort align-middle text-center bg-danger text-white">Delete</th>

							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($data_botol as $row) : ?>
								<tr>
									<td class="text-center"><?php echo $no++; ?></td>
									<td class="text-center"><?php echo date('d/m/Y', strtotime($row->createdAt)); ?></td>
									<td class="text-center"><?php echo $row->name ?></td>
									<td class="text-center"><?php echo $row->shift ?></td>
									<td class="text-center"><?php echo $row->botolkotordarichecker ?></td>
									<td class="text-center"><?php echo $row->botolkosongdarivisualkosong ?></td>
									<td class="text-center"><?php echo $row->botolyangmasuktreatment ?></td>
									<td class="text-center"><?php echo $row->botolyangbisaditreatment ?></td>
									<td class="text-center"><?php echo $row->botolyangtidakbisaditreatment ?></td>
									<td class="text-center"><?php echo $row->botolkotordarichecker + $row->botolkosongdarivisualkosong + $row->botolyangmasuktreatment + $row->botolyangbisaditreatment + $row->botolyangtidakbisaditreatment ?></td>
									<td>
										<center>
											<a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('welcome/deleteDataBotol/' . $row->id) ?>">
												<i class="fas fa-trash"></i></a>
										</center>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>

					</table>
				</div>
			</div>
			<br>
			<br>
			<br>

		</div>

	</div>

	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- DataTables JavaScript-->
	<script src="<?php echo base_url() ?>/assets/datatables/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/main.js"></script>
	<script src="<?php echo base_url() ?>/assets/datatables/dataTables.buttons.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/datatables/jszip.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/datatables/pdfmake.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/datatables/vfs_fonts.js"></script>
	<script src="<?php echo base_url() ?>/assets/datatables/buttons.html5.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/datatables/buttons.print.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/datatables/dataTables.dateTime.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/datatables/moment.min.js"></script>

	<script src="<?php echo base_url() ?>/assets/datatables/daterangepicker.min.js"></script>



	<script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo base_url() ?>/assets/js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="<?php echo base_url() ?>/assets/vendor/chart.js/Chart.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="<?php echo base_url() ?>/assets/js/demo/chart-area-demo.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/demo/chart-pie-demo.js"></script>



</body>

</html>