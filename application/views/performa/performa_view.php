<!-- Main Content -->
<?php
// $this->load->view("info_header");
?>
<div class="app-container-slide">
  <div class="container-fluid">
    <div class="side-body padding-top"  style="padding-top:90px;">

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
                <table class="table table-stripped table-bordered table-hover">
                  <tr class="active">
                    <th>Jurusan</th>
                    <th>Tahun Anggaran</th>
                    <th>Target Anggaran Pengadaan</th>
                    <th>Aktualisasi Anggaran Pengadaan</th>    
                    <th>Realisasi Anggaran Pengadaan (%) </th>    
                    <th>Aksi</th>
                  </tr>
                   <tr>
                   <td> Teknik Komputer & Informatika </td>
                   <td> 2016 </td>
                   <td> Rp. <?=number_format(100000000,'0',',','.') ?> juta </td>
                   <td> Rp. <?=number_format(90000000,'0',',','.') ?> juta </td>
                   <td> <?= number_format(90,'2',',','.') ?> % </td>
                   <td> <a href="#"> Lihat </a> </td>
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

<script src="<?=base_url()?>assets/highchart/js/highcharts.js"></script>
<script src="<?=base_url()?>assets/highchart/js/modules/exporting.js"></script>

<script>
    $(document).ready(function(){  
       $(function () {
    $('#container').highcharts({
      chart: {
        type: 'column'
      },
      title: {
        text: 'Performa Serapan Anggaran Tahun 2016'
      },
      subtitle: {
        text: 'Pengadaan Alat POLBAN'
      },
      xAxis: {
        categories: [
        'Komputer &Informatika',
        'Sipil',
        'Mesin',
        'Administrasi Niaga',
        'Refrigerasi dan Tata Udara',
        'Konversi Energi',
        'Elektro',
        'Kimia',
        'Akuntansi',
        'Bahasa Inggris',
        'MKU',
        ],
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
        data: [100,100,600,400,120,330,120,510,520,130,120]

      },
      {
        name: 'Aktual',
        data: [90,85,400,400,120,130,100,510,420,120,120]

      }]
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

