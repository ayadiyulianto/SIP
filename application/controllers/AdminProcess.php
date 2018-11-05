<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminProcess extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mDatabase');
		if ($this->session->userdata('level') == 'admin') {
			$username = $this->session->userdata('username');
			$smt_aktif = $this->session->userdata('smt_aktif');
		} else {
			redirect("auth");
		}
	}
	public function umum() {
		$logolama='./assets/img/'.$this->mDatabase->get_where('tb_umum', array('id'=>1))->row()->logo;
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('logo')){
            $data['logo']=$this->upload->file_name;
            unlink($logolama);
        }
		$data['nama_asrama']=$this->input->post('nama_asrama');
		$data['sejarah']=$this->input->post('sejarah');
		$data['visi']=$this->input->post('visi');
		$data['misi']=$this->input->post('misi');
		$data['alamat']=$this->input->post('alamat');
		$data['telepon']=$this->input->post('telepon');
		$data['map_latitude']=$this->input->post('map_latitude');
		$data['map_langitude']=$this->input->post('map_langitude');
		$update=$this->mDatabase->update('tb_umum',$data,array('id'=>1));
		if($update){
			$this->session->set_flashdata('info','Edit Data Berhasil');
			redirect('admin/umum');
		}else{
			$this->session->set_flashdata('error','Gagal Edit Data');
			redirect('admin/umum');
		}
	}
	public function info_daftar() {
		$data['semester_aktif']=$this->input->post('semester_aktif');
		$data['masa_pendaftaran']=$this->input->post('masa_pendaftaran');
		$data['penghuni_per_kamar']=$this->input->post('penghuni_per_kamar');
		$data['info_pembayaran']=$this->input->post('info_pembayaran');
		$update=$this->mDatabase->update('tb_umum',$data,array('id'=>1));
		if($update){
			$this->session->set_flashdata('info','Edit Data Berhasil');
			redirect('admin/info_daftar');
		}else{
			$this->session->set_flashdata('error','Gagal Edit Data');
			redirect('admin/info_daftar');
		}
	}
	public function gambar() {
		$id=$this->input->post('id');
		$gambarlama='./assets/img/'.$this->mDatabase->get_where('tb_gambar', array('id'=>$id))->row()->gambar;
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')){
            $data['gambar']=$this->upload->file_name;
            unlink($gambarlama);
        }
		$data['jenis']=$this->input->post('jenis');
		$data['keterangan']=$this->input->post('keterangan');
		$cek=$this->mDatabase->get_where('tb_gambar',array('id'=>$id))->num_rows();
		if($cek==0){
			$insert=$this->mDatabase->insert('tb_gambar',$data);
			if($insert){
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('admin/'.$data['jenis']);
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('admin/tambah_'.$data['jenis']);
			}
		}else{
			$update=$this->mDatabase->update('tb_gambar',$data,array('id'=>$id));
			if($update){
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('admin/'.$data['jenis']);
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('admin/edit_'.$data['jenis'].'/'.$id);
			}
		}
	}
	public function hapus_gambar($id){
		$gambarlama=$this->mDatabase->get_where('tb_gambar', array('id'=>$id))->row();
		$hapus=$this->mDatabase->delete('tb_gambar',array('id'=>$id));
		if($hapus){
            unlink('./assets/img/'.$gambarlama->gambar);
			$this->session->set_flashdata('info','Hapus Data Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
		}
		redirect('admin/'.$gambarlama->jenis);
	}
	public function lantai() {
		$id_lantai=$this->input->post('id_lantai');
		$data['harga']=$this->input->post('harga');
		$update=$this->mDatabase->update('tb_lantai',$data,array('id_lantai'=>$id_lantai));
		if($update){
			$this->session->set_flashdata('info','Edit Data Berhasil');
			redirect('admin/lantai');
		}else{
			$this->session->set_flashdata('error','Gagal Edit Data');
			redirect('admin/edit_lantai');
		}
	}
	public function pengurus() {
		$id=$this->input->post('id');
		$data['nama']=$this->input->post('nama');
		$data['jabatan']=$this->input->post('jabatan');
		$data['tahun']=$this->input->post('tahun');
		$cek=$this->mDatabase->get_where('tb_pengurus',array('id'=>$id))->num_rows();
		if($cek==0){
			$insert=$this->mDatabase->insert('tb_pengurus',$data);
			if($insert){
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('admin/pengurus');
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('admin/tambah_pengurus');
			}
		}else{
			$update=$this->mDatabase->update('tb_pengurus',$data,array('id'=>$id));
			if($update){
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('admin/pengurus');
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('admin/edit_pengurus/'.$id);
			}
		}
	}
	public function hapus_pengurus($id){
		$hapus=$this->mDatabase->delete('tb_pengurus',array('id'=>$id));
		if($hapus){
			$this->session->set_flashdata('info','Hapus Data Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
		}
		redirect('admin/pengurus');
	}
	public function mahasiswa() {
		$id = $this->input->post('id');
		$data['npm'] = $this->input->post('npm');
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
		$akun['username'] = $this->input->post('npm');
		$akun['password'] = $this->input->post('password');
		$akun['level'] = "mahasiswa";

		$cek=$this->mDatabase->get_where('tb_biodata_penghuni',array('npm'=>$id))->num_rows();
		if($cek==0){
			$insert=$this->mDatabase->insert('tb_biodata_penghuni',$data);
			if($insert){
				$this->mDatabase->insert('tb_pengguna',$akun);
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('admin/'.$data['jenis']);
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('admin/tambah_'.$data['jenis']);
			}
		}else{
			$update=$this->mDatabase->update('tb_biodata_penghuni',$data,array('npm'=>$id));
			if($update){
				$this->mDatabase->update('tb_pengguna',$akun,array('username'=>$id));
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('admin/mahasiswa');
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('admin/edit_mahasiswa/'.$data['npm']);
			}
		}
	}
	public function hapus_mahasiswa($id){
		$hapus=$this->mDatabase->delete('tb_biodata_penghuni',array('npm'=>$id));
		if($hapus){
			$this->mDatabase->delete('tb_pengguna',array('username'=>$id));
			$this->session->set_flashdata('info','Hapus Data Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
		}
		redirect('admin/mahasiswa');
	}
	public function penghuni() {
		$data['id_kamar']=$this->input->post('id_kamar');
		$data['npm']=$this->input->post('npm');
		$data['tgl_masuk']=date('Y-m-d H:m:s',strtotime($this->input->post('tgl_masuk')));
		$data['keterangan']=$this->input->post('keterangan');
		$data['semester']=$this->input->post('semester');
		$insert=$this->mDatabase->insert('tb_penghuni_kamar',$data);
		if($insert){
			$this->session->set_flashdata('info','Tambah Data Penghuni Berhasil');
			redirect('admin/penghuni');
		}else{
			$this->session->set_flashdata('error','Gagal Tambah Data Penghuni');
			redirect('admin/tambah_penghuni');
		}
	}
	public function nonaktifkan_semua(){
		$nonaktif=$this->mDatabase->update('tb_penghuni_kamar', array('keterangan'=>'nonaktif'), array('keterangan'=>'aktif'));
		if($nonaktif){
			$this->mDatabase->delete('tb_penghuni_kamar', array('keterangan'=>'preaktif'));
			$this->session->set_flashdata('info','Ubah Data Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal Ubah Data');
		}
		redirect('admin/penghuni');
	}
	public function nonaktifkan_penghuni($id){
		$nonaktif=$this->mDatabase->update('tb_penghuni_kamar', array('keterangan'=>'nonaktif'), array('id_penghuni'=>$id));
		if($nonaktif){
			$this->session->set_flashdata('info','Ubah Data Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal Ubah Data');
		}
		redirect('admin/penghuni');
	}
	public function hapus_penghuni($id){
		$hapus=$this->mDatabase->delete('tb_penghuni_kamar',array('id_penghuni'=>$id));
		if($hapus){
			$this->session->set_flashdata('info','Hapus Data Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
		}
		redirect('admin/penghuni');
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
				redirect('admin/detail_pembayaran/'.$data['id_penghuni']);
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('admin/tambah_pembayaran/'.$data['id_penghuni']);
			}
		}else{
			$update=$this->mDatabase->update('tb_pembayaran',$data,array('id_pembayaran'=>$id));
			if($update){
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('admin/detail_pembayaran/'.$data['id_penghuni']);
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('admin/edit_pembayaran/'.$id);
			}
		}
	}
	public function User()
	{
		$username=$this->input->post('usernamee');
		$data['username']=$this->input->post('username');
		$data['level']=$this->input->post('level');
		$data['password']=$this->input->post('password');
		$ulangipassword=$this->input->post('ulangipassword');
		if($data['password']!=$ulangipassword){
			$this->session->set_flashdata('error','Password tidak sesuai');
			redirect('admin/tambah_user');
		}else{
			$cek=$this->mDatabase->get_where('tb_pengguna',array('username'=>$username))->num_rows();
			if($cek==0){
				$insert=$this->mDatabase->insert('tb_pengguna',$data);
				if($insert){
					$this->session->set_flashdata('info','Input Data Berhasil');
					redirect('admin/manajemen_user');
				}else{
					$this->session->set_flashdata('error','Gagal Input Data');
					redirect('admin/tambah_user');
				}
			}else{
				$update=$this->mDatabase->update('tb_pengguna',$data,array('username'=>$username));
				if($update){
					$this->session->set_flashdata('info','Edit Data Berhasil');
					redirect('admin/manajemen_user');
				}else{
					$this->session->set_flashdata('error','Gagal Edit Data');
					redirect('admin/edit_user/'.$username);
				}
			}
		}
	}
	public function hapus_user($username){
		$hapus=$this->mDatabase->delete('tb_pengguna',array('username'=>$username));
		if($hapus){
			$this->session->set_flashdata('info','Hapus Data Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
		}
		redirect('admin/manajemen_user');
	}

}
