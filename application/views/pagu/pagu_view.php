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
                                    <span class="title">Pengelolaan Pagu</span>
                                </div>
                            </div>
                            <div class="card-body no-padding">
                                <a href="<?=base_url()?>Pagu/addPagu"><button>Add Pagu</button></a>
                                <table border="1">
                                    <th>Tahun Anggaran</th>
                                    <th>Pagu Alat</th>
                                    <th>Aksi</th>
                                    <?php 
                                    foreach($pagu as $p){
                                        ?>
                                        <tr>
                                        <td><?=$p['TAHUN_ANGGARAN']?></td>
                                            <td><?=$p['PAGU_ALAT']?></td>
                                            <td><a href="<?=base_url()?>Pagu/editPagu/<?=$p['ID_PAGU']?>">Edit</a></td>
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
