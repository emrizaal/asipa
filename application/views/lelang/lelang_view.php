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
                    <th>Nama Dokumen Paket</th>
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
                          if($p['STATUS']==8){?>
                          <span class="label label-primary" style="font-size: 12px;"><i class="fa fa-shopping-cart"></i> Tahap Lelang..</span>
                          <?}else if($p['STATUS']==9){?>
                          <span class="label label-success" style="font-size: 12px;"><i class="fa fa-check"></i> Sukses</span>
                          <?}else if($p['STATUS']==-9){?>
                          <span class="label label-danger" style="font-size: 12px;"><i class="fa fa-warning"></i> Gagal</span>
                          <?}
                          ?>
                        </td>
                        <td>
                          <a class="btn btn-warning" onclick="editLelang('<?= $p['NAMA_PAKET'] ?>','<?= $p['ID_PAKET'] ?>','<?= $p['STATUS'] ?>','<?= $p['TENDER_A'] ?>','<?= $p['TENDER_B'] ?>','<?= $p['TENDER_C'] ?>','<?=$p['KETERANGAN_GAGAL_KONTRAK']?>')"
                            data-toggle="modal" data-target="#modalEditLelang"><i class="fa fa-pencil"></i> Edit</a>
                            <?php 
                            if($p['STATUS']==9 || $p['STATUS']==-9){ ?><a class="btn btn-info" onclick="lihatLelang('<?= $p['NAMA_PAKET'] ?>','<?= $p['ID_PAKET'] ?>','<?= $p['STATUS'] ?>','<?= $p['TENDER_A'] ?>','<?= $p['TENDER_B'] ?>','<?= $p['TENDER_C'] ?>','<?=$p['KETERANGAN_GAGAL_KONTRAK']?>')"
                            data-toggle="modal" data-target="#modalLihatLelang"><i class="fa fa-search"></i> Lihat</a>
                            <?}?>
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
                       <br>
                          <div class="sub-title">
                     Tim Penerima : 
                       <select name="nama_b" id="frmNamaB" class="form-control" style="width: 63%;">
                       <option>Tim 1</option>
                       <option>Tim 3</option>
                       <option>Tim 2</option>
                       </select>
                      </div>
                         
                         <div class="sub-title">  
                           <input type="text" name="tender_a" id="frmTenderA" class="form-control" style="width: 80%;" placeholder="Pemenang 1"> 
                         </div>
                         <div class="sub-title">
                          <input type="text" name="nama_a" id="frmNamaA" class="form-control" style="width: 63%;" placeholder="Nama Yang Menyerahkan 1">
                        </div>
                        <div class="sub-title"> 
                          <input type="text" name="npwp_a" id="frmNPWPA" class="form-control" style="width: 85%;" placeholder="NPWP 1"> 
                        </div>
                        <div class="sub-title">
                          <textarea name="alamat_a" id="frmAlamatA" class="form-control" placeholder="Alamat 1"></textarea>
                        </div>
                        <br>
                        <div class="sub-title">  
                         <input type="text" name="tender_b" id="frmTenderB" class="form-control" style="width: 80%;" placeholder="Pemenang 2"> 
                       </div>
                       <div class="sub-title">
                        <input type="text" name="nama_b" id="frmNamaB" class="form-control" style="width: 63%;" placeholder="Nama Yang Menyerahkan 2">
                      </div>
                      <div class="sub-title"> 
                        <input type="text" name="npwp_b" id="frmNPWPB" class="form-control" style="width: 85%;" placeholder="NPWP 2"> 
                      </div>
                      <div class="sub-title">
                        <textarea name="alamat_a" id="frmAlamatB" class="form-control" placeholder="Alamat 2"></textarea>
                      </div>
                      <br>
                      <div class="sub-title">  
                       <input type="text" name="tender_c" id="frmTenderC" class="form-control" style="width: 80%;" placeholder="Pemenang 3"> 
                     </div>
                     <div class="sub-title">
                      <input type="text" name="nama_c" id="frmNamaC" class="form-control" style="width: 63%;" placeholder="Nama Yang Menyerahkan 3">
                    </div>
                    <div class="sub-title"> 
                      <input type="text" name="npwp_c" id="frmNPWPC" class="form-control" style="width: 85%;" placeholder="NPWP 3"> 
                    </div>
                    <div class="sub-title">
                      <textarea name="alamat_c" id="frmAlamatC" class="form-control" placeholder="Alamat 3"></textarea>
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

  <!-- Modal Lihat Lelang -->
  <div class="modal fade modal-info" id="modalLihatLelang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title" id="myModalLabel">Lihat Penetapan Hasil Lelang</h4>
        </div>
        <div class="modal-body">
          <div class="card">
           <div class="card-body"  style="padding: 0px 20px !important;">
            <div class="sub-title">
              <b>Nama Dokumen Penglompokan</b> :  <span id="spanNama"></span> 
            </div>
            <div class="sub-title">
             <b>Status Lelang</b> : <span id="spanStatus"  class="label"></span> 
           </div>
           <div id="spanSuccess" style="display:none">
             <br>
             <div class="sub-title"><b>Pemenang 1</b> :  <span id="spanTenA"></span> </div>
             <div class="sub-title"><b>Nama 1</b> :  <span id="spanNamA"></span> </div>
             <div class="sub-title"><b>NPWP 1</b> :  <span id="spanNPWPA"></span> </div>
             <div class="sub-title"><b>Alamat 1</b> :  <span id="spanAlmtA"></span> </div>
             <br>
             <div class="sub-title"><b>Pemenang 2</b> :  <span id="spanTenB"></span> </div>
             <div class="sub-title"><b>Nama 2</b> :  <span id="spanNamB"></span> </div>
             <div class="sub-title"><b>NPWP 2</b> :  <span id="spanNPWPB"></span> </div>
             <div class="sub-title"><b>Alamat 2</b> :  <span id="spanAlmtB"></span> </div>
             <br>
             <div class="sub-title"><b>Pemenang 3</b> :  <span id="spanTenC"></span> </div>
             <div class="sub-title"><b>Nama 3</b> :  <span id="spanNamC"></span> </div>
             <div class="sub-title"><b>NPWP 3</b> :  <span id="spanNPWPC"></span> </div>
             <div class="sub-title"><b>Alamat 3</b> :  <span id="spanAlmtC"></span> </div>
             </div>
           <div id="spanFail" style="display:none">
             <div class="sub-title"><b>Keterangan </b> :</div>
             <div>
               <span id="spanKet"></span> 
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="modal-footer">
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
  function lihatLelang(a,b,status,tA,tB,tC,ket) {
    document.getElementById('spanNama').textContent=a;
    if(status==9){
      document.getElementById('spanStatus').setAttribute('class','label label-success');
      document.getElementById('spanStatus').textContent='Sukses';
      document.getElementById('spanSuccess').style.display = 'block';
      document.getElementById('spanTenA').textContent=tA;
      document.getElementById('spanTenB').textContent=tB;
      document.getElementById('spanTenC').textContent=tC;
    }else{
      document.getElementById('spanStatus').setAttribute('class','label label-danger');
      document.getElementById('spanStatus').textContent='Gagal';
      document.getElementById('spanFail').style.display = 'block';
      document.getElementById('spanKet').textContent=ket;
         // $("#spanKet option[value="+status+"]").attr("selected","selected");


       }

     }
     function editLelang(a,b,status,tA,tB,tC,ket) {
      document.getElementById('frmNama').value=a;
      document.getElementById('frmId').value=b;
      document.getElementById('frmTenderA').value=tA;
      document.getElementById('frmTenderB').value=tB;
      document.getElementById('frmTenderC').value=tC;
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



