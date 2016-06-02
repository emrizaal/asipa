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
                                    <span class="title">Surat Perintah Membayar</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-stripped table-bordered table-hover">
                                    <tr class="active">
                                        <th>No. Dokumen Paket</th>
                                        <th>Tahun</th>
                                        <th>Nama Paket</th>
                                        <th>Total Anggaran</th>
                                        <th>Jumlah Alat</th>
                                        <th>Sudah Diterima</th>
                                        <th>Belum Diterima</th>
                                        <th>Bukti Pengadaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <tr>
                                     <td>Paket1/2015</td>
                                     <td>2015</td>
                                     <td>Paket AN & JTK</td>
                                     <td><?=number_format(10000000,'0',',','.')?></td>
                                     <td><span class="label label-primary" style="font-size: 14px;">142</span></td>
                                     <td><span class="label label-success" style="font-size: 14px;">54</span></td>
                                     <td><span class="label label-danger" style="font-size: 14px;">98</span></td>
                                     <td><a href="#" class="btn btn-info"  data-toggle="modal" data-target="#modalLihatBukti"><i class="fa fa-search"></i> Lihat Bukti Pengadaan </a></td>
                                    <td><a href="#" class="btn btn-success" data-toggle="modal" data-target="#modalKonfirmasi"><i class="fa fa-check"></i> Approve Pembayaran </a></td>
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
 <!-- modal lihat bukti pengadaan -->
 <div class="modal fade modal-info" id="modalLihatBukti" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Bukti Pengadaan</h4>
      </div>
      <div class="modal-body">
        <div class="card">
         <div class="card-body"  style="padding: 0px 20px !important;">
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
                  <td> <a href="#" target="_blank"> Lihat </a>
                </tr>
              </table>
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

 <!-- end lihat bukti pengadan -->
          <!-- Modal Konfirmasi -->
    <div class="modal fade modal-success" id="modalKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-exclamation-triangle"></i> Approve Pembayaran Dokumen Paket</h4>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" action="<?=base_url()?>Kontrak/deleteKontrak" method="POST">
                        <input id="frmIddel" type="hidden" name="id_kontrak" value="">
                        <h5>Anda Yakin Menyetujui Pembayaran Dokumen Ini ?</h5>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Ya</button>
                    </form>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Konfirmasi -->
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
