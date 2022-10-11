<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?php echo base_url() ?>/assets/img/logo.png" type="image/gif">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title ?></title>

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

    <style>

    </style>
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
                                <a class="dropdown-item btn btn-xl" href="<?php echo base_url('#') ?>">
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

                <div class="container-fluid ">




                    <div class="container py-5">
                        <!-- Page Heading -->
                        <div class="d-inline">
                            <a href="<?php echo base_url('admin/index') ?>" style="float:left; margin-left:70px" class="previous btn button3 btn-primary"><i class="fas fa-arrow-left"></i></a>
                            <a href="#" style="float:right; margin-right:30px" class="previous btn button3 btn-primary"><i class="fas fa-arrow-right"></i></a>
                        </div>
                        <br><br><br>
                        <br>

                        <div class="mb-5 ml-4 text-gray-800 font-weight-bold text-center">
                            <h1 class="h1 mb-5 ml-5 text-gray-800 font-weight-bold text-left">Profil Saya</h1>
                        </div>
                        <?php echo $this->session->flashdata('message') ?>


                        <div class="row">

                            <div class="col-lg">
                                <div class="card mb-4">
                                    <div class="card-body text-center">
                                        <a href="<?= base_url('admin/editmyprofile') ?>"><img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" style="width: 120px; height: 120px;"></a>



                                        <div class="d-flex justify-content-center mb-2">
                                            <a class="btn btn-primary mt-2" href="<?= base_url('admin/editmyprofile') ?>">
                                                <b>Ubah Profil Saya</b></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 ">Nama</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?= $user['name']; ?></p>
                                            </div>
                                        </div>
                                        <hr>


                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 font-weight-bold">Email</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?= $user['email'] ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 font-weight-bold">Status</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <?php if ($user['role_id'] == '1') { ?>
                                                    <p class="text-muted mb-0 ">Admin</p>
                                                <?php } elseif ($user['role_id'] == '2') { ?>
                                                    <p class="text-muted mb-0 ">User</p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 font-weight-bold">Dibuat</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?= date("d/m/Y", $user['date_created']); ?></p>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 font-weight-bold">Password</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group" id="togglePassword">
                                                    <input type="password" style="cursor: pointer;" name="password" class="form-control" id="id_password" readonly value="<?= $user['password'] ?>">

                                                    <script>
                                                        const togglePassword = document.querySelector('#togglePassword');
                                                        const password = document.querySelector('#id_password');

                                                        togglePassword.addEventListener('click', function(e) {
                                                            // toggle the type attribute
                                                            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                                                            password.setAttribute('type', type);

                                                        });
                                                    </script>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>




                            </div>

                        </div>

                    </div>
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