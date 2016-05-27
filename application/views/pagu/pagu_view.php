<!-- Main Content -->
<?php
$this->load->view("info_header");
?>
<!-- Main layout -->
<div class="app-container-slide">
    <div class="container-fluid">
        <div class="side-body padding-top"  style="padding-top:25px;">
            <!-- Main Content -->
            <div class="row no-margin-bottom">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="title">Pengelolaan Pagu</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-primary btn-info" data-toggle="modal" data-target="#modalAddPagu">
                              <i class="fa fa-plus-square"></i>&nbsp; Tambah Data Pagu
                          </button>

                          <table class="table table-stripped table-bordered table-hover">
                              <tr class="active">
                                <th>Tahun Anggaran</th>
                                <th>Pagu Alat</th>
                                <th>Aksi</th>
                            </tr>
                            <?php 
                            foreach($pagu as $p){

                                ?>
                                <tr>
                                    <td><?=$p['TAHUN_ANGGARAN']?></td>
                                    <td>Rp. <?= number_format($p['PAGU_ALAT'],0,',','.')?></td>
                                    <td>
                                        <? if($p['TAHUN_ANGGARAN']==date('Y')){ ?>
                                           <a class="btn btn-warning" onclick="editPagu('<?= $p['PAGU_ALAT'] ?>','<?= $p['ID_PAGU'] ?>')"
                                            data-toggle="modal" data-target="#modalEditPagu"><i class="fa fa-pencil"></i> Edit</a>
                                        <?php }else{ ?>
                                             <a class="btn btn-warning" disabled><i class="fa fa-pencil"></i> Edit</a>
                                        <? } ?>
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
        <div class="modal fade modal-info" id="modalAddPagu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Data Pagu (Tahun Anggaran <?= date('Y')?>)</h4>
                    </div>
                    <div class="modal-body">
                      <div class="card">
                       <div class="card-body"  style="padding: 0px 20px !important;">
                        <form action="<?=base_url()?>Pagu/savePagu" method="POST">
                            <div class="sub-title">Pagu Alat Jurusan</div>
                            <div>
                                <input type="text" name="pagu" class="form-control" placeholder="Masukan Nominal Pagu">
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
        <div class="modal fade modal-warning" id="modalEditPagu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Data Pagu (Tahun Anggaran <?= date('Y')?>)</h4>
                    </div>
                    <div class="modal-body">
                      <div class="card">
                       <div class="card-body"  style="padding: 0px 20px !important;">
                        <form action="<?=base_url()?>Pagu/updatePagu" method="POST">
                            <div class="sub-title">Pagu Alat Jurusan</div>
                            <div>
                                 <input type="hidden" name="id" id="frmIdNamaPagu">
                                <input type="text" name="pagu" id="frmEditNamaPagu" class="form-control" placeholder="Masukan Nominal Pagu">
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
    function editPagu (a,b) {
      document.getElementById('frmEditNamaPagu').value=a;
      document.getElementById('frmIdNamaPagu').value=b;
    }
    
</script>

