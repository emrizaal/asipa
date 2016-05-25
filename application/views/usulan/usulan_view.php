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
                                    <span class="title">Pengelolaan Usulan</span>
                                </div>
                            </div>
                            <div class="card-body no-padding">
                                <a href="<?=base_url()?>Usulan/addUsulan"><button>Add Usulan</button></a>
                                <table border="1">
                                    <th>No. Dokumen</th>
                                    <th>Tahun</th>
                                    <th>Nama Paket</th>
                                    <th>Total Anggaran</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Last Update</th>
                                    <th>Aksi</th>
                                    <?php 
                                    foreach($usulan as $p){
                                        ?>
                                        <tr>
                                        <td>Usulan-<?=$p['ID_PAKET']?>/<?=$p['INISIAL']?>/<?=$p['TAHUN_ANGGARAN']?></td>
                                        <td><?=$p['TAHUN_ANGGARAN']?></td>
                                        <td><?=$p['NAMA_PAKET']?></td>
                                        <td><?=$p['TOTAL_ANGGARAN']?></td>
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
