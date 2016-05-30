<!-- Main Content -->
<?php
//$this->load->view("info_header");
?>
<div class="app-container-slide">
    <div class="container-fluid">
        <div class="side-body padding-top"  style="padding-top:90px;">

            <div class="row  no-margin-bottom">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <span class="title">Manage Penetapan Kontrak</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="row">
                                            <span class="col-md-3" style="margin-bottom:5px"><b>No. Dokumen : </b></span>
                                            <span class="col-md-3" style="margin-bottom:5px"> HPS-<?=$paket['ID_PAKET']?>/<?=$paket['TAHUN_ANGGARAN']?></span>

                                            <span class="col-md-3" style="margin-bottom:5px"><b> Total Anggaran :</b></span>
                                            <span class="col-md-3" style="margin-bottom:5px"> <?=$paket['TOTAL_ANGGARAN']?></span>
                                        </div>

                                        <div class="row">
                                            <span class="col-md-3" style="margin-bottom:5px"><b>Tahun : </b></span>
                                            <span class="col-md-3" style="margin-bottom:5px"> <?=$paket['TAHUN_ANGGARAN']?></span>

                                            <span class="col-md-3" style="margin-bottom:5px"><b> Tanggal Dibuat :</b></span>
                                            <span class="col-md-3" style="margin-bottom:5px"> <?=$paket['TANGGAL_DIBUAT']?></span>
                                        </div>

                                        <div class="row">
                                            <span class="col-md-3" style="margin-bottom:5px"><b>Nama Paket  : </b></span>
                                            <span class="col-md-3" style="margin-bottom:5px"> <?=$paket['NAMA_PAKET']?></span>

                                            <span class="col-md-3" style="margin-bottom:5px"><b> Last Update :</b></span>
                                            <span class="col-md-3" style="margin-bottom:5px"> <?=$paket['LAST_UPDATE']?></span>
                                        </div>

                                    </div>

                                </div>
                                <button type="button" class="btn btn-primary btn-info" data-toggle="modal" data-target="#modalAddKontrak">
                                    <i class="fa fa-plus-square"></i>&nbsp; Tambah Dokumen Kontrak
                                </button>
                                <table class="table table-stripped table-bordered table-hover">
                                    <tr class="active">
                                        <th>No</th>
                                        <th>Keterangan</th>
                                        <th>Dokumen</th>
                                        <th>Di Unggah Oleh</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <?php 
                                    $no=1;
                                    foreach($kontrak as $p){
                                        ?>
                                        <tr>
                                            <td><?=$no;$no++;?></td>
                                            <td><?=$p['KETERANGAN']?></td>
                                            <td>
                                                <?php if(!empty($p['FILE'])){?>
                                                <a href="<?=base_url()?>assets/kontrak/<?=$p['FILE']?>" target="_blank"><i class="fa fa-file-text"></i> Lihat Dokumen </a>
                                                <?php } ?>
                                            </td>
                                            <td><?=$p['NAMA']?></td>
                                            <td>
                                                <a class="btn btn-warning" onclick="editKontrak('<?= $p['KETERANGAN'] ?>','<?= $p['ID_KONTRAK'] ?>')"
                                                    data-toggle="modal" data-target="#modalEditKontrak"><i class="fa fa-pencil"></i> Edit</a> &nbsp; 
                                                    <a href="#" class="btn btn-danger" onclick="deleteKontrak('<?= $p['ID_KONTRAK'] ?>');"><i class="fa fa-remove"> Hapus</a></td>
                                                </tr>
                                                <?php 
                                            }
                                            ?>
                                        </table>
                                        <a href="<?=site_url()?>Kontrak" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Kembali </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade modal-info" id="modalAddKontrak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Tambah Dokumen Kontrak</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="card">
                                       <div class="card-body"  style="padding: 0px 20px !important;">
                                        <form enctype="multipart/form-data" action="<?=base_url()?>Kontrak/saveKontrak" method="POST">
                                            <input type="hidden" name="id_paket" value="<?=$paket['ID_PAKET']?>">
                                            <div class="sub-title">Dokumen Kontrak</div>
                                            <div>
                                                <input type="file" name="fupload" class="form-control">
                                            </div>
                                            <div class="sub-title">Keterangan</div>
                                            <div>
                                                <textarea class="form-control" name="keterangan" placeholder="Masukan Keterangan Dokumen"></textarea>
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
                <div class="modal fade modal-warning" id="modalEditKontrak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit Dokumen Kontrak</h4>
                            </div>
                            <div class="modal-body">
                              <div class="card">
                               <div class="card-body"  style="padding: 0px 20px !important;">
                                <form enctype="multipart/form-data" action="<?=base_url()?>Kontrak/updateKontrak" method="POST">
                                    <input id="frmId" type="hidden" name="id_kontrak" value="">
                                    <div class="sub-title">Dokumen Kontrak</div>
                                    <div>
                                        <input type="file" name="fupload" class="form-control">
                                    </div>
                                    <div class="sub-title">Keterangan</div>
                                    <div>
                                        <textarea class="form-control" id="frmKeterangan" name="keterangan" placeholder="Masukan Keterangan Dokumen"></textarea>
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
        <!-- modal del Kontrak -->
        <div class="modal fade modal-danger" id="modalDelKontrak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-exclamation-triangle"></i> Hapus Data Kontrak</h4>
                    </div>
                    <div class="modal-body">
                        <form enctype="multipart/form-data" action="<?=base_url()?>Kontrak/deleteKontrak" method="POST">
                            <input id="frmIddel" type="hidden" name="id_kontrak" value="">
                            <h5>Anda Yakin Menghapus Data Ini ?</h5>


                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Ya</button>
                        </form>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Del Pagu -->
    </div>
</div>
</div>

<script type="text/javascript">
    function editKontrak(a,b) {
      document.getElementById('frmKeterangan').value=a;
      document.getElementById('frmId').value=b;
  }
  function deleteKontrak(a){
      document.getElementById('frmIddel').value=a;
      jQuery('#modalDelKontrak').modal('show', {backdrop: 'static'});

  }

</script>
