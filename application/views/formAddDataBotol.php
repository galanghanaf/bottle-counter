<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/horizontal-scroll.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet">

    <style>
        #date-inp::-webkit-calendar-picker-indicator {
            padding-left: 265px;
            border: none;
        }
    </style>

</head>

<body id="page-top">
    <div id="">

        <div id="wrapper content-wrapper" class="">

            <!-- Main Content -->
            <div id="content">

                <div class="container-fluid">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <center>
                        <a href="<?php echo base_url('welcome') ?>" style="float:left" class="previous btn button3 btn-primary"><i class="fas fa-arrow-left"></i></a>
                        <a href="#" style="float:right" class="previous btn button3 btn-primary"><i class="fas fa-arrow-right"></i></a>
                        <a class="text-center font-weight-bold button5" style="text-decoration: none; border-radius:20px; font-size: 40px; color:white;">COUNTER BOTTLE TREATMENT</a>
                    </center>
                    <center>
                        <div class="card">
                            <div class="card-body" style=" background-color: #8791a5;">

                                <div class="card-body" style="color: white;">
                                    <?php echo form_open_multipart('welcome/addDataAction') ?>
                                    <form method="post" action="<?php echo base_url('welcome/addDataAction') ?>" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label class="h3 font-weight-bold">Tanggal</label>
                                                <input id="date-inp" type="date" name="createdAt" class=" form-control form-control-lg">
                                                <?php echo form_error('createdAt', '<div class="text small text-danger"></div>') ?>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="h3 font-weight-bold">Nama</label>
                                                <select name="name" class="form-control form-control-lg">
                                                    <option value=""><b>Pilih Nama...</b></option>
                                                    <?php foreach ($data_nama as $row) : ?>
                                                        <option value=" <?php echo $row->name ?>">
                                                            <?php echo $row->name ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?php echo form_error('name', '<div class="text small text-danger"></div>') ?>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="h3 font-weight-bold">Shift</label>
                                                <select name="shift" class="form-control form-control-lg">
                                                    <option value="">Pilih Shift...</option>
                                                    <option value="Shift 1">Shift 1</option>
                                                    <option value="Shift 2">Shift 2</option>
                                                    <option value="Shift 3">Shift 3</option>
                                                </select>
                                                <?php echo form_error('shift', '<div class="text small text-danger"></div>') ?>
                                            </div>
                                        </div>
                                        <br>
                                        <div>
                                            <div class="form-group">
                                                <div class="wrapper1">
                                                    <div class="container1">
                                                        <h2 class="k1">Botol Kotor Dari Checker</h2>
                                                        <a class="btn btn-sm btn-light mb-3 font-weight-bold" href="<?php echo base_url('welcome/addData') ?>" data-toggle="modal" data-target="#satuModal"><i class="fas fa-pen-square"></i> Custom</a>
                                                        <input type="hidden" id="angka1" value="1">
                                                        <input type="hidden" id="angka2" value="1">
                                                        <input type="number" name="botolkotordarichecker" style="font-family: monospace; border: 2px solid black; border-radius:4px;" min="0" max="100" step="1" value="0" id="hasil" readonly>
                                                        <a class="btn button1 btn-primary" id="increment" onclick="ftambah()"><i class="fas fa-plus fa-lg"></i></a>
                                                        <a class="btn button1 btn-danger" id="decrement" onclick="fkurang()"><i class="fas fa-minus fa-lg"></i></a>
                                                        <?php echo form_error('botolkotordarichecker', '<div class="text small text-danger"></div>') ?>
                                                    </div>
                                                    <div class="container2">
                                                        <h2 class="k2">Botol Kosong Dari Visual Kosong</h2>
                                                        <input type="hidden" id="dua1" value="1">
                                                        <input type="hidden" id="dua2" value="1">
                                                        <a class="btn btn-sm btn-light mb-3 font-weight-bold" href="<?php echo base_url('welcome/addData') ?>" data-toggle="modal" data-target="#duaModal"><i class="fas fa-pen-square"></i> Custom</a>
                                                        <input type="number" name="botolkosongdarivisualkosong" style="font-family: monospace; border: 2px solid black; border-radius:4px;" min="0" max="100" step="1" value="0" id="hasil2" readonly>
                                                        <a class="btn button1 btn-primary" id="increment2" onclick="f2tambah()"><i class="fas fa-plus fa-lg"></i></a>
                                                        <a class="btn button1 btn-danger" id="decrement2" onclick="f2kurang()"><i class="fas fa-minus fa-lg"></i></a>
                                                        <?php echo form_error('botolkosongdarivisualkosong', '<div class="text small text-danger"></div>') ?>
                                                    </div>
                                                    <div class="container3">
                                                        <h2 class="k3">Botol Yang Masuk Treatment</h2>
                                                        <input type="hidden" id="tiga1" value="1">
                                                        <input type="hidden" id="tiga2" value="1">
                                                        <a class="btn btn-sm btn-light mb-3 font-weight-bold" href="<?php echo base_url('welcome/addData') ?>" data-toggle="modal" data-target="#tigaModal"><i class="fas fa-pen-square"></i> Custom</a>
                                                        <input type="number" name="botolyangmasuktreatment" style="font-family: monospace; border: 2px solid black; border-radius:4px;" min="0" max="100" step="1" value="0" id="hasil3" readonly>
                                                        <a class="btn button1 btn-primary" id="increment3" onclick="f3tambah()"><i class="fas fa-plus fa-lg"></i></a>
                                                        <a class="btn button1 btn-danger" id="decrement3" onclick="f3kurang()"><i class="fas fa-minus fa-lg"></i></a>
                                                        <?php echo form_error('botolyangmasuktreatment', '<div class="text small text-danger"></div>') ?>
                                                    </div>
                                                    <div class="container4">
                                                        <h2 class="k4">Botol Yang Bisa di Treatment</h2>
                                                        <input type="hidden" id="empat1" value="1">
                                                        <input type="hidden" id="empat2" value="1">
                                                        <a class="btn btn-sm btn-light mb-3 font-weight-bold" href="<?php echo base_url('welcome/addData') ?>" data-toggle="modal" data-target="#empatModal"><i class="fas fa-pen-square"></i> Custom</a>
                                                        <input type="number" name="botolyangbisaditreatment" style="font-family: monospace; border: 2px solid black; border-radius:4px;" min="0" max="100" step="1" value="0" id="hasil4" readonly>
                                                        <a class="btn button1 btn-primary" id="increment4" onclick="f4tambah()"><i class="fas fa-plus fa-lg"></i></a>
                                                        <a class="btn button1 btn-danger" id="decrement4" onclick="f4kurang()"><i class="fas fa-minus fa-lg"></i></a>
                                                        <?php echo form_error('botolyangbisaditreatment', '<div class="text small text-danger"></div>') ?>
                                                    </div>
                                                    <div class="container5">
                                                        <h2 class="k5">Botol Yang Tidak<br>Bisa di Treatment<br>(AFKIR)</h2>
                                                        <input type="hidden" id="lima1" value="1">
                                                        <input type="hidden" id="lima2" value="1">
                                                        <a class="btn btn-sm btn-light mb-3 font-weight-bold" href="<?php echo base_url('welcome/addData') ?>" data-toggle="modal" data-target="#limaModal"><i class="fas fa-pen-square"></i> Custom</a>
                                                        <input type="number" name="botolyangtidakbisaditreatment" style="font-family: monospace; border: 2px solid black; border-radius:4px;" min="0" max="100" step="1" value="0" id="hasil5" readonly>
                                                        <a class="btn button1 btn-primary" id="increment5" onclick="f5tambah()"><i class="fas fa-plus fa-lg"></i></a>
                                                        <a class="btn button1 btn-danger" id="decrement5" onclick="f5kurang()"><i class="fas fa-minus fa-lg"></i></a>
                                                        <?php echo form_error('botolyangbisaditreatment', '<div class="text small text-danger"></div>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <button onclick="return confirm('Konfirmasi Untuk Menyimpan Data Botol')" type="submit" class="btn button4 font-weight-bold btn-lg" style="border-radius:15px; width: 150px; height: 60px;">SIMPAN</button>
                                            <?php echo form_close(); ?>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </center>
                    <br>

                    <!-- Perhitungan Modal-->
                    <div class="modal fade" id="satuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title font-weight-bold text-gray" id="exampleModalLabel">Masukan Jumlah Botol</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close" onclick="document.calc.txt.value =''">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form name="calc">
                                    <div class="modal-body">
                                        <center>

                                            <input name="txt" type="text" class="text-center" style="width: 100%; height:100px; font-size:80px;" id="angka3" readonly placeholder="0">
                                        </center>
                                        <div class="text-center" style="margin-top: 10px;">
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc.txt.value +='1'">1</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc.txt.value +='2'">2</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc.txt.value +='3'">3</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc.txt.value +='4'">4</a>
                                            <a class="btn btn-success font-weight-bold btn-lg" onclick="ftambah2(), document.calc.txt.value =''" data-dismiss="modal">+</a>
                                        </div>

                                        <div class="text-center" style="margin-top: 10px;">
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc.txt.value +='5'">5</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc.txt.value +='6'">6</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc.txt.value +='7'">7</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc.txt.value +='8'">8</a>
                                            <a class="btn btn-warning font-weight-bold btn-lg" onclick="fkurang2(), document.calc.txt.value =''" data-dismiss="modal">-</a>

                                        </div>
                                        <div class="text-center" style="margin-top: 10px;">

                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc.txt.value +='9'">9</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc.txt.value +='0'">0</a>
                                            <a class="btn btn-danger font-weight-bold btn-lg pd" style="width: 142px;" onclick="document.calc.txt.value =''">Hapus</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="duaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Masukan Jumlah Botol</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close" onclick="document.calc2.txt2.value =''">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form name="calc2">
                                    <div class="modal-body">
                                        <center>

                                            <input name="txt2" type="text" class="text-center" style="width: 100%; height:100px; font-size:80px;" id="dua3" readonly placeholder="0">
                                        </center>
                                        <div class="text-center" style="margin-top: 10px;">
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc2.txt2.value +='1'">1</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc2.txt2.value +='2'">2</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc2.txt2.value +='3'">3</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc2.txt2.value +='4'">4</a>
                                            <a class="btn btn-success font-weight-bold btn-lg" onclick="f2tambah2(), document.calc2.txt2.value =''" data-dismiss="modal">+</a>
                                        </div>

                                        <div class="text-center" style="margin-top: 10px;">
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc2.txt2.value +='5'">5</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc2.txt2.value +='6'">6</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc2.txt2.value +='7'">7</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc2.txt2.value +='8'">8</a>
                                            <a class="btn btn-warning font-weight-bold btn-lg" onclick="f2kurang2(), document.calc2.txt2.value =''" data-dismiss="modal">-</a>

                                        </div>
                                        <div class="text-center" style="margin-top: 10px;">

                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc2.txt2.value +='9'">9</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc2.txt2.value +='0'">0</a>
                                            <a class="btn btn-danger font-weight-bold btn-lg pd" style="width: 142px;" onclick="document.calc2.txt2.value =''">Hapus</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="tigaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Masukan Jumlah Botol</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close" onclick="document.calc3.txt3.value =''">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form name="calc3">
                                    <div class="modal-body">
                                        <center>

                                            <input name="txt3" type="text" class="text-center" style="width: 100%; height:100px; font-size:80px;" id="tiga3" readonly placeholder="0">
                                        </center>
                                        <div class="text-center" style="margin-top: 10px;">
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc3.txt3.value +='1'">1</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc3.txt3.value +='2'">2</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc3.txt3.value +='3'">3</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc3.txt3.value +='4'">4</a>
                                            <a class="btn btn-success font-weight-bold btn-lg" onclick="f3tambah2(), document.calc3.txt3.value =''" data-dismiss="modal">+</a>
                                        </div>

                                        <div class="text-center" style="margin-top: 10px;">
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc3.txt3.value +='5'">5</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc3.txt3.value +='6'">6</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc3.txt3.value +='7'">7</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc3.txt3.value +='8'">8</a>
                                            <a class="btn btn-warning font-weight-bold btn-lg" onclick="f3kurang2(), document.calc3.txt3.value =''" data-dismiss="modal">-</a>

                                        </div>
                                        <div class="text-center" style="margin-top: 10px;">

                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc3.txt3.value +='9'">9</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc3.txt3.value +='0'">0</a>
                                            <a class="btn btn-danger font-weight-bold btn-lg pd" style="width: 142px;" onclick="document.calc3.txt3.value =''">Hapus</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="empatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Masukan Jumlah Botol</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close" onclick="document.calc4.txt4.value =''">
                                        <span aria-hidden=" true">×</span>
                                    </button>
                                </div>
                                <form name="calc4">
                                    <div class="modal-body">
                                        <center>

                                            <input name="txt4" type="text" class="text-center" style="width: 100%; height:100px; font-size:80px;" id="empat3" readonly placeholder="0">
                                        </center>
                                        <div class="text-center" style="margin-top: 10px;">
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc4.txt4.value +='1'">1</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc4.txt4.value +='2'">2</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc4.txt4.value +='3'">3</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc4.txt4.value +='4'">4</a>
                                            <a class="btn btn-success font-weight-bold btn-lg" onclick="f4tambah2(), document.calc4.txt4.value =''" data-dismiss="modal">+</a>
                                        </div>

                                        <div class="text-center" style="margin-top: 10px;">
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc4.txt4.value +='5'">5</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc4.txt4.value +='6'">6</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc4.txt4.value +='7'">7</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc4.txt4.value +='8'">8</a>
                                            <a class="btn btn-warning font-weight-bold btn-lg" onclick="f4kurang2(), document.calc4.txt4.value =''" data-dismiss="modal">-</a>

                                        </div>
                                        <div class="text-center" style="margin-top: 10px;">

                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc4.txt4.value +='9'">9</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc4.txt4.value +='0'">0</a>
                                            <a class="btn btn-danger font-weight-bold btn-lg pd" style="width: 142px;" onclick="document.calc4.txt4.value =''">Hapus</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="limaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Masukan Jumlah Botol</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close" onclick="document.calc5.txt5.value =''">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                                <form name="calc5" id="limaform">
                                    <div class="modal-body">
                                        <center>

                                            <input name="txt5" type="text" class="text-center" style="width: 100%; height:100px; font-size:80px;" id="lima3" readonly placeholder="0">
                                        </center>
                                        <div class="text-center" style="margin-top: 10px;">
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc5.txt5.value +='1'">1</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc5.txt5.value +='2'">2</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc5.txt5.value +='3'">3</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc5.txt5.value +='4'">4</a>
                                            <a class="btn btn-success font-weight-bold btn-lg" onclick="f5tambah2(), document.calc5.txt5.value =''" data-dismiss="modal">+</a>
                                        </div>

                                        <div class="text-center" style="margin-top: 10px;">
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc5.txt5.value +='5'">5</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc5.txt5.value +='6'">6</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc5.txt5.value +='7'">7</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc5.txt5.value +='8'">8</a>
                                            <a class="btn btn-warning font-weight-bold btn-lg" onclick="f5kurang2(), document.calc5.txt5.value =''" data-dismiss="modal">-</a>

                                        </div>
                                        <div class="text-center" style="margin-top: 10px;">

                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc5.txt5.value +='9'">9</a>
                                            <a class="btn btn-secondary font-weight-bold btn-lg" onclick="document.calc5.txt5.value +='0'">0</a>
                                            <a class="btn btn-danger font-weight-bold btn-lg pd" style="width: 142px;" onclick="document.calc5.txt5.value =''">Hapus</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>


            <script src="<?php echo base_url() ?>/assets/js/script.js"></script>

            <!-- Bootstrap core JavaScript-->
            <script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
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