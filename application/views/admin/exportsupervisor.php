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
    <link href="<?php echo base_url() ?>/assets/datatables/jquery.dataTables.min.css" rel="stylesheet">

    <style>
        html {
            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
            align-content: center;
            align-items: center;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            flex: 0 1 auto;
            align-self: auto;
            /*recommend 1920 / 1080 max based on usage stats, use 100% to that point*/
            width: 100%;
            max-width: 900px;

        }

        .buttons-excel {
            margin-bottom: 40px;

        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="">

        <!-- Content Wrapper -->
        <div id="wrapper content-wrapper" class="">

            <!-- Main Content -->
            <div id="content">
                <div class="container-fluid">

                    <div class="card">
                        <center>
                            <br>
                            <a href="<?php echo base_url('admin/inputuser') ?>" style="float:left" class="previous btn button3 btn-primary"><i class="fas fa-arrow-left"></i></a>
                            <a href="#" style="float:right" class="previous btn button3 btn-primary"><i class="fas fa-arrow-right"></i></a>

                            <br>
                            <br>
                            <h1 class="h1 mb-0 text-gray-800 font-weight-bold"><?php echo $title ?></h1>


                        </center>
                        <br>
                        <br>
                    </div>

                    <?php echo $this->session->flashdata('message') ?>



                    <center>
                        <table class=" table-hover table table-bordered w-100 float-left" id="dataTablesNamaDownload">
                            <thead>
                                <tr>
                                    <th class="align-middle text-center bg-primary text-white">No</th>
                                    <th class="align-middle no-sort text-center bg-primary text-white">Nama</th>
                                    <th class="align-middle no-sort text-center bg-primary text-white">Dibuat</th>
                                    <th class="align-middle no-sort text-center bg-primary text-white">Diubah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data_supervisor as $row) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td class="text-center"><?php echo $row->name ?></td>
                                        <td class="text-center"><?php echo date("d/m/Y", $row->date_created); ?></td>
                                        <td class="text-center"><?php echo date("d/m/Y", $row->date_changed); ?></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </center>


                </div>

            </div>

            <br>
            <br>
            <br>

        </div>

    </div>


    <!-- Scroll to Top Button-->
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