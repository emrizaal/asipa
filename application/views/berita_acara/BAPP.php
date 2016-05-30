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
                <div class="row">
                  <div class="col-md-7">
                    <div class="row">
                      <span class="col-md-3" style="margin-bottom:5px"><b>No. Dokumen : </b></span>
                      <span class="col-md-3" style="margin-bottom:5px"> HPS-1?></span>

                      <span class="col-md-3" style="margin-bottom:5px"><b> Total Anggaran :</b></span>
                      <span class="col-md-3" style="margin-bottom:5px"> 20000000</span>
                    </div>

                    <div class="row">
                      <span class="col-md-3" style="margin-bottom:5px"><b>Tahun : </b></span>
                      <span class="col-md-3" style="margin-bottom:5px"> 2001></span>

                      <span class="col-md-3" style="margin-bottom:5px"><b> Tanggal Dibuat :</b></span>
                      <span class="col-md-3" style="margin-bottom:5px"> 12 Mei 2001></span>
                    </div>

                    <div class="row">
                      <span class="col-md-3" style="margin-bottom:5px"><b>Nama Paket  : </b></span>
                      <span class="col-md-3" style="margin-bottom:5px"> Paket A</span>

                      <span class="col-md-3" style="margin-bottom:5px"><b> Last Update :</b></span>
                      <span class="col-md-3" style="margin-bottom:5px"> 12 Juni 2001</span>
                    </div>

                  </div>

                </div>
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
                          <th colspan="4" style="text-align:center"> Pemeriksaan</th>
                          <th>Jumlah Penerimaan</th>
                          <th>Aksi</th>
                        </tr>
                        <tr>
                         <td>-</td>
                         <td>-</td>
                         <td>-</td>
                         <td>-</td>
                         <td>12</td>
                         <td>
                         <a href="#" data-toggle="tooltip" data-placement="top" data-html="true" title="Jumlah : 4 <br> Ket : -">10 May 2016 </a></td>
                         <td>10 Jun 2016 </td>
                         <td>10 Aug 2016 </td>
                         <td>20 Aug 2016 </td>
                         <td>10</td>
                         <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#modalAddPenerimaan"><i class="fa fa-plus"></i> Tambah </a></td>
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
<!-- modal add tanggal pemeriksaan -->
<div class="modal fade modal-info" id="modalAddPenerimaan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Data Penerimaan Alat</h4>
      </div>
      <div class="modal-body">
        <div class="card">
         <div class="card-body"  style="padding: 0px 20px !important;">
          <form enctype="multipart/form-data" action="<?=base_url()?>Kontrak/saveKontrak" method="POST">
            <input type="hidden" name="id_paket">
            <div class="sub-title">Tanggal Penerimaan</div>
            <div>
              <input type="text" name="tgl" class="form-control datepicker">
            </div>
            <div class="sub-title">Jumlah Barang</div>
            <div>
              <input type="text" name="jml" class="form-control">
            </div>
             <div class="sub-title">Keterangan</div>
            <div>
              <textarea name="ket" class="form-control"></textarea>
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

 <!-- end add tanggal pemeriksaan -->