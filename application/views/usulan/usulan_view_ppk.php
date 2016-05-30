<!-- Main Content -->
<?php
$this->load->view("info_header");
?>
<div class="app-container-slide">
    <div class="container-fluid">
        <div class="side-body padding-top"  style="padding-top:25px;">

            <div class="row  no-margin-bottom">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <span class="title">Pengelolaan Usulan</span>
                                </div>
                            </div>
                            <div class="card-body">
                              <table class="table table-stripped table-bordered table-hover">
                                <tr class="active">
                                    <th>No. Dokumen</th>
                                    <th>Tahun</th>
                                    <th>Nama Paket</th>
                                    <th>Jurusan</th>
                                    <th>Total Anggaran</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Last Update</th>
                                    <th>Aksi</th>
                                </tr>
                                <tr>
                                <td>Usulan-HPS</td>
                                    <td>2012</td>
                                    <td>
                                        <a href="<?=base_url()?>Usulan/DetailUsulanPPK/1">
                                           Paket A
                                        </a>
                                    </td>
                                    <td>Teknik Komputer & Informatika</td>
                                    <td><?=number_format('2000000','0',',','.')?></td>
                                    <td>20 May 2013</td>
                                    <td>30 Juni 2013</td>
                                    <td><a href="#" download class="btn btn-success"><i class="fa fa-download"></i> </a> | <a href="#" download class="btn btn-primary" data-toggle="modal" data-target="#modalLihatRevisi"><i class="fa fa-files-o"></i> Revisi </a></td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
<!-- Modal Show Revisi -->
<div class="modal fade modal-primary" id="modalLihatRevisi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Lihat Revisi Dokumen Usulan</h4>
            </div>
            <div class="modal-body">
              <div class="card">
                 <div class="card-body"  style="padding: 0px 20px !important;">

                    <div class="sub-title">Daftar Data Dokumen Usulan </div>
                    <div>
                        <b>Nomor Dokumen </b>  : - 
                        <table class="table table-bordered table-hovered table-stripped">
                            <tr class="active">
                                <th> Revisi Ke </th>
                                <th> Tanggal </th>
                                <th> PIC </th>
                                <th> Aksi </th>
                            </tr>
                            <tr>
                                <td> 1 </td>
                                <td> 20 May 2016 </td>
                                <td> Manajemen </td>
                                <td> <a href="#" target="_blank"><i class="fa fa-search"></i> Lihat</a> </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
    </div>
</div>
</div>
</div>
<!-- End Modal Add Pagu -->
<?php
$this->load->view('bottom');
?>
