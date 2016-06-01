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
                                            <td>2016</td>
                                            <td>Paket Teknik Komputer & AN</td>
                                            <td>11 May 2014</td>
                                            <td>31 June 2014</td>
                                            <td><span class="label label-success" style="font-size: 12px;">Sudah Dibuat</span></td>
                                            <td>
                                                <a class="btn btn-primary" data-toggle="modal" data-target="#modalLihatPengelompokan"><i class="fa fa-search"></i> Lihat </a>
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
                        <div class="modal-body">
                          <div class="card">
                             <div class="card-body"  style="padding: 0px 20px !important;">
                                <div class="sub-title">Nama Paket Penglompokan</div>
                                <div>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Paket Pengelompokan">
                                </div>
                                <div class="sub-title">Tim HPS <select name="tim" class="form-control" style="
                                width: 20%;
                                    margin-left: 1%;
                                    margin-top: 1%
                                    ">
                                    <option>Rizky</option>
                                    <option>Febian</option>
                                    <option>Amelia</option>
                                </select></div>
                                <div>

                                </div>
                                <Br>
                                   <table class="table table-bordered table-stripped table-hovered">
                                    <tr class="active">
                                      <th> Nama Dokumen Usulan </th>
                                      <th> Nama Alat </th>
                                      <th> Spesifikasi </th>
                                      <th> Setara </th>
                                      <th> Satuan </th>
                                      <th> Jumlah Alat </th>
                                      <th> Harga Satuan </th>
                                      <th> Total </th>
                                      <th> Lokasi </th>
                                      <th> Jumlah Distribusi </th>
                                      <th> Referensi Terkait </th>
                                      <th> Data Ahli </th>
                                      <th> Tanggal Update </th>
                                  </tr>
                                  <tr>
                                      <td> Usulan Teknik Komputer </td>
                                      <td> Hardisk External </td>
                                      <td> 2TB Toshiba </td>
                                      <td> Seagate </td>
                                      <td> Buah </td>
                                      <td> 5 </td>
                                      <td> <?=number_format(1000000,'0',',','.')?> </td>
                                      <td> <?=number_format(5000000,'0',',','.')?> </td>
                                      <td> Ruang Dosen </td>
                                      <td> 5</td>
                                      <td> <a href="#" target="_blank"> file.png </a></td>
                                      <td> <input type="checkbox" checked disabled=""></td>
                                      <td> 20 May 2013</td>
                                  </tr>
                              </table>
                              <br>
                          </div>
                      </div>
                  </div>
                  <form>
                      <input type="hidden" name="id_paket">
                      <div class="modal-footer">

                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
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


