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
                                <!-- <button type="button" class="btn btn-primary btn-info" data-toggle="modal" data-target="#modalAddPengelompokan">
                                  <i class="fa fa-plus-square"></i>&nbsp; Tambah Paket Pengelompokan
                                </button> -->
                                <table class="table table-stripped table-bordered table-hover">
                                  <tr class="active">
                                    <th>Kategori</th>
                                    <th>Tahun Anggaran</th>
                                    <th>Nama Paket</th>
                                    <th>Tanggal Pembuatan Paket</th>
                                    <th>Update Pembuatan Paket Terakhir</th>    
                                    <th>Status</th>    
                                    <th>Aksi</th>
                                    <?php 
                                    foreach($kategori as $k){
                                      ?>
                                      <tr>
                                        <td><?=$k['KATEGORI']?></td>
                                        <td><?=date("Y");?></td>
                                        <td><?=$k['NAMA_PAKET']?></td>
                                        <td><?=$k['TANGGAL_DIBUAT']?></td>
                                        <td><?=$k['LAST_UPDATE']?></td>
                                        <td>
                                          <?php 
                                          if(empty($k['ID_PAKET'])){ ?>
                                            <span class="label label-warning" style="font-size: 12px;">Belum Dibuat</span>  
                                          <?php
                                        }else{
                                          ?>
                                          <span class="label label-success" style="font-size: 12px;">Sudah Dibuat</span>
                                          <?php } ?>
                                        </td>
                                        <td>
                                          <a onClick="getPaketByIdKategori(<?=$k['ID_KAT']?>)" class="btn btn-primary" data-toggle="modal" data-target="#modalLihatPengelompokan"><i class="fa fa-search"></i> Lihat </a>
                                           <!--  <a class="btn btn-warning" onclick="editPengelompokan('<?= $p['NAMA_PAKET'] ?>','<?= $p['ID_PAKET'] ?>')"
                                            data-toggle="modal" data-target="#modalEditPengelompokan"><i class="fa fa-pencil"></i> Edit</a>
                                            Export | Revisi -->
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
                            <!-- Modal Lihat Pengelompokan -->
                            <div class="modal fade modal-primary" id="modalLihatPengelompokan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                              <div class="modal-dialog modal-lg"  style="width: 90%;">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Lihat Paket Pengelompokan</h4>
                                  </div>
                                  <form action="<?=base_url()?>Pengelompokan/savePengelompokan" method="POST">
                                    <div class="modal-body" id="bodyPengelompokan">

                                    </div>
                                    <div class="modal-footer">

                                      <button type="submit" class="btn btn-success">Simpan</button>
                                    </form>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                  </div>

                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal Lihat Pengelompokan Pagu -->
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
                                      <div class="sub-title">Nama Paket Pengelompokan</div>
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
                  function getPaketByIdKategori(kat){
                    $.ajax({
                      url: '<?=base_url()?>Pengelompokan/getPaketByIdKategori/'+kat,
                      type: "GET",
                      success : function(res){
                       $("#bodyPengelompokan").html(res);
                     },
                     error: function (msg) {
                      console.log("gagal"+msg);
                      return false;
                    }

                  })
                  }
                </script>


