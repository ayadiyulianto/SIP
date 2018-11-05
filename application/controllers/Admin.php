<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mDatabase');
		if ($this->session->userdata('level') == 'admin') {
			$this->username 	= $this->session->userdata('username');
			$this->smt_aktif 	= $this->session->userdata('smt_aktif');
		} else {
			redirect("auth");
		}
	}
	public function index()
	{
		header("Access-Control-Allow-Origin: *");
		$data['penghuni_aktif'] = $this->mDatabase->get_where('tb_penghuni_kamar',array('keterangan'=>'aktif'))->num_rows();
		$data['penghuni_baru'] = $this->mDatabase->get_where('tb_penghuni_kamar',array('keterangan'=>'preaktif'))->num_rows();
		$data['kamar_tersedia'] = $this->mDatabase->get_kamar_tersedia()->num_rows();
		$data['kamar_total'] = $this->mDatabase->get('tb_kamar')->num_rows();
		$data['pembayaran_lunas'] = $this->mDatabase->get_where('vw_pembayaran',array('keterangan'=>'aktif', 'sisa'=>'0'))->num_rows();
		$data['pembayaran_total'] = $this->mDatabase->get_where('vw_pembayaran',array('keterangan'=>'aktif'))->num_rows();
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vBeranda', $data);
	}
	public function Umum()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] 	= "Informasi Umum Website";
		$data['config'] = $this->mDatabase->get('tb_umum')->row();
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vUmum', $data);
	}
	public function Info_Daftar()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Informasi Pendaftaran";
		$config = $this->mDatabase->get('tb_umum')->row();
		$data['semester_aktif'] = $config->semester_aktif;
		$data['masa_pendaftaran'] = $config->masa_pendaftaran;
		$data['info_pembayaran'] = $config->info_pembayaran;
		$data['penghuni_per_kamar'] = $config->penghuni_per_kamar;
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vInfo_Daftar', $data);
	}
	public function Slider()
	{
		header("Access-Control-Allow-Origin: *");
        $data['slider'] = $this->mDatabase->get_where('tb_gambar',array('jenis'=>'slider'));
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_Slider', $data);
	}
	public function Tambah_Slider()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] 	= "Tambah Slider";
		$data['id'] = "";
		$data['jenis'] = "slider";
		$data['gambar'] = "";
		$data['keterangan'] = "";
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_Gambar', $data);
	}
	public function Edit_Slider($id)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Edit Slider";
		$slider = $this->mDatabase->get_where('tb_gambar',array('id'=>$id))->row();
		$data['id'] = $slider->id;
		$data['jenis'] = $slider->jenis;
		$data['gambar'] = $slider->gambar;
		$data['keterangan'] = $slider->keterangan;
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_Gambar', $data);
	}
	public function Fasilitas()
	{
		header("Access-Control-Allow-Origin: *");
        $data['fasilitas'] = $this->mDatabase->get_where('tb_gambar',array('jenis'=>'fasilitas'));
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_Fasilitas', $data);
	}
	public function Tambah_Fasilitas()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] 	= "Tambah Fasilitas";
		$data['id'] = "";
		$data['jenis'] = "fasilitas";
		$data['gambar'] = "";
		$data['keterangan'] = "";
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_Gambar', $data);
	}
	public function Edit_Fasilitas($id)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Edit Fasilitas";
		$fasilitas = $this->mDatabase->get_where('tb_gambar',array('id'=>$id))->row();
		$data['id'] = $fasilitas->id;
		$data['jenis'] = $fasilitas->jenis;
		$data['gambar'] = $fasilitas->gambar;
		$data['keterangan'] = $fasilitas->keterangan;
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_Gambar', $data);
	}
	public function Lantai()
	{
		header("Access-Control-Allow-Origin: *");
        $data['lantai'] = $this->mDatabase->get('tb_lantai');
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_Lantai', $data);
	}
	public function Edit_Lantai($id)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Edit Lantai";
		$lantai = $this->mDatabase->get_where('tb_lantai',array('id_lantai'=>$id))->row();
		$data['id_lantai'] = $lantai->id_lantai;
		$data['harga'] = $lantai->harga;
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_Lantai', $data);
	}
	public function Pengurus()
	{
		header("Access-Control-Allow-Origin: *");
        $data['pengurus'] = $this->mDatabase->get('tb_pengurus');
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_Pengurus', $data);
	}
	public function Tambah_Pengurus()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Pengurus";
		$data['id'] = "";
		$data['nama'] = "";
		$data['jabatan'] = "";
		$data['tahun'] = "";
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_Pengurus', $data);
	}
	public function Edit_Pengurus($id)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Edit Pengurus";
		$pengurus = $this->mDatabase->get_where('tb_pengurus',array('id'=>$id))->row();
		$data['id'] = $pengurus->id;
		$data['nama'] = $pengurus->nama;
		$data['jabatan'] = $pengurus->jabatan;
		$data['tahun'] = $pengurus->tahun;
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_Pengurus', $data);
	}
	public function Mahasiswa()
	{
		header("Access-Control-Allow-Origin: *");
        $data['mahasiswa'] = $this->mDatabase->get('tb_biodata_penghuni');
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_Mahasiswa', $data);
	}
	public function Tambah_Mahasiswa()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Mahasiswa";
		$data['npm'] = "";
		$data['nama_lengkap'] = "";
		$data['nama_panggilan'] = "";
		$data['alamat_asal'] = "";
		$data['tempat_lahir'] = "";
		$data['tgl_lahir'] = "";
		$data['agama'] = "";
		$data['no_ktp'] = "";
		$data['program_studi'] = "";
		$data['fakultas'] = "";
		$data['no_hp'] = "";
		$data['email'] = "";
		$data['hoby'] = "";
		$data['organisasi'] = "";
		$data['riwayat_penyakit'] = "";
		$data['nama_ayah'] = "";
		$data['nama_ibu'] = "";
		$data['alamat_ortu'] = "";
		$data['no_hp_ortu'] = "";
		$data['pekerjaan_ortu'] = "";

		$data['password'] = "";
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_Mahasiswa', $data);
	}
	public function Edit_Mahasiswa($id)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Mahasiswa";
		$mahasiswa = $this->mDatabase->get_where('tb_biodata_penghuni', array('npm'=>$id))->row();
		$data['npm'] = $mahasiswa->npm;
		$data['nama_lengkap'] = $mahasiswa->nama_lengkap;
		$data['nama_panggilan'] = $mahasiswa->nama_panggilan;
		$data['alamat_asal'] = $mahasiswa->alamat_asal;
		$data['tempat_lahir'] = $mahasiswa->tempat_lahir;
		$data['tgl_lahir'] = date('d-m-Y',strtotime($mahasiswa->tgl_lahir));
		$data['agama'] = $mahasiswa->agama;
		$data['no_ktp'] = $mahasiswa->no_ktp;
		$data['program_studi'] = $mahasiswa->program_studi;
		$data['fakultas'] = $mahasiswa->fakultas;
		$data['no_hp'] = $mahasiswa->no_hp;
		$data['email'] = $mahasiswa->email;
		$data['hoby'] = $mahasiswa->hoby;
		$data['organisasi'] = $mahasiswa->organisasi;
		$data['riwayat_penyakit'] = $mahasiswa->riwayat_penyakit;
		$data['nama_ayah'] = $mahasiswa->nama_ayah;
		$data['nama_ibu'] = $mahasiswa->nama_ibu;
		$data['alamat_ortu'] = $mahasiswa->alamat_ortu;
		$data['no_hp_ortu'] = $mahasiswa->no_hp_ortu;
		$data['pekerjaan_ortu'] = $mahasiswa->pekerjaan_ortu;
		$akun = $this->mDatabase->get_where('tb_pengguna', array('username'=>$id))->row();
		$data['password'] = $akun->password;
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_Mahasiswa', $data);
	}
	public function Penghuni()
	{
		header("Access-Control-Allow-Origin: *");
        $data['penghuni'] = $this->mDatabase->get_all_penghuni();
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_Penghuni', $data);
	}
	public function Tambah_Penghuni()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Penghuni";
		$data['kamar'] = $this->mDatabase->get_kamar_tersedia();
		$data['mahasiswa'] = $this->mDatabase->get_mahasiswa_nonaktif();
		$data['id_penghuni'] = "";
		$data['id_kamar'] = "";
		$data['npm'] = "";
		$data['tgl_masuk'] = date('d-m-Y H:i:s', time());
		$data['keterangan'] = "preaktif";
		$data['semester'] = $this->session->userdata('smt_aktif');
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_Penghuni', $data);
	}
	public function Kamar()
	{
		header("Access-Control-Allow-Origin: *");
        $data['lantai'] = $this->mDatabase->get('tb_lantai');
        foreach($data['lantai']->result() as $lantai){
            $data['lantai'.$lantai->id_lantai] = $this->mDatabase->get_kamar($lantai->id_lantai);
        }
        $data['maks_penghuni_per_kamar'] = $this->mDatabase->get('tb_umum')->row()->penghuni_per_kamar;
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_Kamar', $data);
	}
	public function Pembayaran()
	{
		header("Access-Control-Allow-Origin: *");
        $data['pembayaran'] = $this->mDatabase->get('vw_pembayaran');
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_Pembayaran', $data);
	}
	public function Detail_Pembayaran($id_penghuni)
	{
		header("Access-Control-Allow-Origin: *");
        $data['pembayaran'] = $this->mDatabase->get_where('vw_pembayaran', array("id_penghuni" => $id_penghuni))->row();
        $data['detail_pembayaran'] = $this->mDatabase->get_where('tb_pembayaran', array("id_penghuni" => $id_penghuni));
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_Detail_Pembayaran', $data);
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
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_Pembayaran', $data);
	}
	public function Manajemen_User()
	{
		header("Access-Control-Allow-Origin: *");
        $data['user'] = $this->mDatabase->get('tb_pengguna','level ASC');
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_User', $data);
	}
	public function Tambah_User()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah User";
		$data['username'] = "";
		$data['password'] = "";
		$data['level'] = "";
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_User', $data);
	}
	public function Edit_User($username)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Edit User";
		$user = $this->mDatabase->get_where('tb_pengguna',array('username'=>$username))->row();
		$data['username'] = $user->username;
		$data['password'] = $user->password;
		$data['level'] = $user->level;
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_User', $data);
	}

}
