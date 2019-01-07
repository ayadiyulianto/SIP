<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mDatabase');
	}
	
	public function index() {
		if ($this->session->userdata('sikaber') == TRUE) {
			if ($this->session->userdata('level')=='admin'){
				redirect("admin");
			} elseif ($this->session->userdata('level')=='operator') {
				redirect("operator");
			} 
		} else {
			$this->login();
		}
	}

	public function login() {
		header("Access-Control-Allow-Origin: *");
		if($this->session->userdata('sikaber') == TRUE){
			$this->index();
		}else{
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('vLogin');
			} else {
				$where = array(
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password'))
				);
				$result = $this->mDatabase->get_where('tb_pengguna',$where);
				if ($result->num_rows()==1) {
					$session_data['username'] = $result->row()->username;
					$session_data['nama'] = $result->row()->nama;
					$session_data['level'] = $result->row()->level;
					$session_data['avatar'] = $result->row()->avatar;
					$session_data['sikaber'] = TRUE;
					// Add user data in session
					$this->session->set_userdata($session_data);
					$this->index();
				} else {
					$this->session->set_flashdata('error','Username atau Password Salah');
					$this->load->view('frontend/vlogin');
				}
			}
		}
		
	}
	
	// Logout from admin page
	public function logout() {
		$this->session->sess_destroy();
		$this->login();
	}

	// public function daftar()
	// {
	// 	header("Access-Control-Allow-Origin: *");
	// 	if($this->session->userdata('logged_in') == TRUE){
	// 		$this->index();
	// 	}else{
	// 		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
	// 		$this->form_validation->set_rules('npm', 'NPM', 'trim|required|xss_clean|min_length[9]');
	// 		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
	// 		$this->form_validation->set_rules('ulangipassword', 'Ulangi Password', 'trim|required|xss_clean|matches[password]');

	// 		if ($this->form_validation->run() == FALSE) {
	// 			$this->load->view('vDaftar');
	// 		} else {
	// 			$cek = $this->mDatabase->get_where('tb_biodata_penghuni', array('npm'=>$this->input->post('npm')));
	// 			if($cek->num_rows()==1){
	// 				$this->session->set_flashdata('error','NPM telah terdaftar. Silahkan login!');
	// 			}else{
	// 				$data['npm'] = $this->input->post('npm');
	// 				$data['nama_lengkap'] = $this->input->post('nama_lengkap');
	// 				$data['nama_panggilan'] = $this->input->post('nama_panggilan');
	// 				$data['alamat_asal'] = $this->input->post('alamat_asal');
	// 				$data['tempat_lahir'] = $this->input->post('tempat_lahir');
	// 				$data['tgl_lahir'] = date('Y-m-d',strtotime($this->input->post('tgl_lahir')));
	// 				$data['agama'] = $this->input->post('agama');
	// 				$data['no_ktp'] = $this->input->post('no_ktp');
	// 				$data['program_studi'] = $this->input->post('program_studi');
	// 				$data['fakultas'] = $this->input->post('fakultas');
	// 				$data['no_hp'] = $this->input->post('no_hp');
	// 				$data['email'] = $this->input->post('email');
	// 				$data['hoby'] = $this->input->post('hoby');
	// 				$data['organisasi'] = $this->input->post('organisasi');
	// 				$data['riwayat_penyakit'] = $this->input->post('riwayat_penyakit');
	// 				$data['nama_ayah'] = $this->input->post('nama_ayah');
	// 				$data['nama_ibu'] = $this->input->post('nama_ibu');
	// 				$data['alamat_ortu'] = $this->input->post('alamat_ortu');
	// 				$data['no_hp_ortu'] = $this->input->post('no_hp_ortu');
	// 				$data['pekerjaan_ortu'] = $this->input->post('pekerjaan_ortu');

	// 				$akun['username'] = $this->input->post('npm');
	// 				$akun['password'] = $this->input->post('password');
	// 				$akun['level'] = "mahasiswa";

	// 				$insert=$this->mDatabase->insert('tb_biodata_penghuni',$data);
	// 				if($insert){
	// 					$insert=$this->mDatabase->insert('tb_pengguna',$akun);
	// 					$this->session->set_flashdata('info','Pendaftaran Berhasil. Silahkan Login!');
	// 					$this->login();
	// 				}else{
	// 					$this->session->set_flashdata('error','Gagal Input Data');
	// 					$this->load->view('frontend/vdaftar');
	// 				}
	// 			}
	// 		}
	// 	}
		
	// }

	// public function lupapassword() {
	// 	header("Access-Control-Allow-Origin: *");
	// 	if($this->session->userdata('logged_in') == TRUE){
	// 		$this->index();
	// 	}else{
	// 		$email=$this->input->post('email');
	// 		$result = $this->mDatabase->get_where('tb_biodata_penghuni',array('email'=>$email));
	// 		if ($result->num_rows()==1) {
	// 			$this->session->set_flashdata('info','Perubahan password telah dikirim ke email anda. Silahkan periksa  kotak masuk email anda');
	// 		} else {
	// 			$this->session->set_flashdata('error','Email anda tidak terdaftar. Silahkan daftar baru!');
	// 		}
	// 		$this->login();
	// 	}
	// }


}
