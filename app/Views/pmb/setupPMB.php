<?= $this->extend('layouts/pmb_template'); ?>

<?= $this->section('content'); ?>
<div class="main-body">

    <div class="page-header">
        <div class="row align-items-end" style="margin-bottom: 20px; margin-top: 30px; margin-left: 7px;">
            <div class="col-lg-8">
                <div class="page-header-breadcrumb">
                    <h4>Setup PMB</h4>
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="\pmb"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Setup PMB</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <!-- Material tab card start -->
            <div class="card user-card">
                <div class="card-block">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs md-tabs tabs-pmb" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#hargaFormulir" role="tab"></i>Harga Formulir</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#periode" role="tab"></i>Periode</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#komponenUSM" role="tab"></i>Komponen USM</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#USMumum" role="tab"></i>USM Umum</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#USMprodi" role="tab"></i>USM Prodi</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#persyaratan" role="tab"></i>Persyaratan</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#statusAwal" role="tab"></i>Status Awal</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#jenisSekolah" role="tab"></i>Jenis Sekolah</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#asalSekolah" role="tab"></i>Asal Sekolah</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#perguruanTinggi" role="tab"></i>Perguruan Tinggi</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#pengawas" role="tab"></i>Pengawas</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#opmb" role="tab"></i>OPMB</a>
                            <div class="slide"></div>
                        </li>
                    </ul>

                    <div class="tab-content card-block">

                        <div class="tab-pane active" id="hargaFormulir" role="tabpanel" aria-expanded="false">
                            <div class="page-header-title">
                                <div class="d-inline" style="text-align: center;">
                                    <h4>UNIVERSITAS DEMO</h4>
                                </div>
                            </div>
                            <div class="dt-responsive table-responsive">
                                <div class="dt-buttons"><a class="btn dt-button waves-effect" data-toggle="modal" data-target="#tambahFormulirPMB" aria-controls="custom-btn" href="#"><span><i class="fa fa-plus-square"></i> TAMBAH FORMULIR</span></a></div>

                                <!-- Modal HARGA FORMULIR-->

                                <div class="modal fade" id="tambahFormulirPMB" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="panel-heading bg-primary" style="margin-bottom: 0px;">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                                </button>
                                                <h5 style="text-align: center;"><i class="fa fa-clipboard"></i> TAMBAH FORMULIR PMB</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row m-b-20">

                                                    <div class="col-sm-12 col-lg-6">

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Institusi</label>
                                                            <div class="col-sm-8">
                                                                <select name="select" class="form-control">
                                                                    <option value="opt1">Demo - Universitas Demo</option>
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
                                                            <label class="col-sm-4 col-form-label">Nama Formulir</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" placeholder="Masukkan Nama Formulir...">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Jumlah Pilihan</label>
                                                            <div class="col-sm-8">
                                                                <select name="select" class="form-control">
                                                                    <option value="opt1">Pilih Salah Satu</option>
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
                                                            <label class="col-sm-4 col-form-label">Harga Formulir</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" placeholder="Masukkan Harga Formulir...">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Status</label>
                                                            <div class="col-sm-8">
                                                                <div class="form-radio">
                                                                    <form>
                                                                        <div class="radio radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="radio" checked="checked">
                                                                                <i class="helper"></i>Aktif
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="radio">
                                                                                <i class="helper"></i>Tidak Aktif
                                                                            </label>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Keterangan</label>
                                                            <div class="col-sm-8">
                                                                <textarea rows="9" cols="5" class="form-control" placeholder="Masukkan Keterangan..."></textarea>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-12 col-lg-6">

                                                        <h4 class="sub-title">Setup Pilihan 1</h4>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Hanya Prodi</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" placeholder="Masukkan Prodi...">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Kecuali Prodi</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" placeholder="Masukkan Prodi...">
                                                            </div>
                                                        </div>

                                                        <h4 class="sub-title">Setup Pilihan 2</h4>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Hanya Prodi</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" placeholder="Masukkan Prodi...">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Kecuali Prodi</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" placeholder="Masukkan Prodi...">
                                                            </div>
                                                        </div>

                                                        <h4 class="sub-title">Setup Pilihan 3</h4>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Hanya Prodi</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" placeholder="Masukkan Prodi...">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Kecuali Prodi</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" placeholder="Masukkan Prodi...">
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">BATAL</button>
                                                <button type="button" class="btn btn-primary waves-effect waves-light simpan-data-formulir" data-dismiss="modal" aria-label="Close" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'simpan-data-formulir']);">SIMPAN</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ENDModal HARGA FORMULIR-->

                                <table id="button-select" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="button-select_info" style="text-align: center;">
                                    <thead>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                NO
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                Formulir
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                Harga
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                Jumlah Pilihan
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td style="white-space: nowrap; width: 1%;">1</td>
                                            <td>IPA</td>
                                            <td>Rp 300.000,00</td>
                                            <td style="white-space: nowrap; width: 1%;">3</td>
                                            <td> </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;">
                                                        <button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#tambahFormulirPMB" aria-controls="custom-btn" style="float: none;margin: 5px;">
                                                            <span class="icofont icofont-ui-edit"></span>
                                                        </button>

                                                        <button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light hapus-data-formulir" style="float: none;margin: 5px;" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'hapus-data-formulir']);">
                                                            <span class="icofont icofont-ui-delete"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td style="white-space: nowrap; width: 1%;">2</td>
                                            <td>IPS</td>
                                            <td>Rp 300.000,00</td>
                                            <td style="white-space: nowrap; width: 1%;">3</td>
                                            <td> </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;">
                                                        <button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#tambahFormulirPMB" aria-controls="custom-btn" style="float: none;margin: 5px;">
                                                            <span class="icofont icofont-ui-edit"></span>
                                                        </button>

                                                        <button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light hapus-data-formulir" style="float: none;margin: 5px;" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'hapus-data-formulir']);">
                                                            <span class="icofont icofont-ui-delete"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                NO
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                Formulir
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                Harga
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                Jumlah Pilihan
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </tfoot>
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

                        <div class="tab-pane" id="periode" role="tabpanel" aria-expanded="true">

                            <div class="dt-responsive table-responsive">
                                <div class="dt-buttons"><a class="btn dt-button waves-effect" data-toggle="modal" data-target="#tambahPeriode" aria-controls="custom-btn" href="#"><span><i class="fa fa-plus-square"></i> TAMBAH PERIODE</span></a></div>

                                <!-- Modal PERIODE-->

                                <div class="modal fade" id="tambahPeriode" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="panel-heading bg-primary" style="margin-bottom: 0px;">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                                </button>
                                                <h5 style="text-align: center;"><i class="fa fa-clipboard"></i> TAMBAH PERIODE</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row m-b-20">

                                                    <div class="col-sm-12 col-lg-6">

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Kode Periode</label>
                                                            <div class="col-sm-4">
                                                                <input type="text" class="form-control" placeholder="20213" readonly="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Nama Periode</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" placeholder="Masukkan Nama Periode...">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Status</label>
                                                            <div class="col-sm-8">
                                                                <div class="form-radio">
                                                                    <form>
                                                                        <div class="radio radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="radio" checked="checked">
                                                                                <i class="helper"></i>Aktif
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="radio">
                                                                                <i class="helper"></i>Tidak Aktif
                                                                            </label>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <h4 class="sub-title">PENDAFTARAN</h4>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Tgl Mulai</label>
                                                            <div class="col-sm-8">
                                                                <input type="date" name="birthdate" class="form-control" value="Bln/Tgl/Thn">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Tgl Selesai</label>
                                                            <div class="col-sm-8">
                                                                <input type="date" name="birthdate" class="form-control" value="Bln/Tgl/Thn">
                                                            </div>
                                                        </div>

                                                        <h4 class="sub-title">UJIAN SARINGAN MASUK</h4>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Tgl Mulai</label>
                                                            <div class="col-sm-8">
                                                                <input type="date" name="birthdate" class="form-control" value="Bln/Tgl/Thn">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Tgl Selesai</label>
                                                            <div class="col-sm-8">
                                                                <input type="date" name="birthdate" class="form-control" value="Bln/Tgl/Thn">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-lg-6">

                                                        <h4 class="sub-title">PENGUMUMAN KELULUSAN</h4>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Tgl Mulai</label>
                                                            <div class="col-sm-8">
                                                                <input type="date" name="birthdate" class="form-control" value="Bln/Tgl/Thn">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Tgl Selesai</label>
                                                            <div class="col-sm-8">
                                                                <input type="date" name="birthdate" class="form-control" value="Bln/Tgl/Thn">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Nomor Pengumuman</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" placeholder="Masukkan Nomor Pengumuman...">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Nomor Tanda Lulus</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" placeholder="Masukkan Nomor Tanda Lulus...">
                                                            </div>
                                                        </div>

                                                        <h4 class="sub-title">PEMBAYARAN DAN PENDAFTARAN ULANG</h4>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Tgl Mulai</label>
                                                            <div class="col-sm-9">
                                                                <input type="date" name="birthdate" class="form-control" value="Bln/Tgl/Thn">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Tgl Selesai</label>
                                                            <div class="col-sm-9">
                                                                <input type="date" name="birthdate" class="form-control" value="Bln/Tgl/Thn">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-3">Terapkan Pada Prodi</label>
                                                            <div class="col-sm-9">
                                                                <td class="ul">
                                                                    <input type="checkbox" name="ProdiID[]" value="301"> 301 - Teknik Kimia
                                                                    <br>
                                                                    <input type="checkbox" name="ProdiID[]" value="302"> 302 - Teknologi Pertambangan
                                                                    <br>
                                                                    <input type="checkbox" name="ProdiID[]" value="303"> 303 - Teknik Sipil
                                                                    <br>
                                                                    <input type="checkbox" name="ProdiID[]" value="304"> 304 - Teknik Informatika
                                                                    <br>
                                                                    <input type="checkbox" name="ProdiID[]" value="305"> 305 - Teknik Lingkungan
                                                                    <br>
                                                                    <input type="checkbox" name="ProdiID[]" value="306"> 306 - Perencanaan Wilayah dan Kota
                                                                    <br>
                                                                    <input type="checkbox" name="ProdiID[]" value="444" checked=""> 444 - Prodi Tes
                                                                    <br>
                                                                </td>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">BATAL</button>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light simpan-data-periode" data-dismiss="modal" aria-label="Close" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'simpan-data-periode']);">SIMPAN</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Modal PERIODE-->
                                <table id="button-select" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="button-select_info" style="text-align: center;">
                                    <thead>
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
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td style="white-space: nowrap; width: 1%;">1</td>
                                            <td>20213</td>
                                            <td>Testing New</td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;">
                                                        <button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#tambahPeriode" aria-controls="custom-btn" style="float: none;margin: 5px;">
                                                            <span class="icofont icofont-ui-edit"></span>
                                                        </button>

                                                        <button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light hapus-data-periode" style="float: none;margin: 5px;" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'hapus-data-periode']);">
                                                            <span class="icofont icofont-ui-delete"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td style="white-space: nowrap; width: 1%;">1</td>
                                            <td>20212</td>
                                            <td>Tes PMB</td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
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
                                    </tfoot>
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

                        <div class="tab-pane" id="komponenUSM" role="tabpanel">

                            <div class="dt-responsive table-responsive">
                                <div class="dt-buttons"><a class="btn dt-button waves-effect" data-toggle="modal" data-target="#modalUSM" aria-controls="custom-btn" href="#"><span><i class="fa fa-plus-square"></i> TAMBAH KOMPONEN USM</span></a></div>


                                <!-- Modal KOMPONEN USM-->

                                <div class="modal fade" id="modalUSM" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="panel-heading bg-primary" style="margin-bottom: 0px;">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                                </button>
                                                <h5 style="text-align: center;"><i class="fa fa-clipboard"></i> TAMBAH KOMPONEN USM</h5>
                                            </div>
                                            <div class="modal-body">

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Kode Test</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" placeholder="Masukkan Nama Periode...">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" placeholder="Masukkan Nama Periode...">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Keterangan</label>
                                                    <div class="col-sm-10">
                                                        <textarea rows="9" cols="5" class="form-control" placeholder="Masukkan Keterangan..."></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Status</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-radio">
                                                            <form>
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" checked="checked">
                                                                        <i class="helper"></i>Aktif
                                                                    </label>
                                                                </div>
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio">
                                                                        <i class="helper"></i>Tidak Aktif
                                                                    </label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">BATAL</button>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light simpan-komponenUSM" data-dismiss="modal" aria-label="Close" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'simpan-komponenUSM']);">SIMPAN</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL KOMPONEN USM -->
                                <table id="button-select" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="button-select_info" style="text-align: center;">
                                    <thead>
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
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td style="white-space: nowrap; width: 1%;">1</td>
                                            <td>20213</td>
                                            <td>Testing New</td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;">
                                                        <button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modalUSM" aria-controls="custom-btn" style="float: none;margin: 5px;">
                                                            <span class="icofont icofont-ui-edit"></span>
                                                        </button>

                                                        <button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light hapus-komponenUSM" style="float: none;margin: 5px;" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'hapus-komponenUSM']);">
                                                            <span class="icofont icofont-ui-delete"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td style="white-space: nowrap; width: 1%;">1</td>
                                            <td>20212</td>
                                            <td>Tes PMB</td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
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
                                    </tfoot>
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

                        <div class="tab-pane" id="USMumum" role="tabpanel">

                            <div class="dt-responsive table-responsive">
                                <div class="dt-buttons"><a class="dt-button" tabindex="0" aria-controls="custom-btn" href="#"><span><i class="fa fa-plus-square"></i> TAMBAH USM</span></a></div>
                                <table id="button-select" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="button-select_info" style="text-align: center;">
                                    <thead>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                JENIS USM
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NAMA USM
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td>ANG</td>
                                            <td>Analogi</td>
                                            <td> </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>BIO-KED</td>
                                            <td>Biologi Kedokteran</td>
                                            <td> </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                JENIS USM
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NAMA USM
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </tfoot>
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

                        <div class="tab-pane" id="USMprodi" role="tabpanel">

                            <div class="dt-responsive table-responsive">
                                <div id="add-row-table_filter" class="dataTables_filter">
                                    <label>
                                        <input type="search" class="form-control input-sm" placeholder="Masukkan Periode..." aria-controls="add-row-table" style="height: 40px;">
                                    </label>
                                    <a class="btn btn-primary" tabindex="0" aria-controls="keyboard-btn" href="#" style="margin-top: 13px;"><span><i class="fa fa-search"></i>TAMPILKAN PERIODE</span></a>
                                </div>
                                <table id="button-select" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="button-select_info" style="text-align: center;">
                                    <thead>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                KODE
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NAMA PERIODE
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td></td>
                                            <td></td>
                                            <td> </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- <tr role="row" class="even">
                                                                                               <td></td>
                                                                                                <td></td>
                                                                                                <td> </td>
                                                                                                <td style="white-space: nowrap; width: 1%;">
                                                                                                    <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                                                                       <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                                                                   </div>
                                                                                               </td>
                                                                                           </tr> -->
                                    </tbody>
                                    <tfoot>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                KODE
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NAMA PERIODE
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </tfoot>
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

                        <div class="tab-pane" id="persyaratan" role="tabpanel">

                            <div class="dt-responsive table-responsive">

                                <div id="add-row-table_filter" class="dataTables_filter" style="float: left;">
                                    <a class="dt-button" tabindex="0" aria-controls="custom-btn" href="#"><span><i class="fa fa-plus-square"></i> TAMBAH PERSYARATAN</span></a>
                                </div>

                                <div id="add-row-table_filter" class="dataTables_filter" style="margin-bottom: 5px; float: right;">
                                    <label>
                                        <h5>Institusi : </h5>
                                    </label>
                                    <label style="height: 40px;">
                                        <select name="select" class="form-control form-control-primary">
                                            <option value="opt1">Pilih Institusi</option>
                                            <option value="opt2">Demo - Universitas Demo</option>
                                            <!-- <option value="opt3">Type 3</option>
                                                                                                <option value="opt4">Type 4</option>
                                                                                                <option value="opt5">Type 5</option>
                                                                                                <option value="opt6">Type 6</option>
                                                                                                <option value="opt7">Type 7</option>
                                                                                                <option value="opt8">Type 8</option> -->
                                        </select>
                                    </label>
                                    <a class="btn btn-primary" tabindex="0" aria-controls="keyboard-btn" href="#" style="height: 37px; margin-top: 14px;"><span><i class="fa fa-search"></i>TAMPILKAN</span></a>
                                </div>

                                <table id="button-select" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="button-select_info" style="text-align: center;">
                                    <thead>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                ID
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                JENIS PERSYARATAN
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                STATUS MAHASISWA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                PROGRAM STUDI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td>BP</td>
                                            <td>Bukti Pembayaran Bank</td>
                                            <td style="white-space: nowrap; width: 1%;"> B </td>
                                            <td>.301.302.303.</td>
                                            <td> </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>BP</td>
                                            <td>Bukti Pembayaran Bank</td>
                                            <td style="white-space: nowrap; width: 1%;"> B </td>
                                            <td>.301.302.303.</td>
                                            <td> </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                ID
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                JENIS PERSYARATAN
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                STATUS MAHASISWA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                PROGRAM STUDI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </tfoot>
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

                        <div class="tab-pane" id="statusAwal" role="tabpanel">

                            <div class="dt-responsive table-responsive">
                                <div class="dt-buttons"><a class="dt-button" tabindex="0" aria-controls="custom-btn" href="#"><span><i class="fa fa-plus-square"></i> TAMBAH STATUS AWAL MAHASISWA</span></a></div>
                                <table id="button-select" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="button-select_info" style="text-align: center;">
                                    <thead>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                ID
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                JENIS STATUS
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                BELI FORMULIR
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                JALUR KHUSUS
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TANPA TEST
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td>A</td>
                                            <td>Asing</td>
                                            <td> <i class="fa fa-check" style="color: #06E763;"></i> </td>
                                            <td> <i class="fa fa-times" style="color: #F30606;"></i> </td>
                                            <td> <i class="fa fa-times" style="color: #F30606;"></i> </td>
                                            <td> <i class="fa fa-check" style="color: #06E763;"></i> </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>B</td>
                                            <td>Baru</td>
                                            <td style="white-space: nowrap; width: 1%;"> <i class="fa fa-check" style="color: #06E763;"></i> </td>
                                            <td style="white-space: nowrap; width: 1%;"> <i class="fa fa-times" style="color: #F30606;"></i> </td>
                                            <td style="white-space: nowrap; width: 1%;"> <i class="fa fa-times" style="color: #F30606;"></i> </td>
                                            <td style="white-space: nowrap; width: 1%;"> <i class="fa fa-check" style="color: #06E763;"></i> </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                ID
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                JENIS STATUS
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                BELI FORMULIR
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                JALUR KHUSUS
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TANPA TEST
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>

                                <ul class="pagination" style="float: right;">
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

                            <div class="col-md-12 col-lg-12">
                                <h6 class="sub-title" style="color: #F30606;">Catatan!</h6>
                                <ul class="basic-list list-icons">
                                    <li>
                                        <i class="icofont icofont-warning text-primary p-absolute text-center d-block f-30"></i>
                                        <h6>Pembelian Formulir</h6>
                                        <p>Jika harus Beli Formulir, maka akan dilakukan pemeriksaan terhadap bukti setoran dari pembelian formulir.</p>
                                    </li>
                                    <li>
                                        <h6>Jalur Khusus</h6>
                                        <i class="icofont icofont-warning text-primary p-absolute text-center d-block f-30"></i>
                                        <p>Hanya dapat didaftarkan oleh Kepala PMB.</p>
                                    </li>
                                    <li>
                                        <h6>Tanpa Test</h6>
                                        <i class="icofont icofont-warning text-primary p-absolute text-center d-block f-30"></i>
                                        <p>Calon mahasiswa tidak perlu mengikuti test/USM.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane" id="jenisSekolah" role="tabpanel">

                            <div class="dt-responsive table-responsive">
                                <div class="dt-buttons"><a class="dt-button" tabindex="0" aria-controls="custom-btn" href="#"><span><i class="fa fa-plus-square"></i> TAMBAH JENIS SEKOLAH</span></a></div>
                                <table id="button-select" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="button-select_info" style="text-align: center;">
                                    <thead>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                KODE SEKOLAH
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NAMA SEKOLAH
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                GROUP
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td>Negeri</td>
                                            <td>SMA Negeri 1 Bandung</td>
                                            <td> <i class="fa fa-check" style="color: #06E763;"></i> </td>
                                            <td> <i class="fa fa-times" style="color: #F30606;"></i> </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>Negeri</td>
                                            <td>SMA Negeri 1 Bandung</td>
                                            <td> <i class="fa fa-check" style="color: #06E763;"></i> </td>
                                            <td> <i class="fa fa-times" style="color: #F30606;"></i> </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                KODE SEKOLAH
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NAMA SEKOLAH
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                GROUP
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </tfoot>
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

                        <div class="tab-pane" id="asalSekolah" role="tabpanel">

                            <div class="dt-responsive table-responsive">
                                <div id="add-row-table_filter" class="dataTables_filter">

                                    <h5 style="margin-bottom: 5px;">CARI DATA SEKOLAH : </h5>
                                    <label>
                                        <input type="search" class="form-control input-sm" placeholder="Masukkan Kode Sekolah.." aria-controls="add-row-table" style="height: 40px;">
                                    </label>

                                    <label>
                                        <input type="search" class="form-control input-sm" placeholder="Masukkan Nama Sekolah.." aria-controls="add-row-table" style="height: 40px;">
                                    </label>

                                    <label>
                                        <input type="search" class="form-control input-sm" placeholder="Filter Kota.." aria-controls="add-row-table" style="height: 40px;">
                                    </label>
                                    <a class="btn btn-primary" tabindex="0" aria-controls="keyboard-btn" href="#" style="margin-top: 15px;"><span><i class="fa fa-search"></i>CARI</span></a>
                                </div>

                                <div style="float: left; margin-top: 3px;"><a class="dt-button" tabindex="0" aria-controls="custom-btn" href="#"><span><i class="fa fa-plus-square"></i> TAMBAH DATA SEKOLAH</span></a>
                                </div>

                                <table id="button-select" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="button-select_info" style="text-align: center;">
                                    <thead>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                NO
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                KODE SEKOLAH
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NAMA SEKOLAH
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                JENIS SEKOLAH
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                KOTA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                WEBSITE SEKOLAH
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TELEPHONE
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td>2018301</td>
                                            <td>SMA Negeri 1 Bandung</td>
                                            <td>Negeri</td>
                                            <td>Bandung</td>
                                            <td>www.smansabandung.id</td>
                                            <td>021 5565</td>
                                            <td> </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- <tr role="row" class="even">
                                                                                               <td></td>
                                                                                                <td></td>
                                                                                                <td> </td>
                                                                                                <td style="white-space: nowrap; width: 1%;">
                                                                                                    <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                                                                       <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                                                                   </div>
                                                                                               </td>
                                                                                           </tr> -->
                                    </tbody>
                                    <tfoot>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                NO
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                KODE SEKOLAH
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NAMA SEKOLAH
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                JENIS SEKOLAH
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                KOTA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                WEBSITE SEKOLAH
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TELEPHONE
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </tfoot>
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

                        <div class="tab-pane" id="perguruanTinggi" role="tabpanel">

                            <div class="dt-responsive table-responsive">
                                <div id="add-row-table_filter" class="dataTables_filter">

                                    <h5 style="margin-bottom: 5px;">CARI DATA PERGURUAN TINGGI : </h5>
                                    <label>
                                        <input type="search" class="form-control input-sm" placeholder="Masukkan Kode PT.." aria-controls="add-row-table" style="height: 40px;">
                                    </label>

                                    <label>
                                        <input type="search" class="form-control input-sm" placeholder="Masukkan Nama PT.." aria-controls="add-row-table" style="height: 40px;">
                                    </label>

                                    <label>
                                        <input type="search" class="form-control input-sm" placeholder="Filter Kota.." aria-controls="add-row-table" style="height: 40px;">
                                    </label>
                                    <a class="btn btn-primary" tabindex="0" aria-controls="keyboard-btn" href="#" style="margin-top: 15px;"><span><i class="fa fa-search"></i>CARI</span></a>
                                </div>

                                <div style="float: left; margin-top: 3px;"><a class="dt-button" tabindex="0" aria-controls="custom-btn" href="#"><span><i class="fa fa-plus-square"></i> TAMBAH DATA PERGURUAN TINGGI</span></a>
                                </div>

                                <table id="button-select" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="button-select_info" style="text-align: center;">
                                    <thead>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                NO
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                KODE PERGURUAN TINGGI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NAMA PERGURUAN TINGGI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                SINGKATAN
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                JENIS PERGURUAN TINGGI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                KOTA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                WEBSITE PERGURUAN TINGGI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TELEPHONE
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td>2018301</td>
                                            <td>SMA Negeri 1 Bandung</td>
                                            <td> </td>
                                            <td>Negeri</td>
                                            <td>Bandung</td>
                                            <td>www.smansabandung.id</td>
                                            <td>021 5565</td>
                                            <td> </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- <tr role="row" class="even">
                                                                                               <td></td>
                                                                                                <td></td>
                                                                                                <td> </td>
                                                                                                <td style="white-space: nowrap; width: 1%;">
                                                                                                    <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                                                                       <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                                                                   </div>
                                                                                               </td>
                                                                                           </tr> -->
                                    </tbody>
                                    <tfoot>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                NO
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                KODE PERGURUAN TINGGI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NAMA PERGURUAN TINGGI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                SINGKATAN
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                JENIS PERGURUAN TINGGI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                KOTA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                WEBSITE PERGURUAN TINGGI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TELEPHONE
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </tfoot>
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

                        <div class="tab-pane" id="pengawas" role="tabpanel">

                            <div class="dt-responsive table-responsive">
                                <div class="dt-buttons"><a class="dt-button" tabindex="0" aria-controls="custom-btn" href="#"><span><i class="fa fa-plus-square"></i> TAMBAH DATA PENGAWAS</span></a></div>
                                <table id="button-select" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="button-select_info" style="text-align: center;">
                                    <thead>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                PERIODE
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NAMA USM
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TGL MULAI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TGL SELESAI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                KAMPUS
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                RUANGAN
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                PENGAWAS 1
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                PENGAWAS 1
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td style="white-space: nowrap; width: 1%;"></td>
                                            <td></td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td style="white-space: nowrap; width: 1%;"></td>
                                            <td></td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                01-02-2021 sd 01-02-2021
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                PERIODE
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NAMA USM
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TGL MULAI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TGL SELESAI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                KAMPUS
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                RUANGAN
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                PENGAWAS 1
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                PENGAWAS 1
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </tfoot>
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

                        <div class="tab-pane" id="opmb" role="tabpanel">

                            <div class="dt-responsive table-responsive">
                                <div class="dt-buttons"><a class="dt-button" tabindex="0" aria-controls="custom-btn" href="#"><span><i class="fa fa-plus-square"></i> TAMBAH DATA OPMB</span></a></div>
                                <table id="button-select" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="button-select_info" style="text-align: center;">
                                    <thead>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                NO
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TAHUN
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NAMA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TEMPAT
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NAMA FORMULIR
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                JUMLAH MAHASISWA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TGL MULAI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                JAM MULAI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TGL SELESAI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                JAM SELESSAI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td style="white-space: nowrap; width: 1%;"></td>
                                            <td></td>
                                            <td style="white-space: nowrap; width: 1%;">

                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">

                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td style="white-space: nowrap; width: 1%;"></td>
                                            <td></td>
                                            <td style="white-space: nowrap; width: 1%;">

                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">

                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;" align="center">
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="button-select" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px; text-align: center;">
                                                NO
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TAHUN
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NAMA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TEMPAT
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NAMA FORMULIR
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                JUMLAH MAHASISWA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TGL MULAI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                JAM MULAI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                TGL SELESAI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                JAM SELESSAI
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                NA
                                            </th>
                                            <th tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px; text-align: center;">
                                                AKSI
                                            </th>
                                        </tr>
                                    </tfoot>
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
                    <!-- Row end -->

                </div>
                <!-- Row end -->
            </div>
        </div>


        <div class="md-modal md-effect-1" id="resetPasswordPMB">
            <div class="md-content">

                <h3 class="text-center" style="background: #01a9ac;"><i class="fa fa-refresh"></i> UBAH PASSWORD</h3>

                <div class="row m-b-20">

                    <div class="col-sm-12 col-lg-4">
                        <img class="img-fluid logoUnpas" src="..\..\foundations\adminity\assets\images\Logo-unpas.png" alt="round-img">
                        <h4 class="text-center" style="margin-top: 12px; margin-bottom: 15px;">PMB UNPAS</h4>
                    </div>

                    <div class="col-sm-12 col-lg-8">

                        <div class="form-group form-primary">
                            <input type="password" name="password" class="form-control" required="" id="inputPasswordLama" placeholder="Masukkan Password Lama...">
                            <span class="form-bar"></span>
                        </div>

                        <div class="form-group form-primary">
                            <input type="password" name="password" class="form-control" required="" id="inputPasswordBaru" placeholder="Masukkan Password Baru...">
                            <span class="form-bar"></span>
                        </div>

                        <div class="form-group form-primary">
                            <input type="password" name="password" class="form-control" required="" id="konfirmasiPassword" placeholder="Konfirmasi Password Baru...">
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

                                <button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20 ubah-password" data-dismiss="md-modal" aria-label="Close" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'ubah-password']);">
                                    <h5>UBAH PASSWORD</h5>
                                </button>

                                <button type="button" class="btn btn-secondary mobtn btn-md btn-block waves-effect text-center m-b-20 md-close">
                                    <h5>KEMBALI</h5>
                                </button>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="md-overlay"></div>

        <!-- Material tab card end -->

    </div>
</div>
<?= $this->endSection(); ?>