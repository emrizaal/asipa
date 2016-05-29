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
                                    <span class="title">Mencatat Berita Acara</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-stripped table-bordered table-hover">
                                    <tr class="active">
                                        <th>No. Dokumen</th>
                                        <th>Tahun</th>
                                        <th>Nama Paket</th>
                                        <th>Total Anggaran</th>
                                        <th>Tanggal Dibuat</th>
                                        <th>Last Update</th>
                                        <th>BAPP</th>
                                        <th>BAST</th>
                                        <th>Bukti Pengadaan</th>
                                    </tr>
                                    <tr>
                                     <td>-</td>
                                     <td>-</td>
                                     <td>-</td>
                                     <td>-</td>
                                     <td>-</td>
                                     <td>-</td>
                                     <td><a href="<?=site_url()?>BeritaAcara/BAPP" class="btn btn-info"><i class="fa fa-search"></i> Detail </a></td>
                                     <td>
                                         <!-- <a href="#" class="btn btn-success"><i class="fa fa-plus"></i> Tambah </a> -->
                                         <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modalAddBAST" onclick=""><i class="fa fa-plus"></i> Tambah </a>

                                         <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modaleditBAST"><i class="fa fa-pencil"></i> Edit </a>
                                         <a href="#" class="btn btn-info" data-toggle="modal" data-target="#modalLihatBAST"><i class="fa fa-eye"></i> Lihat </a></td>
                                         <!-- <td><a href="#"><i class="fa fa-search"></i> Detail </a></td> -->
                                    <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#modalAddBukti"><i class="fa fa-plus"></i> Tambah </a></td>
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
 <!-- modal add bukti pengadaan -->
 <div class="modal fade modal-info" id="modalAddBukti" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Bukti Pengadaan</h4>
      </div>
      <div class="modal-body">
        <div class="card">
         <div class="card-body"  style="padding: 0px 20px !important;">
          <form enctype="multipart/form-data" action="<?=base_url()?>Kontrak/saveKontrak" method="POST">
            <input type="hidden" name="id_paket">
            <div class="sub-title">File Bukti Pengadaan</div>
            <div>
              <input type="file" name="fupload" class="form-control">
            </div>
            <div class="sub-title">List Pengadaan</div>
            <div>
              <table class="table table-bordered">
                <tr class="active">
                <th> Tanggal </th>
                <th> Bukti Pengadaan </th>
                <th> Aksi </th>
                </tr>
                <tr>
                  <td> - </td>
                  <td> - </td>
                  <td> <a href="#"> Hapus </a>
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

 <!-- end add bukti pengadan -->
 <!-- modal lihat bast -->
 <div class="modal fade modal-info " id="modalLihatBAST" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Lihat Data BAST</h4>
    </div>
    <div class="modal-body">
        <div class="card">
         <div class="card-body"  style="padding: 0px 20px !important;">

            <input type="hidden" name="id_paket" id="frmId" value="">

            <div class="sub-title">Data BAST :</div>
            <div>
                <iframe src="#" style="width: 100%;height: 500px;">
                </iframe>

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
<!-- end lihat bast -->
<!-- modal add bast -->
<div class="modal fade modal-info" id="modalAddBAST" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data BAST</h4>
    </div>
    <div class="modal-body">
        <div class="card">
         <div class="card-body"  style="padding: 0px 20px !important;">
             <form action="<?=base_url()?>Lelang/updateLelang" method="POST">
                <input type="hidden" name="id_paket" id="frmId" value="">
                <div class="sub-title"><b>Type Input</b> : &nbsp; 
                   <div class="radio3">
                       <input type="radio" id="radio1" name="typeInput" value="1" checked onclick="typeInputs(0)">
                       <label for="radio1">
                        File
                    </label>
                </div>
                &nbsp;
                &nbsp;
                <div class="radio3">
                   <input type="radio" id="radio2" name="typeInput" value="2" onclick="typeInputs(1)">
                   <label for="radio2">
                    Manual
                </label>
            </div>
        </div>
        <div id="fileForm">
            <div class="sub-title"><b>File </b> :</div>
            <div>
              <input type="file" name="fupload" class="form-control">
              <br>
          </div>
      </div>
      <div id="manualForm" style="display:none">
         <div class="sub-title">No BAST :</div>
         <div>
             <input type="text" name="no" id="no" class="form-control">
         </div>
         <div class="sub-title">Tanggal Surat :</div>
         <div>
             <input type="text" name="tanggal" id="tanggal" class="form-control datepicker">
         </div>
         <legend style="marin-top:1%"> Pihak Pertama </legend>
         <div class="sub-title">Nama :</div>
         <div>
             <input type="text" name="Nama1" id="Nama1" class="form-control">
         </div>
         <div class="sub-title">NIP  :</div>
         <div>
             <input type="text" name="NIP" id="NIP" class="form-control">
         </div>
         <div class="sub-title">Jabatan :</div>
         <div>
             <input type="text" name="Jabatan" id="Jabatan" class="form-control">
         </div>
         <div class="sub-title">Alamat :</div>
         <div>
             <textarea name="Alamat1" id="Alamat1" class="form-control"></textarea>
         </div>
         <legend style="marin-top:1%"> Pihak Kedua </legend>
         <div class="sub-title">Nama :</div>
         <div>
             <input type="text" name="Nama1" id="Nama1" class="form-control">
         </div>
         <div class="sub-title">NPWP  :</div>
         <div>
             <input type="text" name="NPWP" id="NPWP" class="form-control">
         </div>
         <div class="sub-title">Alamat :</div>
         <div>
             <textarea name="Alamat2" id="Alamat2" class="form-control"></textarea>
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
<!-- end add bast -->
<!-- modal edit bast -->
<div class="modal fade modal-warning" id="modaleditBAST" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Data BAST</h4>
    </div>
    <div class="modal-body">
        <div class="card">
         <div class="card-body"  style="padding: 0px 20px !important;">
             <form action="<?=base_url()?>Lelang/updateLelang" method="POST">
                <input type="hidden" name="id_paket" id="frmId" value="">
                <div class="sub-title"><b>Type Input</b> : &nbsp; 
                   <div class="radio3">
                       <input type="radio" id="radio1e" name="typeInpute" value="1" checked onclick="typeInputsE(0)">
                       <label for="radio1e">
                        File
                    </label>
                </div>
                &nbsp;
                &nbsp;
                <div class="radio3">
                   <input type="radio" id="radio2e" name="typeInpute" value="2" onclick="typeInputsE(1)">
                   <label for="radio2e">
                    Manual
                </label>
            </div>
        </div>
        <div id="fileFormE">
            <div class="sub-title"><b>File </b> :</div>
            <div>
              <input type="file" name="fupload" class="form-control">
              <br>
          </div>
      </div>
      <div id="manualFormE" style="display:none">
         <div class="sub-title">No BAST :</div>
         <div>
             <input type="text" name="no" id="no" class="form-control">
         </div>
         <div class="sub-title">Tanggal Surat :</div>
         <div>
             <input type="text" name="tanggal" id="tanggal" class="form-control datepicker">
         </div>
         <legend style="marin-top:1%"> Pihak Pertama </legend>
         <div class="sub-title">Nama :</div>
         <div>
             <input type="text" name="Nama1" id="Nama1" class="form-control">
         </div>
         <div class="sub-title">NIP  :</div>
         <div>
             <input type="text" name="NIP" id="NIP" class="form-control">
         </div>
         <div class="sub-title">Jabatan :</div>
         <div>
             <input type="text" name="Jabatan" id="Jabatan" class="form-control">
         </div>
         <div class="sub-title">Alamat :</div>
         <div>
             <textarea name="Alamat1" id="Alamat1" class="form-control"></textarea>
         </div>
         <legend style="marin-top:1%"> Pihak Kedua </legend>
         <div class="sub-title">Nama :</div>
         <div>
             <input type="text" name="Nama1" id="Nama1" class="form-control">
         </div>
         <div class="sub-title">NPWP  :</div>
         <div>
             <input type="text" name="NPWP" id="NPWP" class="form-control">
         </div>
         <div class="sub-title">Alamat :</div>
         <div>
             <textarea name="Alamat2" id="Alamat2" class="form-control"></textarea>
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
<!-- end edit bast -->
<script type="text/javascript">
    function typeInputs(a){
        if(a==1){
            document.getElementById('fileForm').style.display = 'none';
            document.getElementById('manualForm').style.display = 'block';
        }else{
          document.getElementById('fileForm').style.display = 'block';
          document.getElementById('manualForm').style.display = 'none';
      }
  }
  function typeInputsE(a){
    if(a==1){
        document.getElementById('fileFormE').style.display = 'none';
        document.getElementById('manualFormE').style.display = 'block';
    }else{
      document.getElementById('fileFormE').style.display = 'block';
      document.getElementById('manualFormE').style.display = 'none';
  }
}
</script>
