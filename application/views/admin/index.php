<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?php echo base_url() ?>/assets/img/logo.png" type="image/gif">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title ?> HOD</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>/assets/css/nunito-font.css" rel="stylesheet">

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

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar -->



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 font-weight-bold">Selamat Datang, <span class="text-primary"><?= $user['name']; ?></span></span>

                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item btn btn-xl" href="<?php echo base_url('admin/myprofile') ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil Saya
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item btn btn-xl" href="<?php echo base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="modal-title h3 font-weight-bold" id="exampleModalLabel">Yakin Untuk Keluar?</div>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body h5">Silahkan pilih Keluar, apabila anda yakin untuk keluar.</div>
                            <div class="modal-footer">
                                <button class="btn btn-lg btn-secondary font-weight-bold" type="button" data-dismiss="modal">Batal</button>
                                <a class="btn btn-lg btn-danger font-weight-bold" href="<?php echo base_url('auth/logout') ?>">Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title h4 font-weight-bold" id="exampleModalLabel">Apakah anda sudah menginputkan Data Supervisor?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body h5">Silahkan pilih Input Data Botol, apabila anda sudah pernah melakukan Input Data Supervisor.</div>
                            <div class="modal-footer">
                                <a class="btn font-weight-bold btn-lg btn-secondary" style="margin-right: 175px;" href="<?php echo base_url('admin/inputuser') ?>">Data User</a>
                                <a class="btn font-weight-bold btn-lg btn-primary " href="<?php echo base_url('admin/inputsupervisor') ?>">Input Data Supervisor</a>
                                <a class="btn font-weight-bold btn-lg btn-success mr-3" href="<?php echo base_url('admin/inputbotol') ?>">Input Data Botol</a>
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

                            <a href="<?php echo base_url('admin') ?>" class="btn btn-primary font-weight-bold mb-3 btn-md">Refresh Data Botol</a>


                        </div>

                        </form>

                        <br>
                        <br>
                        <h1 class="h1 mb-0 text-gray-800 font-weight-bold text-center"><?php echo $title ?> <b class="text-primary"><?php echo $title2 ?></b></h1>
                        <br>

                        <a class="btn btn-success font-weight-bold btn-lg" style="border-radius: 7px;" href="<?php echo base_url('welcome/addData') ?>" data-toggle="modal" data-target="#inputModal">Input Data</a>
                    </center>


                    <br>
                    <br>

                    <?php echo $this->session->flashdata('message') ?>


                    <div class="d-inline">
                        <a class="mb-2 btn btn-primary float-left font-weight-bold" href="<?php echo base_url('admin/exportbotol') ?>">
                            <i class="fas fa-download"></i> Download Data</a>
                    </div>


                    <table class=" table-hover table table-bordered w-100" id="dataTablesBotol">

                        <thead>
                            <tr>
                                <th class="align-middle text-center bg-primary text-white">No</th>
                                <th class="no-sort align-middle text-center bg-primary text-white">Tanggal</th>
                                <th class="no-sort align-middle text-center bg-primary text-white">Nama</th>
                                <th class="no-sort align-middle text-center bg-primary text-white">Shift</th>
                                <th class="align-middle text-center bg-primary text-white">Botol Kosong Dari ATM</th>
                                <th class="align-middle text-center bg-primary text-white">Botol Yang Bisa di Treatment Dari ATM</th>
                                <th class="align-middle text-center bg-primary text-white">Botol Kosong Dari Visual Kosong</th>
                                <th class="align-middle text-center bg-primary text-white">Botol Yang Bisa Di Treatment Dari Visual</th>
                                <th class="align-middle text-center bg-primary text-white">Botol Yang Tidak Bisa Di Treatment (AFKIR)</th>
                                <th class="align-middle text-center bg-primary text-white">Total Botol Yang Bisa di Treatment</th>
                                <th class="no-sort align-middle text-center bg-warning text-white">Edit</th>
                                <th class="no-sort align-middle text-center bg-danger text-white">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_botol as $row) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td class="text-center"><?php echo date('d/m/Y', strtotime($row->date_created)); ?></td>
                                    <td class="text-center"><?php echo $row->name ?></td>
                                    <td class="text-center"><?php echo $row->shift ?></td>
                                    <td class="text-center"><?php echo $row->botolkotordarichecker ?></td>
                                    <td class="text-center"><?php echo $row->botolyangmasuktreatment ?></td>
                                    <td class="text-center"><?php echo $row->botolkosongdarivisualkosong ?></td>
                                    <td class="text-center"><?php echo $row->botolyangbisaditreatment ?></td>
                                    <td class="text-center"><?php echo $row->botolkotordarichecker + $row->botolkosongdarivisualkosong - $row->botolyangmasuktreatment - $row->botolyangbisaditreatment ?></td>
                                    <td class="text-center"><?php echo $row->botolyangmasuktreatment + $row->botolyangbisaditreatment ?></td>
                                    <td>
                                        <center>
                                            <a class="btn btn-warning" href="<?php echo base_url('admin/editbotol/' . $row->id) ?>">
                                                <i class="fas fa-edit"></i></a>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-danger" href="<?php echo base_url('admin/deletebotol/' . $row->id) ?>">
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