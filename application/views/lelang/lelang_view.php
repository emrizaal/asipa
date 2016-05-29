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
                                    <span class="title">Penetapan Hasil Lelang</span>
                                </div>
                            </div>
                            <div class="card-body">
                              <table class="table table-stripped table-bordered table-hover">
                                <tr class="active">
                                    <th>Nama Dokumen Pengelompokan</th>
                                    <th>Tahun Anggaran</th>
                                    <th>Status Lelang</th>
                                    <th>Aksi</th>
                                    <?php 
                                    foreach($lelang as $p){
                                        ?>
                                        <tr>
                                            <td><?=$p['NAMA_PAKET']?></td>
                                            <td><?=$p['TAHUN_ANGGARAN']?></td>
                                            <td>
                                                <?php 
                                                if($p['STATUS']==8){
                                                    echo "-";
                                                }else if($p['STATUS']==9){
                                                    echo "Sukses";
                                                }else if($p['STATUS']==-9){
                                                    echo "Gagal";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-warning" onclick="editLelang('<?= $p['NAMA_PAKET'] ?>','<?= $p['ID_PAKET'] ?>','<?= $p['STATUS'] ?>','<?= $p['TENDER_A'] ?>','<?= $p['TENDER_B'] ?>','<?= $p['TENDER_C'] ?>','<?= $p['TENDER_D'] ?>','<?= $p['TENDER_E'] ?>','<?=$p['KETERANGAN_GAGAL_KONTRAK']?>')"
                                                    data-toggle="modal" data-target="#modalEditLelang"><i class="fa fa-pencil"></i> Edit</a>
                                                    <?php 
                                                    if($p['STATUS']==9){
                                                        echo "Lihat";
                                                    }
                                                    ?>
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
                    <!-- Modal Edit Lelang -->
                    <div class="modal fade modal-warning" id="modalEditLelang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Edit Penetapan Hasil Lelang</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="card">
                                     <div class="card-body"  style="padding: 0px 20px !important;">
                                         <form action="<?=base_url()?>Lelang/updateLelang" method="POST">
                                            <input type="hidden" name="id_paket" id="frmId" value="">
                                            <div class="sub-title">Nama Dokumen Penglompokan</div>
                                            <div>
                                               <input disabled type="text" name="nama" id="frmNama" class="form-control">
                                           </div>
                                           <div class="sub-title">Status Lelang</div>
                                           <div>
                                               <select name="status" id="frmStatus" class="form-control" style="width: 30%;" onchange="getStatus(this)">
                                                   <option value="8">-</option>
                                                   <option value="9">Sukses</option>
                                                   <option value="-9">Gagal</option>
                                               </select>
                                           </div>
                                           <div id="successForm" style="display:none">
                                               <div class="sub-title">Pemenang 1 :</div>
                                               <div>
                                                   <input type="text" name="tender_a" id="frmTenderA" class="form-control">
                                               </div>
                                               <div class="sub-title">Pemenang 2 :</div>
                                               <div>
                                                   <input type="text" name="tender_b" id="frmTenderB" class="form-control">
                                               </div>
                                               <div class="sub-title">Pemenang 3 :</div>
                                               <div>
                                                   <input type="text" name="tender_c" id="frmTenderC" class="form-control">
                                               </div>
                                               <div class="sub-title">Pemenang 4 :</div>
                                               <div>
                                                   <input type="text" name="tender_d" id="frmTenderD" class="form-control">
                                               </div>
                                               <div class="sub-title">Pemenang 5 :</div>
                                               <div>
                                                   <input type="text" name="tender_e" id="frmTenderE" class="form-control">
                                               </div>
                                           </div>
                                           <div id="failForm" style="display:none">
                                             <div class="sub-title">Keterangan :</div>
                                             <div>
                                               <textarea class="form-control" name="keterangan" id="frmKet"></textarea>
                                           </div>
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
<!-- <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/css/bootstrap.min.css"> -->

<script type="text/javascript">
    function editLelang(a,b,status,tA,tB,tC,tD,tE,ket) {
      document.getElementById('frmNama').value=a;
      document.getElementById('frmId').value=b;
      document.getElementById('frmTenderA').value=tA;
      document.getElementById('frmTenderB').value=tB;
      document.getElementById('frmTenderC').value=tC;
      document.getElementById('frmTenderD').value=tD;
      document.getElementById('frmTenderE').value=tE;
      document.getElementById('frmKet').value=ket;
      $("#frmStatus option").removeAttr("selected");
      $("#frmStatus option[value="+status+"]").attr("selected","selected");
      if(status==9){
        document.getElementById('failForm').style.display = 'none';
        document.getElementById('successForm').style.display = 'block';
    }else if(status==-9){
       document.getElementById('failForm').style.display = 'block';
       document.getElementById('successForm').style.display = 'none';
   }else{
       document.getElementById('failForm').style.display = 'none';
       document.getElementById('successForm').style.display = 'none';
   }
}
function getStatus(e){
    if(e.value==9){
        document.getElementById('failForm').style.display = 'none';
        document.getElementById('successForm').style.display = 'block';
    }else if(e.value==-9){
       document.getElementById('failForm').style.display = 'block';
       document.getElementById('successForm').style.display = 'none';
   }else{
       document.getElementById('failForm').style.display = 'none';
       document.getElementById('successForm').style.display = 'none';
   }

}

</script>



