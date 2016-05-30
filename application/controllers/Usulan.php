<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usulan extends CI_Controller {

	public function usulan(){
		parent::__construct();
		$this->load->model("m_usulan");
		$this->load->model("m_pagu");
		$this->load->model("m_lokasi");
		$this->load->model("m_alat");
	}

	public function index(){
		$this->load->view('top');
		$id = 1;//$this->session->userdata("id_jurusan");
		$data['usulan']=$this->m_usulan->getUsulanByIdJurusan($id);
		$this->load->view('usulan/usulan_view',$data);
		$this->load->view('bottom');
	}

	//Menampilkan form add usulan
	public function addUsulan(){
		$id = 1;//$this->session->userdata("id_jurusan");
		$tahun = date("Y");
		$data['pagu']=$this->m_pagu->getCurrentPaguByIdJurusan($id,$tahun);
		$resLokasi=$this->m_lokasi->getLokasiByIdJurusan($id);
		$lokasi=array();
		foreach($resLokasi as $re){	
			$lokasi[]=$re['NAMA_LOKASI'];
		}
		$data['lokasi']=json_encode($lokasi);
		$this->load->view('top');
		$this->load->view('usulan/usulan_add',$data);
	}

	//Save Usulan
	public function saveUsulan(){
		$p=$this->input->post();
		$param=array(
			'id_jurusan'=>1,//$this->session->userdata("id_jurusan");,
			'id_user'=>1,
			'nama'=>$p['nama'],
			'total'=>$p['total'],
			'tahun'=>date("Y")
			);
		$res=$this->m_usulan->saveUsulan($param);
		print($res);
	}

	//Save Alat
	public function saveAlat(){
		//$data="[[\"NAMA BARANG\",\"SPESIFIKASI\",\"SETARA\",\"SATUAN\",\"JUMLAH ALAT\",\"HARGA SATUAN\",\"TOTAL (Rp)\",\"LOKASI\",\"JUMLAH DISTRIBUSI\",\"REFERENSI TERKAIT\",\"DATA AHLI\"],[\"barang\",\"spek\",\"setara\",\"Set\",18,50000,900000,\"RSG\",10,\"<input type='file'>\",\"<input type='checkbox'>\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"<input type='file'>\",\"<input type='checkbox'>\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"<input type='file'>\",\"<input type='checkbox'>\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"<input type='file'>\",\"<input type='checkbox'>\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"<input type='file'>\",\"<input type='checkbox'>\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"<input type='file'>\",\"<input type='checkbox'>\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"<input type='file'>\",\"<input type='checkbox'>\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]]";
		$config['upload_path']   =   "assets/referensi";
		$config['allowed_types'] =   "*"; 
		$config['max_size']      =   "50000";
		$this->load->library('upload',$config);

		
		if(!$this->upload->do_upload('file')){
			//echo $this->upload->display_errors();
			$finfo['file_name']="";
		}else{
			$finfo=$this->upload->data();
		}
		$p=$this->input->post();
		$p['id_jurusan']=1;
		$p['id_user']=1;
		$p['ref']=$finfo['file_name'];
		$lokasi = $this->m_lokasi->getIdLokasiByName($p['id_jurusan'],$p['lokasi']);
		if(empty($lokasi)){
			$p['id_lokasi']='';
		}else{
			$p['id_lokasi']=$lokasi['ID_LOKASI'];	
		}
		if($p['data_ahli']==true){
			$p['data_ahli']=1;
		}else{
			$p['data_ahli']=0;
		}
		$this->m_alat->saveAlat($p);
	}

	public function detailUsulan($p){
		$id = 1;//$this->session->userdata("id_jurusan");
		$max=$this->m_alat->getMaxRevisi($p);
		$usulan = $this->m_usulan->getUsulanByIdUsulan($p);
		$alat = $this->m_alat->getAlatByIdUsulan($usulan['ID_USULAN']);
		$resLokasi=$this->m_lokasi->getLokasiByIdJurusan($id);
		$lokasi=array();
		foreach($resLokasi as $re){	
			$lokasi[$re['ID_LOKASI']]=$re['NAMA_LOKASI'];
		}
		$data['lokasi']=json_encode(array_values($lokasi));
		$data['usulan']=$usulan;
		$data['max']=$max;
		$res[0] = array('NAMA ALAT', 'SPESIFIKASI', 'SETARA', 'SATUAN', 'JUMLAH ALAT', 'HARGA SATUAN', 'TOTAL (Rp)','LOKASI','JUMLAH DISTRIBUSI','REFERENSI TERKAIT','DATA AHLI','KONFIRMASI');
		foreach($alat as $a){
			if($a['DATA_AHLI']==1){
				$ahli = true;
			}else{
				$ahli = false;
			}
			$res[]=array($a['NAMA_ALAT'], $a['SPESIFIKASI'], $a['SETARA'], $a['SATUAN'], $a['JUMLAH_ALAT'], $a['HARGA_SATUAN'], $a['JUMLAH_ALAT']*$a['HARGA_SATUAN'], $lokasi[$a['ID_LOKASI']],$a['JUMLAH_DISTRIBUSI'],"<a target='_blank' href='".base_url()."assets/referensi/".$a['REFERENSI_TERKAIT']."'>aa</a> <input name='file[]' type='file'>",$ahli,'');
		}
		for($i=0;$i<9;$i++){
			$res[]=array('', '', '', '', '', '', '','','',"<input name='file[]' type='file'>",false,'');
		}
		//print_r($res);
		$data['alat']=json_encode($res);
		$this->load->view('top');
		$this->load->view("usulan/usulan_detail",$data);
	}

	public function updateAlat(){
		//$data="[[\"NAMA BARANG\",\"SPESIFIKASI\",\"SETARA\",\"SATUAN\",\"JUMLAH ALAT\",\"HARGA SATUAN\",\"TOTAL (Rp)\",\"LOKASI\",\"JUMLAH DISTRIBUSI\",\"REFERENSI TERKAIT\",\"DATA AHLI\"],[\"barang\",\"spek\",\"setara\",\"Set\",18,50000,900000,\"RSG\",10,\"<input type='file'>\",\"<input type='checkbox'>\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"<input type='file'>\",\"<input type='checkbox'>\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"<input type='file'>\",\"<input type='checkbox'>\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"<input type='file'>\",\"<input type='checkbox'>\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"<input type='file'>\",\"<input type='checkbox'>\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"<input type='file'>\",\"<input type='checkbox'>\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"<input type='file'>\",\"<input type='checkbox'>\"],[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]]";
		$config['upload_path']   =   "assets/referensi";
		$config['allowed_types'] =   "*"; 
		$config['max_size']      =   "50000";
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload('file')){
			//echo $this->upload->display_errors();
			$finfo['file_name']="";
		}else{
			$finfo=$this->upload->data();
		}
		$p=$this->input->post();
		$p['id_jurusan']=1;
		$p['id_user']=1;
		$p['ref']=$finfo['file_name'];
		$lokasi = $this->m_lokasi->getIdLokasiByName($p['id_jurusan'],$p['lokasi']);
		if(empty($lokasi)){
			$p['id_lokasi']='';
		}else{
			$p['id_lokasi']=$lokasi['ID_LOKASI'];	
		}
		if($p['data_ahli']==true){
			$p['data_ahli']=1;
		}else{
			$p['data_ahli']=0;
		}
		$this->m_alat->saveUpdateAlat($p);
	}

}

?>