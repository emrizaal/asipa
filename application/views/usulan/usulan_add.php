<?php
//$this->load->view("info_header");
?>
<div class="app-container-slide">
  <div class="container-fluid">
    <div class="side-body padding-top"  style="padding-top:85px;">
     <div class="row no-margin-bottom">
      <div class="col-xs-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">
              <span class="title">Form Tambah Usulan Pengadaan</span>
            </div>
          </div>
          <div class="card-body">
           <div class="text-center">
            <h5>
              USULAN PENGADAAN ALAT
            </h5>
            <h5>
              TAHUN ANGGARAN 2016
            </h5>
            <br>
          </div>
          <form class="form-horizontal row-fluid form-usulan-noborder">
            <div class="col-md-4">
              <div class="control-group ">
                <label class="control-label " >Nama Paket</label>
                <div class="controls">
                  <input type="text" name="NM_PAKET" id="NM_PAKET"  value="" class="form-control">
                </div>
              </div>
              <div class="control-group ">
                <label class="control-label " >Sisa Pagu</label>
                <div class="controls">
                  <span class="pagu_alat"><?=$pagu['PAGU_ALAT']?></span>
                </div>
              </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4" style="margin-bottom: 2%;">
              <div class="control-group ">
                <label class="label-jumlah" >Jumlah </label>
                <div class="controls">
                  <input type="text" id="totalAnggaran" readonly value="" class="form-control">
                </div>
              </div>
              <div class="control-group ">
                <label class="label-jumlah" >Jumlah + Biaya Kirim </label>
                <div class="controls">
                  <input type="text" id="totalAnggaranKeuntungan" readonly value="" class="form-control">
                </div>
              </div>
              <div class="control-group ">
                <label class="label-jumlah" >Jumlah + Biaya Kirim + Pajak </label>
                <div class="controls">
                  <input type="text" id="totalAnggaranKeuntunganPajak" readonly value="" class="form-control">
                </div>
              </div>
            </div>
          </form>
          <br>
          <div class="row-fluid " style="height:auto;background:#fff">
            <div id="dataTable" style="width:100%; height:300px; overflow: hidden;">  </div>
            <br><br>
            <center>
              <div class="control-group">
                <div class="controls">
                  <a id="addRow" class="btn btn-info">Add New Row</a>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <a id="Save" class="btn btn-success">Save</a>
                  <a href="<?=base_url()?>c_usulan" class="btn btn-warning">Cancel</a>
                </div>
              </div>
              <center>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/.module-->
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
<script type="text/javascript" src="<?=base_url()?>assets/lib/js/select2.full.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/js/ace/ace.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/js/ace/mode-html.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/js/ace/theme-github.js"></script>
<!-- Javascript -->
<script type="text/javascript" src="<?=base_url()?>assets/js/app.js"></script>


<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/handsontable/dist/handsontable.full.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/handsontable/plugins/editRow/editRow.css">
<script type="text/javascript" src="<?=base_url()?>assets/handsontable/dist/handsontable.full.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/handsontable/plugins/jqueryHandsontable.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/handsontable/plugins/editRow/editRow.js"></script>

<script>
  $(document).ready(function () {
   $("#addRow").click(function(){
     var ht = $("#dataTable").handsontable("getInstance");
     ht.alter('insert_row');
   });
   
   $("#Save").click(function(e){
    var rowUsulan = $("#dataTable").handsontable("getData");
    var jsUsulan=JSON.stringify(rowUsulan);
    $.ajax({
      url: '<?=base_url()?>Usulan/saveUsulan',
      type: "POST",
      data: { 
        "data": jsUsulan,
        "nm_paket": $("#NM_PAKET").val() 
      },
      success : function(res){
        //var data = JSON.parse(res);
        console.log("berhasil"+res);
      },
      error: function (msg) {
        console.log("gagal");
        return false;
      }

    })
        //alert("res usulan : " + resUsulan);
        //e.preventDefault();
      }); 
 }); 


</script>
<script data-jsfiddle="excel1">

  var
  data1 = [
  ['NAMA BARANG', 'SPESIFIKASI', 'SETARA', 'SATUAN', 'JUMLAH ALAT', 'HARGA SATUAN', 'TOTAL (Rp)','LOKASI','JUMLAH DISTRIBUSI','REFERENSI TERKAIT','DATA AHLI'],
  ['', '', '', '', '', '', '','','',"<input type='file'>","<input type='checkbox'>"],
  ['', '', '', '', '', '', '','','',"<input type='file'>","<input type='checkbox'>"],
  ['', '', '', '', '', '', '','','',"<input type='file'>","<input type='checkbox'>"],
  ['', '', '', '', '', '', '','','',"<input type='file'>","<input type='checkbox'>"],
  ['', '', '', '', '', '', '','','',"<input type='file'>","<input type='checkbox'>"],
  ['', '', '', '', '', '', '','','',"<input type='file'>","<input type='checkbox'>"],
  ['', '', '', '', '', '', '','','',"<input type='file'>","<input type='checkbox'>"],
  ['', '', '', '', '', '', '','','','','']
  ],
  container1 = document.getElementById('dataTable'),
  hot1;

  function firstRowRenderer(instance, td, row, col, prop, value, cellProperties) {
    Handsontable.renderers.TextRenderer.apply(this, arguments);
    td.style.fontWeight = 'bold';
    td.style.color = 'white';
    td.style.background = '#5B9BD5';
  }

  function TotalRowRenderer(instance, td, row, col, prop, value, cellProperties) {
    Handsontable.renderers.NumericRenderer.apply(this, arguments);
    td.style.fontWeight = 'bold';
    td.style.color = 'white';
    td.style.background = '#3cbc8d';
    td.style.textAlign = 'right'; 
  }

  function KeyRowRenderer(instance, td, row, col, prop, value, cellProperties) {
    Handsontable.renderers.TextRenderer.apply(this, arguments);
    td.style.display = 'none';
  }

  $("#dataTable").handsontable( {
    data: data1,
    minSpareRows: 1,
    rowHeaders: true,
    colHeaders: false,
    contextMenu: false,
    fixedColumnsLeft: 2,
    fixedRowsTop:1,
    outsideClickDeselects: false,
    mergeCells: [
    {row: 0, col: 0, rowspan: 1, colspan: 1},
    {row: 0, col: 1, rowspan: 1, colspan: 1},
    {row: 0, col: 2, rowspan: 1, colspan: 1},
    {row: 0, col: 3, rowspan: 1, colspan: 1},
    {row: 0, col: 4, rowspan: 1, colspan: 1},
    {row: 0, col: 5, rowspan: 1, colspan: 1},
    {row: 0, col: 6, rowspan: 1, colspan: 1},
    {row: 0, col: 7, rowspan: 1, colspan: 1},
    {row: 0, col: 8, rowspan: 1, colspan: 1},
    {row: 0, col: 9, rowspan: 1, colspan: 1},
    {row: 0, col: 10, rowspan: 1, colspan: 1}
    ],
    cell: [
    {row: 0, col: 0, className: "htCenter htMiddle"},
    {row: 0, col: 1, className: "htCenter htMiddle"},
    {row: 0, col: 2, className: "htCenter htMiddle"},
    {row: 0, col: 3, className: "htCenter htMiddle"},
    {row: 0, col: 4, className: "htCenter htMiddle"},
    {row: 0, col: 5, className: "htCenter htMiddle"},
    {row: 0, col: 6, className: "htCenter htMiddle"},
    {row: 0, col: 7, className: "htCenter htMiddle"},
    {row: 0, col: 8, className: "htCenter htMiddle"},
    {row: 0, col: 9, className: "htCenter htMiddle"},
    {row: 0, col: 10, className: "htCenter htMiddle"}
    ],
    columns: [
    {
      width:200,
      renderer:"html"
    },
    {
      width:200,
      renderer:"html"
    },
    {
      width:150,
      renderer:"html"
    },
    {
      type: 'autocomplete',
      source: ['Unit','Set'],
      strict: false
    },
    {
      type: 'numeric',
      format: '0,0',
      language: 'en',
      width:80
    },
    {
      type: 'numeric',
      format: '0,0.00',
      language: 'en',
      alignment: 'right',
      validator: 'numericValidator', 
      allowInvalid: false
    },
    {
      type: 'numeric',
      format: '0,0.00',
      language: 'en',
      readOnly: true
    },
    {
      type: 'autocomplete',
      source: <?=$lokasi?>,
      strict: false,
      width:150
    },
    {
      type: 'numeric',
      renderer:"html"
    },
    {
      width:100,
      renderer:"html"
    },
    {
      width:100,
      renderer:"html"
    }

    ],
    cells: function (row, col, prop) {
      var cellProperties = {};

      if (row === 0 || this.instance.getData()[row][col] === 'readOnly') {
            cellProperties.readOnly = true; // make cell read-only if it is first row or the text reads 'readOnly'
          }
          if (row === 0) {
            cellProperties.renderer = firstRowRenderer; // uses function directly
          }
      if(col === 6){
        cellProperties.renderer = TotalRowRenderer;  
      }

      return cellProperties;
    },
    afterChange : function(changes, source){

      if(changes != null){
        var row = changes[0][0];
        var col = changes[0][1];
        var oldVal = changes[0][2];
        var newVal = changes[0][3];
      }
      var ht = $('#dataTable').handsontable('getInstance');

      if(col===4 || col===5){
        var qty = ht.getData()[row][4];
        var harga = ht.getData()[row][5];

        if(qty != 0 || harga != 0){
          ht.setDataAtCell(row, 6, qty*harga); 
        }  
      }

              // if(col===4){
              //   ht.setDataAtCell(row, 8, newVal);   
              // }

            //COunt Total Anggaran
            var totRow = ht.countRows();
            var  totAnggaran = 0;
            for(var i=1; i<totRow; i++){
              if(ht.getData()[i][6] != null){
                totAnggaran = Number(totAnggaran) + ht.getData()[i][6];
                console.log(totAnggaran);
              }
            }


            
            $("#totalAnggaran").val(totAnggaran);
            
            var keuntungan = (10/100)*Number(totAnggaran);
            var jumlahKeuntungan = Number(totAnggaran) + Number(keuntungan);
            $("#totalAnggaranKeuntungan").val(jumlahKeuntungan);
            //$("#totalAnggaranKeuntungan").val(accounting.formatMoney(jumlahKeuntungan, "Rp", 2, ",", "."));
            
            var pajak = (10/100)*Number(jumlahKeuntungan);
            var jumlahKeuntunganPajak = Number(jumlahKeuntungan) + Number(pajak);
            $("#totalAnggaranKeuntunganPajak").val(jumlahKeuntunganPajak);
            
            var pagu = <?=$pagu['PAGU_ALAT']?>;
            $(".pagu_alat").text(Number(pagu)-jumlahKeuntunganPajak);

          }                            

        });




</script>


</body>

</html>
