<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?php echo base_url() ?>/assets/img/logo.png" type="image/gif">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>/assets/css/nunito-font.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/virtual-keyboard/keyboard.css">
    <link href="<?php echo base_url() ?>/assets/virtual-keyboard/material-icons.css" rel="stylesheet">

    <style>
        .form-rounded {
            border-radius: 1rem;
        }
    </style>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <br>
        <br>
        <br>
        <br>
        <div class="row justify-content-center jumbotron">

            <div class="col-lg-7">

                <div class="card form-rounded o-hidden border-0 shadow-lg my-4">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h1 mb-5 text-gray-800 font-weight-bold text-center">Selamat Datang!</h1>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                        <?php echo $this->session->flashdata('message') ?>

                                        <div class="form-group">
                                            <input type="text" class="use-keyboard-input form-control form-control-xl form-rounded" id="email" name="email" placeholder="Masukan Email Anda..." value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<small class="text-danger">', '</small>') ?>

                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="use-keyboard-input text-left form-control form-control-xl form-rounded" name="password" placeholder="Masukan Password Anda..." min="0" max="100" step="1" value="" id="hasil">
                                            <?= form_error('password', '<small class="text-danger">', '</small>') ?>

                                        </div>

                                        <button type="submit" class="font-weight-bold btn btn-primary btn-lg btn-block form-rounded">
                                            Masuk
                                        </button>
                                        <br>

                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>/assets/virtual-keyboard/keyboard.js"></script>
    <script src="<?php echo base_url() ?>/assets/virtual-keyboard/keyboardnumpad.js"></script>



    <script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>/assets/js/sb-admin-2.min.js"></script>

</body>

</html>