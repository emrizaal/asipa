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
                                    <span class="title">Manage Penetapan Kontrak</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-stripped table-bordered table-hover">
                                <tr class="active">
                                    <th>No. Dokumen</th>
                                    <th>Tahun</th>
                                    <th>Nama Paket</th>
                                    <th>Total Anggaran</th>
                                    <th>Tanggal Hasil Lelang</th>
                                    <th>Penyedia</th>
                                    <th>Dokumen Kontrak</th>
                                    </tr>
                                    <?php 
                                    // foreach($paket as $p){
                                        ?>
                                        <tr>
                                            <td> PAKET-1/2015 </td>
                                            <td> 2015 </td>
                                            <td> Paket AN JTK </td>
                                            <td> 20000000 </td>
                                            <td> 20 May 2015</td>
                                            <td> - </td>
                                            <td><a href="<?=base_url()?>Kontrak/detail/1" class="btn btn-primary"><i class="fa fa-file-text"></i> &nbsp; Lihat Kontrak</a></td>
                                        </tr>
                                       <!--  <tr>
                                        <td>HPS-<?=$p['ID_PAKET']?>/<?=$p['TAHUN_ANGGARAN']?></td>
                                        <td><?=$p['TAHUN_ANGGARAN']?></td>
                                        <td><?=$p['NAMA_PAKET']?></td>
                                        <td><?=$p['TOTAL_ANGGARAN']?></td>
                                        <td><?=$p['TANGGAL_DIBUAT']?></td>
                                        <td><?=$p['LAST_UPDATE']?></td>
                                        </tr> -->
                                        <?php 
                                    // }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
