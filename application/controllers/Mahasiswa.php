<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mDatabase');
		if ($this->session->userdata('level') == 'mahasiswa') {
			$this->username 	= $this->session->userdata('username');
			$this->smt_aktif 	= $this->session->userdata('smt_aktif');
		} else {
			redirect("auth");
		}
	}
	public function index()
	{
		header("Access-Control-Allow-Origin: *");
		$data = array();
        $this->template->load('mahasiswa/vTemplate', 'contents' , 'mahasiswa/vBeranda', $data);
	}
	public function Biodata()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Biodata Penghuni";
		$data['biodata'] = $this->mDatabase->get_where('tb_biodata_penghuni', array("npm" => $this->username))->row();
        $this->template->load('mahasiswa/vTemplate', 'contents' , 'mahasiswa/vBiodata', $data);
	}
	public function Kamar()
	{
		header("Access-Control-Allow-Origin: *");
        $data['kamar'] = $this->mDatabase->get_where('tb_penghuni_kamar', array("npm" => $this->username, "keterangan" => 'aktif'))->row();
        if(isset($data['kamar'])){
        	$this->template->load('mahasiswa/vTemplate', 'contents' , 'mahasiswa/vInfo_Kamar', $data);
    	}else{
    		$masa_pendaftaran=$this->mDatabase->get('tb_umum')->row()->masa_pendaftaran;
    		if($masa_pendaftaran=='1'){
				$data['lantai'] = $this->mDatabase->get('tb_lantai');
		        foreach($data['lantai']->result() as $lantai){
		            $data['lantai'.$lantai->id_lantai] = $this->mDatabase->get_kamar($lantai->id_lantai);
		        }
	        	$data['maks_penghuni_per_kamar'] = $this->mDatabase->get('tb_umum')->row()->penghuni_per_kamar;
		        $this->template->load('mahasiswa/vTemplate', 'contents' , 'mahasiswa/vData_Kamar', $data);
		    }else{
		    	$data['message'] = "Saat ini bukan masa Pendaftaran!";
		    	$this->template->load('mahasiswa/vTemplate', 'contents' , 'mahasiswa/vTidak_Sewa_Kamar', $data);	
		    }
    	}
	}
	public function Pembayaran()
	{
		header("Access-Control-Allow-Origin: *");
        $kamar = $this->mDatabase->get_where('tb_penghuni_kamar', array("npm" => $this->username, "keterangan" => 'aktif'))->row();
        if(isset($kamar)){
	        $data['pembayaran'] = $this->mDatabase->get_where('vw_pembayaran', array("id_penghuni" => $kamar->id_penghuni))->row();
        	$data['detail_pembayaran'] = $this->mDatabase->get_where('tb_pembayaran', array("id_penghuni" => $kamar->id_penghuni));
        	$this->template->load('mahasiswa/vTemplate', 'contents' , 'mahasiswa/vPembayaran', $data);
    	}else{
		    	$data['message'] = "Anda Belum Menyewa Kamar. Silahkan sewa kamar terlebih dahulu untuk mengakses halaman ini!";
		    	$this->template->load('mahasiswa/vTemplate', 'contents' , 'mahasiswa/vTidak_Sewa_Kamar', $data);	
	    }
	}
	public function Tambah_Pembayaran($id_penghuni)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Pembayaran";
		$data['id_pembayaran'] = "";
		$data['id_penghuni'] = $id_penghuni;
		$data['jumlah_bayar'] = "";
		$data['tgl_bayar'] = date('d-m-Y H:i:s', time());
		$data['lampiran'] = "";
        $this->template->load('mahasiswa/vTemplate', 'contents' , 'mahasiswa/vForm_Pembayaran', $data);
	}
	public function Edit_Pembayaran($id_pembayaran)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Edit Pembayaran";
		$pembayaran = $this->mDatabase->get_where('tb_pembayaran', array("id_pembayaran" => $id_pembayaran))->row();
		$data['id_pembayaran'] = $pembayaran->id_pembayaran;
		$data['id_penghuni'] = $pembayaran->id_penghuni;
		$data['jumlah_bayar'] = $pembayaran->jumlah_bayar;
		$data['tgl_bayar'] = date('d-m-Y H:m:s', strtotime($pembayaran->tgl_bayar));
		$data['lampiran'] = $pembayaran->lampiran;
        $this->template->load('mahasiswa/vTemplate', 'contents' , 'mahasiswa/vForm_Pembayaran', $data);
	}
	public function Umum()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Informasi Umum Website";
		$data['config'] = $this->mDatabase->get('tb_umum')->row();
        $this->template->load('mahasiswa/vTemplate', 'contents' , 'mahasiswa/vUmum', $data);
	}
	public function Info_Daftar()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Informasi Pendaftaran";
		$config = $this->mDatabase->get('tb_umum')->row();
		$data['semester_aktif'] = $config->semester_aktif;
		$data['masa_pendaftaran'] = $config->masa_pendaftaran;
        $this->template->load('mahasiswa/vTemplate', 'contents' , 'mahasiswa/vInfo_Daftar', $data);
	}
	public function Fasilitas()
	{
		header("Access-Control-Allow-Origin: *");
        $data['fasilitas'] = $this->mDatabase->get_where('tb_gambar',array('jenis'=>'fasilitas'));
        $this->template->load('mahasiswa/vTemplate', 'contents' , 'mahasiswa/vData_Fasilitas', $data);
	}
	public function Lantai()
	{
		header("Access-Control-Allow-Origin: *");
        $data['lantai'] = $this->mDatabase->get('tb_lantai');
        $this->template->load('mahasiswa/vTemplate', 'contents' , 'mahasiswa/vData_Lantai', $data);
	}
	public function Pengurus()
	{
		header("Access-Control-Allow-Origin: *");
        $data['pengurus'] = $this->mDatabase->get('tb_pengurus');
        $this->template->load('mahasiswa/vTemplate', 'contents' , 'mahasiswa/vPengurus', $data);
	}
	public function Ubah_Password()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Ubah Password";
		$data['username'] = $this->username;
        $this->template->load('mahasiswa/vTemplate', 'contents' , 'mahasiswa/vUbah_Password', $data);
	}

}
