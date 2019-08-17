<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Data Pendidikan</h2>
            </div>
            <!-- Content -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Penduduk Berdasarkan Usia Sekolah
                                <!-- <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> -->
                            </h2>
                            <hr>
                            <form method="post" action="">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="keyword">
                                                    <option value="">Tahun</option>
                                                    <?php foreach($tahun as $t):?>
                                                        <option value="<?= $t['tahun'];?>"><?= $t['tahun'];?></option>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="body table-responsive">
                            <h4> Data Penduduk Berdasarkan Usia di Tahun <?= $sort;?> </h4>   
                        <hr>
                        <?php if($this->session->flashdata('pbu')):?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Data <strong>berhasil</strong> <?= $this->session->flashdata('pbu');?>
                            </div>
                        <?php endif;?>
                        <?php if($this->session->flashdata('pbu1')):?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <?= $this->session->flashdata('pbu1');?>
                            </div>
                        <?php endif;?>
                        <?php if(validation_errors()):?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors();?>
                        </div>
                        <?php endif;?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                </tr>
                                <tr>
                                    <th width="3%">No</th>
                                    <th colspan="7" width="50%">Nama</th>
                                    <th width="10%">Nilai</th>
                                    <th width="10%">Satuan</th>
                                    <th width="20%">Sumber Data</th>
                                    <th width="7%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td align="center">1</td>
                                        <td colspan="11"><b>I. Penduduk Berdasarkan Usia Sekolah*</b></td>
                                    </tr>
                                    <tr>
                                        <td align="center">2</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">1. Jumlah Penduduk Usia 0-6 Tahun** </td>
                                        <td align="right"><b><?= $usia0_6;?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <td><a href="" class="btn btn-default" data-toggle="modal" data-target="#usia0_6"><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td align="center">3</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">2. Jumlah Penduduk Usia 7-12 Tahun** </td>
                                        <td align="right"><b><?= $usia7_12;?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <td><a href="" class="btn btn-default" data-toggle="modal" data-target="#usia7_12"><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td align="center">4</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">3. Jumlah Penduduk Usia 13-15 Tahun** </td>
                                        <td align="right"><b><?= $usia13_15;?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <td><a href="" class="btn btn-default" data-toggle="modal" data-target="#usia13_15"><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td align="center">5</td>
                                        <td width="1%">&nbsp;</td>
                                        <td colspan="6">4. Jumlah Penduduk Usia 16-18 Tahun** </td>
                                        <td align="right"><b><?= $usia16_18;?></b></td>
                                        <td>Orang</td>
                                        <td>Dinas Pendidikan Daerah</td>
                                        <td><a href="" class="btn btn-default" data-toggle="modal" data-target="#usia16_18"><i class="fa fa-eye"></i></a></td>
                                    </tr>               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</section>
<!-- usia0_6 -->
<div id="usia0_6" class="modal fade" tabindex="-1" data-focus-on="input:first">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Jumlah Penduduk Usia 0-6 Tahun**
                                    <!-- <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> -->
                                </h2>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kecamatan</th>
                                            <th><b>Jumlah</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        <?php foreach($pendidikan0_6 as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['nama_kecamatan'];?></td>
                                            <td><b><?= $p['jumlah'];?></b></td>
                                        </tr>
                                        <?php $i++;?>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>

<!-- usia7_12 -->
<div id="usia7_12" class="modal fade" tabindex="-1" data-focus-on="input:first">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Jumlah Penduduk Usia 7-12 Tahun**
                                    <!-- <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> -->
                                </h2>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kecamatan</th>
                                            <th><b>Jumlah</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        <?php foreach($pendidikan7_12 as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['nama_kecamatan'];?></td>
                                            <td><b><?= $p['jumlah'];?></b></td>
                                        </tr>
                                        <?php $i++;?>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>

<!-- usia13_15 -->
<div id="usia13_15" class="modal fade" tabindex="-1" data-focus-on="input:first">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Jumlah Penduduk Usia 13-15 Tahun**
                                    <!-- <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> -->
                                </h2>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kecamatan</th>
                                            <th><b>Jumlah</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        <?php foreach($pendidikan13_15 as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['nama_kecamatan'];?></td>
                                            <td><b><?= $p['jumlah'];?></b></td>
                                        </tr>
                                        <?php $i++;?>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>

<!-- usia16_18 -->
<div id="usia16_18" class="modal fade" tabindex="-1" data-focus-on="input:first">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Jumlah Penduduk Usia 13-15 Tahun**
                                    <!-- <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> -->
                                </h2>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kecamatan</th>
                                            <th><b>Jumlah</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        <?php foreach($pendidikan16_18 as $p):?>
                                        <tr>
                                            <th scope="row"><?= $i;?></th>
                                            <td><?= $p['nama_kecamatan'];?></td>
                                            <td><b><?= $p['jumlah'];?></b></td>
                                        </tr>
                                        <?php $i++;?>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>