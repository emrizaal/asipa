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
                                    <span class="title">Paket Pengelompokan Usulan Alat</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary btn-info" data-toggle="modal" data-target="#modalAddPengelompokan">
                                  <i class="fa fa-plus-square"></i>&nbsp; Tambah Paket Pengelompokan
                              </button>
                              <table class="table table-stripped table-bordered table-hover">
                                <tr class="active">
                                    <th>Nama Dokumen Pengelompokan</th>
                                    <th>Tahun Anggaran</th>
                                    <th>Tanggal Pembuatan Dokumen</th>
                                    <th>Update Pengelompokan Terakhir</th>
                                    <th>Aksi</th>
                                    <?php 
                                    foreach($pengelompokan as $p){
                                        ?>
                                        <tr>
                                            <td><?=$p['NAMA_PAKET']?></td>
                                            <td><?=$p['TAHUN_ANGGARAN']?></td>
                                            <td><?=$p['TANGGAL_DIBUAT']?></td>
                                            <td><?=$p['LAST_UPDATE']?></td>
                                            <td>
                                            <a class="btn btn-warning" onclick="editPengelompokan('<?= $p['NAMA_PAKET'] ?>','<?= $p['ID_PAKET'] ?>')"
                                            data-toggle="modal" data-target="#modalEditPengelompokan"><i class="fa fa-pencil"></i> Edit</a>
                                            Export | Revisi
                                            </td>
                                        </tr>
                                        <?php 
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Main Content -->
                <!-- Modal Add Pagu -->
                <div class="modal fade modal-info" id="modalAddPengelompokan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title" id="myModalLabel">Tambah Paket Pengelompokan</h4>
                            </div>
                            <div class="modal-body">
                              <div class="card">
                               <div class="card-body"  style="padding: 0px 20px !important;">
                                <form action="<?=base_url()?>Pengelompokan/savePengelompokan" method="POST">
                                    <div class="sub-title">Nama Paket Pengelompokan</div>
                                    <div>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Paket Pengelompokan">
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
        <!-- Modal Edit Pagu -->
        <div class="modal fade modal-warning" id="modalEditPengelompokan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Data Paket Pengelompokan</h4>
                    </div>
                    <div class="modal-body">
                      <div class="card">
                       <div class="card-body"  style="padding: 0px 20px !important;">
                        <form action="<?=base_url()?>Pengelompokan/updatePengelompokan" method="POST">
                            <div class="sub-title">Nama Paket Penglompokan</div>
                            <div>
                             <input type="hidden" name="id" id="frmIdPengelompokan">
                             <input type="text" name="nama" id="frmNamaPengelompokan" class="form-control" placeholder="Masukan Nama Paket Pengelompokan">
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
    function editPengelompokan (a,b) {
      document.getElementById('frmNamaPengelompokan').value=a;
      document.getElementById('frmIdPengelompokan').value=b;
  }
  
</script>


