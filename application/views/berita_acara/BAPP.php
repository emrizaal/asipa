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
