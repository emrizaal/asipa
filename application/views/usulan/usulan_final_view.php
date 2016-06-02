<?php 
if(!empty($final)){
  ?>
  <div class="sub-title">Nomor Dokumen : USULAN/JTK/2016/2 </div>
  <div>
   <table class="table table-bordered table-stripped table-hovered">
    <tr class="active">
      <th> Nama Dokumen Usulan </th>
      <th> Nama Alat </th>
      <th> Spesifikasi </th>
      <th> Setara </th>
      <th> Satuan </th>
      <th> Jumlah Alat </th>
      <th> Harga Satuan </th>
      <th> Total </th>
      <th> Lokasi </th>
      <th> Jumlah Distribusi </th>
      <th> Referensi Terkait </th>
      <th> Data Ahli </th>
      <th> Tanggal Update </th>
    </tr>
    <tr>
      <td> Usulan Teknik Komputer </td>
      <td> Hardisk External </td>
      <td> 2TB Toshiba </td>
      <td> Seagate </td>
      <td> Buah </td>
      <td> 5 </td>
      <td> <?=number_format(1000000,'0',',','.')?> </td>
      <td> <?=number_format(5000000,'0',',','.')?> </td>
      <td> Ruang Dosen </td>
      <td> 5</td>
      <td> <a href="#" target="_blank"> file.png </a></td>
      <td> <input type="checkbox" checked disabled=""></td>
      <td> 20 May 2013</td>
    </tr>
  </table>
</div>
<?php 
}else{
  echo "-- Usulan Final Belum Ada --";
}
?>