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
                                    <span class="title">Manage Penetapan Kontrak</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        No. Dokumen : HPS-<?=$paket['ID_PAKET']?>/<?=$paket['TAHUN_ANGGARAN']?>
                                        <br>
                                        Tahun : <?=$paket['TAHUN_ANGGARAN']?>
                                        <br>
                                        Nama Paket : <?=$paket['NAMA_PAKET']?>
                                    </div>
                                    <div class="col-md-3">
                                        Total Anggaran : <?=$paket['TOTAL_ANGGARAN']?>
                                        <br>
                                        Tanggal Dibuat : <?=$paket['TANGGAL_DIBUAT']?>
                                        <br>
                                        Last Update : <?=$paket['LAST_UPDATE']?>
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
                                                <a href="<?=base_url()?>assets/kontrak/<?=$p['FILE']?>">[lambang dokumen]</a>
                                                <?php } ?>
                                            </td>
                                            <td><?=$p['NAMA']?></td>
                                            <td>
                                                <a class="btn btn-warning" onclick="editKontrak('<?= $p['KETERANGAN'] ?>','<?= $p['ID_KONTRAK'] ?>')"
                                                    data-toggle="modal" data-target="#modalEditKontrak"><i class="fa fa-pencil"></i> Edit</a> | 
                                                    <a href="<?=base_url()?>Kontrak/deleteKontrak/<?=$p['ID_KONTRAK']?>">Hapus</a></td>
                                                </tr>
                                                <?php 
                                            }
                                            ?>
                                        </table>
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
    </div>
</div>
</div>
<script type="text/javascript">
    function editKontrak(a,b) {
      document.getElementById('frmKeterangan').value=a;
      document.getElementById('frmId').value=b;
  }

</script>
