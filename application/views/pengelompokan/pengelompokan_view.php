<!-- Main Content -->
<?php
$this->load->view("info_header");
?>
<div class="app-container-slide">
    <div class="container-fluid">
        <div class="side-body" style="padding-top:45px ;margin-left: 90px;margin-right: 30px">

            <div class="row  no-margin-bottom">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <span class="title">Pengelompokan Usulan Alat</span>
                                </div>
                            </div>
                            <div class="card-body no-padding">
                                <a href="<?=base_url()?>Usulan/addUsulan"><button>Add Pengelompokan</button></a>
                                <table border="1">
                                    <th>Nama Dokumen Pengelompokan</th>
                                    <th>Tahun Anggaran</th>
                                    <th>Tanggal Pembuatan Dokumen</th>
                                    <th>Update Pengelompokan Terakhir</th>
                                    <th>Aksi</th>
                                    <?php 
                                    foreach($pengelompokan as $p){
                                        ?>
                                        <tr>
                                        <td><?=$p['NAMA_PAKET']?></td>
                                        <td><?=$p['TAHUN_ANGGARAN']?></td>
                                        <td><?=$p['TANGGAL_DIBUAT']?></td>
                                        <td><?=$p['LAST_UPDATE']?></td>
                                        <td>Export | Revisi</td>
                                        </tr>
                                        <?php 
                                    }
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
