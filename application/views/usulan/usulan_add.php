<?php
$this->load->view("info_header");
?>
<div class="app-container-slide">
    <div class="container-fluid">
        <div class="module">
            <div class="module-head">
                <h3>
                    Form Add Usulan Pengadaan

                </h3>
            </div>
            <div class="module-body table">
             <div class="align-center">
                <h5>
                  HARGA PERKIRAAN SENDIRI
              </h5>
              <h5>
                  PENGADAAN 
              </h5>
              <h5>
                  POLITEKNIK NEGERI BANDUNG
              </h5>
              <h5>
                  TAHUN ANGGARAN 2015
              </h5>
              <br>
          </div>
          <div class="form-usulan">
            <form class="form-horizontal row-fluid form-usulan-noborder">
                <div class="span5">
                    <div class="control-group ">
                        <label class="control-label " >Nama Paket</label>
                        <div class="controls">
                            <input type="text" name="NM_PAKET" id="NM_PAKET"  value="" class="span8">
                        </div>
                    </div>
                </div>
                <div class="span2"></div>
                <div class="span5">
                    <div class="control-group ">
                        <label class="label-jumlah" >Jumlah </label>
                        <div class="controls">
                            <input type="text" id="totalAnggaran" readonly value="" class="span8">
                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="label-jumlah" >Jumlah + Biaya Kirim </label>
                        <div class="controls">
                            <input type="text" id="totalAnggaranKeuntungan" readonly value="" class="span8">
                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="label-jumlah" >Jumlah + Biaya Kirim + Pajak </label>
                        <div class="controls">
                            <input type="text" id="totalAnggaranKeuntunganPajak" readonly value="" class="span8">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<!--/.module-->

<div class="row-fluid " style="height:450px;background:#fff">
    <div id="dataTable" style="width:100%; height:300px; overflow: hidden;">  </div>
    <br><br>
    <center>
        <div class="control-group">
            <div class="controls">
              <a id="addRow" class="btn btn-success">Add New Row</a>
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

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/handsontable/dist/handsontable.full.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/handsontable/plugins/editRow/editRow.css">
<script type="text/javascript" src="<?=base_url()?>assets/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/handsontable/dist/handsontable.full.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/handsontable/plugins/jqueryHandsontable.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/handsontable/plugins/editRow/editRow.js"></script>

  <script>
    jQuery(document).ready(function ($) {
        $("#Save").click(function(e){
            var rowUsulan = $("#dataTable").handsontable("getData");
            var resUsulan = JSON.stringify(rowUsulan);
        //alert("row usulan : " + rowUsulan);
        //alert("res usulan : " + resUsulan);

        
        $.ajax({
            url: '<?=base_url()?>c_usulan/addUsulan',
            type: "POST",
            data: { 
                "dataUsulan": resUsulan,
                "kd_unit": 'a',
                "nm_paket": $("#NM_PAKET").val() 
            },
            //dataType : 'json',
            success : function(res){

                //alert("result : " + res);
                var data = JSON.parse(res);
                if(data['msg']==true){
                    //alert("Data Berhasil Disimpan " + data['kd_paket']);
                    
                    var typefile = ["file_usulan", "file_hps"];
                    for(var i=0;i<2;i++){

                        $.ajax({
                            url: '<?=base_url()?>c_usulan/generateHps',
                            type: "POST",
                            data: { "kd_paket" : data["kd_paket"], "path":typefile[i]},
                            success : function(res){

                            },
                            error: function (msg) {

                            }

                        })

                    }
                    
                    //alert(data['kd_paket']);
                    
                    $.ajax({
                        url: '<?=base_url()?>c_main/setMessage',
                        type: "POST",
                        data: { "result" : data['msg'], 
                        "kd_paket":data['kd_paket'],
                        "nm_paket": $("#NM_PAKET").val()
                    },
                    success : function(res){

                        window.location.replace("<?=base_url()?>c_usulan");
                            //e.preventDefault();
                        }

                    })


                }
                else {
                    alert("Data Gagal Disimpan "+ data['msg'] + " and kd_paket " + data['kd_paket']);
                    e.preventDefault();
                }
                


            },
            error: function (msg) {
                alert("masuk error :" + msg );
                return false;
            }

        })
        //alert("res usulan : " + resUsulan);
        //e.preventDefault();
    }) 

$("#addRow").click(function(e){
    var ht = $("#dataTable").handsontable("getInstance");
    ht.alter('insert_row');
}) 
}); 


</script>
<script data-jsfiddle="excel1">

  var
  data1 = [
  ['NAMA BARANG', 'SPESIFIKASI', 'SETARA', 'SATUAN', 'JUMLAH TOTAL', 'HARGA SATUAN', 'TOTAL (Rp)','DISTRIBUSI','KD ITEM'],
  ['', '', '', '', '', '', '','JURUSAN','JUMLAH','LAB',''],
  ['', '', '', '', '', '', '','','','',''],
  ['', '', '', '', '', '', '','','','',''],
  ['', '', '', '', '', '', '','','','',''],
  ['', '', '', '', '', '', '','','','',''],
  ['', '', '', '', '', '', '','','','',''],
  ['', '', '', '', '', '', '','','','',''],
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
    fixedRowsTop:2,
    outsideClickDeselects: false,
    mergeCells: [
    {row: 0, col: 0, rowspan: 2, colspan: 1},
    {row: 0, col: 1, rowspan: 2, colspan: 1},
    {row: 0, col: 2, rowspan: 2, colspan: 1},
    {row: 0, col: 3, rowspan: 2, colspan: 1},
    {row: 0, col: 4, rowspan: 2, colspan: 1},
    {row: 0, col: 5, rowspan: 2, colspan: 1},
    {row: 0, col: 6, rowspan: 2, colspan: 1},
    {row: 0, col: 7, rowspan: 1, colspan: 3},
    {row: 0, col: 10, rowspan: 2, colspan: 1}
    ],
    cell: [
    {row: 0, col: 0, className: "htCenter htMiddle"},
    {row: 0, col: 1, className: "htCenter htMiddle"},
    {row: 0, col: 2, className: "htCenter htMiddle"},
    {row: 0, col: 3, className: "htCenter htMiddle"},
    {row: 0, col: 4, className: "htCenter htMiddle"},
    {row: 0, col: 5, className: "htCenter htMiddle"},
    {row: 0, col: 6, className: "htCenter htMiddle"},
    {row: 0, col: 7, className: "htCenter"},
    {row: 0, col: 10, className: "htCenter htMiddle"}
    ],
    columns: [
    {
      type: 'autocomplete',
              source: ['Kelas D1', 'RSG','Lab RPL','Lab Proyek','Lab Database','Lab Multimedia'],
              strict: false
              // allowInvalid: true // true is default
          },
          {
              width:200,
              renderer:"html"
          },
          {
              width:150
          },
          {
              type: 'autocomplete',
              source: ['Kelas D1', 'RSG','Lab RPL','Lab Proyek','Lab Database','Lab Multimedia'],
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

            width:140
              /*
              type: 'text',
              source: ['JTK'],
              strict: true
              */
              // allowInvalid: true // true is default
          },
          {
            readOnly: true
        },
        {
            type: 'autocomplete',
                source: ['Kelas D1', 'RSG','Lab RPL','Lab Proyek','Lab Database','Lab Multimedia'],
                strict: false,
                width:120 
                // allowInvalid: true // true is default
            },
            {
                readonly:true
            }
            
            ],
            cells: function (row, col, prop) {
              var cellProperties = {};

              if (row === 0 || row === 1 || this.instance.getData()[row][col] === 'readOnly') {
            cellProperties.readOnly = true; // make cell read-only if it is first row or the text reads 'readOnly'
        }
        if (row === 0 || row === 1) {
            cellProperties.renderer = firstRowRenderer; // uses function directly
        }
        if(col === 6){
            cellProperties.renderer = TotalRowRenderer;  
        }


        if(col === 10){
            cellProperties.renderer = KeyRowRenderer;   
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

            //set harga from master barang
            if(col === 0 || col===3) {

                //Apakah Barang berdasarkan nama dan satuan sudah tercatat di db
                //jika ya, harga di set, jika tidak , harga kosong
                $.ajax({
                    url: '<?=base_url()?>c_barang/getHargaBarangByNameSatuan',
                    type: "POST",
                    data: { 
                      "namaBrg": ht.getData()[row][0],
                      "satuanBrg": ht.getData()[row][3] 
                  },
                  success: function (res) {
                    if(res != null){

                        //var data = JSON.parse(res); //jQuery.parseJSON(res);
                        //alert("data : " + res + " - " + data + " nmBrg : " + newVal + " - " +data['NM_BARANG']  );
                        
                        //ht.setDataAtCell(row, 3, data['SATUAN']); 
                        ht.setDataAtCell(row, 4, 1); 
                        ht.setDataAtCell(row, 5, res); 
                    }

                },
                error: function (msg) {
                        //alert("masuk error :" + msg );
                    }
                })  

                ht.setDataAtCell(row, 7, ''); 
            }

            if(col===4 || col===5){
              var qty = ht.getData()[row][4];
              var harga = ht.getData()[row][5];

              if(qty != 0 || harga != 0){
                  ht.setDataAtCell(row, 6, qty*harga); 
              }  
          }

          if(col===4){
              ht.setDataAtCell(row, 8, newVal);   
          }

            //COunt Total Anggaran
            var totRow = ht.countRows();
            var  totAnggaran = 0;
            for(var i=2; i<totRow; i++){
                if(ht.getData()[i][6] != null){
                    totAnggaran = Number(totAnggaran) + ht.getData()[i][6];
                    
                }
            }
            
            //alert( totAnggaran);
            //Set Total Anggaran
            $("#totalAnggaran").val("");
            //$("#totalAnggaran").val(accounting.formatMoney(totAnggaran, "Rp", 2, ",", "."));

            
            //Set Jumlah + Keuntungan
            var keuntungan = (10/100)*Number(totAnggaran);
            var jumlahKeuntungan = Number(totAnggaran) + Number(keuntungan);
            $("#totalAnggaranKeuntungan").val("");
            //$("#totalAnggaranKeuntungan").val(accounting.formatMoney(jumlahKeuntungan, "Rp", 2, ",", "."));
            
            //Set Jumlah + Keuntungan + Pajak
            var pajak = (10/100)*Number(jumlahKeuntungan);
            var jumlahKeuntunganPajak = Number(jumlahKeuntungan) + Number(pajak);
            $("#totalAnggaranKeuntunganPajak").val("");
            //$("#totalAnggaranKeuntunganPajak").val(accounting.formatMoney(jumlahKeuntunganPajak, "Rp", 2, ",", "."));
            
        }                            
        
    });




</script>



