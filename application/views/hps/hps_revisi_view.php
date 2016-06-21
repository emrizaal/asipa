<table class="table table-bordered table-hovered table-stripped">
    <tr class="active">
        <th> Revisi Ke </th>
        <th> Tanggal </th>
        <th> PIC </th>
        <th> Aksi </th>
    </tr>
    <?php 
    foreach($revisi as $r){
        ?>
        <tr>
            <td> <?=$r['REVISI_PAKET']?> </td>
            <td> <?=$r['TANGGAL_UPDATE']?> </td>
            <td> <?=$r['NAMA']?> (<?=$r['JENIS']?>)</td>
            <td> <a href="<?=base_url()?>Hps/DetailHps/<?=$r['ID_PAKET']?>/<?=$r['REVISI_PAKET']?>" target="_blank"><i class="fa fa-search"></i> Lihat</a> </td>
        </tr>
        <?php 
    }
    ?>
</table>