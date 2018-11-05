<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MahasiswaProcess extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mDatabase');
		if ($this->session->userdata('level') == 'mahasiswa') {
			$this->username = $this->session->userdata('username');
			$this->smt_aktif = $this->session->userdata('smt_aktif');
		} else {
			redirect("auth");
		}
	}
	public function biodata() {
		$data['nama_lengkap'] = $this->input->post('nama_lengkap');
		$data['nama_panggilan'] = $this->input->post('nama_panggilan');
		$data['alamat_asal'] = $this->input->post('alamat_asal');
		$data['tempat_lahir'] = $this->input->post('tempat_lahir');
		$data['tgl_lahir'] = date('Y-m-d',strtotime($this->input->post('tgl_lahir')));
		$data['agama'] = $this->input->post('agama');
		$data['no_ktp'] = $this->input->post('no_ktp');
		$data['program_studi'] = $this->input->post('program_studi');
		$data['fakultas'] = $this->input->post('fakultas');
		$data['no_hp'] = $this->input->post('no_hp');
		$data['email'] = $this->input->post('email');
		$data['hoby'] = $this->input->post('hoby');
		$data['organisasi'] = $this->input->post('organisasi');
		$data['riwayat_penyakit'] = $this->input->post('riwayat_penyakit');
		$data['nama_ayah'] = $this->input->post('nama_ayah');
		$data['nama_ibu'] = $this->input->post('nama_ibu');
		$data['alamat_ortu'] = $this->input->post('alamat_ortu');
		$data['no_hp_ortu'] = $this->input->post('no_hp_ortu');
		$data['pekerjaan_ortu'] = $this->input->post('pekerjaan_ortu');

		$update=$this->mDatabase->update('tb_biodata_penghuni',$data,array('npm'=>$this->username));
		if($update){
			$this->session->set_flashdata('info','Edit Biodata Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal Edit Data');
		}
		redirect('mahasiswa/biodata');
	}
	public function pilihkamar($id) {
		$data['id_kamar'] = $id;
		$data['npm'] = $this->username;
		$data['tgl_masuk'] = date('Y-m-d H:i:s', time());
		$data['keterangan'] = 'preaktif';
		$data['semester'] = $this->smt_aktif;
		$insert=$this->mDatabase->insert('tb_penghuni_kamar',$data);
		if($insert){
			$this->session->set_flashdata('info','Pilih Kamar Berhasil, Silahkan Melakukan Pembayaran!');
			redirect('mahasiswa/pembayaran');
		}else{
			$this->session->set_flashdata('error','Gagal Pilih Kamar');
			redirect('mahasiswa/kamar');
		}
	}
	public function pembayaran() {
		$id=$this->input->post('id_pembayaran');
		$gambarlama='./assets/img/'.$this->mDatabase->get_where('tb_pembayaran', array('id_pembayaran'=>$id))->row()->lampiran;
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('lampiran')){
            $data['lampiran']=$this->upload->file_name;
            unlink($gambarlama);
        }
		$data['id_penghuni']=$this->input->post('id_penghuni');
		$data['tgl_bayar']=date('Y-m-d H:m:s',strtotime($this->input->post('tgl_bayar')));
		$data['jumlah_bayar']=$this->input->post('jumlah_bayar');
		$cek=$this->mDatabase->get_where('tb_pembayaran',array('id_pembayaran'=>$id))->num_rows();
		if($cek==0){
			$insert=$this->mDatabase->insert('tb_pembayaran',$data);
			if($insert){
				$preaktif=$this->mDatabase->get_where('tb_penghuni_kamar',array('id_penghuni'=>$data['id_penghuni']))->row()->keterangan;
				if($preaktif=='preaktif'){
					$this->mDatabase->update('tb_penghuni_kamar',array('keterangan'=>'aktif'),array('id_penghuni'=>$data['id_penghuni']));
				}
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('mahasiswa/pembayaran');
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('mahasiswa/tambah_pembayaran/'.$data['id_penghuni']);
			}
		}else{
			$update=$this->mDatabase->update('tb_pembayaran',$data,array('id_pembayaran'=>$id));
			if($update){
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('mahasiswa/pembayaran');
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('mahasiswa/edit_pembayaran/'.$id);
			}
		}
	}
	public function ubahpassword()
	{
		$data['password']=$this->input->post('password_baru');
		$ulangipassword=$this->input->post('ulangi_password_baru');
		if($data['password']!=$ulangipassword){
			$this->session->set_flashdata('error','Password tidak sesuai');
			redirect('mahasiswa/ubah_password');
		}else{
			$update=$this->mDatabase->update('tb_pengguna',$data,array('username'=>$this->username));
			if($update){
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('mahasiswa/ubah_password');
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('mahasiswa/ubah_password');
			}
		}
	}
}