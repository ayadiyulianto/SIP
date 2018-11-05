<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('mDatabase');
	}
	public function tambahConfig()
	{
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('web_icon')){
            //$error = array('error' => $this->upload->display_errors());
            $data['web_icon']=$this->upload->file_name;
        }
		$data['web_name']=$this->input->post('web_name');
		$data['web_desc']=$this->input->post('web_desc');
		$data['kontak_alamat']=$this->input->post('kontak_alamat');
		$data['kontak_telp']=$this->input->post('kontak_telp');
		$data['kontak_email']=$this->input->post('kontak_email');
		$data['kontak_map_latitude']=$this->input->post('kontak_map_latitude');
		$data['kontak_map_langitude']=$this->input->post('kontak_map_langitude');
		$update=$this->mDatabase->update('config',$data,array('id'=>0));
		if($update){
			$this->session->set_flashdata('info','Edit Data Berhasil');
			redirect('backend/umum');
		}else{
			$this->session->set_flashdata('error','Gagal Edit Data');
			redirect('backend/umum');
		}
		
	}	
	public function tambahProker()
	{
		$id=$this->input->post('id');
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('icon')){
            //$error = array('error' => $this->upload->display_errors());
            $data['icon']=$this->upload->file_name;
        }
		$data['judul']=$this->input->post('judul');
		$data['deskripsi']=$this->input->post('deskripsi');
		$cek=$this->mDatabase->get_where('proker',array('id'=>$id))->num_rows();
		if($cek==0){
			$insert=$this->mDatabase->insert('proker',$data);
			if($insert){
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('backend/proker');
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('backend/tambah_proker');
			}
		}else{
			$update=$this->mDatabase->update('proker',$data,array('id'=>$id));
			if($update){
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('backend/proker');
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('backend/edit_proker');
			}
		}
		
	}	
	public function hapus_proker($id){
		$hapus=$this->mDatabase->delete('proker',array('id'=>$id));
		if($hapus){
			$this->session->set_flashdata('info','Hapus Data Berhasil');
			redirect('backend/proker');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
			redirect('backend/proker');
		}
	}

	public function tambahProduk()
	{
		$id=$this->input->post('id');
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('src')){
            //$error = array('error' => $this->upload->display_errors());
            $data['src']=$this->upload->file_name;
        }
		$data['judul']=$this->input->post('judul');
		$cek=$this->mDatabase->get_where('media',array('id'=>$id))->num_rows();
		if($cek==0){
			$data['type']="image";
			$data['tag']="produk";
			$insert=$this->mDatabase->insert('media',$data);
			if($insert){
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('backend/produk');
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('backend/tambah_produk');
			}
		}else{
			$update=$this->mDatabase->update('media',$data,array('id'=>$id));
			if($update){
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('backend/produk');
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('backend/edit_produk');
			}
		}
		
	}	
	public function hapus_produk($id){
		$hapus=$this->mDatabase->delete('media',array('id'=>$id));
		if($hapus){
			$this->session->set_flashdata('info','Hapus Data Berhasil');
			redirect('backend/produk');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
			redirect('backend/produk');
		}
	}

	public function tambahPelaksana()
	{
		$id=$this->input->post('id');
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')){
            //$error = array('error' => $this->upload->display_errors());
            $data['image']=$this->upload->file_name;
        }
		$data['name']=$this->input->post('name');
		$data['nipm']=$this->input->post('nipm');
		$data['position']=$this->input->post('position');
		$data['profile']=$this->input->post('profile');
		$data['desa']=$this->input->post('desa');
		$cek=$this->mDatabase->get_where('team',array('id'=>$id))->num_rows();
		if($cek==0){
			$insert=$this->mDatabase->insert('team',$data);
			if($insert){
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('backend/pelaksana');
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('backend/tambah_pelaksana');
			}
		}else{
			$update=$this->mDatabase->update('team',$data,array('id'=>$id));
			if($update){
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('backend/pelaksana');
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('backend/edit_pelaksana');
			}
		}
		
	}	
	public function hapus_pelaksana($id){
		$hapus=$this->mDatabase->delete('team',array('id'=>$id));
		if($hapus){
			$this->session->set_flashdata('info','Hapus Data Berhasil');
			redirect('backend/pelaksana');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
			redirect('backend/pelaksana');
		}
	}

	public function tambahDesa()
	{
		$id=$this->input->post('id');
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')){
            //$error = array('error' => $this->upload->display_errors());
            $data['gambar']=$this->upload->file_name;
        }
		$data['id']=str_replace(' ', '', $this->input->post('nama'));
		$data['nama']=$this->input->post('nama');
		$data['deskripsi']=$this->input->post('deskripsi');
		$cek=$this->mDatabase->get_where('desa',array('id'=>$id))->num_rows();
		if($cek==0){			
			$insert=$this->mDatabase->insert('desa',$data);
			if($insert){
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('backend/desa');
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('backend/tambah_desa');
			}
		}else{
			$update=$this->mDatabase->update('desa',$data,array('id'=>$id));
			if($update){
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('backend/desa');
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('backend/edit_desa');
			}
		}
		
	}	
	public function hapus_desa($id){
		$hapus=$this->mDatabase->delete('desa',array('id'=>$id));
		if($hapus){
			$this->session->set_flashdata('info','Hapus Data Berhasil');
			redirect('backend/desa');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
			redirect('backend/desa');
		}
	}
	public function tambahGambar()
	{
		$id=$this->input->post('id');
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('src')){
            //$error = array('error' => $this->upload->display_errors());
            $data['src']=$this->upload->file_name;
        }
		$data['judul']=$this->input->post('judul');
		$data['type']= "image";
		$data['tag']=$this->input->post('tag');
		$cek=$this->mDatabase->get_where('media',array('id'=>$id))->num_rows();
		if($cek==0){
			$insert=$this->mDatabase->insert('media',$data);
			if($insert){
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('backend/gambar');
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('backend/tambah_gambar');
			}
		}else{
			$update=$this->mDatabase->update('media',$data,array('id'=>$id));
			if($update){
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('backend/gambar');
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('backend/edit_gambar');
			}
		}
		
	}	
	public function hapus_media($id){
		$hapus=$this->mDatabase->delete('media',array('id'=>$id));
		if($hapus){
			$this->session->set_flashdata('info','Hapus Data Berhasil');
			redirect('backend/gambar');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
			redirect('backend/gambar');
		}
	}
	public function tambahVideo()
	{
		$id=$this->input->post('id');
		$data['judul']=$this->input->post('judul');
		$data['type']= "video";
		$data['tag']=$this->input->post('tag');
		$cek=$this->mDatabase->get_where('media',array('id'=>$id))->num_rows();
		if($cek==0){
			$insert=$this->mDatabase->insert('media',$data);
			if($insert){
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('backend/video');
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('backend/tambah_video');
			}
		}else{
			$update=$this->mDatabase->update('media',$data,array('id'=>$id));
			if($update){
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('backend/video');
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('backend/edit_video');
			}
		}
		
	}	

	public function tambahArtikel()
	{
		$id=$this->input->post('id');
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')){
            //$error = array('error' => $this->upload->display_errors());
            $data['gambar']=$this->upload->file_name;
        }
		$data['judul']=$this->input->post('judul');
		$data['tag']=$this->input->post('tag');
		$data['isi']=$this->input->post('isi');
		$cek=$this->mDatabase->get_where('artikel',array('id'=>$id))->num_rows();
		if($cek==0){
			$data['penulis']=$this->session->userdata('username');
			$insert=$this->mDatabase->insert('artikel',$data);
			if($insert){
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('backend/artikel');
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('backend/tambah_artikel');
			}
		}else{
			$update=$this->mDatabase->update('artikel',$data,array('id'=>$id));
			if($update){
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('backend/artikel');
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('backend/edit_artikel');
			}
		}
		
	}	
	public function publishArtikel($id){
		$cek=$this->mDatabase->get_where('artikel',array('id'=>$id))->row();
		if($cek->status=="draft"){
			$update=$this->mDatabase->update('artikel',array('status'=>'publish','tgl_upload'=>date('y-m-d')),array('id'=>$id));
			$this->session->set_flashdata('info','Artikel berhasil di publish');
			redirect('backend/artikel');
		}else{
			$update=$this->mDatabase->update('artikel',array('status'=>'draft'),array('id'=>$id));
			$this->session->set_flashdata('info','Artikel disimpan sebagai draft');
			redirect('backend/artikel');
		}
	}
	public function likeArtikel($id){
		$cek=$this->mDatabase->get_where('artikel',array('id'=>$id))->row();
		$likes=(int)$cek->likes+1;
		$this->mDatabase->update('artikel',array('likes'=>$likes),array('id'=>$id));
	}
	public function hapus_artikel($id){
		$hapus=$this->mDatabase->delete('artikel',array('id'=>$id));
		if($hapus){
			$this->session->set_flashdata('info','Hapus Data Berhasil');
			redirect('backend/artikel');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
			redirect('backend/artikel');
		}
	}
	public function tambahPesan(){
		$data['nama']=$this->input->post('name');
		$data['email']=$this->input->post('email');
		$data['pesan']=$this->input->post('message');
		$data['tanggal']=date('Y-m-d');
		$this->mDatabase->insert('pesan',$data);
	}
	public function hapus_pesan($id){
		$hapus=$this->mDatabase->delete('pesan',array('id'=>$id));
		if($hapus){
			$this->session->set_flashdata('info','Hapus Data Berhasil');
			redirect('backend/pesan');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
			redirect('backend/pesan');
		}
	}
	public function tambahUser()
	{
		$username=$this->input->post('usernamee');
		$data['username']=$this->input->post('username');
		$data['fullname']=$this->input->post('fullname');
		if($this->input->post('password')==$this->input->post('ulangipassword')){
			$data['password']=md5($this->input->post('password'));
		}else{
			$this->session->set_flashdata('error','Password tidak sama. Mohon ulangi password!');
			redirect('backend/tambah_user');
		}
		$cek=$this->mDatabase->get_where('users',array('username'=>$username))->num_rows();
		if($cek==0){
			$insert=$this->mDatabase->insert('users',$data);
			if($insert){
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('backend/manajemen_user');
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('backend/tambah_user');
			}
		}else{
			$insert=$this->mDatabase->update('users',$data,array('username'=>$username));
			if($insert){
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('backend/manajemen_user');
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('backend/edit_user');
			}
		}
		
	}
	public function hapus_user($username){
		$hapus=$this->mDatabase->delete('userS',array('username'=>$username));
		if($hapus){
			$this->session->set_flashdata('info','Hapus Data Berhasil');
			redirect('backend/manajemen_user');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
			redirect('backend/manajemen_user');
		}
	}
}