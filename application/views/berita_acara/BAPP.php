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
                <div class="card-title" style="width:100%">
                  <span class="title">Manage BAPP</span>
                  <a href="<?=site_url()?>BeritaAcara" class="btn btn-primary pull-right"><i class="fa fa-chevron-left"></i> Kembali </a>

                </div>
              </div>
              <div class="card-body">
                <div role="tabpanel">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#lab" aria-controls="Lab" role="tab" data-toggle="tab">Lab RPL</a></li>
                    <li role="presentation"><a href="#rd" aria-controls="rd" role="tab" data-toggle="tab">Ruang Dosen</a></li>

                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="lab">
                      <table class="table table-stripped table-bordered table-hover">
                        <tr class="active">
                          <th>Nama Barang</th>
                          <th>Spesifikasi</th>
                          <th>Setara</th>
                          <th>Satuan</th>
                          <th>Jumlah</th>
                          <th colspan="4" style="text-align:center">Tanggal Pemeriksaan</th>
                          <th>Jumlah</th>
                          <th>Keterangan</th>
                          <th> Bukti </th>
                        </tr>
                        <tr>
                         <td>-</td>
                         <td>-</td>
                         <td>-</td>
                         <td>-</td>
                         <td>-</td>
                         <td><input type="text" class="form-control datepicker" name="tgl-1" style="width: 110px;"></td>
                         <td><input type="text" class="form-control datepicker" name="tgl-1" style="width: 110px;"></td>
                         <td><input type="text" class="form-control datepicker" name="tgl-1" style="width: 110px;"></td>
                         <td><input type="text" class="form-control datepicker" name="tgl-1" style="width: 110px;"></td>
                         <td><input type="text" class="form-control " name="tgl-1" style="width: 110px;" placeholder="Jumlah"></td>
                         <td><input type="text" class="form-control " name="tgl-1" style="width: 110px;" placeholder="Keterangan"></td>
                         <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#modalAddBukti"><i class="fa fa-plus"></i> </a></td>
                       </tr>
                     </table>
                   </div>
                   <div role="tabpanel" class="tab-pane" id="rd">

                   </div>
                 </div>
               </div>



             </div>
           </div>
         </div>
       </div>

     </div>
   </div>
 </div>
</div>
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
