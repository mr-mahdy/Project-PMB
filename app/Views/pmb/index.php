<?= $this->extend('layouts/pmb_template'); ?>

<?= $this->section('content'); ?>
<?php if (isset($validation)) : ?>
    <h1>
        <?= 'ok' ?>
    </h1>
<?php endif; ?>
<div class="main-body">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-12">
            <!-- Material tab card start -->
            <div class="row m-b-20">
                <div class="col-md-8">
                    <div class="card user-card">
                        <div class="card-block">
                            <!-- Slide PMB -->
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators sliderPMB">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid w-100" src="<?= base_url(); ?>\foundations\adminity\assets\images\slider\slidertes.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid w-100" src="<?= base_url(); ?>\foundations\adminity\assets\images\slider\slidertes.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid w-100" src="<?= base_url(); ?>\foundations\adminity\assets\images\slider\slidertes.png" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid w-100" src="<?= base_url(); ?>\foundations\adminity\assets\images\slider\slidertes.png" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- End Silde PMB -->
                        </div>
                    </div>

                    <div class="card user-card b-l-info business-info services">
                        <!-- <div class="card-header">
                                                        <h5 class="card-header-text">All Close Accordion</h5>
                                                    </div> -->
                        <div class="card-block accordion-block">
                            <div id="accordion" role="tablist" aria-multiselectable="true">
                                <!-- Sinkron Pembayaran PMB -->
                                <div class="accordion-panel">
                                    <!-- Button -->
                                    <div class="accordion-heading" role="tab" id="headingOne">
                                        <h3 class="card-title accordion-title">
                                            <a class="accordion-msg scale_active collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                <i class="fa fa-quote-right"></i> Sinkronisasi Pembayaran Formulir PMB Via Bank (<span style="color: #F30606;"> 36 Data </span>)
                                            </a>
                                        </h3>
                                    </div>
                                    <!-- Tabel -->
                                    <div id="collapseOne" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                        <div class="accordion-content accordion-desc">
                                            <div class="dt-responsive table-responsive">
                                                <!-- <div class="dt-buttons"><a class="dt-button" tabindex="0" aria-controls="custom-btn" href="#"><span><i class="fa fa-plus-square"></i> TAMBAH PERIODE</span></a></div> -->
                                                <table id="button-select" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="button-select_info" style="text-align: center;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                                NO
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                TAHUN AKADEMIK
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                NPM/ID
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                NAMA
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                PROGRAM STUDI
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                NO VA
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                JUMLAH
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="2" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                WAKTU SINKRONISASI
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr role="row" class="odd">
                                                            <td style="white-space: nowrap; width: 1%;">1</td>
                                                            <td>2021-2022</td>
                                                            <td>PMB2021001035</td>
                                                            <td>
                                                                KUSTIAMAN
                                                            </td>
                                                            <td>
                                                                Teknik Lingkungan
                                                            </td>
                                                            <td>
                                                                18047403
                                                            </td>
                                                            <td>Rp 500.000,00</td>
                                                            <td>18-03-2021 (23:59:59)</td>
                                                            <td>18-03-2021 (23:59:59)</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td style="white-space: nowrap; width: 1%;">1</td>
                                                            <td>2021-2022</td>
                                                            <td>PMB2021001035</td>
                                                            <td>
                                                                KUSTIAMAN
                                                            </td>
                                                            <td>
                                                                Teknik Lingkungan
                                                            </td>
                                                            <td>
                                                                18047403
                                                            </td>
                                                            <td>Rp 500.000,00</td>
                                                            <td>18-03-2021 (23:59:59)</td>
                                                            <td>18-03-2021 (23:59:59)</td>
                                                        </tr>
                                                    </tbody>
                                                    <!--  <tfoot>
                                                                                             <tr role="row">
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                                                                    NO
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                KODE
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                NAMA PERIODE
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                TGL PENDAFTARAN
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                TGL UJIAN
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                TGL PENGUMUMAN
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                TGL BAYAR
                                                                                                </th>
                                                                                                 <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                AKSI
                                                                                                </th>
                                                                                            </tr>
                                                                                        </tfoot> -->
                                                </table>

                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true">«</span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true">»</span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Sinkron Pembayaran PMB -->

                                <!-- Sinkron Biaya Pendidikan -->
                                <div class="accordion-panel">
                                    <!-- Button -->
                                    <div class="accordion-heading" role="tab" id="headingTwo">
                                        <h3 class="card-title accordion-title">
                                            <a class="accordion-msg scale_active collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="fa fa-quote-right"></i> Sinkronisasi Biaya Pendidikan Mahasiswa Via Bank (<span style="color: #F30606;"> 150 Data </span>)
                                            </a>
                                        </h3>
                                    </div>
                                    <!-- Table -->
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" style="">
                                        <div class="accordion-content accordion-desc">
                                            <div class="dt-responsive table-responsive">
                                                <!-- <div class="dt-buttons"><a class="dt-button" tabindex="0" aria-controls="custom-btn" href="#"><span><i class="fa fa-plus-square"></i> TAMBAH PERIODE</span></a></div> -->
                                                <table id="button-select" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="button-select_info" style="text-align: center;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                                NO
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                TAHUN AKADEMIK
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                NPM
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                NAMA
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                PROGRAM STUDI
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                JUMLAH
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                WAKTU BAYAR
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                STATUS
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr role="row" class="odd">
                                                            <td style="white-space: nowrap; width: 1%;">1</td>
                                                            <td>2021-2022</td>
                                                            <td>PMB2021001035</td>
                                                            <td>
                                                                KUSTIAMAN
                                                            </td>
                                                            <td>
                                                                Teknik Lingkungan
                                                            </td>
                                                            <td>
                                                                18047403
                                                            </td>
                                                            <td>19-03-2021 (08:08:58)</td>
                                                            <td style="color: #2ECC71;">Sudah Diproses</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td style="white-space: nowrap; width: 1%;">1</td>
                                                            <td>2021-2022</td>
                                                            <td>PMB2021001035</td>
                                                            <td>
                                                                KUSTIAMAN
                                                            </td>
                                                            <td>
                                                                Teknik Lingkungan
                                                            </td>
                                                            <td>
                                                                18047403
                                                            </td>
                                                            <td>19-03-2021 (08:08:58)</td>
                                                            <td style="color: #F30606;">Dalam proses</td>
                                                        </tr>
                                                    </tbody>
                                                    <!--  <tfoot>
                                                                                             <tr role="row">
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                                                                    NO
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                KODE
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                NAMA PERIODE
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                TGL PENDAFTARAN
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                TGL UJIAN
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                TGL PENGUMUMAN
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                TGL BAYAR
                                                                                                </th>
                                                                                                 <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                AKSI
                                                                                                </th>
                                                                                            </tr>
                                                                                        </tfoot> -->
                                                </table>

                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true">«</span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true">»</span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Sinkron Biaya Pendidikan -->

                                <!-- Sinkron DPP -->
                                <div class="accordion-panel">
                                    <!-- Button -->
                                    <div class=" accordion-heading" role="tab" id="headingThree">
                                        <h3 class="card-title accordion-title">
                                            <a class="accordion-msg scale_active collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <i class="fa fa-quote-right"></i> Sinkronisasi DPP (<span style="color: #F30606;"> 22 Data </span>)
                                            </a>
                                        </h3>
                                    </div>
                                    <!-- Table -->
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" style="">
                                        <div class="accordion-content accordion-desc">
                                            <div class="dt-responsive table-responsive">
                                                <!-- <div class="dt-buttons"><a class="dt-button" tabindex="0" aria-controls="custom-btn" href="#"><span><i class="fa fa-plus-square"></i> TAMBAH PERIODE</span></a></div> -->
                                                <table id="button-select" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="button-select_info" style="text-align: center;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                                NO
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                TAHUN AKADEMIK
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                NPM
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                NAMA MAHASISWA
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                PROGRAM STUDI
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                STATUS
                                                            </th>
                                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                WAKTU SINKRONISASI
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr role="row" class="odd">
                                                            <td style="white-space: nowrap; width: 1%;">1</td>
                                                            <td>2021-2022</td>
                                                            <td>173040161</td>
                                                            <td>
                                                                VALENTINA INDAH PERTIWI
                                                            </td>
                                                            <td>
                                                                Teknik Lingkungan
                                                            </td>
                                                            <td style="color: #2ECC71;">LUNAS</td>
                                                            <td>
                                                                19-03-2021 (08:47:39)
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td style="white-space: nowrap; width: 1%;">1</td>
                                                            <td>2021-2022</td>
                                                            <td>173040161</td>
                                                            <td>
                                                                VALENTINA INDAH PERTIWI
                                                            </td>
                                                            <td>
                                                                Teknik Lingkungan
                                                            </td>
                                                            <td style="color: #F30606;">BELUM LUNAS</td>
                                                            <td>
                                                                19-03-2021 (08:47:39)
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--  <tfoot>
                                                                                             <tr role="row">
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                                                                    NO
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                KODE
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                NAMA PERIODE
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                TGL PENDAFTARAN
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                TGL UJIAN
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                TGL PENGUMUMAN
                                                                                                </th>
                                                                                                <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                TGL BAYAR
                                                                                                </th>
                                                                                                 <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                                                                AKSI
                                                                                                </th>
                                                                                            </tr>
                                                                                        </tfoot> -->
                                                </table>

                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true">«</span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true">»</span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Sinkron DPP -->
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Menu disebelah Kanan -->
                <div class="col-lg-4">
                    <div class="card user-card b-l-info business-info services">
                        <div class="card-block accordion-block">
                            <!-- Menu -->
                            <div id="accordion" role="tablist" aria-multiselectable="true">
                                <!-- PMB Online -->
                                <div class="accordion-panel">
                                    <!-- Button -->
                                    <div class="accordion-heading" role="tab" id="headingPmbOnline">
                                        <h3 class="card-title accordion-title">
                                            <a class="accordion-msg scale_active collapsed" data-toggle="collapse" data-parent="#accordion" href="#pmbOnline" aria-expanded="false" aria-controls="pmbOnline">
                                                <div class="card-header">
                                                    <h5 class="card-header-text"><i class="fa fa-mortar-board"></i> PMB ONLINE</h5>
                                                </div>
                                            </a>
                                        </h3>
                                    </div>
                                    <!-- Isinya -->
                                    <div id="pmbOnline" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingPmbOnline" style="">
                                        <div class="accordion-content accordion-desc">

                                            <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#pmbOnline-caraPendaftaran">
                                                <p><i class="fa fa-map"></i> CARA PENDAFTARAN</p>
                                            </a>

                                            <a href="https://pmb.unpas.ac.id/wp-content/uploads/2021/01/Brosur-Unpas-2021-2022-.pdf" class="btn btn-inverse btn-block" target="_blank">
                                                <p><i class="fa fa-file-text"></i> DOWNLOAD BROSUR</p>
                                            </a>

                                            <a href="https://pmb.unpas.ac.id/wp-content/uploads/2021/01/Daftar-Biaya-Kuliah.jpg" target="_blank" class="btn btn-success btn-block" target="_blank">
                                                <p><i class="fa fa-money"></i> BIAYA KULIAH</p>
                                            </a>

                                            <a href="mockup\adminity\pendaftaranOnlinePMB.html" class="btn btn-danger btn-block">
                                                <p><i class="fa fa-pencil-square"></i> PENDAFTARAN ONLINE</p>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                                <!-- End PMB Online -->

                                <!-- Log Pengguna -->
                                <div class="accordion-panel">
                                    <!-- Button -->
                                    <div class="accordion-heading" role="tab" id="headingLogPengguna">
                                        <h3 class="card-title accordion-title">
                                            <a class="accordion-msg scale_active collapsed" data-toggle="collapse" data-parent="#accordion" href="#logPengguna" aria-expanded="false" aria-controls="logPengguna">
                                                <div class="card-header">
                                                    <h5 class="card-header-text"><i class="fa fa-user"></i> LOG PENGGUNA</h5>
                                                </div>
                                            </a>
                                        </h3>
                                    </div>

                                    <!-- Isinya -->
                                    <div id="logPengguna" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingLogPengguna" style="">
                                        <div class="accordion-content accordion-desc">
                                            <ul class="scroll-list wave">
                                                <li>
                                                    <a href="#v_1_1"><i class="fa fa-user"></i> PMB2021000846 <span class="text-muted text-regular pull-right">
                                                            <label>
                                                                <h6 style="color: #05D85C;"><i class="fa fa-check-circle"></i> TERHUBUNG</h6>
                                                            </label>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#v_1_1"><i class="fa fa-user"></i> PMB2021000969 <span class="text-muted text-regular pull-right">
                                                            <label>
                                                                <h6 style="color: #05D85C;"><i class="fa fa-check-circle"></i> TERHUBUNG</h6>
                                                            </label>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#v_1_1"><i class="fa fa-user"></i> PMB2021001144 <span class="text-muted text-regular pull-right">
                                                            <label>
                                                                <h6 style="color: #E40505;"><i class="fa fa-history"></i>
                                                                    < 5 min </h6>
                                                            </label>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#v_1_1"><i class="fa fa-user"></i> PMB2021001144 <span class="text-muted text-regular pull-right">
                                                            <label>
                                                                <h6 style="color: #E40505;"><i class="fa fa-history"></i> 00:23:36 </h6>
                                                            </label>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#v_1_1"><i class="fa fa-user"></i> PMB2021001144 <span class="text-muted text-regular pull-right">
                                                            <label>
                                                                <h6 style="color: #E40505;"><i class="fa fa-history"></i> 00:23:36 </h6>
                                                            </label>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#v_1_1"><i class="fa fa-user"></i> PMB2021001144 <span class="text-muted text-regular pull-right">
                                                            <label>
                                                                <h6 style="color: #E40505;"><i class="fa fa-history"></i> 00:23:36 </h6>
                                                            </label>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#v_1_1"><i class="fa fa-user"></i> PMB2021001144 <span class="text-muted text-regular pull-right">
                                                            <label>
                                                                <h6 style="color: #E40505;"><i class="fa fa-history"></i> 00:23:36 </h6>
                                                            </label>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#v_1_1"><i class="fa fa-user"></i> PMB2021001144 <span class="text-muted text-regular pull-right">
                                                            <label>
                                                                <h6 style="color: #E40505;"><i class="fa fa-history"></i> 00:23:36 </h6>
                                                            </label>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Log Pengguna -->

                                <!-- Pendaftar Hari ini -->
                                <div class="accordion-panel">
                                    <!-- Button -->
                                    <div class=" accordion-heading" role="tab" id="headingPendaftarHariIni">
                                        <h3 class="card-title accordion-title">
                                            <a class="accordion-msg scale_active collapsed" data-toggle="collapse" data-parent="#accordion" href="#pendaftarHariIni" aria-expanded="false" aria-controls="pendaftarHariIni">
                                                <div class="card-header">
                                                    <h5 class="card-header-text"><i class="fa fa-share"></i> PENDAFTAR HARI INI</h5>
                                                </div>
                                            </a>
                                        </h3>
                                    </div>
                                    <!-- Isinya -->
                                    <div id="pendaftarHariIni" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPendaftarHariIni" style="">
                                        <div class="accordion-content accordion-desc">
                                            <ul class="scroll-list wave">
                                                <li>
                                                    <a href="#v_1_1"><i class="fa fa-building"></i> Fakultas Hukum (FH)<span class="text-muted text-regular pull-right">
                                                            <label class="label label-info">
                                                                <h6> 0 </h6>
                                                            </label>
                                                            <label>
                                                                <h6 style="color: #E40505;">(23)</h6>
                                                            </label>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#v_1_1"><i class="fa fa-building"></i> Fakultas Ilmu Sosial dan Politik (FISIP)<span class="text-muted text-regular pull-right">
                                                            <label class="label label-info">
                                                                <h6> 1 </h6>
                                                            </label>
                                                            <label>
                                                                <h6 style="color: #E40505;">(56)</h6>
                                                            </label>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#v_1_1"><i class="fa fa-building"></i> Fakultas Teknik (FT)<span class="text-muted text-regular pull-right">
                                                            <label class="label label-info">
                                                                <h6> 0 </h6>
                                                            </label>
                                                            <label>
                                                                <h6 style="color: #E40505;">(22)</h6>
                                                            </label>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#v_1_1"><i class="fa fa-building"></i> Fakultas Keguruan dan IP (FKIP)<span class="text-muted text-regular pull-right">
                                                            <label class="label label-info">
                                                                <h6> 0 </h6>
                                                            </label>
                                                            <label>
                                                                <h6 style="color: #E40505;">(13)</h6>
                                                            </label>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#v_1_1"><i class="fa fa-building"></i> Fakultas Ilmu Seni dan Sastra (FISS)<span class="text-muted text-regular pull-right">
                                                            <label class="label label-info">
                                                                <h6> 0 </h6>
                                                            </label>
                                                            <label>
                                                                <h6 style="color: #E40505;">(14)</h6>
                                                            </label>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#v_1_1"><i class="fa fa-building"></i> Fakultas Kedokteran (FK)<span class="text-muted text-regular pull-right">
                                                            <label class="label label-info">
                                                                <h6> 2 </h6>
                                                            </label>
                                                            <label>
                                                                <h6 style="color: #E40505;">(40)</h6>
                                                            </label>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#v_1_1"><i class="fa fa-building"></i> Fakultas Program Pasca Sarjana (FPS)<span class="text-muted text-regular pull-right">
                                                            <label class="label label-info">
                                                                <h6> 0 </h6>
                                                            </label>
                                                            <label>
                                                                <h6 style="color: #E40505;">(34)</h6>
                                                            </label>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#v_1_1"><i class="fa fa-building"></i> Fakultas Hukum <span class="text-muted text-regular pull-right">
                                                            <label class="label label-info">
                                                                <h6>0</h6>
                                                            </label>
                                                            <label>
                                                                <h6 style="color: #E40505;">(23)</h6>
                                                            </label>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="nav navigation">
                                                <li>
                                                    <a href="#v_1_1">
                                                        <h5>JUMLAH :</h5>
                                                        <!-- <span class="text-muted text-regular pull-right">
                                                                                            <label class="label label-info"> <h6>0</h6> </label>
                                                                                            <label><h6>(23)</h6></label>
                                                                                        </span> -->
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 151.771px;"></div>
                                            <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Pendaftar Hari ini -->

                                <!-- Informasi -->
                                <div class="accordion-panel">
                                    <!-- Button -->
                                    <div class="accordion-heading" role="tab" id="headingInformasi">
                                        <h3 class="card-title accordion-title">
                                            <a class="accordion-msg scale_active collapsed" data-toggle="collapse" data-parent="#accordion" href="#informasi" aria-expanded="false" aria-controls="informasi">
                                                <div class="card-header">
                                                    <h5 class="card-header-text"><i class="fa fa-bar-chart-o"></i> INFORMASI</h5>
                                                </div>
                                            </a>
                                        </h3>
                                    </div>
                                    <!-- Isinya -->
                                    <div id="informasi" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingInformasi" style="">
                                        <div class="accordion-content accordion-desc">

                                            <a href="#" class="btn btn-warning btn-block" target="_blank">
                                                <p><i class="fa fa-map"></i> PEMBAYARAN ONLINE</p>
                                            </a>
                                            <a href="#" class="btn btn-inverse btn-block" target="_blank">
                                                <p><i class="fa fa-file-text"></i> DOWNLOAD BROSUR</p>
                                            </a>
                                            <a href="#" class="btn btn-success btn-block" target="_blank">
                                                <p><i class="fa fa-money"></i> BIAYA KULIAH</p>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-block" target="_blank">
                                                <p><i class="fa fa-pencil-square"></i> PENDAFTARAN ONLINE</p>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                                <!-- End Informasi -->

                                <!-- Informasi Prodi -->
                                <div class="accordion-panel">
                                    <!-- Button -->
                                    <div class="accordion-heading" role="tab" id="headingInfromasiProdi">
                                        <h3 class="card-title accordion-title">
                                            <a class="accordion-msg scale_active collapsed" data-toggle="collapse" data-parent="#accordion" href="#informasiProdi" aria-expanded="false" aria-controls="informasiProdi">
                                                <div class="card-header">
                                                    <h5 class="card-header-text"><i class="fa fa-bank"></i> INFORMASI PRODI</h5>
                                                </div>
                                            </a>
                                        </h3>
                                    </div>
                                    <!-- Isinya -->
                                    <div id="informasiProdi" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingInfromasiProdi" style="">
                                        <div class="accordion-content accordion-desc">

                                            <a href="#" class="btn btn-warning btn-block" target="_blank">
                                                <p><i class="fa fa-map"></i> PEMBAYARAN ONLINE</p>
                                            </a>
                                            <a href="#" class="btn btn-inverse btn-block" target="_blank">
                                                <p><i class="fa fa-file-text"></i> DOWNLOAD BROSUR</p>
                                            </a>
                                            <a href="#" class="btn btn-success btn-block" target="_blank">
                                                <p><i class="fa fa-money"></i> BIAYA KULIAH</p>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-block" target="_blank">
                                                <p><i class="fa fa-pencil-square"></i> PENDAFTARAN ONLINE</p>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                                <!-- End Informasi Prodi -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Menu disebelah Kanan -->

                <!-- Modal Ubah Password -->
                <div class="md-modal md-effect-1" id="resetPasswordPMB">
                    <div class="md-content">

                        <h3 class="text-center" style="background: #01a9ac;"><i class="fa fa-refresh"></i> UBAH PASSWORD</h3>
                        <div class="row">
                            <?php if (session()->getFlashData('message')) : ?>
                                <div class="alert alert-danger">Pesan : <?= session()->getFlashData('message') ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="row m-b-20">

                            <div class="col-sm-12 col-lg-4">
                                <img class="img-fluid logoUnpas" src="<?= base_url(); ?>\foundations\adminity\assets\images\Logo-unpas.png" alt="round-img">
                                <h4 class="text-center" style="margin-top: 12px; margin-bottom: 15px;">PMB UNPAS</h4>
                            </div>

                            <div class="col-sm-12 col-lg-8">
                                <form action="/pmb/change-password" method="post">
                                    <?= csrf_field(); ?>
                                    <div class="form-group form-primary">
                                        <input type="password" name="current_password" class="form-control <?= ($validation->hasError('current_password')) ? 'is-invalid' : ''; ?>" id="inputPasswordLama" placeholder="Masukkan Password Lama...">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('current_password'); ?>
                                        </div>
                                        <span class="form-bar"></span>
                                    </div>

                                    <div class="form-group form-primary">
                                        <input type="password" name="new_password" class="form-control <?= ($validation->hasError('new_password')) ? 'is-invalid' : ''; ?>" id="inputPasswordBaru" placeholder="Masukkan Password Baru...">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('new_password'); ?>
                                        </div>
                                        <span class="form-bar"></span>
                                    </div>

                                    <div class="form-group form-primary">
                                        <input type="password" name="password_confirmation" class="form-control <?= ($validation->hasError('password_confirmation')) ? 'is-invalid' : ''; ?>" id="konfirmasiPassword" placeholder="Konfirmasi Password Baru...">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('password_confirmation'); ?>
                                        </div>
                                        <span class="form-bar"></span>
                                    </div>

                                    <div class="row m-t-25 text-left">
                                        <div class="col-12">
                                            <div class="checkbox-fade fade-in-primary">
                                                <label>
                                                    <input type="checkbox" value="" onclick="myFunctionUbahPassword()">
                                                    <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                    <span class="text-inverse">Tampilkan Password</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row m-t-30">
                                        <div class="col-md-12">

                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20 ubah-password" data-dismiss="md-modal" aria-label="Close">
                                                <h5>UBAH PASSWORD</h5>
                                            </button>
                                </form>

                                <button type="button" class="btn btn-secondary mobtn btn-md btn-block waves-effect text-center m-b-20 md-close">
                                    <h5>KEMBALI</h5>
                                </button>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- End Modal Ubah Password -->
        <div class="md-overlay"></div>
        <!-- Material tab card end -->

        <!-- Model PMB ONLINE (CARA PENDAFTARAN) -->
        <div class="modal fade" id="pmbOnline-caraPendaftaran" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="panel-heading bg-primary" style="margin-bottom: 0px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fa fa-times"></i></span>
                        </button>
                        <h5 style="text-align: center;"><i class="fa fa-map"></i> PETUNJUK CARA PENDAFTARAN ONLINE</h5>
                    </div>

                    <div id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="accordion-panel">
                            <div class="accordion-heading" role="tab" id="headingOne">
                                <h3 class="card-title accordion-title">
                                    <a class="accordion-msg collapsed" data-toggle="collapse" data-parent="#accordion" href="#pendaftaranFakultas" aria-expanded="false" aria-controls="pendaftaranFakultas">
                                        <i class="fa fa-caret-right"></i> PETUNJUK PENDAFTARAN UNTUK SELAIN FAKULTAS KEDOKTERAN
                                    </a>
                                </h3>
                            </div>
                            <div id="pendaftaranFakultas" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                <div class="accordion-content accordion-desc">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        1. REGISTRASI AKUN PMB ONLINE | (<span style="color: #F30606;"> PERIODE 20 JANUARI sd 24 APRIL 2021 </span>)
                                                        <br>
                                                        <br>
                                                        <a href="https://pmb.unpas.ac.id/wp-content/uploads/2021/02/Tata-Cara-Pendaftaran.pdf" type="button" class="btn btn-primary waves-effect waves-light jual-formulir" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'jual-formulir']);">DOWNLOAD PANDUAN PENDAFTARAN AKUN PMB ONLINE</a>
                                                    </th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        2. UJIAN SARINGAN MASUK (USM) UNPAS | (<span style="color: #F30606;"> 25 APRIL 2021 </span>)
                                                        <br>
                                                        <br>
                                                        <a href="https://pmb.unpas.ac.id/wp-content/uploads/2020/04/USM-ONLINE.pdf" type="button" class="btn btn-primary waves-effect waves-light jual-formulir" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'jual-formulir']);">DOWNLOAD PANDUAN USM ONLINE</a>
                                                    </th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        3. PENGUMUMAN KELULUSAN | (<span style="color: #F30606;"> 26 APRIL 2021 </span>)
                                                        <br>
                                                        <br>
                                                        <a href="https://pmb.unpas.ac.id/wp-content/uploads/2018/05/Cara-Cetak-Tanda-Lulus-Mahasiswa.pdf" type="button" class="btn btn-primary waves-effect waves-light jual-formulir" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'jual-formulir']);">DOWNLOAD PANDUAN CEK HASIL DAN CETAK TANDA LULUS</a>
                                                    </th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        4. REGISTRASI ULANG CALON MAHASISWA UNPAS | (<span style="color: #F30606;"> PERIODE 26 APRIL sd 3 JULI 2021 </span>)
                                                        <br>
                                                        <br>
                                                        <a href="https://pmb.unpas.ac.id/wp-content/uploads/2020/08/Tata-Cara-Upload-Dokumen-pendukung-Registrasi-Ulang.pdf" type="button" class="btn btn-primary waves-effect waves-light jual-formulir" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'jual-formulir']);">DOWNLOAD PANDUAN REGISTRASI ULANG</a>
                                                    </th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        5. REGISTRASI PKKMB UNPAS | (<span style="color: #F30606;"> PERIODE 26 APRIL sd 3 JULI 2021 </span>)
                                                        <br>
                                                        <br>
                                                        <a href="https://pmb.unpas.ac.id/wp-content/uploads/2020/09/Panduan-Update-Data-untuk-Pelaporan-PD-Dikti-3.pdf" type="button" class="btn btn-primary waves-effect waves-light jual-formulir" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'jual-formulir']);">DOWNLOAD PANDUAN UPDATE DATA UNTUK PELAPORAN PDDIKTI</a>
                                                    </th>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-panel">
                            <div class="accordion-heading" role="tab" id="headingTwo">
                                <h3 class="card-title accordion-title">
                                    <a class="accordion-msg collapsed" data-toggle="collapse" data-parent="#accordion" href="#pendaftaranFakultasKedokteran" aria-expanded="false" aria-controls="pendaftaranFakultasKedokteran">
                                        <i class="fa fa-caret-right"></i> PETUNJUK PENDAFTARAN UNTUK FAKULTAS KEDOKTERAN
                                    </a>
                                </h3>
                            </div>
                            <div id="pendaftaranFakultasKedokteran" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" style="">
                                <div class="accordion-content accordion-desc">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        1. REGISTRASI AKUN PMB ONLINE | (<span style="color: #F30606;"> PERIODE 20 JANUARI sd 24 APRIL 2021 </span>)
                                                        <br>
                                                        <br>
                                                        <a href="https://pmb.unpas.ac.id/wp-content/uploads/2021/02/Tata-Cara-Pendaftaran.pdf" type="button" class="btn btn-primary waves-effect waves-light jual-formulir" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'jual-formulir']);">DOWNLOAD PANDUAN PENDAFTARAN AKUN PMB ONLINE</a>
                                                    </th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        2. UJIAN TAMBAHAN KHUSUS FAKULTAS KEDOKTERAN | (<span style="color: #F30606;"> PERIODE 20 JANUARI sd 24 APRIL 2021 </span>)
                                                        <br>
                                                        <br>
                                                        <a href="https://pmb.unpas.ac.id/wp-content/uploads/2021/01/Ketentuan-Khusus-Kedokteran.jpg" target="_blank" type="button" class="btn btn-primary waves-effect waves-light jual-formulir" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'jual-formulir']);">KETENTUAN UJIAN TAMBAHAN KHUSUS FAKULTAS KEDOKTERAN</a>
                                                    </th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        3. UJIAN SARINGAN MASUK (USM) UNPAS | (<span style="color: #F30606;"> 25 APRIL 2021 </span>)
                                                        <br>
                                                        <br>
                                                        <a href="https://pmb.unpas.ac.id/wp-content/uploads/2020/04/USM-ONLINE.pdf" type="button" class="btn btn-primary waves-effect waves-light jual-formulir" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'jual-formulir']);">DOWNLOAD PANDUAN USM ONLINE</a>
                                                    </th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        3. PENGUMUMAN KELULUSAN | (<span style="color: #F30606;"> 26 APRIL 2021 </span>)
                                                        <br>
                                                        <br>
                                                        <a href="https://pmb.unpas.ac.id/wp-content/uploads/2018/05/Cara-Cetak-Tanda-Lulus-Mahasiswa.pdf" type="button" class="btn btn-primary waves-effect waves-light jual-formulir" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'jual-formulir']);">DOWNLOAD PANDUAN CEK HASIL DAN CETAK TANDA LULUS</a>
                                                    </th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        5. REGISTRASI ULANG CALON MAHASISWA UNPAS | (<span style="color: #F30606;"> PERIODE 26 APRIL sd 3 JULI 2021 </span>)
                                                        <br>
                                                        <br>
                                                        <a href="https://pmb.unpas.ac.id/wp-content/uploads/2020/08/Tata-Cara-Upload-Dokumen-pendukung-Registrasi-Ulang.pdf" type="button" class="btn btn-primary waves-effect waves-light jual-formulir" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'jual-formulir']);">DOWNLOAD PANDUAN REGISTRASI ULANG</a>
                                                    </th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        6. REGISTRASI PKKMB UNPAS | (<span style="color: #F30606;"> PERIODE 26 APRIL sd 3 JULI 2021 </span>)
                                                        <br>
                                                        <br>
                                                        <a href="https://pmb.unpas.ac.id/wp-content/uploads/2020/09/Panduan-Update-Data-untuk-Pelaporan-PD-Dikti-3.pdf" type="button" class="btn btn-primary waves-effect waves-light jual-formulir" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'jual-formulir']);">DOWNLOAD PANDUAN UPDATE DATA UNTUK PELAPORAN PDDIKTI</a>
                                                    </th>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal PMB ONLINE (CARA PENDAFTARAN) -->

        <!-- start Modal PMB ONLINE (PENDAFTARAN ONLINE) -->
        <div class="modal fade" id="pmbOnline-pendaftaranOnline" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="panel-heading bg-primary" style="margin-bottom: 0px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fa fa-times"></i></span>
                        </button>
                        <h5 style="text-align: center;"><i class="fa fa-pencil-square"></i> PENDAFTARAN ONLINE PMB UNPAS</h5>
                    </div>

                    <div class="modal-body">

                        <form>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Periode</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="20211 - PMB 2021/2022 Gelombang I" readonly="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Formulir</label>
                                <div class="col-sm-9">
                                    <select name="select" class="form-control">
                                        <option value="opt1">PILIH SALAH SATU</option>
                                        <option value="opt2">Type 2</option>
                                        <option value="opt3">Type 3</option>
                                        <option value="opt4">Type 4</option>
                                        <option value="opt5">Type 5</option>
                                        <option value="opt6">Type 6</option>
                                        <option value="opt7">Type 7</option>
                                        <option value="opt8">Type 8</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Masukkan Nama...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Aalamat</label>
                                <div class="col-sm-9">
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Masukkan Alamat.."></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nomor HP/Whatsapp</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Masukkan Nama...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Ibu Kandung...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kode Verifikasi</label>
                                <div class="col-sm-9">
                                    <!-- masukan captcha disini -->
                                    <!-- <input type="text" class="form-control" placeholder="Masukkan Nama Ibu Kandung..."> -->
                                </div>
                            </div>
                        </form>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">BATAL</button>
                            <button type="button" class="btn btn-primary waves-effect waves-light simpan-komponenUSM" data-dismiss="modal" aria-label="Close" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'simpan-komponenUSM']);">DAFTAR</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end Modal PMB ONLINE (PENDAFTARAN ONLINE) -->


    </div>
</div>

<!-- Main-body end -->
</div>
</div>
<?= $this->endSection(); ?>