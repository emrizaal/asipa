<!-- Main Content -->
<?php
// $this->load->view("info_header");
?>
<style type="text/css">
  td .1-a{
    width: 162px;
    word-break: break-word;
  }
</style>
<div class="app-container-slide">
  <div class="container-fluid">
    <div class="side-body padding-top"  style="padding-top:90px;">
      <div id="example-one" contenteditable="true"></div>
      <table class="table table-bordered">
        <tr>
          <Th>1</Th>
          <th>2</th>
          <Th>1</Th>
          <th>2</th>
          <Th>1</Th>
          <th>2</th>

        </tr>

<tbody id="bre">
        <tr style="background-color:white;">
          <td contenteditable="true" class="1-a"></td>
          <td contenteditable="true" class="1-b"></td>
          <td><input type="file" class="1-file"></td>
          <td><select class="1-sel">
            <option>1</option>
            <option>2</option>
          </select></td>
          <td contenteditable="true"></td>
          <td contenteditable="true"></td>
        </tr>
        </tbody>
      </table>
      <button id="bbtn"> save </button>
 <button id="add"> add </button>
      <div class="row  no-margin-bottom">
        <div class="row">
          <div class="col-xs-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title">
                  <span class="title">Performa Serapan Anggaran</span>
                </div>
              </div>
              <div class="card-body">
                <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                <br>
                <!-- <div id='dashboard' style="background:#fff; width:100%"></div> -->
                <br>
                <table class="table table-stripped table-bordered table-hover">
                  <tr class="active">
                    <th>Jurusan</th>
                    <th>Tahun Anggaran</th>
                    <th>Target Anggaran</th>
                    <th>Aktualisasi Anggaran</th>    
                    <th>Realisasi Anggaran (%) </th>    
                    <th>Jumlah Alat </th>    
                    <th>Alat Terinventaris</th>    
                    <th>Alat Belum Terinventaris</th>    
                    <th></th>
                  </tr>
                  <tr>
                   <td> Teknik Komputer & Informatika </td>
                   <td> 2016 </td>
                   <td> Rp. <?=number_format(100000000,'0',',','.') ?> juta </td>
                   <td> Rp. <?=number_format(90000000,'0',',','.') ?> juta </td>
                   <td> <img src="<?=site_url()?>assets/img/backdrop/down.PNG" title="Turun dari tahun sebelumnya"> <?= number_format(90,'2',',','.') ?> % </td>
                   <td> <span class="label label-primary" style="font-size: 14px;">100</span></td> 
                   <td> <span class="label label-success" style="font-size: 14px;">90</span></td> 
                   <td> <span class="label label-danger" style="font-size: 14px;">10</span></td> 
                   <td> <a href="<?=site_url()?>Performa/detailPaket"> Detail Pengajuan </a> </td>
                 </tr>
                 <tr>
                   <td> Administrasi Niaga </td>
                   <td> 2016 </td>
                   <td> Rp. <?=number_format(90000000,'0',',','.') ?> juta </td>
                   <td> Rp. <?=number_format(90000000,'0',',','.') ?> juta </td>
                   <td> <img src="<?=site_url()?>assets/img/backdrop/up.PNG" title="Naik dari tahun sebelumnya"> <?= number_format(100,'2',',','.') ?> % </td>
                   <td> <span class="label label-primary" style="font-size: 14px;">120</span></td> 
                   <td> <span class="label label-success" style="font-size: 14px;">120</span></td> 
                   <td> <span class="label label-danger" style="font-size: 14px;">0</span></td> 
                   <td> <a href="<?=site_url()?>Performa/detailPaket"> Detail Pengajuan </a> </td>
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
<!-- End Main Content -->
<footer class="app-footer">
  <div class="wrapper">
    <span class="pull-right">2.1 <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © 2015 Copyright.
  </div>
</footer>
<!-- Javascript Libs -->
<script type="text/javascript" src="<?=base_url()?>assets/lib/js/jquery.min.js"></script>

<script type="text/javascript" src="<?=base_url()?>assets/lib/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/js/Chart.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/js/select2.full.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/js/ace/ace.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/js/ace/mode-html.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/js/ace/theme-github.js"></script>
<!-- Javascript -->
<script type="text/javascript" src="<?=base_url()?>assets/js/app.js"></script>

<script src="<?=base_url()?>assets/js/grafik_dashboard.js"></script>
<script src="<?=base_url()?>assets/js/d3.v3.min.js"></script>

<script src="<?=base_url()?>assets/highchart/js/highcharts.js"></script>
<script src="<?=base_url()?>assets/highchart/js/modules/exporting.js"></script>
<script src="<?=base_url()?>assets/highchart/js/modules/drilldown.js"></script>




<script>
  // var freqData=[
  // <?php $i=0;
  // $proses = array("Pengajuan","Pengadaan","Penerimaan");
  // for($c=0;$c<11;$c++){
  //   if($i!=0) echo ",";
  //   echo "{State:'".$i."-jek',freq:{ ";
  //   $iProses = 3;
  //   for($iProses=1;$iProses<=3;$iProses++){
  //     if($iProses!=1) echo ",";
  //                                               echo "'".$proses[$iProses-1]."':".rand(0,9) ;//$jumPaketByProses[$i+1][$iProses];
  //                                               //$iProses++;
  //                                             }

  //                                             echo " }} ";
  //                                           //if($i!=0) echo ",";
  //                                           //echo "{State:'".$u->ALIAS."',freq:{Sakit:4786, IZIN:1319, ALFA:249}} ";
  //                                             $i++;
  //                                           }
  //                                           ?>

  //                                           ];
  //                                           dashboard('#dashboard',freqData);

  $(document).ready(function(){  
    $('#bbtn').click(function(){

     for (var i = 0; i < 3; i++) {
      if($('.'+i+'-a').text()!=''){
        alert($('.'+i+'-a').text());
        alert($('.'+i+'-file').val());
        alert($('.'+i+'-sel').val());
      }

     };
    });
    $("#add").click(function(){
      $('#bre').append('<tr style="background-color:white;"><td contenteditable="true" class="1-a"></td><td contenteditable="true" class="1-b"></td><td><input type="file" class="1-file"></td><td><select class="1-sel"><option>1</option><option>2</option></select></td><td contenteditable="true"></td><td contenteditable="true"></td></tr>');
    });
   $(function () {

    var defaultTitle = "Performa Serapan Anggaran Tahun 2016";
    var drilldownTitle = "Performa Serapan Anggaran Jurusan ";

    var chart = new Highcharts.Chart({

      chart: {
        type: 'column',
        renderTo: 'container',
        events: {
          drilldown: function(e) {
            chart.setTitle({ text: drilldownTitle + e.point.name });
          },
          drillup: function(e) {
            chart.setTitle({ text: defaultTitle });
          }
        }
      },
      title: {
        text: defaultTitle
      },
      subtitle: {
        text: 'Pengadaan Alat POLBAN'
      },
      xAxis: {
        // categories: [
        // 'Komputer &Informatika',
        // 'Sipil',
        // 'Mesin',
        // 'Administrasi Niaga',
        // 'Refrigerasi dan Tata Udara',
        // 'Konversi Energi',
        // 'Elektro',
        // 'Kimia',
        // 'Akuntansi',
        // 'Bahasa Inggris',
        // 'MKU',
        // ],
        type: 'category',
        crosshair: true
      },
      yAxis: {
        min: 0,
        title: {
          text: 'Anggaran (Rp. juta)'
        }
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px"><b>{point.key}</b></span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        '<td style="padding:0"><b>{point.y:.1f} Juta</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0
        }
      },
      series: [{
        name: 'Target',
        data: [
        {name:'Komputer & Informatika',y: 100, drilldown: '1t'},
        {name:'Sipil',y: 100, drilldown: '1t'},
        {name:'Mesin',y: 600, drilldown: '1t'},
        {name:'Administrasi Niaga',y: 400, drilldown: '1t'},
        {name:'Refrigerasi dan Tata Udara',y: 120, drilldown: '1t'},
        {name:'Konversi Energi',y: 330, drilldown: '1t'},
        {name:'Elektro',y: 120, drilldown: '1t'},
        {name:'Kimia',y: 510, drilldown: '1t'},
        {name:'Akuntansi',y: 120, drilldown: '1t'},
        {name:'Bahasa Inggris',y: 130, drilldown: '1t'},
        {name:'MKU',y: 120, drilldown: '1t'},
        ]
            // [100,100,600,400,120,330,120,510,520,130,120]

          },
          {
            name: 'Aktual',
            data: [
            {name:'Komputer & Informatika',y: 90, drilldown: '1a'},
            {name:'Sipil',y: 85, drilldown: '1a'},
            {name:'Mesin',y: 400, drilldown: '1a'},
            {name:'Administrasi Niaga',y: 400, drilldown: '1a'},
            {name:'Refrigerasi dan Tata Udara',y: 120, drilldown: '1a'},
            {name:'Konversi Energi',y: 130, drilldown: '1a'},
            {name:'Elektro',y: 100, drilldown: '1a'},
            {name:'Kimia',y: 510, drilldown: '1a'},
            {name:'Akuntansi',y: 420, drilldown: '1a'},
            {name:'Bahasa Inggris',y: 120, drilldown: '1a'},
            {name:'MKU',y: 120, drilldown: '1a'},
            ]
        // [90,85,400,400,120,130,100,510,420,120,120]

      }],
      drilldown: {
        series: [{
          id: '1t',
          name: 'Target',
          data: [
          ['2016', 100],
          ['2015', 80],
          ['2014', 120],
          ['2013', 100]
          ]
        },
        {
          id: '1a',
          name: 'Aktual',
          data: [
          ['2016', 90],
          ['2015', 80],
          ['2014', 100],
          ['2013', 100]
          ]
        }]
      }
    });
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})   
$('.datepicker').datepicker({       
  format:'dd M yyyy' , 
  autoclose: true,
  orientation: 'bottom'    
}); 
});
</script>


</body>

</html>

